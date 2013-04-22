<?php

$user = elgg_get_page_owner_entity();
$title = $user->name;

elgg_push_breadcrumb(elgg_echo("information:of", array($user->name)));

$body = elgg_view_layout('two_sidebar', array(
	'title' => $title,
	'content' => elgg_view('profile/details'),
));

echo elgg_view_page($title, $body);