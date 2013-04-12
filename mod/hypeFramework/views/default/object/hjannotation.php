<?php

$entity = elgg_extract('entity', $vars, false);

if (!$entity) {
    return true;
}

$owner = get_entity($entity->owner_guid);

if (!elgg_instanceof($owner)) {
    return true;
}

$view = "object/hjannotation/$entity->annotation_name";
if (elgg_view_exists($view)) {
    echo elgg_view($view, $vars);
    return true;
}

$menu = elgg_view_menu('commentshead', array(
    'entity' => $entity,
    'handler' => $handler,
    'class' => 'elgg-menu-entity elgg-menu-hz',
    'sort_by' => 'priority',
    'params' => $params
	));
$icon = elgg_view_entity_icon($owner, 'small', array('use_hover' => false));

$author = elgg_view('output/url', array(
    'text' => $owner->name,
//    'href' => $owner->getURL(),
    'class' => 'hj-comments-item-comment-owner'
	));

$comment = elgg_view('output/text', array(
    'value' => $entity->annotation_value
	));

$comment = elgg_echo('hj:alive:comments:commentcontent', array($author, $comment));

$bar = elgg_view('hj/comments/bar', $vars);
/*
$content = <<<HTML
    <div class="clearfix">
        $menu
        $comment
    </div>
    $bar
HTML;

echo elgg_view_image_block($icon, $content);*/


$content = <<<HTML


    <div class="bubble-left">
        $menu
        $comment
        <div style="padding-top:5px;">
        $bar
    
        </div>
    </div><br/>

HTML;
$comment = <<<HTML2
<div class="elgg-image-block clearfix">
<div style="float:left;vertical-align: middle;">$icon</div>
<div class="elgg-body">$content</div>
</div>
HTML2;


echo $comment;