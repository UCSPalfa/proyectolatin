<?php
/**
 * Group tag-based search form body
 */

$tag_string = elgg_echo('groups:search:all');

$params = array(
	'name' => 'q',
	'class' => 'elgg-input-search mbm searchInput',
	'value' => $tag_string,
	'onclick' => "if (this.value=='$tag_string') { this.value='' }",
);
echo elgg_view('input/text', $params);

echo elgg_view('input/submit', array('class' => 'inLineButton elgg-button-submit', 'value' => elgg_echo('search:go')));

