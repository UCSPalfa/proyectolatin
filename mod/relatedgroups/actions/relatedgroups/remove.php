<?php
	$group_guid = get_input('group');
	$othergroup_guid = get_input('othergroup');
	$group = get_entity($group_guid);
	$othergroup = get_entity($othergroup_guid);
	if ($group instanceof ElggGroup && $group->canEdit()) {
		if (check_entity_relationship($group_guid, 'related', $othergroup_guid)) {
			remove_entity_relationship($group_guid, 'related', $othergroup_guid);
			/***
			 *Modification UCSP
			 *Remove relationship in the other group of my group
			 */
                        remove_entity_relationship($othergroup_guid, 'related', $group_guid);
		}
	}
	forward(REFERER);
?>
