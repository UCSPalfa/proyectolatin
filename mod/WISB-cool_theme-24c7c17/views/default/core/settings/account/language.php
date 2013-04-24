<?php
/**
 * Provide a way of setting your language prefs
 *
 * @package Elgg
 * @subpackage Core
 */

$user = elgg_get_page_owner_entity();

if ($user) {
	$title = "<hr>";//elgg_echo('user:set:language');
	$content = elgg_echo('user:language:label') . ': ';
	$content .= elgg_view("input/dropdown", array(
		'name' => 'language',
		'value' => $user->language,
//		'options_values' => get_installed_translations()
/*AO: Abril 22, comentado get_installed_translations, modificado por arreglo con lenguajes definidos */
                'options_values' => array("en" => "English","es" => "Spanish", "pt" => "Portuguese")
	));
	echo elgg_view_module('info', $title, $content);
}
