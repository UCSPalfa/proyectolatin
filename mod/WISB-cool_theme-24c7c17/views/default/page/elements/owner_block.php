<?php
/**
 * Elgg owner block
 * Displays page ownership information
 *
 * @package Elgg
 * @subpackage Core
 *
 */

$currentContext = elgg_get_context();

elgg_push_context('owner_block');


// groups and other users get owner block
$owner = elgg_get_page_owner_entity();

if (!$owner && $currentContext=='groups'){
	$owner = elgg_get_logged_in_user_entity();
}

if (elgg_is_logged_in() && strcasecmp($currentContext, 'allGroups') == 0) {
	$owner = elgg_get_logged_in_user_entity();
}


if ($owner instanceof ElggGroup || $owner instanceof ElggUser) {

	$header = elgg_view_entity_icon($owner, 'large');

	$header .= "<br /><br /><b>" . elgg_view('output/url', array('href' => $owner->getURL(), 'text' => $owner->name, 'style' => 'font-size:13px; text-align: center;')) . "</b><br /><br />";

	$body = elgg_view_menu('owner_block', array('entity' => $owner, 'sort_by' => 'priority'));

	$body .= elgg_view('page/elements/owner_block/extend', $vars);

	echo elgg_view('page/components/module', array(
		'header' => $header,
		'body' => $body,
		'class' => 'elgg-owner-block',
	));
}

elgg_pop_context();
