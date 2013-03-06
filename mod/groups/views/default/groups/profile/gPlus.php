<?php
/**
 * Group profile summary
 *
 * Icon and profile fields
 *
 * @uses $vars['group']
 */

if (!isset($vars['entity']) || !$vars['entity']) {
	echo elgg_echo('groups:notfound');
	return true;
}

$group = $vars['entity'];
$isSubgroup = isSubgroup ($group);
$text = 'groups:member';
if ($isSubgroup) {
    $text = 'writingGroups:member';
}

?>
	<div class="groupIcon">

		<div class="groupName">
			<?php echo $group->name; ?>
		</div>

		<div class="iconBorder">
			<?php echo elgg_view_entity_icon($group, 'medium', array('href' => $group->getURL())); ?>
		</div>

		<div class="numberMembers">
			<b><?php echo $group->getMembers(0, 0, TRUE) ?> </b> <?php echo " " . elgg_echo($text); ?>
		</div>
	</div>


	

<?php
?>


