<?php
/**
 * User's wire posts
 * 
 */

$owner = elgg_get_page_owner_entity();
if (!$owner) {
	forward('thewire/all');
}

$title = elgg_echo('thewire:user', array($owner->name));

elgg_push_breadcrumb(elgg_echo('thewire'), "thewire/all");
elgg_push_breadcrumb($owner->name);

$context = '';
if (elgg_get_logged_in_user_guid() == $owner->guid) {
/*AO: Abril 13, añadida clase thewire-form2*/
	$form_vars = array('class' => 'thewire-form', 'class' => 'thewire-form2');
	$content = elgg_view_form('thewire/add', $form_vars);
	$content .= elgg_view('input/urlshortener');
	$context = 'mine';
}

$content .= elgg_list_entities(array(
	'type' => 'object',
	'subtype' => 'thewire',
	'owner_guid' => $owner->guid,
	'limit' => 15,
));

$body = elgg_view_layout('content', array(
	'filter_context' => $context,
	'content' => $content,
	'title' => $title,
	'sidebar' => elgg_view('thewire/sidebar'),
));

echo elgg_view_page($title, $body);
