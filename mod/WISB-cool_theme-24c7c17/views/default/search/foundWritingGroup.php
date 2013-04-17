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

$writingGroup = $group;

$file = $writingGroup->getIconURL();
$icon = "<img src='$file' style='margin-bottom: 10px;'>";
$theUrl = $writingGroup->getURL();

$name = $writingGroup->getVolatileData('search_matched_title');

$description = $writingGroup->getVolatileData('search_matched_description');

$members = getMembers($writingGroup);
$totalMembers = count($members);

$institutions = getInstitutions($writingGroup);
$totalInstitutions = count($institutions);


// ************************* //
// Writing Group Information //
// ************************* //

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


// ******************* //
// Writing Group Stats //
// ******************* //

$content .= "<div class='group-stats-div' style='text-align: left; margin-bottom: 10px;'>";

$file = elgg_get_site_url() . '_graphics/communities.png';
$icon = "<img src='$file'>";
$content .= $icon . "<label> " . $totalMembers . " " . elgg_echo('writingGroups:Members') . " </label>";
$content .= "<hr />";


$file = elgg_get_site_url() . '_graphics/institution.png';
$icon = "<img src='$file'>";
$content .= $icon . "<label> " . $totalInstitutions . " " . elgg_echo("Institutions:collaborating") . " </label>";



$group_owner = get_entity($writingGroup->getOwnerGUID());
$ownerEmail = $group_owner->email;
$showOwnerEmail = $group_owner->EmailVisibility == 'Public';

if ($ownerEmail && $showOwnerEmail) {
    $content .= "<hr />";
    $file = elgg_get_site_url() . '_graphics/info.png';
    $icon = "<img src='$file'>";
    $content .= $icon . "<label'><a class='allMembers' style='margin-top: -24px; display:block; margin-left: 25px; ' href='mailto: " . $ownerEmail . "'>" . $ownerEmail . "</a></label>";
}



$content .= "</div>";

$content .= "</div>";




echo $content;