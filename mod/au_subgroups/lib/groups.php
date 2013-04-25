<?php

/**
 * Groups function library
 */

/**
 * List all groups
 */
function groups_handle_all_page() {

    $display_subgroups = elgg_get_plugin_setting('display_subgroups', 'au_subgroups');
    $db_prefix = elgg_get_config('dbprefix');

    // all groups doesn't get link to self
    elgg_pop_breadcrumb();
    elgg_push_breadcrumb(elgg_echo('groups'));

    $title = elgg_echo('latin:communities');

    if (elgg_get_plugin_setting('limited_groups', 'groups') != 'yes' || elgg_is_admin_logged_in()) {
        elgg_register_title_button();
    }

    if (!elgg_is_logged_in()) {

        $content .= "<div class='groupSearchBar'>";
        $content .= elgg_view_form('groups/find', array(
            'action' => elgg_get_site_url() . 'groups/search',
            'method' => 'get',
            'disable_security' => true,));
        $content .= "</div>";
        $content .= "<hr style='margin-bottom: 10px;' />";
    }

    $selected_tab = get_input('filter', 'popular');
    $filter = "<div style='margin-bottom: 10px;'>" . elgg_view('groups/group_sort_menu', array('selected' => $selected_tab)) . "</div>";

    if (!elgg_is_logged_in()) {
        $content .= $filter;
    }

    switch ($selected_tab) {
        case 'popular':
            $options = array(
                'type' => 'group',
                'relationship' => 'member',
                'inverse_relationship' => false,
                'full_view' => false,
                'rendering_mode' => 'as_google_plus',
                'list_type' => 'gallery',
                'limit' => 30,
            );

            if ($display_subgroups != 'yes') {
                $options['wheres'] = array("NOT EXISTS ( SELECT 1 FROM {$db_prefix}entity_relationships WHERE guid_one = e.guid AND relationship = '" . AU_SUBGROUPS_RELATIONSHIP . "' )");
            }

            $content .= elgg_list_entities_from_relationship_count($options);

            if (!$content) {
                $content .= "<div class='center' style='padding-top: 30px;'> " . elgg_echo('groups:none') . " </div>";
            }
            break;
        case 'discussion':
            $content .= elgg_list_entities(array(
                'type' => 'object',
                'subtype' => 'groupforumtopic',
                'order_by' => 'e.last_action desc',
                'full_view' => false,
                'rendering_mode' => 'as_google_plus',
                'list_type' => 'gallery',
                'limit' => 30,
                    ));
            if (!$content) {
                $content .= "<div class='center' style='padding-top: 30px;'> " . elgg_echo('discussion:none') . " </div>";
            }
            break;
        case 'newest':
        default:
            $options = array(
                'type' => 'group',
                'full_view' => false,
                'rendering_mode' => 'as_google_plus',
                'list_type' => 'gallery',
                'limit' => 30,
            );

            if ($display_subgroups != 'yes') {
                $options['wheres'] = array("NOT EXISTS ( SELECT 1 FROM {$db_prefix}entity_relationships WHERE guid_one = e.guid AND relationship = '" . AU_SUBGROUPS_RELATIONSHIP . "' )");
            }

            $content .= elgg_list_entities($options);
            if (!$content) {
                $content .= "<div class='center' style='padding-top: 30px;'> " . elgg_echo('groups:none') . " </div>";
            }
            break;
    }



    $params = array(
        'content' => $content,
        'title' => $title,
    );

    $body = elgg_view_layout('content', $params);

    echo elgg_view_page(elgg_echo('groups:all'), $body);
}

