<?php

/**
 * List a section of search results corresponding in a particular type/subtype
 * or search type (comments for example)
 *
 * @uses $vars['results'] Array of data related to search results including:
 *                          - 'entities' Array of entities to be displayed
 *                          - 'count'    Total number of results
 * @uses $vars['params']  Array of parameters including:
 *                          - 'type'        Entity type
 *                          - 'subtype'     Entity subtype
 *                          - 'search_type' Type of search: 'entities', 'comments', 'tags'
 *                          - 'offset'      Offset in search results
 *                          - 'limit'       Number of results per page
 *                          - 'pagination'  Display pagination?
 */
$entities = $vars['results']['entities'];
$count = $vars['results']['count'] - count($entities);

if (!is_array($entities) || !count($entities)) {
    return FALSE;
}

$query = http_build_query(
        array(
            'q' => $vars['params']['query'],
            'entity_type' => $vars['params']['type'],
            'entity_subtype' => $vars['params']['subtype'],
            'limit' => $vars['params']['limit'],
            'offset' => $vars['params']['offset'],
            'search_type' => $vars['params']['search_type'],
        //@todo include vars for sorting, order, and friend-only.
        )
);

$url = elgg_get_site_url() . "search?$query";

// figure out what we're dealing with.
$type_str = NULL;

if (array_key_exists('type', $vars['params']) && array_key_exists('subtype', $vars['params'])) {
    $type_str_tmp = "item:{$vars['params']['type']}:{$vars['params']['subtype']}";
    $type_str_echoed = elgg_echo($type_str_tmp);
    if ($type_str_echoed != $type_str_tmp) {
        $type_str = $type_str_echoed;
    }
}


if (!$type_str && array_key_exists('type', $vars['params'])) {
    $type_str = elgg_echo("item:{$vars['params']['type']}");
}

if (!$type_str) {
    $type_str = elgg_echo('search:unknown_entity');
}

// allow overrides for titles
$search_type_str = elgg_echo("search_types:{$vars['params']['search_type']}");
if (array_key_exists('search_type', $vars['params']) && $search_type_str != "search_types:{$vars['params']['search_type']}") {

    $type_str = $search_type_str;
}

if ($type_str == elgg_echo('item:group')) {
    $type_str = elgg_echo("communities:and:writing:groups");
} 

if ($search_type_str != "Comments") {

    // get any more links.
$more_check = $vars['results']['count'] - ($vars['params']['offset'] + $vars['params']['limit']);
$more = ($more_check > 0) ? $more_check : 0;

if ($more) {
    $title_key = ($more == 1) ? 'comment' : 'comments';
    $more_str = elgg_echo('search:more', array($count, $type_str));
    $more_url = elgg_http_remove_url_query_element($url, 'limit');
    $more_link = "<li class='elgg-item' style='font-weight: bold; margin-left: 5px;' ><a style='color: #0054A7;' href=\"$more_url\">$more_str</a></li>";
} else {
    $more_link = '';
}

$title = $type_str;

// Modification by Gonzalo Gabriel: The listedEntity is a view that will show properly the entities found in the search
// while the user types

$view = 'search/listedEntity';

$body .= '<ul class="elgg-list livesearch-list">';
foreach ($entities as $entity) {
    $id = "elgg-{$entity->getType()}-{$entity->getGUID()}";
    $body .= "<li id=\"$id\" class=\"elgg-item\" style='border-bottom: none;' >";
    $body .= elgg_view($view, array(
        'entity' => $entity,
        'params' => $vars['params'],
        'results' => $vars['results']
    ));
    $body .= '</li>';
}
$body .= $more_link;
$body .= '</ul>';


echo elgg_view_module('livesearch', $title, $body);

    
    
}

