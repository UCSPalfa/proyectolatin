<?php

// turn this into a core function
global $autofeed;
$autofeed = true;

$group = elgg_get_page_owner_entity();
if (!$group instanceof ElggGroup) {
    forward('groups/all');
}

elgg_load_library('elgg:groups');
groups_register_profile_buttons($group);

// Modification by: Gonzalo
// This context is necessary to place the "Create a Writing Group" button
elgg_push_context('group_profile');


// Modification by Gonzalo : Antes se llamaba a la vista groups/profile/layout para que muestre
// el perfil del grupo. Ahora, se llama a la pagina profile
//$content = elgg_view('groups/profile/layout', array('entity' => $group));

if (isSubgroup($group)) {

    $content = elgg_view('groups/profile/writingGroupProfile', array('entity' => $group));
} else {

    $content = elgg_view('groups/profile/communityProfile', array('entity' => $group));
}

//if (group_gatekeeper(false)) {
//    $sidebar = elgg_view('groups/sidebar/members', array('entity' => $group));
//} else {
//    $sidebar = '';
//}

$body = elgg_view_layout('two_sidebar', array(
    'content' => $content,
//    'sidebar_alt' => $sidebar,
    'title' => $group->name,
        ));

echo elgg_view_page($group->name, $body);