function groups_search_page() {

    elgg_push_breadcrumb(elgg_echo('search'));

    $tag = get_input("q");

    $title .= elgg_echo('groups:search:all:title', array($tag));

    $content .= "<div class='groupSearchBar' >";
    $content .= elgg_view_form('groups/find', array(
        'action' => elgg_get_site_url() . 'groups/search',
        'method' => 'get',
        'disable_security' => true,));
    $content .= "</div>";
    $content .= "<hr style='margin-bottom: 20px;' />";

    $type = 'group';

    // set up search params
    $params = array(
        'query' => $tag,
        'search_type' => 'entity',
        'type' => $type,
        'subtype' => '',
        'pagination' => true
    );

    $current_params = $params;
    $current_params['search_type'] = 'entities';
    $current_params['type'] = $type;
    $current_params['subtype'] = ELGG_ENTITIES_NO_VALUE;
    $results = elgg_trigger_plugin_hook('search', $type, $current_params, array());

    $results = $results['entities'];

    if (!count($results)) {
        $content .= "<div class='center' style='padding-top: 30px;'> " . elgg_echo('notfound') . " </div>";
    }

    foreach ($results as $currentCommunity) {

        if (isSubgroup($currentCommunity)) {
            continue;
        }

//        
//        echo "<br />";
//        echo strlen($currentGroup->getVolatileData('search_matched_description'));
//        
//        echo "<br />";
//        echo $currentGroup->getVolatileData('search_matched_description');
//        
//        
//        echo "<br />";
//        echo print_r($currentGroup);
//        echo "<br />";
//        echo "<br />";
//        

        $file = $currentCommunity->getIconURL();
        $icon = "<img src='$file'>";
        $theUrl = $currentCommunity->getURL();

        $name = $currentCommunity->getVolatileData('search_matched_title');

        $description = $currentCommunity->getVolatileData('search_matched_description');

        $members = getMembers($currentCommunity);
        $totalMembers = count($members);

        $relatedCommunities = getRelatedCommunities($currentCommunity);
        $totalRelatedCommunities = count($relatedCommunities);

        $writingGroups = getWritingGroups($currentCommunity);
        $totalWritingGroups = count($writingGroups);

        $content .= "<div class='group-found-div'>";

        $content .= "<div class='groupFoundIcon'>";

        $content .= elgg_view('output/url', array(
            'href' => $theUrl,
            'text' => $icon,
            'title' => $name,
            'is_trusted' => true,));

        $content .= "</div>";


        $content .= "<div class='groupInformation'>";

        $content .= "<div class='groupFoundName'>";

        $content .= elgg_view('output/url', array(
            'href' => $theUrl,
            'text' => $name,
            'is_trusted' => true,));

        $content .= "</div>";

        $content .= "<div class='groupFoundDescription'> <p>" . $description . "</p></div>";


        $content .= "</div>";











        $content .= "<div class='group-stats-div' style='text-align: left; margin-bottom: 10px;'>";

        $file = elgg_get_site_url() . '_graphics/communities.png';
        $icon = "<img src='$file'>";
        $content .= $icon . "<label> " . $totalMembers . " " . elgg_echo('Members') . " </label>";
        $content .= "<hr />";

        $file = elgg_get_site_url() . '_graphics/link.png';
        $icon = "<img src='$file'>";
        $content .= $icon . "<label> $totalRelatedCommunities " . elgg_echo('relatedgroups') . "</label>";
        $content .= "<hr />";

        $file = elgg_get_site_url() . '_graphics/note.png';
        $icon = "<img src='$file'>";
        $content .= $icon . "<label> " . $totalWritingGroups . " " . elgg_echo("au_subgroups") . " </label>";

        $content .= "</div>";











        $content .= "</div>";
    }


    if (!$content) {
        $content = elgg_echo('groups:search:none');
    }

    $params = array(
        'content' => $content,
        'filter' => false,
        'title' => $title,
    );

    $body = elgg_view_layout('content', $params);

    echo elgg_view_page($title, $body);
}

/**
 * List owned groups
 */
function groups_handle_owned_page() {
    au_subgroups_handle_owned_page();
}

/**
 * List groups the user is memober of
 */
function groups_handle_mine_page() {
    au_subgroups_handle_mine_page();
}

