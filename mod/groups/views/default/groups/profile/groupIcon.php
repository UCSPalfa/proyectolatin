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
    <div class="groupIcon" title="<?php echo $group->name; ?>" >
            
        <div class="groupNameContainer">
                <?php // echo $group->name; ?>
            
                <?php echo elgg_view('output/url', array(
                'href' => $group->getURL(),
                'text' => $group->name,
                'title' => $group->name,
                'is_trusted' => true,
            ));
                
                
                ?>
        </div>

            <?php $file = $group->getIconURL();
            $icon = "<img src='$file'>";

            echo elgg_view('output/url', array(
                'href' => $group->getURL(),
                'text' => $icon,
                'title' => $group->name,
                'is_trusted' => true,
            )); ?>

    </div>


	

<?php
?>


