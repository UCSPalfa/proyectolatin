<?php
/***
 *
 * Modification UCSP
 */

/**
 * Remove a user from a group
 *
 * @package ElggGroups
 */

$user_guid = get_input('who');
$group_guid = get_input('mygroup');

$user = get_entity($user_guid);
$group = get_entity($group_guid);

elgg_set_page_owner_guid($group->guid);

if (($user instanceof ElggUser) && ($group instanceof ElggGroup) && $group->canEdit()) {
	// Don't allow removing group owner
	if ($group->getOwnerGUID() != $user->getGUID()) {
	
		//check if user is a moderator
		if (check_entity_relationship($user->guid, 'operator', $group->guid)) {
			  remove_entity_relationship($user->guid, 'operator', $group->guid);
		}
	  
		if ($group->leave($user)) {
			
			if(isSubgroup($group)){
			      system_message(elgg_echo("writing:groups:removed", array($user->name)));
			}else {
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


?>
