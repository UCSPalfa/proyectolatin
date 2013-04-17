<?php

$entity = $vars['entity'];


//echo print_r($vars);

$query = trim($vars['params']['query']);


$entityType = $entity->type;


$theUser = $entity;

//        echo print_r($theUser);

$file = $theUser->getIconURL();
$icon = "<img src='$file' style='margin-bottom: 10px;'>";
$theUrl = $theUser->getURL();

$name = $theUser->getVolatileData('search_matched_title');


$institution = $theUser->Institution;
$city = $theUser->City;
$country = $theUser->Country;

$matchedDescription = $theUser->getVolatileData('search_matched_description');

if ($matchedDescription) {

    $tokens = explode(":", $matchedDescription);

    $field = trim($tokens[0]);
    $value = trim($tokens[1]);

    if ($field == "Country") {
        $country = $value;
    } else if ($field == 'City') {
        $city = $value;
    } else if ($field == 'Institution') {
        $institution = $value;
    }
}

$interests = $theUser->Interests;

$communities = getCommunities($theUser);
$totalCommunities = count($communities);

$writingGroups = getUserWritingGroups($theUser);
$totalWritingGroups = count($writingGroups);


$iconStyle = "width: 20px;";
$labelStyle = "margin-top: 1px; white-space: nowrap; max-width: 86%; overflow-x: hidden;";


// ************************* //
// User Information //
// ************************* //

$content .= "<div class='group-found-div' style='margin-bottom: 5px;'>";

$content .= "<div class='groupFoundIcon'>";

$content .= elgg_view('output/url', array(
    'href' => $theUrl,
    'text' => $icon,
    'title' => $name,
    'is_trusted' => true,));

$content .= "</div>";


$content .= "<div class='groupInformation'>";







$content .= "<div class='groupFoundName' style='font-size: 14px;' >";

$content .= elgg_view('output/url', array(
    'href' => $theUrl,
    'text' => $name,
    'is_trusted' => true,));

$content .= "</div>";






// ************************** //
// *** User's Institution *** //
// ************************** //


if ($institution) {

    $content .= "<div class='user-institution-div'>";

    $file = elgg_get_site_url() . '_graphics/institution.png';
    $icon = "<img src='$file' style='$iconStyle'>";

    $content .= $icon;

    $content .= "<label class='institution' style='$labelStyle' >" . $institution . "</label>";

    $content .= "</div>";
}


// ************************** //
// *** User's Country *** //
// ************************** //

if ($city) {
    if ($country) {
        $cityAndCountry = elgg_view('output/url', array('style' => 'color: #0054A7;', 'href' => 'search?tag=' . $city, 'text' => $city, 'title' => $city, 'class' => 'tag')) . ", " . elgg_view('output/url', array('style' => 'color: #0054A7;', 'href' => 'search?tag=' . $country, 'title' => $country, 'text' => $country, 'class' => 'tag'));
    } else {
        $cityAndCountry = elgg_view('output/url', array('style' => 'color: #0054A7;', 'href' => 'search?tag=' . $city, 'text' => $city, 'title' => $city, 'class' => 'tag'));
    }
} else {
    if ($country) {
        $cityAndCountry = elgg_view('output/url', array('style' => 'color: #0054A7;', 'href' => 'search?tag=' . $country, 'text' => $country, 'title' => $country, 'class' => 'tag'));
    } else {
        $cityAndCountry = '';
    }
}


if ($cityAndCountry) {

    $content .= "<div class='user-institution-div'>";

    $file = elgg_get_site_url() . '_graphics/world.png';
    $icon = "<img src='$file' style='$iconStyle'>";

    $content .= $icon;

    $content .= "<label class='institution' style='$labelStyle' >" . $cityAndCountry . "</label>";

    $content .= "</div>";
}







$content .= "</div>"; // End of groupInformation
// ********** //
// User Stats //
// ********** //

$content .= "<div class='group-stats-div' style='text-align: left; margin-bottom: 10px; padding-bottom: 10px; border-bottom: 1px solid #d2d2d2;s'>";

$file = elgg_get_site_url() . '_graphics/communities.png';
$icon = "<img src='$file' style='$iconStyle'>";
$content .= $icon . "<label> " . $totalCommunities . " " . elgg_echo('groups') . " </label>";
$content .= "<hr />";

$file = elgg_get_site_url() . '_graphics/note.png';
$icon = "<img src='$file' style='$iconStyle'>";
$content .= $icon . "<label> $totalWritingGroups " . elgg_echo('au_subgroups') . "</label>";



$content .= "</div>";






// ************************* //
// *** User's Insterests *** //
// ************************* //

$content .= "<div class='user-interests-div' style='margin-left: 120px; margin-top: -39px; width: auto; '>";

$file = elgg_get_site_url() . '_graphics/tag.png';
$icon = "<img src='$file' style='$iconStyle'>";

$content .= $icon;

$content .= "<label class='interests' style='margin-top: 4px;' >" . elgg_echo('community:interests') . ":</label>";

$interestsString = '';
foreach ($interests as $currentInterest) {
    $currentInterest = str_replace($query, "<strong>" . $query . "</strong>", $currentInterest);
    $interestsString .= elgg_view('output/url', array('href' => 'search?tag=' . $currentInterest, 'text' => $currentInterest, 'class' => 'tag', 'style' => 'margin-top: 4px;'));
}


if (count($interests) == 0) {
    $content .= "<label class='noInterests' >" . elgg_echo('community:no:interests') . "</label>";
} else {
    $content .= "<label style='$labelStyle font-weight: normal; margin-top: 4px;' >$interestsString</label>";
}

$content .= "</div>";







$content .= "</div>";






echo $content;