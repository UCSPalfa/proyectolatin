<?php

$theWritingGroup = $vars['entity'];

$file = $theWritingGroup->getIconURL();
$icon = "<img src='$file'>";
$theUrl = $theWritingGroup->getURL();

$name = $theWritingGroup->getVolatileData('search_matched_title');

$institution = $theWritingGroup->Institution;
$city = $theWritingGroup->City;
$country = $theWritingGroup->Country;
$bookTitle = $theWritingGroup->BookTitle;

$matchedDescription = $theWritingGroup->getVolatileData('search_matched_description');

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

$members = getMembers($writingGroup);
$totalMembers = count($members);

$institutions = getInstitutions($writingGroup);
$totalInstitutions = count($institutions);

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


$content .= "<div class='groupInformation' style='width: 80%;'>";







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
$file1 = elgg_get_site_url() . '_graphics/book.png';
$icon1 = "<img src='$file1' style='$iconStyle'>";


$content .= "$icon1 <label class='institution' style='$labelStyle' > $bookTitle </label>";




$content .= "</div>";

$content .= "<div class='user-institution-div' style='margin-top: 2px;'>";

$title1 = elgg_echo('writingGroups:Members');
$file1 = elgg_get_site_url() . '_graphics/communities.png';
$icon1 = "<img src='$file1' title='$title1' style='$iconStyle'>";

$title2 = elgg_echo("Institutions");
$file2 = elgg_get_site_url() . '_graphics/institution.png';
$icon2 = "<img src='$file2' title='$title2' style='$iconStyle'>";

$content .= "$icon1 <label class='institution' style='$labelStyle border-right: 1px solid #D2D2D2; padding-right: 20px; margin-right: 20px;' > $totalMembers $title1 </label> $icon2 <label class='institution' style='$labelStyle' > $totalInstitutions $title2 </label>";

$content .= "</div>";



$content .= "</div>"; // End of groupInformation











$content .= "</div>";

echo $content;