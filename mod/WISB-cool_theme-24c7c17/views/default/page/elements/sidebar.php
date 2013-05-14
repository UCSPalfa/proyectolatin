<?php
/**
 * Elgg sidebar contents
 *
 * @uses $vars['sidebar'] Optional content that is displayed at the bottom of sidebar
 */

echo elgg_view('page/elements/owner_block', $vars);


// When being on the dashboard context, I want to show the profile picture and the user name as Facebook does
$currentContext = elgg_get_context();

if (elgg_is_logged_in() && $currentContext == 'dashboard' ) {
	$user = elgg_get_logged_in_user_entity();
	echo elgg_view_entity_icon($user, 'large', array('href' => $user->getURL())) . "<br /><br /><b>" . elgg_view('output/url', array('href' => $user->getURL(), 'text' => $user->name, 'style' => 'font-size:13px; text-align: center;')) . "</b><br /><br />";
}

if (!elgg_is_logged_in() && elgg_in_context("groups") && !elgg_in_context("group_profile") && !elgg_in_context("group_members") && !elgg_in_context("mine_groups") ) {
    
    echo elgg_view('page/elements/invitation', $vars);
}

echo elgg_view_menu('page', array('sort_by' => 'priority'));

// optional 'sidebar' parameter
if (isset($vars['sidebar'])) {
	echo $vars['sidebar'];
}

// @todo deprecated so remove in Elgg 2.0
// optional second parameter of elgg_view_layout
if (isset($vars['area2'])) {
	echo $vars['area2'];
}

// @todo deprecated so remove in Elgg 2.0
// optional third parameter of elgg_view_layout
if (isset($vars['area3'])) {
	echo $vars['area3'];
}

echo elgg_view_menu('extras', array(
	'sort_by' => 'priority',
));

//GC:info about LATIn project
//AO: Mayo 13, comentado y añadida información a slider
/*if (!elgg_is_logged_in() && elgg_in_context("main")){
echo elgg_view('page/elements/latinproject', $vars);
}
*/
