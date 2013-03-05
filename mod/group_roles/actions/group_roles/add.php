<?php
/**
 * Elgg group operators adding action
 *
 * @package ElggGroupOperators
 */

action_gatekeeper();
$mygroup = get_entity(get_input('mygroup'));
$who = get_entity(get_input('who'));

$success = false;
if ($mygroup instanceof ElggGroup && $who instanceof ElggUser && $mygroup->canEdit()) {
	if (!check_entity_relationship($who->guid, 'member', $mygroup->guid)) {
		add_entity_relationship($who->guid, 'member', $mygroup->guid);
		system_message(elgg_echo('group_roles:added', array($who->name, $group->name)));
	} else {
		register_error(elgg_echo('group_roles:add:error', array($who->name, $group->name)));
	}
} else {
	register_error(elgg_echo('groups:permissions:error'));
}

forward(REFERER);
?>