// Esta función se ejecuta cuando se accede a la URL groups/writing_groups/username
function list_mine_subgroups($user) {

    elgg_push_context('mine_groups');
    $page_owner = elgg_get_page_owner_entity();

    if ($page_owner->guid == elgg_get_logged_in_user_guid()) {
        $title = elgg_echo('writing:groups:yours');
    } else {
        $title = elgg_echo('writing:groups:user', array($page_owner->name));
    }

    elgg_push_breadcrumb($title);

    $allGroups = elgg_get_entities_from_relationship(array(
        'relationship' => 'member',
        'relationship_guid' => $user->guid,
        'inverse_relationship' => false,
        'types' => 'group',
        'limit' => 0,
            ));

    $subGroups = array();

    foreach ($allGroups as $group) {
        if (isSubgroup($group)) {
            array_push($subGroups, $group);
        }
    }


    if (count($subGroups) > 0) {

        $content .= '<ul class="elgg-gallery">';

        foreach ($subGroups as $subGroup) {
            $content .= '<li class="elgg-item">';
            $content .= elgg_view('groups/profile/gPlus', array('entity' => $subGroup));
            $content .= '</li>';
        }

        $content .= '</ul>';
    } else {

        if ($page_owner->guid == elgg_get_logged_in_user_guid()) {
            $content = elgg_echo('you:no:writing:groups');
        } else {
            $content = elgg_echo('user:no:writing:groups', array($page_owner->name));
        }
        
        $content = '<p class="mtm">' . $content . "</p>";
    }

    $params = array(
        'content' => $content,
        'title' => $title,
        'filter' => '',
    );
    $body = elgg_view_layout('content', $params);

    echo elgg_view_page($title, $body);
}

/**
 * Create or edit a group
 *
 * @param string $page
 * @param int $guid
 */
function groups_handle_edit_page($page, $guid = 0) {
    gatekeeper();

    if ($page == 'add') {
        elgg_set_page_owner_guid(elgg_get_logged_in_user_guid());
        $title = elgg_echo('groups:add');
        elgg_push_breadcrumb($title);
        if (elgg_get_plugin_setting('limited_groups', 'groups') != 'yes' || elgg_is_admin_logged_in()) {
            $content = elgg_view('groups/edit');
        } else {
            $content = elgg_echo('groups:cantcreate');
        }
    } else {
        $title = elgg_echo("groups:edit");
        $group = get_entity($guid);

        if (isSubgroup($group)) { //po5i
            elgg_push_context('au_subgroups_edition'); //po5i
            $title = elgg_echo("au_subgroups:edit:subgroup");   //po5i
            //TODO: arreglar el breadcrumb que abajo se agrega como community (Deberia decir writing group)
            //asi como se lo hace en au_subgroups/pages/add
        }

        if ($group && $group->canEdit()) {
            elgg_set_page_owner_guid($group->getGUID());
            elgg_push_breadcrumb($group->name, $group->getURL());
            elgg_push_breadcrumb($title);
            $content = elgg_view("groups/edit", array('entity' => $group));
        } else {
            $content = elgg_echo('groups:noaccess');
        }
    }

    $params = array(
        'content' => $content,
        'title' => $title,
        'filter' => '',
    );
    $body = elgg_view_layout('content', $params);

    echo elgg_view_page($title, $body);
}

/**
 * Group invitations for a user
 */
function groups_handle_invitations_page() {
    gatekeeper();

    $user = elgg_get_page_owner_entity();

    $title = elgg_echo('groups:invitations');
    elgg_push_breadcrumb($title);

    // @todo temporary workaround for exts #287.
    $invitations = groups_get_invited_comm(elgg_get_logged_in_user_guid());
    $content = elgg_view('groups/invitationrequests', array('invitations' => $invitations));

    $params = array(
        'content' => $content,
        'title' => $title,
        'filter' => '',
    );
    $body = elgg_view_layout('content', $params);

    echo elgg_view_page($title, $body);
}

/**
 * Group invitations for a user
 */
function subgroups_handle_invitations_page() {
    
    elgg_push_context('mine_groups');
    
    gatekeeper();

    $user = elgg_get_page_owner_entity();

    $title = elgg_echo('au_subgroups:invitations');
    elgg_push_breadcrumb($title);

    // @todo temporary workaround for exts #287.
    $invitations = groups_get_invited_wgroups(elgg_get_logged_in_user_guid());
    $content = elgg_view('groups/invitationrequests', array('invitations' => $invitations));

    $params = array(
        'content' => $content,
        'title' => $title,
        'filter' => '',
    );
    $body = elgg_view_layout('content', $params);

    echo elgg_view_page($title, $body);
}

