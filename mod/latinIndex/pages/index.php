<?php

if (elgg_is_logged_in()) {
	forward('activity');
}



$login_box = elgg_view('core/account/login_box');

$params = array(
		'sidebar' => $login_box
);
$body = elgg_view_layout('one_sidebar', $params);


elgg_unregister_menu_item('menu');

echo elgg_view_page(null, $body);


