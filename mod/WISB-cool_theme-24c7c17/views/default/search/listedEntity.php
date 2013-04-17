<?php

/**
 * Default view for an entity returned in a search
 *
 * Display largely controlled by a set of overrideable volatile data:
 *   - search_icon (defaults to entity icon)
 *   - search_matched_title 
 *   - search_matched_description
 *   - search_matched_extra
 *   - search_url (defaults to entity->getURL())
 *   - search_time (defaults to entity->time_updated or entity->time_created)
 *
 * @uses $vars['entity'] Entity returned in a search
 */
$entity = $vars['entity'];

$type = $entity->getType();
$subtype = $vars['params']['subtype'];




if ($type == 'user') {

    echo elgg_view('search/liveFoundUser', array('entity' => $entity));
    
} else if ($type == 'group') {

    if (isSubgroup($entity)) {

        echo elgg_view('search/liveFoundWritingGroup', array('entity' => $entity));
        
    } else {

        echo elgg_view('search/liveFoundCommunity', array('entity' => $entity));
    }
    
} else if ($type == 'object') {

    if ($subtype == 'file') {

        echo elgg_view('search/liveFoundFile', array('entity' => $entity));
        
    } else if ($subtype == 'groupforumtopic') {

        echo elgg_view('search/liveFoundGroupForumTopic', array('entity' => $entity));
        
    } else if ($subtype == 'thewire') {

        echo elgg_view('search/liveFoundTheWire', array('entity' => $entity));
        
    } else if ($subtype == 'blog') {

        echo elgg_view('search/liveFoundBlog', array('entity' => $entity));
        
    } else if ($subtype == '') {

        // When the subtype is empty, this item is a comment
//        echo print_r($entity);
//
//        $icon = $entity->getVolatileData('search_icon');
//        if (!$icon) {
//            // display the entity's owner by default if available.
//            // @todo allow an option to switch to displaying the entity's icon instead.
//
//
//            if ($type == 'user' || $type == 'group') {
//                $icon = elgg_view_entity_icon($entity, 'medium');
//            } elseif ($owner = $entity->getOwnerEntity()) {
//                $icon = elgg_view_entity_icon($owner, 'small');
//            } else {
//                // display a generic icon if no owner, though there will probably be
//                // other problems if the owner can't be found.
//                $icon = elgg_view_entity($entity, 'small');
//            }
//        }
//
//        $title = $entity->getVolatileData('search_matched_title');
//        $description = $entity->getVolatileData('search_matched_description');
//        $extra_info = $entity->getVolatileData('search_matched_extra');
//        $url = $entity->getVolatileData('search_url');
//
//        if (!$url) {
//            $url = $entity->getURL();
//        }
//
//        $title = "<a href=\"$url\">$title</a>";
//        $time = $entity->getVolatileData('search_time');
//        if (!$time) {
//            $tc = $entity->time_created;
//            $tu = $entity->time_updated;
//            $time = elgg_view_friendly_time(($tu > $tc) ? $tu : $tc);
//        }
//
//        $body = "<p class=\"mbn\">$title</p>$description";
//        if ($extra_info) {
//            $body .= "<p class=\"elgg-subtext\">$extra_info</p>";
//        }
//        $body .= "<p class=\"elgg-subtext\">$time</p>";
//
//
//        echo elgg_view_image_block($icon, $body);

        echo elgg_view('search/liveFoundComment', array('entity' => $entity));
    }
} else {


//    echo "type: $type  subtype: $subtype";
//    echo elgg_view('search/defaultLiveFoundEntity', array('entity' => $entity));
//    echo "Esta es la vista que aparece en la búsqueda en vivo";
//    
//
//
//    $icon = $entity->getVolatileData('search_icon');
//    if (!$icon) {
//        // display the entity's owner by default if available.
//        // @todo allow an option to switch to displaying the entity's icon instead.
//
//
//        if ($type == 'user' || $type == 'group') {
//            $icon = elgg_view_entity_icon($entity, 'medium');
//        } elseif ($owner = $entity->getOwnerEntity()) {
//            $icon = elgg_view_entity_icon($owner, 'small');
//        } else {
//            // display a generic icon if no owner, though there will probably be
//            // other problems if the owner can't be found.
//            $icon = elgg_view_entity($entity, 'small');
//        }
//    }
//
//    $title = $entity->getVolatileData('search_matched_title');
//    $description = $entity->getVolatileData('search_matched_description');
//    $extra_info = $entity->getVolatileData('search_matched_extra');
//    $url = $entity->getVolatileData('search_url');
//
//    if (!$url) {
//        $url = $entity->getURL();
//    }
//
//    $title = "<a href=\"$url\">$title</a>";
//    $time = $entity->getVolatileData('search_time');
//    if (!$time) {
//        $tc = $entity->time_created;
//        $tu = $entity->time_updated;
//        $time = elgg_view_friendly_time(($tu > $tc) ? $tu : $tc);
//    }
//
//    $body = "<p class=\"mbn\">$title</p>$description";
//    if ($extra_info) {
//        $body .= "<p class=\"elgg-subtext\">$extra_info</p>";
//    }
//    $body .= "<p class=\"elgg-subtext\">$time</p>";
//
//
//    echo elgg_view_image_block($icon, $body);
}



