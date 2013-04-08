<?php
/**
 * All groups listing page navigation
 *
 * @uses $vars['selected'] Name of the tab that has been selected
 */

$tabs = array(
	'popular' => array(
		'text' => elgg_echo('groups:popular'),
		'href' => 'groups/all?filter=popular',
		'priority' => 200,
	),
        'newest' => array(
		'text' => elgg_echo('groups:newest'),
		'href' => 'groups/all?filter=newest',
		'priority' => 300,
	),
	'discussion' => array(
		'text' => elgg_echo('groups:latestdiscussion'),
		'href' => 'groups/all?filter=discussion',
		'priority' => 400,
	),
);

foreach ($tabs as $name => $tab) {
	$tab['name'] = $name;

	if ($vars['selected'] == $name) {
		$tab['selected'] = true;
	}

	elgg_register_menu_item('filter', $tab);
}

echo elgg_view_menu('filter', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz'));
