<?php 
/**
 * Group entity view
 * 
 * @package ElggGroups
 */

$group = $vars['entity'];

$size = $vars['size'];
if ($size == null) {
	$size = 'medium';
}

$icon = elgg_view_entity_icon($group, $size);

$metadata = elgg_view_menu('entity', array(
	'entity' => $group,
	'handler' => 'groups',
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz',
));

if (elgg_in_context('owner_block') || elgg_in_context('widgets')) {
	$metadata = '';
}


$rendering_mode = $vars['rendering_mode'];

if ($vars['full_view']) {
	echo elgg_view('groups/profile/summary', $vars);
} else if ($rendering_mode == 'only_links') {
	// Modification by Gonzalo
	// To be shown at the sidebar
	$params = array(
		'entity' => $group,
	);
	$params = $params + $vars;
	$list_body = elgg_view('group/elements/summary', $params);

	echo elgg_view_image_block($icon, $list_body, $vars);

} else if ($rendering_mode == 'as_grid') {
	echo elgg_view('groups/profile/summaryGrid', $vars);

} else if ($rendering_mode == 'as_google_plus') {
	echo elgg_view('groups/profile/gPlus', $vars);

} else {
	// brief view
	$params = array(
		'entity' => $group,
		'metadata' => $metadata,
		'subtitle' => $group->briefdescription,		
	);
	$params = $params + $vars;
	$list_body = elgg_view('group/elements/summary', $params);

	echo elgg_view_image_block($icon, $list_body, $vars);
}
