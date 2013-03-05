<?php
/**
 * Elgg group operators plugin
 *
 * @package ElggGroupOperators
 */

elgg_register_event_handler('init', 'system', 'group_roles_init');

/**
 * Group operators plugin initialization functions.
 */
function group_roles_init() {
	// register a library of helper functions
	elgg_register_library('elgg:group_roles', elgg_get_plugins_path() . 'group_roles/lib/group_roles.php');

	// Register a page handler, so we can have nice URLs
	elgg_register_page_handler('group_roles', 'group_roles_page_handler');

	//elgg_register_event_handler('pagesetup', 'system', 'group_roles_setup_menu');
	
	elgg_register_plugin_hook_handler('register', 'menu:entity', 'group_roles_entity_menu_setup');
	
	
	// Register actions
	$action_path = elgg_get_plugins_path() . 'group_roles/actions/group_roles';
	$group_action_path = elgg_get_plugins_path() . 'group_roles/actions/groups';
	elgg_register_action("group_roles/add", "$action_path/add.php");
	elgg_register_action("group_roles/remove", "$action_path/remove.php");
	elgg_register_action("group_roles/mkowner", "$action_path/change_owner.php");
	

	// Register plugin hooks
	//elgg_register_plugin_hook_handler('permissions_check', 'group', 'group_roles_permissions_hook');
	//elgg_register_plugin_hook_handler('container_permissions_check', 'group', 'group_roles_container_permissions_hook');

	// Extend the forms css view
	elgg_extend_view('css/elements/forms', 'group_roles/css/forms');

	// Register javascript needed for adding operators
	elgg_register_js('jquery-combobox', 'mod/group_roles/vendors/jquery/combobox.js');
	elgg_register_css('jquery-ui-buttons', 'mod/group_roles/vendors/jquery/jquery.ui.button.css');
	elgg_register_css('jquery-ui-theme', 'mod/group_roles/vendors/jquery/jquery.ui.theme.css');
}

/**
 * Dispatches group operators pages.
 * URLs take the form of
 *  Edit operators:       group_roles/manage/<group-guid>
 *
 * @param array $page
 * @return bool
 */
function group_roles_page_handler($page) {

	if (isset($page[0])) {
		$dir = elgg_get_plugins_path() . 'group_roles/pages/group_roles';

		$page_type = $page[0];
		switch($page_type) {
			case 'manage':
				set_input('group_guid', $page[1]);
				include "$dir/manage.php";
				return true;
		}
	}
	
	return false;
}

/*function group_roles_setup_menu() {

	// Get the page owner entity
	$page_owner = elgg_get_page_owner_entity();

	if (elgg_in_context('groups')) {
		if ($page_owner instanceof ElggGroup) {
			if (elgg_is_logged_in() && $page_owner->canEdit()) {
				$url = elgg_get_site_url() . "group_roles/manage/{$page_owner->getGUID()}";
				
				/*elgg_register_menu_item('page', array(
					'name' => 'edit',
					'text' => elgg_echo('group_roles:manage'),
					'href' => $url,
				));*/
				
				
				/*elgg_register_menu_item('page', ElggMenuItem::factory(array(
				'name' => 'moderators',
				'text' => elgg_view_icon('moderator') . elgg_echo('group_roles:manage'),
				'href' => $url,
				'priority' => 9,
			)));
				
				

				
			}
		}
	}
}*/

function group_roles_permissions_hook($hook, $entity_type, $returnvalue, $params) {
	$params = array('container'=>$params['entity'], 'user'=>$params['user']);
	//return group_roles_container_permissions_hook($hook, $entity_type, $returnvalue, $params);
}

function group_roles_container_permissions_hook($hook, $entity_type, $returnvalue, $params) {
	if ($params['user'] && $params['container']) {
		$container_guid = $params['container']->getGUID();
		$user_guid = $params['user']->getGUID();
		if (check_entity_relationship($user_guid, 'operator', $container_guid) && check_entity_relationship($user_guid, 'member', $container_guid))
			return true;
	}
	return $returnvalue;
}

/**
 * Add links/info to entity menu particular to group operator entities
 */
function group_roles_entity_menu_setup($hook, $entity_type, $returnvalue, $params) {
	
	if (elgg_in_context('widgets')) {
		return $return;
	}

	$entity = $params['entity'];
	$handler = elgg_extract('handler', $params, false);
	if ($handler != 'group_roles') {
		return $return;
	}
	if (is_array($return)){
	foreach ($return as $index => $item) {
		if (in_array($item->getName(), array('access', 'likes', 'edit', 'delete'))) {
			unset($return[$index]);
		}
	}
	}
	$group = elgg_get_page_owner_entity();

	if($entity->guid != $group->owner_guid){
		
		$options = array(
			'name' => 'drop_privileges',
			'text' => elgg_echo('group_roles:member:drop'),
			'href' => 'action/group_roles/remove?'.http_build_query(array(
																			'mygroup' => $group->guid,
																			'who' => $entity->guid,
																		)),
			'priority' => 300,
			'is_action' => true
		);
		$return[] = ElggMenuItem::factory($options);
		/*
		if(elgg_get_logged_in_user_guid() == $group->owner_guid || elgg_is_admin_logged_in()){
			$options = array(
				'name' => 'change_owner',
				'text' => elgg_echo('group_roles:owner:make'),
				'href' => 'action/group_roles/mkowner?'.http_build_query(array(
																				'mygroup' => $group->guid,
																				'who' => $entity->guid,
																			)),
				'priority' => 300,
				'is_action' => true
			);
			$return[] = ElggMenuItem::factory($options);
			
		}*/
	} else {
		$options = array(
			'name' => 'change_owner',
			'text' => elgg_echo('group_roles:owner'),
			'href' => false,
		);
		
		$return[] = ElggMenuItem::factory($options);
	}

	return $return;
}

