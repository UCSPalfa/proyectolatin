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
            <div class="miniGridGroup">

                <div title="<?php echo $group->name . ' - ' . $group->getMembers(0, 0, TRUE) . ' members'; ?>">
			<?php echo elgg_view_entity_icon($group, 'small', array('href' => $group->getURL())); ?>
		</div>


	</div>


	

<?php
?>


