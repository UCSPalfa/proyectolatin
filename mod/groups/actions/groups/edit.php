<?php
/**
 * Elgg groups plugin edit action.
 *
 * @package ElggGroups
 */
elgg_make_sticky_form('groups');

/**
 * wrapper for recursive array walk decoding
 */
function profile_array_decoder(&$v) {
	$v = _elgg_html_decode($v);
}

// Get group fields
$input = array();
foreach (elgg_get_config('group') as $shortname => $valuetype) {
	$input[$shortname] = get_input($shortname);

	// @todo treat profile fields as unescaped: don't filter, encode on output
	if (is_array($input[$shortname])) {
		array_walk_recursive($input[$shortname], 'profile_array_decoder');
	} else {
		$input[$shortname] = _elgg_html_decode($input[$shortname]);
	}

	if ($valuetype == 'tags') {
		$input[$shortname] = string_to_tag_array($input[$shortname]);
	}
}

$input['name'] = htmlspecialchars(get_input('name', '', false), ENT_QUOTES, 'UTF-8');
$input['description'] = get_input('description', '', false);		//po5i

$user = elgg_get_logged_in_user_entity();

$group_guid = (int)get_input('group_guid');
$is_new_group = $group_guid == 0;

if ($is_new_group
		&& (elgg_get_plugin_setting('limited_groups', 'groups') == 'yes')
		&& !$user->isAdmin()) {
	register_error(elgg_echo("groups:cantcreate"));
	forward(REFERER);
}

$group = new ElggGroup($group_guid); // load if present, if not create a new group
if ($group_guid && !$group->canEdit()) {
	register_error(elgg_echo("groups:cantedit"));
	forward(REFERER);
}

// Assume we can edit or this is a new group
if (sizeof($input) > 0) {
	foreach($input as $shortname => $value) {
		//po5i-noelgg: manejar la subida de archivos
		if(file_exists($_FILES[$shortname]['tmp_name']) || is_uploaded_file($_FILES[$shortname]['tmp_name']))
		{
			$filename = $_FILES[$shortname]['name'];		
			$filehandler = new ElggFile();
			$filehandler->owner_guid = $is_new_group ? 0 : $group->owner_guid;
			$filehandler->setFilename($filename);
			$filehandler->open("write");
			$filehandler->write(get_uploaded_file($shortname));			
			$filehandler->close();
			$filehandler->save();
			$filename = $filehandler->getFilenameOnFilestore();

			$value = $filehandler->getGUID();	//$filename;
			//print_r($filehandler);
			//echo $shortname;
			//die($value);
		}



		$group->$shortname = $value;
	}
}

// Validate create (po5i)
$is_subgroup = (boolean)get_input('is_subgroup');
if ($is_subgroup) {
	if (!$group->name) {
    	register_error(elgg_echo("writing:groups:notitle"));
    	forward(REFERER);
	}

} else {
    if (!$group->name) {
    	register_error(elgg_echo("groups:notitle"));
    	forward(REFERER);
	}
	//GC - May 10: validate if description is empty
	if (!$group->description) {
		register_error(elgg_echo("groups:nodescription"));
		forward(REFERER);
	}
}
	
	
//var_dump($group);
//die;

//po5i: validar que el nombre existe al guardar:
//se tuvo que usar un nuevo hook para buscar solo por nombre
//fix: lineas perdidas
if ($is_new_group){

	$current_params = Array(
							'query' => $group->name,
							'search_type' => 'entities',
							'offset' => 0,
							'limit' => 10,
							'sort' => 'relevance',
							'order' => 'desc',
							'type' => 'group',
							'subtype' => '',

						);

	$results = elgg_trigger_plugin_hook('search', "groupname", $current_params, NULL);

	if(count($results['entities'])>0){
		register_error(elgg_echo("groups:exists"));	
		forward(REFERER);	
	}
}
/////////////////////////////////////


// Set group tool options
$tool_options = elgg_get_config('group_tool_options');
if ($tool_options) {
	foreach ($tool_options as $group_option) {
		$option_toggle_name = $group_option->name . "_enable";
		$option_default = $group_option->default_on ? 'yes' : 'no';
		$group->$option_toggle_name = get_input($option_toggle_name, $option_default);
	}
}

// Group membership - should these be treated with same constants as access permissions?
$is_public_membership = (get_input('membership') == ACCESS_PUBLIC);
$group->membership = $is_public_membership ? ACCESS_PUBLIC : ACCESS_PRIVATE;

if ($is_new_group) {
	$group->access_id = ACCESS_PUBLIC;
}

$old_owner_guid = $is_new_group ? 0 : $group->owner_guid;
$new_owner_guid = (int) get_input('owner_guid');

