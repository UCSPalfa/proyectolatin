<?php

$theCommunity = $vars['entity'];

$file = $theCommunity->getIconURL();
$icon = "<img src='$file'>";
$theUrl = $theCommunity->getURL();

$name = $theCommunity->getVolatileData('search_matched_title');

$institution = $theCommunity->Institution;
$city = $theCommunity->City;
$country = $theCommunity->Country;
$tags = $theCommunity->interests;

$matchedDescription = $theCommunity->getVolatileData('search_matched_description');

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

$writingGroups = getWritingGroups($theCommunity);
$totalWritingGroups = count($writingGroups);

$members = getMembers($theCommunity);
$totalMembers = count($members);


// ********************* //
// Community Information //
// ********************* //

$content .= "<div class='group-found-div' style='margin-top: 0px; margin-bottom: -5px; '>";

$foundIconStyle = "margin-right: 10px; margin-bottom: 2px; margin-top: -5px; width: 60px; margin-left: -5px;";

$content .= "<div class='groupFoundIcon' style='$foundIconStyle'>";

$content .= elgg_view('output/url', array(
    'href' => $theUrl,
    'text' => $icon,
    'title' => $name,
    'is_trusted' => true,));

$content .= "</div>";


$content .= "<div class='groupInformation' style='width: 70%;'>";







$content .= "<div class='groupFoundName' style='margin-top: -7px;'>";

$content .= elgg_view('output/url', array(
    'href' => $theUrl,
    'text' => $name,
    'style' => 'font-size: 14px;',
    'is_trusted' => true,));

$content .= "</div>";



$iconStyle = "width: 20px;";
$labelStyle = "margin-top: 1px; white-space: nowrap; max-width: 86%; overflow-x: hidden;";




$content .= "<div class='user-institution-div' style='margin-top: 2px;'>";

    $title1 = '';
    foreach ($tags as $currentTag) {
        $title1 .= elgg_view('output/url', array('href' => 'search?tag=' . $currentTag, 'text' => $currentTag, 'class' => 'tag', 'style' => 'color: #0054A7;')) .  ' ';
    }
    
    $file1 = elgg_get_site_url() . '_graphics/tag.png';
    $icon1 = "<img src='$file1' style='$iconStyle'>";    
    
    if (!$title1) {
        $title1 = 'No interests';
        $content .= "$icon1 <label class='institution' style='$labelStyle color: #d2d2d2;' > $title1 </label>";
    } else {
        $content .= "$icon1 <label class='institution' style='$labelStyle' > $title1 </label>";
    }

    

$content .= "</div>";

$content .= "<div class='user-institution-div' style='margin-top: 2px;'>";

    $title1 = elgg_echo('Members');
    $file1 = elgg_get_site_url() . '_graphics/communities.png';
    $icon1 = "<img src='$file1' title='$title1' style='$iconStyle'>";
    
    $title2 = elgg_echo('au_subgroups');
    $file2 = elgg_get_site_url() . '_graphics/note.png';
    $icon2 = "<img src='$file2' title='$title2' style='$iconStyle'>";

    $content .= "$icon1 <label class='institution' style='$labelStyle border-right: 1px solid #D2D2D2; padding-right: 20px; margin-right: 20px;' > $totalMembers $title1 </label> $icon2 <label class='institution' style='$labelStyle' > $totalWritingGroups $title2 </label>";

$content .= "</div>";



$content .= "</div>"; // End of groupInformation











$content .= "</div>";

echo $content;