
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



$group = $vars['entity'];


$description = $group->description;

$tags = $group->interests;

//$options = array('value' => $tags);
//$options['tag_names'] = 'interests';
// ******************** //
// *** Group's Tags *** //
// ******************** //

echo "<div class='group-tags-div'>";

$file = elgg_get_site_url() . '_graphics/tag.png';
$icon = "<img src='$file'>";

echo $icon;

echo "<label class='interests' >" . elgg_echo('community:interests') . ":</label>";

if (count($tags) == 0) {
    echo "<label class='noInterests' >" . elgg_echo('community:no:interests') . "</label>";
} else {
    foreach ($tags as $currentTag) {
        echo elgg_view('output/url', array('href' => 'search?tag=' . $currentTag, 'text' => $currentTag, 'class' => 'tag'));
    }
}

echo "</div>";



// ************************* //
// *** Group Description *** //
// ************************* //

echo "<div class='group-description-div' style='height: 165px; overflow-y: auto; padding-right: 10px;'>";

if (trim($description) != '') {
    echo $description;
} else {
    echo "<div class='noContent'>" . elgg_echo("community:no:description") . "</div>";
}
echo "</div>";


// Definition of maxumim number of members, related communities and writing groups to be shown un the group profile page
$membersLimit = 6;
$relatedCommunitiesLimit = 5;
$writingGroupsLimit = 3;

$members = getMembers($group);
$totalMembers = count($members);

$institutions = getInstitutions($group);
$totalInstitutions = count($institutions);

if ($totalMembers > $membersLimit) {
    $rand_keys = array_rand($members, $membersLimit);
    $tmpArray = array();
    foreach ($rand_keys as $key) {
        array_push($tmpArray, $members[$key]);
    }
    $members = $tmpArray;
}

$relatedCommunities = getRelatedCommunities($group);
$totalRelatedCommunities = count($relatedCommunities);

if ($totalRelatedCommunities > $relatedCommunitiesLimit) {
    $rand_keys = array_rand($relatedCommunities, $relatedCommunitiesLimit);
    $tmpArray = array();
    foreach ($rand_keys as $key) {
        array_push($tmpArray, $relatedCommunities[$key]);
    }
    $relatedCommunities = $tmpArray;
}

$writingGroups = getWritingGroups($group);
$totalWritingGroups = count($writingGroups);

$booksTitles = getCommunityBooks($writingGroups);


if ($totalWritingGroups > $writingGroupsLimit) {
    $rand_keys = array_rand($writingGroups, $writingGroupsLimit);
    $tmpArray = array();
    foreach ($rand_keys as $key) {
        array_push($tmpArray, $writingGroups[$key]);
    }
    $writingGroups = $tmpArray;
}


// ************************ //
// *** Group Statistics *** //
// ************************ //

echo "<div class='group-stats-div'>";

$file = elgg_get_site_url() . '_graphics/communities.png';
$icon = "<img src='$file'>";
echo $icon . "<label> " . $totalMembers . " " . elgg_echo('Members') . " </label>";
echo "<hr />";


$file = elgg_get_site_url() . '_graphics/link.png';
$icon = "<img src='$file'>";
echo $icon . "<label> $totalRelatedCommunities " . elgg_echo('relatedgroups') . "</label>";
echo "<hr />";


$file = elgg_get_site_url() . '_graphics/note.png';
$icon = "<img src='$file'>";
echo $icon . "<label> " . $totalWritingGroups . " " . elgg_echo("au_subgroups") . " </label>";
echo "<hr />";

$file = elgg_get_site_url() . '_graphics/institution.png';
$icon = "<img src='$file'>";
echo $icon . "<label> $totalInstitutions <a id='blanket' style='color: #0054A7;' href='#' onclick='myPopup(\"popUpDiv\")'>" . elgg_echo("Institutions:participating") . "</a></label>";

echo "</div>";

echo "<div style='clear:both; min-height: 25px;'></div>";



// ********************* //
// *** Group Members *** //
// ********************* //

echo "<div class='group-members-div'>";

echo "<div style='text-align: left;'><label>" . elgg_echo("groups:members") . ":</label></div> <br />";

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
    'href' => 'groups/members/' . $group->guid,
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
// ********************* //
// *** Group's Books *** //
// ********************* //

if (count($booksTitles) > 0) {

    echo "<div class='group-members-div' style='font-size: 13px; min-height: 60px; height: 160px; margin-top: 20px;' >";

    echo "<div style='text-align: left;'><label>" . elgg_echo("books:communities") . ":</label></div> <br />";

    echo "<div style='overflow-y: auto; height: 70%; text-align: left; margin-right: 10px; '>";

    echo "<ol style='' >";

    foreach ($booksTitles as $bookTitle) {

        echo '<li class="institution" style="margin-bottom: 10px;" >' . $bookTitle . '<li>';
    }

    echo '</ol>';

    echo "</div>";

    echo "</div>"; // end div books
}








echo "<div class='lowerContainer' style='margin-right: 10px;'>";


// *************************** //
// *** Related Communities *** //
// *************************** //

echo "<div class='group-related-communities-div'>";

echo "<div style='text-align: left;'><label>" . elgg_echo("Related Communities") . ":</label></div> <br />";

foreach ($relatedCommunities as $community) {

    echo elgg_view('groups/profile/groupIcon', array('entity' => $community));
}

if ($totalRelatedCommunities == 0) {
    echo "<div class='noContent'>" . elgg_echo("community:no:related") . "</div>";
} else if ($totalRelatedCommunities > $relatedCommunitiesLimit) {

    $allRelatedCommunitiesLink = elgg_view('output/url', array(
        'href' => 'relatedgroups/owner/' . $vars['entity']->guid,
        'text' => elgg_echo('relatedgroups:more'),
        'is_trusted' => true,
        'class' => 'allMembers',
            ));

    echo "<div class='all-members-div'>$allRelatedCommunitiesLink</div>";
} else {
    echo "<div class='all-members-div'></div>";
}

echo "</div>";



// ********************** //
// *** Writing Groups *** //
// ********************** //

echo "<div class='group-books-div'>";

echo "<div style='text-align: left;'><label>" . elgg_echo("au_subgroups") . ":</label></div> <br />";

foreach ($writingGroups as $writingGroup) {
    echo elgg_view('groups/profile/groupIcon', array('entity' => $writingGroup));
}

if (!$totalWritingGroups) {

    echo "<div class='noContent'>" . elgg_echo("community:no:books") . "</div>";
} else if ($totalWritingGroups > $writingGroupsLimit) {

    $allWritingGroups = elgg_view('output/url', array(
        'href' => 'groups/subgroups/list/' . $group->guid,
        'text' => elgg_echo('au_subgroups:subgroups:more'),
        'is_trusted' => true,
        'class' => 'allBooks',
            ));

    echo "<div class='all-members-div'>$allWritingGroups</div>";
} else {
    echo "<div class='all-members-div'></div>";
}

echo "</div>"; // end Writing Groups


echo "</div>"; // end lower container
// ************************ //
// *** Institutions DIV *** //
// ************************ //
?>

<div id="popUpDiv" style="display:none;">

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

