<?php
/**
 * Remove a user from a group and the relation group operator
 *
 */

$user_guid = get_input('user_guid');
$group_guid = get_input('group_guid');

$user = get_entity($user_guid);
$group = get_entity($group_guid);

elgg_set_page_owner_guid($group->guid);

if (($user instanceof ElggUser) && ($group instanceof ElggGroup) && $group->canEdit()) {
	// Don't allow removing group owner
	if ($group->getOwnerGUID() != $user->getGUID()) {
		if ($group->leave($user)) {
			//delete relation group operator
			if (check_entity_relationship($user_guid, 'operator', $group_guid)) {
				remove_entity_relationship($user_guid, 'operator', $group_guid);
			}
			//GC:delete from all subgroups
			//get all subgroups
			$subgroups = au_subgroups_get_subgroups($group,1000);
			foreach ($subgroups as $subgroup){
				if (check_entity_relationship($user_guid, 'member', $subgroup->guid)) {
					remove_entity_relationship($user_guid, 'member', $subgroup->guid);
				}
			}
			
			//foreach subgroup check if is member and remove relation
			
                        
                        if (isSubgroup($group)) {
                        system_message(elgg_echo("writing:groups:removed", array($user->name)));
                    } else {
                        system_message(elgg_echo("groups:removed", array($user->name)));
                    }
                        
		} else {
                    
                    if (isSubgroup($group)) {
                        register_error(elgg_echo("writing:groups:cantremove"));
                    } else {
                        register_error(elgg_echo("groups:cantremove"));
                    }
                    
			
		}
	} else {
		if (isSubgroup($group)) {
                        register_error(elgg_echo("writing:groups:cantremove"));
                    } else {
                        register_error(elgg_echo("groups:cantremove"));
                    }
	}
} else {
	if (isSubgroup($group)) {
                        register_error(elgg_echo("writing:groups:cantremove"));
                    } else {
                        register_error(elgg_echo("groups:cantremove"));
                    }
}

forward(REFERER);
