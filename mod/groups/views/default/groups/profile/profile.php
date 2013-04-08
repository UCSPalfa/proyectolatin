
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

$group = $vars['entity'];



$profile_fields = elgg_get_config('group');



$briefDescription = $group->briefdescription;
$description = $group->description;

$tags = $group->interests;

$options = array('value' => $tags);
$options['tag_names'] = 'interests';

// tags
echo "<div class='group-tags-div'>";

$file = elgg_get_site_url() . '_graphics/tag.png';
$icon = "<img src='$file'>";

echo $icon;

foreach ($tags as $currentTag) {
    echo elgg_view('output/url', array('href' => 'search?tag=' . $currentTag, 'text' => $currentTag, 'class' => 'tag'));
}


echo "</div>";


// Group Description
echo "<div class='group-description-div'>";

if (trim($description) != '') {
    echo $description;
} else {
    echo "<div class='noContent'>" . elgg_echo("community:no:description") . "</div>";
}
echo "</div>";

$membersLimit = 6;
$relatedCommunitiesLimit = 5;
$booksLimit = 3;

$members = elgg_get_entities_from_relationship(array(
    'relationship' => 'member',
    'relationship_guid' => $group->guid,
    'inverse_relationship' => true,
    'types' => 'user',
    'limit' => 0,
    'list_type' => 'gallery',
    'gallery_class' => 'members',
    'pagination' => false
        ));

$totalMembers = count($members);

$institutions = array();
foreach ($members as $member) {
    $institution = $member->Institution;
    if ($institution != '' && !array_search($institution, $institutions)) {
        array_push($institutions, $institution);
    }
}
$totalInstitutions = count($institutions);

if ($totalMembers > $membersLimit) {
    $rand_keys = array_rand($members, $membersLimit);
    $tmpArray = array();
    foreach ($rand_keys as $key) {
        array_push($tmpArray, $members[$key]);
    }
    $members = $tmpArray;
}

$relatedCommunities = elgg_get_entities_from_relationship(array(
    'relationship' => 'related',
    'relationship_guid' => $group->guid,
    'types' => 'group',
    'limit' => 0,
        ));
$totalRelatedCommunities = count($relatedCommunities);
if ($totalRelatedCommunities > $relatedCommunitiesLimit) {
    $rand_keys = array_rand($relatedCommunities, $relatedCommunitiesLimit);
    $tmpArray = array();
    foreach ($rand_keys as $key) {
        array_push($tmpArray, $relatedCommunities[$key]);
    }
    $relatedCommunities = $tmpArray;
}

$books = elgg_get_entities_from_relationship(array(
    'types' => array('group'),
    'relationship' => AU_SUBGROUPS_RELATIONSHIP,
    'relationship_guid' => $group->guid,
    'inverse_relationship' => true,
    'limit' => 0,
        ));
$totalBooks = count($books);
if ($totalBooks > $booksLimit) {
    $rand_keys = array_rand($books, $booksLimit);
    $tmpArray = array();
    foreach ($rand_keys as $key) {
        array_push($tmpArray, $books[$key]);
    }
    $books = $tmpArray;
}

$membersLink = elgg_view('output/url', array(
    'href' => 'groups/members/' . $group->guid,
    'text' => elgg_echo('Members'),
    'is_trusted' => true,
    'class' => 'allMembers',
        ));

// Group Statistics
echo "<div class='group-stats-div'>";

$file = elgg_get_site_url() . '_graphics/communities.png';
$icon = "<img src='$file'>";
echo $icon . "<label> " . $totalMembers . " " . $membersLink . " </label>";
echo "<hr />";

$relatedCommunitiesLink = elgg_view('output/url', array(
        'href' => 'relatedgroups/owner/' . $vars['entity']->guid,
        'text' => elgg_echo('relatedgroups'),
        'is_trusted' => true,
        'class' => 'allMembers',
    ));
$file = elgg_get_site_url() . '_graphics/link.png';
$icon = "<img src='$file'>";
echo $icon . "<label> $totalRelatedCommunities " . $relatedCommunitiesLink . "</label>";
echo "<hr />";

$writingGroups = elgg_view('output/url', array(
        'href' => 'groups/subgroups/list/' . $group->guid,
        'text' => elgg_echo("au_subgroups"),
        'is_trusted' => true,
        'class' => 'allBooks',
    ));
$file = elgg_get_site_url() . '_graphics/book.png';
$icon = "<img src='$file'>";
echo $icon . "<label> " . $totalBooks . " " . $writingGroups . " </label>";
echo "<hr />";

$file = elgg_get_site_url() . '_graphics/institution.png';
$icon = "<img src='$file'>";
echo $icon . "<label> $totalInstitutions Institutions participating </label>";

echo "</div>";

echo "<div class='group-members-div'>";


echo "<div style='text-align: left;'><label>" . elgg_echo("groups:members") . ":</label></div> <br />";

foreach ($members as $member) {

    $categorized_fields = profile_manager_get_categorized_fields($member);
    $cats = $categorized_fields['categories'];
    $fields = $categorized_fields['fields'];

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

echo "</div>";


echo "<div class='lowerContainer'>";



echo "<div class='group-related-communities-div'>";

echo "<div style='text-align: left;'><label>" . elgg_echo("Related Communities") . ":</label></div> <br />";





foreach ($relatedCommunities as $community) {

    $file = $community->getIconURL();
    $icon = "<img src='$file'>";

    echo elgg_view('output/url', array(
        'href' => $community->getURL(),
        'text' => $icon,
        'title' => $community->name,
        'is_trusted' => true,
    ));
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




echo "<div class='group-books-div'>";

echo "<div style='text-align: left;'><label>" . elgg_echo("au_subgroups") . ":</label></div> <br />";

foreach ($books as $book) {

    $file = $book->getIconURL();
    $icon = "<img src='$file'>";

    echo elgg_view('output/url', array(
        'href' => $book->getURL(),
        'text' => $icon,
        'title' => $book->name,
        'is_trusted' => true,
    ));
}

if (!$totalBooks) {

    echo "<div class='noContent'>" . elgg_echo("community:no:books") . "</div>";
} else if ($totalBooks > $booksLimit) {

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



echo "</div>";
echo "</div>";






//print_r($profile_fields);


//echo elgg_view_module('info', 'Info', elgg_view('groups/profile/fields', $vars));

//echo elgg_view_module('info', 'Stats', elgg_view('groups/profile/stats', $vars));



//echo "Aqui voy a mostrar la info del grupo";