/**
 * Group profile page
 *
 * @param int $guid Group entity GUID
 */
function groups_handle_profile_page($guid) {
    elgg_set_page_owner_guid($guid);

    // turn this into a core function
    global $autofeed;
    $autofeed = true;

    elgg_push_context('group_profile');

    $group = get_entity($guid);
    if (!$group) {
        forward('groups/all');
    }

    elgg_push_breadcrumb($group->name);

    groups_register_profile_buttons($group);

    $content = elgg_view('groups/profile/layout', array('entity' => $group));
    if (group_gatekeeper(false)) {
        $sidebar = '';
        if (elgg_is_active_plugin('search')) {
            $sidebar .= elgg_view('groups/sidebar/search', array('entity' => $group));
        }
        $sidebar .= elgg_view('groups/sidebar/members', array('entity' => $group));
    } else {
        $sidebar = '';
    }

    $params = array(
        'content' => $content,
        'sidebar' => $sidebar,
        'title' => $group->name,
        'filter' => '',
    );
    $body = elgg_view_layout('content', $params);

    echo elgg_view_page($group->name, $body);
}

/**
 * Group activity page
 *
 * @param int $guid Group entity GUID
 */
function groups_handle_activity_page($guid) {

    elgg_set_page_owner_guid($guid);

    $group = get_entity($guid);
    if (!$group || !elgg_instanceof($group, 'group')) {
        forward();
    }

    group_gatekeeper();

    $title = elgg_echo('groups:activity');

    elgg_push_breadcrumb($group->name, $group->getURL());
    elgg_push_breadcrumb($title);

    $db_prefix = elgg_get_config('dbprefix');

    $content = elgg_list_river(array(
        'joins' => array("JOIN {$db_prefix}entities e ON e.guid = rv.object_guid"),
        'wheres' => array("e.container_guid = $guid")
            ));
    if (!$content) {
        $content = '<p>' . elgg_echo('groups:activity:none') . '</p>';
    }

    $params = array(
        'content' => $content,
        'title' => $title,
        'filter' => '',
    );
    $body = elgg_view_layout('content', $params);

    echo elgg_view_page($title, $body);
}

/**
 * Group members page
 *
 * @param int $guid Group entity GUID
 */
function groups_handle_members_page($guid) {

    elgg_push_context('group_members');

    elgg_set_page_owner_guid($guid);

    $group = get_entity($guid);
    if (!$group || !elgg_instanceof($group, 'group')) {
        forward();
    }

    if (isSubgroup($group)) {
        $title = elgg_echo('writing:groups:members:title', array($group->name));
    } else {
        $title = elgg_echo('groups:members:title', array($group->name));
    }

    elgg_push_breadcrumb($group->name, $group->getURL());

    if (isSubgroup($group)) {
        elgg_push_breadcrumb(elgg_echo('wgroups:members'));
    } else {
        elgg_push_breadcrumb(elgg_echo('groups:members'));
    }

    $content = "";
    ////// only if is a writing group
    if ($group->canEdit() && au_subgroups_get_parent_group($group)) {
        $form_vars = array('id' => 'add_members_group',);
        $body_vars = group_members_prepare_form_vars($group);

        $content .= elgg_view_form('groups/membership/add', $form_vars, $body_vars);
    }
    /////


    $members = elgg_get_entities_from_relationship(array(
        'relationship' => 'member',
        'relationship_guid' => $group->guid,
        'inverse_relationship' => true,
        'types' => 'user',
        'limit' => 0,
        'list_type' => 'gallery',
        'gallery_class' => 'members',
        'pagination' => false
            ));

    $content .= "<div style=''>";

    foreach ($members as $member) {

        $content .= elgg_view('groups/profile/communityMember', array('entity' => $member));
    }

    $content .= "</div>";

//    $content .= elgg_list_entities_from_relationship(array(
//        'relationship' => 'member',
//        'relationship_guid' => $group->guid,
//        'inverse_relationship' => true,
//        'types' => 'user',
//        'list_type' => 'gallery',
//        'size' => 'medium',
//        'limit' => 30,
//            ));


    $params = array(
        'content' => $content,
        'title' => $title,
        'filter' => '',
    );
    $body = elgg_view_layout('content', $params);

    echo elgg_view_page($title, $body);
}