$owner_has_changed = false;
$old_icontime = null;
if (!$is_new_group && $new_owner_guid && $new_owner_guid != $old_owner_guid) {
	// verify new owner is member and old owner/admin is logged in
	if (is_group_member($group_guid, $new_owner_guid) && ($old_owner_guid == $user->guid || $user->isAdmin())) {
		$group->owner_guid = $new_owner_guid;
		
		// @todo Remove this when #4683 fixed
		$owner_has_changed = true;
		$old_icontime = $group->icontime;
	}
}

$must_move_icons = ($owner_has_changed && $old_icontime);


// Aquí se guarda el grupo y se hace la escritura en la base de datos
$group->save();

// Invisible group support
// @todo this requires save to be called to create the acl for the group. This
// is an odd requirement and should be removed. Either the acl creation happens
// in the action or the visibility moves to a plugin hook
if (elgg_get_plugin_setting('hidden_groups', 'groups') == 'yes') {
	$visibility = (int)get_input('vis', '', false);
	if ($visibility != ACCESS_PUBLIC && $visibility != ACCESS_LOGGED_IN) {
		$visibility = $group->group_acl;
	}

	if ($group->access_id != $visibility) {
		$group->access_id = $visibility;
	}
}

$group->save();

// group saved so clear sticky form
elgg_clear_sticky_form('groups');

// group creator needs to be member of new group and river entry created
if ($is_new_group) {

	// @todo this should not be necessary...
	elgg_set_page_owner_guid($group->guid);

	$group->join($user);
	add_to_river('river/group/create', 'create', $user->guid, $group->guid, $group->access_id);
}

$has_uploaded_icon = (!empty($_FILES['icon']['type']) && substr_count($_FILES['icon']['type'], 'image/'));

if ($has_uploaded_icon) {

	$icon_sizes = elgg_get_config('icon_sizes');

	$prefix = "groups/" . $group->guid;

	$filehandler = new ElggFile();
	$filehandler->owner_guid = $group->owner_guid;
	$filehandler->setFilename($prefix . ".jpg");
	$filehandler->open("write");
	$filehandler->write(get_uploaded_file('icon'));
	$filehandler->close();
	$filename = $filehandler->getFilenameOnFilestore();

	$sizes = array('tiny', 'small', 'medium', 'large');

	$thumbs = array();
	foreach ($sizes as $size) {
		$thumbs[$size] = get_resized_image_from_existing_file(
			$filename,
			$icon_sizes[$size]['w'],
			$icon_sizes[$size]['h'],
			$icon_sizes[$size]['square']
		);
	}

	if ($thumbs['tiny']) { // just checking if resize successful
		$thumb = new ElggFile();
		$thumb->owner_guid = $group->owner_guid;
		$thumb->setMimeType('image/jpeg');

		foreach ($sizes as $size) {
			$thumb->setFilename("{$prefix}{$size}.jpg");
			$thumb->open("write");
			$thumb->write($thumbs[$size]);
			$thumb->close();
		}

		$group->icontime = time();
	}
}

// @todo Remove this when #4683 fixed
if ($must_move_icons) {
	$filehandler = new ElggFile();
	$filehandler->setFilename('groups');
	$filehandler->owner_guid = $old_owner_guid;
	$old_path = $filehandler->getFilenameOnFilestore();

	$sizes = array('', 'tiny', 'small', 'medium', 'large');

	if ($has_uploaded_icon) {
		// delete those under old owner
		foreach ($sizes as $size) {
			unlink("$old_path/{$group_guid}{$size}.jpg");
		}
	} else {
		// move existing to new owner
		$filehandler->owner_guid = $group->owner_guid;
		$new_path = $filehandler->getFilenameOnFilestore();

		foreach ($sizes as $size) {
			rename("$old_path/{$group_guid}{$size}.jpg", "$new_path/{$group_guid}{$size}.jpg");
		}
	}
}


//po5i:ingresar usuarios al writing group solo en la creacion
//$user_list = get_input('recipient_guid');		//autocompletar v.1
$user_list = get_input('as_values_rcpt');		//autocompletar v.2
if (!empty($user_list)) {
	$user_guid = explode(",",$user_list);
	foreach ($user_guid as $uid) {
		$u_id = trim($uid);
		if (is_numeric($u_id)){
			$user = get_entity($u_id);

			if (!check_entity_relationship($user->guid, 'member', $group->guid)) {
				add_entity_relationship($user->guid, 'member', $group->guid);
				system_message(elgg_echo('groups:members:added', array($user->name, $group->name)));
			} else {
				register_error(elgg_echo('groups:members:add:error', array($user->name, $group->name)));
			}
		}
	}
}


///////////////////////////////////////////////////////////////

if (isSubgroup($group)) {
    system_message(elgg_echo("writing:groups:saved"));
} else {
    system_message(elgg_echo("groups:saved"));    
}



forward($group->getUrl());
