<?php

$theGroupForumTopic = $vars['entity'];


$owner = $theGroupForumTopic->getOwnerEntity();
$file = $owner->getIconURL();
$ownerIcon = "<img src='$file'>";


$title = $theGroupForumTopic->getVolatileData('search_matched_title');
$description = $theGroupForumTopic->getVolatileData('search_matched_description');
$extra_info = $theGroupForumTopic->getVolatileData('search_matched_extra');
$url = $theGroupForumTopic->getVolatileData('search_url');

$time = $theGroupForumTopic->getVolatileData('search_time');
if (!$time) {
    $tc = $theGroupForumTopic->time_created;
    $tu = $theGroupForumTopic->time_updated;
    $time = elgg_view_friendly_time(($tu > $tc) ? $tu : $tc);
}

$file = $theGroupForumTopic->getIconURL();
$icon = "<img src='$file'>";
$theUrl = $theGroupForumTopic->getURL();

$name = $theGroupForumTopic->getVolatileData('search_matched_title');

// **************** //
// File Information //
// **************** //

$content .= "<div class='group-found-div' style='margin-bottom: 0px;'>";

$foundIconStyle = "margin-bottom: 8px; width: 60px;";

$content .= "<div class='groupFoundIcon' style='$foundIconStyle'>";

$content .= elgg_view('output/url', array(
    'href' => $theUrl,
    'text' => $ownerIcon,
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
$labelStyle = "margin-top: 5px; white-space: nowrap; max-width: 86%; overflow-x: hidden;";


$title1 = $time;
$file1 = elgg_get_site_url() . '_graphics/clock.png';
$icon1 = "<img src='$file1' title='$title1' style='$iconStyle float:left; margin-right: 10px;'>";

$ownerLink = elgg_view('output/url', array(
    'href' => $owner->getURL(),
    'text' => $owner->name,
    'style' => "color: #0054A7; font-family: 'Lucida Grande', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-weight: normal;",
    'is_trusted' => true,));

$content .= "<label class='institution' style='$labelStyle float:left; font-size: 13px;' > " . elgg_echo("created:by", array($ownerLink)) . " </label><br /><br />";



$title1 = $time;
$file1 = elgg_get_site_url() . '_graphics/clock.png';
$icon1 = "<img src='$file1' title='$title1' style='$iconStyle float:left; margin-top: 1px; margin-right: 10px;'>";

$labelStyle = "margin-top: 0px; white-space: nowrap; float: left; font-family: Lucida Grande, Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; margin-top: 4px;";

$content .= "$icon1 <label class='institution' style='$labelStyle' > $title1 </label>";



$content .= "</div>"; // End of groupInformation











$content .= "</div>";

echo $content;