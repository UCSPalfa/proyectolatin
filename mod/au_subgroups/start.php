<?php

// definitions
define('AU_SUBGROUPS_RELATIONSHIP', 'au_subgroup_of');

// include our functions
require_once 'lib/events.php';
require_once 'lib/functions.php';
require_once 'lib/hooks.php';

elgg_register_event_handler('init', 'system', 'au_subgroups_init');


function au_subgroups_init() {
    
    elgg_register_simplecache_view('js/groups/css-pop');
    $url = elgg_get_simplecache_url('js', 'groups/css-pop');
    elgg_register_js('groups', $url);
    
  // add in our own css
  elgg_extend_view('css/elgg', 'au_subgroups/css');
  elgg_extend_view('forms/groups/edit', 'forms/au_subgroups/edit');
  elgg_extend_view('navigation/breadcrumbs', 'au_subgroups/breadcrumb_override', 1);
  
  elgg_extend_view('group/elements/summary', 'au_subgroups/group/elements/summary');
  
  
  
  elgg_extend_view('groups/tool_latest', 'au_subgroups/group_module');
  elgg_extend_view('groups/sidebar/members', 'au_subgroups/sidebar/subgroups');
  
  // Modification by Gonzalo
  // The following view should NOT be shown when editing a group (that's why it is commented).
  //elgg_extend_view('groups/edit', 'au_subgroups/group/transfer');
  
  // register the edit page's JavaScript
  $js = elgg_get_simplecache_url('js', 'au_subgroups/edit_js');
  elgg_register_js('au_subgroups_edit.js', $js);
  elgg_register_simplecache_view('js/au_subgroups/edit_js');

  //GC: sobreescribir la funcion de invitar
  $group_action_path = elgg_get_plugins_path() . 'au_subgroups/actions/groups';
  elgg_unregister_action('groups/invite');
  elgg_register_action("groups/invite", "$group_action_path/membership/invite.php");
  // Register actions
  
  
  elgg_register_action("groups/membership/add", "$group_action_path/membership/add.php");
  elgg_register_action("groups/membership/remove", "$group_action_path/membership/remove.php");
  //TextboxList
  elgg_register_js('mootools', 'mod/au_subgroups/vendors/TextboxList/mootools-1.2.1-core-yc.js');
  elgg_register_js('GrowingInput', 'mod/au_subgroups/vendors/TextboxList/GrowingInput.js');
  elgg_register_js('JSTextboxList', 'mod/au_subgroups/vendors/TextboxList/TextboxList.js');
  elgg_register_js('JSTextboxList.Autocomplete', 'mod/au_subgroups/vendors/TextboxList/TextboxList.Autocomplete.js');
  elgg_register_css('TextboxList.Autocomplete', 'mod/au_subgroups/vendors/TextboxList/TextboxList.Autocomplete.css');
  elgg_load_css('TextboxList.Autocomplete');
  elgg_register_css('TextboxList', 'mod/au_subgroups/vendors/TextboxList/TextboxList.css');
  elgg_load_css('TextboxList');
  elgg_register_js('JTabContent', 'mod/au_subgroups/vendors/TabContent/tabcontent.js');
  elgg_register_css('TabContent', 'mod/au_subgroups/vendors/TabContent/tabcontent.css');
  elgg_load_css('TabContent');
  // after group creation or editing we need to check the permissions
  elgg_register_event_handler('update', 'group', 'au_subgroups_group_visibility');
  elgg_register_event_handler('create', 'member', 'au_subgroups_join_group', 0);
  elgg_register_event_handler('leave', 'group', 'au_subgroups_leave_group');
  
  // break up the create/update events to be more manageable
  elgg_register_event_handler('create', 'group', 'au_subgroups_add_parent', 1000);
  elgg_register_event_handler('create', 'group', 'au_subgroups_clone_layout_on_create', 1000);
  elgg_register_event_handler('create', 'group', 'au_subgroups_group_visibility', 1000);
  elgg_register_event_handler('pagesetup', 'system', 'au_subgroups_pagesetup');

  // replace the existing groups library so we can push some display options
  elgg_register_library('elgg:groups', elgg_get_plugins_path() . 'au_subgroups/lib/groups.php');

  
  // Modification by: Gonzalo
  // By default, all communities MUST allow the creation of Writing Groups. This should not be optional, thus, I remove the radio button
  // placed by the au_subgroups to select yes or no at this point of the creation process of a group.
//   add_group_tool_option('subgroups', elgg_echo('au_subgroups:group:enable'), false);
  
  
  // Modification by: Gonzalo
  // I also comment this option because it MUST not be optional. By default, any member of the group can create writing groups
  // add_group_tool_option('subgroups_members_create', elgg_echo('au_subgroups:group:memberspermissions'));
  
  // route some urls that go through 'groups' handler
  elgg_register_plugin_hook_handler('route', 'groups', 'au_subgroups_groups_router', 499);
  
  // make sure river entries have the correct access
  elgg_register_plugin_hook_handler('creating', 'river', 'au_subgroups_river_permissions');
  
  // admins of the parent group can edit the sub-group
  elgg_register_plugin_hook_handler('permissions_check', 'group', 'au_subgroups_group_canedit');
  
  // sort out what happens when a parent group is deleted
  elgg_register_plugin_hook_handler('action', 'groups/delete', 'au_subgroups_delete_group');
  
  // prevent users from being invited into a subgroup they can't join
  //elgg_register_plugin_hook_handler('action', 'groups/invite', 'au_subgroups_group_invite');
  
  // remove 'join' and 'request membership' title links on subgroups for people not members of the parent
  elgg_register_plugin_hook_handler('register', 'menu:title', 'au_subgroups_titlemenu');
  elgg_register_plugin_hook_handler('register', 'menu:user_hover', 'subgroups_user_entity_menu_setup');
  // register our widget
  elgg_register_widget_type('au_subgroups', elgg_echo('au_subgroups'), elgg_echo('au_subgroups:widget:description'), 'groups');
  
  elgg_register_ajax_view('au_subgroups/search_results');
  
  
  // actions
  elgg_register_action('au_subgroups/move', dirname(__FILE__) . '/actions/move.php');
  // fix some problems
  if (elgg_is_admin_logged_in()) {
    run_function_once('au_subgroups_bugfix_20121024a');
  }
}