function group_members_prepare_form_vars($group) {
    $parent = au_subgroups_get_parent_group($group);
    $com_members = $parent->getMembers(0);
    $members = get_group_roles($group);
    $no_members = array_obj_diff($com_members, $members);

    // input names => defaults
    $values = array(
        'entity' => $group,
        'candidates' => $no_members
    );

    return $values;
}

function group_members_prepare_combo_vars($candidates) {
    $values = array('' => elgg_echo('group_roles:selectone'));
    foreach ($candidates as $candidate) {
        $values[$candidate->guid] = $candidate->name . " - " . $candidate->username;
    }
    return $values;
}

function get_group_roles($group) {
    if ($group instanceof ElggGroup) {
        $members_roles = elgg_get_entities_from_relationship(
                array('types' => 'user', 'limit' => 0, 'relationship_guid' => $group->guid, 'relationship' => 'member', 'inverse_relationship' => true));
        $group_owner = get_entity($group->getOwnerGUID());

        if (!in_array($group_owner, $members_roles)) {
            $members_roles[$group_owner->guid] = $group_owner;
        }
        return $members_roles;
    } else {
        return null;
    }
}

function array_obj_diff($array1, $array2) {

    foreach ($array1 as $key => $value) {
        $array1[$key] = serialize($value);
    }

    foreach ($array2 as $key => $value) {
        $array2[$key] = serialize($value);
    }

    $array_diff = array_diff($array1, $array2);

    foreach ($array_diff as $key => $value) {
        $array_diff[$key] = unserialize($value);
    }

    return $array_diff;
}

/**
 * Invite users to a group
 *
 * @param int $guid Group entity GUID
 */
function groups_handle_invite_page($guid) {
    gatekeeper();

    elgg_set_page_owner_guid($guid);

    $group = get_entity($guid);
    if (au_subgroups_get_parent_group($group))
        $title = elgg_echo('wgroups:invite:title');
    else
        $title = elgg_echo('groups:invite:title');


    elgg_push_breadcrumb($group->name, $group->getURL());
    elgg_push_breadcrumb(elgg_echo('groups:invite'));

    if ($group) {
        $content = elgg_view_form('groups/invite', array(
            'id' => 'invite_to_group',
            'class' => 'elgg-form-alt mtm',
                ), array(
            'entity' => $group,
                ));
    } else {
        $content .= elgg_echo('groups:noaccess');
    }

    $params = array(
        'content' => $content,
        'title' => $title,
        'filter' => '',
    );
    $body = elgg_view_layout('content', $params);

    echo elgg_view_page($title, $body);
}

/**
 * Manage requests to join a group
 * 
 * @param int $guid Group entity GUID
 */
function groups_handle_requests_page($guid) {

    gatekeeper();

    elgg_set_page_owner_guid($guid);

    $group = get_entity($guid);

    $title = elgg_echo('groups:membershiprequests');

    if ($group && $group->canEdit()) {
        elgg_push_breadcrumb($group->name, $group->getURL());
        elgg_push_breadcrumb($title);

        $requests = elgg_get_entities_from_relationship(array(
            'type' => 'user',
            'relationship' => 'membership_request',
            'relationship_guid' => $guid,
            'inverse_relationship' => true,
            'limit' => 0,
                ));
        $content = elgg_view('groups/membershiprequests', array(
            'requests' => $requests,
            'entity' => $group,
                ));
    } else {
        $content = elgg_echo("groups:noaccess");
    }

    $params = array(
        'content' => $content,
        'title' => $title,
        'filter' => '',
    );
    $body = elgg_view_layout('content', $params);

    echo elgg_view_page($title, $body);
}

