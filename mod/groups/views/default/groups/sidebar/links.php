<?php
/**
 * Group members sidebar
 *
 * @package ElggGroups
 *
 * @uses $vars['entity'] Group entity
 * @uses $vars['limit']  The number of members to display
 */

$limit = elgg_extract('limit', $vars, 14);


$all_link = elgg_view('output/url', array(
	'href' => 'groups/links/' . $vars['entity']->guid,
	'text' => elgg_echo('groups:links:more'),
	'is_trusted' => true,
));

$list_type = 'list';
$size = 'small';

$pagination = false;
$types = 'group';
$list_type_toggle = FALSE;

$full_view = false;
$only_links = true;

$arr1 = elgg_list_entities_from_relationship(array(
	'relationship' => 'linkedTo',
	'relationship_guid' => $vars['entity']->guid,
	'inverse_relationship' => TRUE,
	'types' => $types,
	'limit' => $limit,
	'list_type' => $list_type,
	'size' => $size,
	'pagination' => $pagination,
	'list_type_toggle' => $list_type_toggle,
	'full_view' => $full_view,
	'only_links' => $only_links,
));

$arr2 = elgg_list_entities_from_relationship(array(
	'relationship' => 'linkedTo',
	'relationship_guid' => $vars['entity']->guid,
	'inverse_relationship' => FALSE,
	'types' => $types,
	'limit' => $limit,
	'list_type' => $list_type,
	'size' => $size,
	'pagination' => $pagination,
	'list_type_toggle' => $list_type_toggle,
	'full_view' => $full_view,
	'only_links' => $only_links,
));



$body = $arr1 . $arr2;

$body .= "<div class='center mts'>$all_link</div>";

echo elgg_view_module('aside', elgg_echo('groups:links'), $body);
