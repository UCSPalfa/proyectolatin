
<?php
/**
 * Layout of the groups profile page
 *
 * @uses $vars['entity']
 */
//
//
//echo elgg_view('groups/profile/summary', $vars);
//
//if (group_gatekeeper(false)) {
//	echo elgg_view('groups/profile/widgets', $vars);
//} else {
//	echo elgg_view('groups/profile/closed_membership');
//}




elgg_load_js('groups');
elgg_extend_view('js/elgg', 'js/groups/css-pop');



$writingGroup = $vars['entity'];


$description = $writingGroup->description;

$group_owner = get_entity($writingGroup->getOwnerGUID());

$tags = $writingGroup->interests;

//$options = array('value' => $tags);
//$options['tag_names'] = 'interests';



// ****************** //
// *** Book Title *** //
// ****************** //

echo "<div class='group-tags-div'style='margin-left: 0px;'>";

$file = elgg_get_site_url() . '_graphics/book.png';
$icon = "<img src='$file'>";

echo $icon;

echo "<label class='interests' style='margin-top: 6px;'>" . elgg_echo('book:title') . ":</label>";

echo "<label class='interests' style='margin-top: 6px; font-weight: normal;' >" . $writingGroup->BookTitle . "</label>";


echo "</div>";



// ************************* //
// *** Group Description *** //
// ************************* //

echo "<div class='group-description-div' style='height: 125px; overflow-y: auto; padding-right: 10px;'>";

if (trim($description) != '') {
    echo $description;
} else {
    echo "<div class='noContent'>" . elgg_echo("writingGroup:no:description") . "</div>";
}
echo "</div>";


// Definition of maxumim number of members, related communities and writing groups to be shown un the group profile page

$writingGroupsLimit = 3;

$members = getMembers($writingGroup);
$totalMembers = count($members);

$institutions = getInstitutions($writingGroup);
$totalInstitutions = count($institutions);

if ($totalMembers >= 12) {
    $membersLimit = 12;
} else {
    $membersLimit = 6;
}

if ($totalMembers > $membersLimit) {
    $rand_keys = array_rand($members, $membersLimit);
    $tmpArray = array();
    foreach ($rand_keys as $key) {
        array_push($tmpArray, $members[$key]);
    }
    $members = $tmpArray;
}

// ************************ //
// *** Group Statistics *** //
// ************************ //

echo "<div class='group-stats-div'>";

$file = elgg_get_site_url() . '_graphics/communities.png';
$icon = "<img src='$file'>";
echo $icon . "<label> " . $totalMembers . " " . elgg_echo('writingGroups:Members') . " </label>";
echo "<hr />";

$file = elgg_get_site_url() . '_graphics/institution.png';
$icon = "<img src='$file'>";
echo $icon . "<label> $totalInstitutions <a id='blanket' style='color: #0054A7;' href='#' onclick='myPopup(\"popUpDiv\")'>" . elgg_echo("Institutions:participating") . "</a></label>";


$ownerEmail = $group_owner->email;
$showOwnerEmail = $group_owner->EmailVisibility == 'Public';

if ($ownerEmail && $showOwnerEmail) {
    echo "<hr />";
    $file = elgg_get_site_url() . '_graphics/info.png';
    $icon = "<img src='$file'>";
    echo $icon  . "<label'><a class='allMembers' style='margin-top: -24px; display:block; margin-left: 6px; font-weight: normal;' href='mailto: " . $ownerEmail . "'>" . $ownerEmail . "</a></label>";    
}



echo "</div>";


// ********************* //
// *** Group Members *** //
// ********************* //

echo "<div class='group-members-div'>";

echo "<div style='text-align: left;'><label>" . elgg_echo("writingGroups:members") . ":</label></div> <br />";

foreach ($members as $member) {

    $file = $member->getIconURL();
    $icon = "<img src='$file'>";

    echo elgg_view('output/url', array(
        'href' => $member->getURL(),
        'text' => $icon,
        'title' => $member->name,
        'is_trusted' => true,));
}

$allMembersLink = elgg_view('output/url', array(
    'href' => 'groups/members/' . $writingGroup->guid,
    'text' => elgg_echo('groups:members:more'),
    'is_trusted' => true,
    'class' => 'allMembers',
        ));

if ($totalMembers == 0) {
    echo "<div class='noContent'>" . elgg_echo("community:no:members") . "</div>";
} else if ($totalMembers > $membersLimit) {
    echo "<div class='all-members-div'>$allMembersLink</div>";
} else {
    echo "<div class='all-members-div'></div>";
}

echo "</div>"; // end div members




// ************************ //
// *** Institutions DIV *** //
// ************************ //

?>

<div id="popUpDiv" style="display:none; height: auto;">
    
    <div class="header-institutions-div">
        
            <?php
                $file = elgg_get_site_url() . '_graphics/institution.png';
                $icon = "<img src='$file'>";
                echo $icon . "<label>" . elgg_echo("Institutions:participating") . "</label>"; 
            ?>
    </div>
    
    <div class="div-institutions">
        <?php 
        
        echo '<ol>';
        
        foreach ($institutions as $institution) {
            
            echo '<li class="institution">' . $institution . '<li>';
            
        }        
        
        echo '</ol>';
        
        ?>
    </div>
    
    <div class="close-div">
        <a href="#" onclick="myPopup('popUpDiv')">
            <?php echo elgg_echo("latin:close"); ?> 
        </a>
    </div>
    
    
</div>