function au_subgroups_bugfix_20121024a() {
  $options = array(
     'types' => 'group',
     'limit' => 0
  );
  
  // using ElggBatch because there may be many, many groups in the installation
  // try to avoid oom errors
  $batch = new ElggBatch('elgg_get_entities', $options, 'au_subgroups_fix_acls_20121024a', 50);
}

function au_subgroups_fix_acls_20121024a($result, $getter, $options) {
  if ($result->group_acl === NULL) {
    // group has no acl... create it and add all the members
    $ac_name = elgg_echo('groups:group') . ": " . $result->name;
    $group_acl = create_access_collection($ac_name, $result->guid);
		$result->group_acl = $group_acl;
    
    // now add all members of the group to the acl
    $members = $result->getMembers(0, 0, false);
    
    if (is_array($members) && count($members)) {
      foreach ($members as $member) {
        add_user_to_access_collection($member->guid, $group_acl);
      }
    }
  }
}

/**
 * Add a remove user link to user hover menu when the page owner is a group
 */
function subgroups_user_entity_menu_setup($hook, $type, $return, $params) {
	if (elgg_is_logged_in()) {
		$group = elgg_get_page_owner_entity();

		// Check for valid group
		if (!elgg_instanceof($group, 'group')) {
			return $return;
		}

		$entity = $params['entity'];

		// Make sure we have a user and that user is a member of the group
		if (!elgg_instanceof($entity, 'user') || !$group->isMember($entity)) {
			return $return;
		}

		// Add remove link if we can edit the group, and if we're not trying to remove the group owner
		if ($group->canEdit() && $group->getOwnerGUID() != $entity->guid) {
			if (au_subgroups_get_parent_group($group)){
				$text = elgg_echo('wgroups:removeuser');
			}else{
				$text = elgg_echo('groups:removeuser');
			}
			$remove = elgg_view('output/confirmlink', array(
					'href' => "action/groups/remove?user_guid={$entity->guid}&group_guid={$group->guid}",
					'text' => $text,
			));

			$options = array(
					'name' => 'removeuser',
					'text' => $remove,
					'priority' => 999,
			);
			$return[] = ElggMenuItem::factory($options);
		}
	}

	return $return;
}


/**
 * Grabs groups by invitations
 * Have to override all access until there's a way override access to getter functions.
 *
 * @param int  $user_guid    The user's guid
 * @param bool $return_guids Return guids rather than ElggGroup objects
 *
 * @return array ElggGroups or guids depending on $return_guids
 */
function groups_get_invited_comm($user_guid, $return_guids = FALSE) {
	$ia = elgg_set_ignore_access(TRUE);
	$tgroups = elgg_get_entities_from_relationship(array(
			'relationship' => 'invited',
			'relationship_guid' => $user_guid,
			'inverse_relationship' => TRUE,
			'limit' => 0,
	));
	elgg_set_ignore_access($ia);
	foreach ($tgroups as $group) {
		//check if they have parent
		if (!au_subgroups_get_parent_group($group))
			$groups[] = $group;
	}
	
	
	if ($return_guids) {
		$guids = array();
		foreach ($groups as $group) {
			$guids[] = $group->getGUID();
		}

		return $guids;
	}

	return $groups;
}




/**
 * Grabs groups by invitations
 * Have to override all access until there's a way override access to getter functions.
 *
 * @param int  $user_guid    The user's guid
 * @param bool $return_guids Return guids rather than ElggGroup objects
 *
 * @return array ElggGroups or guids depending on $return_guids
 */
function groups_get_invited_wgroups($user_guid, $return_guids = FALSE) {
	$ia = elgg_set_ignore_access(TRUE);
	$tgroups = elgg_get_entities_from_relationship(array(
			'relationship' => 'invited',
			'relationship_guid' => $user_guid,
			'inverse_relationship' => TRUE,
			'limit' => 0,
	));
	elgg_set_ignore_access($ia);
	foreach ($tgroups as $group) {
		//check if they have parent
		if (au_subgroups_get_parent_group($group))
			$groups[] = $group;
	}


	if ($return_guids) {
		$guids = array();
		foreach ($groups as $group) {
			$guids[] = $group->getGUID();
		}

		return $guids;
	}

	return $groups;
}