/**
 * Registers the buttons for title area of the group profile page
 *
 * @param ElggGroup $group
 */
function groups_register_profile_buttons($group) {

    $actions = array();

    // group owners
    if ($group->canEdit()) {

        // edit and invite
        $url = elgg_get_site_url() . "groups/edit/{$group->getGUID()}";

        if (isSubgroup($group)) {
            $actions[$url] = 'au_subgroups:edit:subgroup';
        } else {
            $actions[$url] = 'groups:edit';
        }
    }

    // group members
    if ($group->isMember(elgg_get_logged_in_user_entity())) {
        if ($group->getOwnerGUID() != elgg_get_logged_in_user_guid()) {
            // leave
            $url = elgg_get_site_url() . "action/groups/leave?group_guid={$group->getGUID()}";
            $url = elgg_add_action_tokens_to_url($url);


            if (isSubgroup($group)) {
                $actions[$url] = 'writing:group:leave';
            } else {
                $actions[$url] = 'groups:leave';
            }
        }
        $url = elgg_get_site_url() . "groups/invite/{$group->getGUID()}";
        $actions[$url] = 'groups:invite';
    } elseif (elgg_is_logged_in()) {
        // join - admins can always join.
        $url = elgg_get_site_url() . "action/groups/join?group_guid={$group->getGUID()}";
        $url = elgg_add_action_tokens_to_url($url);

        if (!isSubgroup($group)) {
            $actions[$url] = 'groups:join';
            /*
              if ($group->isPublicMembership() || $group->canEdit()) {
              $actions[$url] = 'groups:join';
              } else {
              // request membership
              $actions[$url] = 'groups:joinrequest';
              }
             */
        } else {
            // request membership
            $actions[$url] = 'groups:joinrequest';
        }
    }

    if ($actions) {
        foreach ($actions as $url => $text) {
            elgg_register_menu_item('title', array(
                'name' => $text,
                'href' => $url,
                'text' => elgg_echo($text),
                'link_class' => 'elgg-button elgg-button-action',
            ));
        }
    }
}

/**
 * Prepares variables for the group edit form view.
 *
 * @param mixed $group ElggGroup or null. If a group, uses values from the group.
 * @return array
 */
function groups_prepare_form_vars($group = null) {
    $values = array(
        'name' => '',
        'membership' => ACCESS_PUBLIC,
        'vis' => ACCESS_PUBLIC,
        'guid' => null,
        'entity' => null
    );

    // handle customizable profile fields
    $fields = elgg_get_config('group');

    if ($fields) {
        foreach ($fields as $name => $type) {
            $values[$name] = '';
        }
    }

    // handle tool options
    $tools = elgg_get_config('group_tool_options');
    if ($tools) {
        foreach ($tools as $group_option) {
            $option_name = $group_option->name . "_enable";
            $values[$option_name] = $group_option->default_on ? 'yes' : 'no';
        }
    }

    // get current group settings
    if ($group) {
        foreach (array_keys($values) as $field) {
            if (isset($group->$field)) {
                $values[$field] = $group->$field;
            }
        }

        if ($group->access_id != ACCESS_PUBLIC && $group->access_id != ACCESS_LOGGED_IN) {
            // group only access - this is done to handle access not created when group is created
            $values['vis'] = ACCESS_PRIVATE;
        }

        $values['entity'] = $group;
    }

    // get any sticky form settings
    if (elgg_is_sticky_form('groups')) {
        $sticky_values = elgg_get_sticky_values('groups');
        foreach ($sticky_values as $key => $value) {
            $values[$key] = $value;
        }
    }

    elgg_clear_sticky_form('groups');

    return $values;
}

/**
 * Prepare the manage form variables
 *
 * @param array $candidates Candidate entities
 * @return array guids => 'name - username'
 */
function invite_prepare_combo_vars($candidates) {
    $values = array('' => elgg_echo('group_roles:selectone'));
    foreach ($candidates as $candidate) {
        $values[$candidate->guid] = $candidate->name . " - " . $candidate->username;
    }
    return $values;
}
