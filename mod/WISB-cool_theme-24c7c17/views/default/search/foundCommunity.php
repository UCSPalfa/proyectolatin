<?php

//echo "Esta es la vista por defecto de los objetos encontrados en la búsqueda del hypeAlive";

/**
 * Default view for an entity returned in a search
 *
 * Display largely controlled by a set of overrideable volatile data:
 *   - search_icon (defaults to entity icon)
 *   - search_matched_title 
 *   - search_matched_description
 *   - search_matched_extra
 *   - search_url (defaults to entity->getURL())
 *   - search_time (defaults to entity->time_updated or entity->time_created)
 *
 * @uses $vars['entity'] Entity returned in a search
 */
$entity = $vars['entity'];


//echo print_r($vars);

$query = trim($vars['params']['query']);


$entityType = $entity->type;

$group = $entity;
// ******************** //
// View for Communities //
// ******************** //

$community = $group;


$file = $community->getIconURL();
$icon = "<img src='$file'>";
$theUrl = $community->getURL();

$name = $community->getVolatileData('search_matched_title');

$description = $community->getVolatileData('search_matched_description');

$members = getMembers($community);
$totalMembers = count($members);

$relatedCommunities = getRelatedCommunities($community);
$totalRelatedCommunities = count($relatedCommunities);

$writingGroups = getWritingGroups($community);
$totalWritingGroups = count($writingGroups);

$content .= "<div class='group-found-div'>";

$content .= "<div class='groupFoundIcon'>";

$content .= elgg_view('output/url', array(
    'href' => $theUrl,
    'text' => $icon,
    'title' => $name,
    'is_trusted' => true,));

$content .= "</div>";


$content .= "<div class='groupInformation'>";

$content .= "<div class='groupFoundName'>";

$content .= elgg_view('output/url', array(
    'href' => $theUrl,
    'text' => $name,
    'is_trusted' => true,));

$content .= "</div>";

$content .= "<div class='groupFoundDescription'> <p>" . $description . "</p></div>";


$content .= "</div>";











$content .= "<div class='group-stats-div' style='text-align: left; margin-bottom: 10px;'>";

$file = elgg_get_site_url() . '_graphics/communities.png';
$icon = "<img src='$file'>";
$content .= $icon . "<label> " . $totalMembers . " " . elgg_echo('Members') . " </label>";
$content .= "<hr />";

$file = elgg_get_site_url() . '_graphics/link.png';
$icon = "<img src='$file'>";
$content .= $icon . "<label> $totalRelatedCommunities " . elgg_echo('relatedgroups') . "</label>";
$content .= "<hr />";

$file = elgg_get_site_url() . '_graphics/note.png';
$icon = "<img src='$file'>";
$content .= $icon . "<label> " . $totalWritingGroups . " " . elgg_echo("au_subgroups") . " </label>";

$content .= "</div>";











$content .= "</div>";

echo $content;