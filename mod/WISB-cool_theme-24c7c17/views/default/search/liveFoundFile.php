<?php

$theFile = $vars['entity'];


$owner = $theFile->getOwnerEntity();
$file = $owner->getIconURL();
$ownerIcon = "<img src='$file' style='width: 40px; border: 1px solid black; margin-top: 5px; float: left; margin-right: 10px; '>";


$title = $theFile->getVolatileData('search_matched_title');
$description = $theFile->getVolatileData('search_matched_description');
$extra_info = $theFile->getVolatileData('search_matched_extra');
$url = $theFile->getVolatileData('search_url');

$time = $theFile->getVolatileData('search_time');
if (!$time) {
    $tc = $theFile->time_created;
    $tu = $theFile->time_updated;
    $time = elgg_view_friendly_time(($tu > $tc) ? $tu : $tc);
}

$file = $theFile->getIconURL();
$icon = "<img src='$file'>";
$theUrl = $theFile->getURL();

$name = $theFile->getVolatileData('search_matched_title');

// **************** //
// File Information //
// **************** //

$content .= "<div class='group-found-div' style='margin-top: -2px; margin-bottom: -2px; '>";

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


$title1 = $time;
$file1 = elgg_get_site_url() . '_graphics/clock.png';
$icon1 = "<img src='$file1' title='$title1' style='$iconStyle'>";

$content .= "$ownerIcon";

$ownerLink = elgg_view('output/url', array(
    'href' => $owner->getURL(),
    'text' => $owner->name,
    'style' => "color: #0054A7; font-family: 'Lucida Grande', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-weight: normal;",
    'is_trusted' => true,));
$content .= "<label class='institution' style='$labelStyle float:left;' > $ownerLink </label><br /><br />";



$title1 = $time;
$file1 = elgg_get_site_url() . '_graphics/clock.png';
$icon1 = "<img src='$file1' title='$title1' style='$iconStyle float:left; margin-top: -8px; margin-right: 10px;'>";

$labelStyle = "margin-top: 0px; white-space: nowrap; float: left; font-family: Lucida Grande, Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; margin-top: -5px;";

$content .= "$icon1 <label class='institution' style='$labelStyle' > $title1 </label>";



$content .= "</div>"; // End of groupInformation











$content .= "</div>";

echo $content;