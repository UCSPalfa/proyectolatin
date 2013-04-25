<?php
/**
 * Elgg default annotation view
 *
 * @note To add or remove from the annotation menu, register handlers for the menu:annotation hook.
 *
 * @uses $vars['annotation']
 */

$annotation = $vars['annotation'];

$owner = get_entity($annotation->owner_guid);
if (!$owner) {
	return true;
}
$icon = elgg_view_entity_icon($owner, 'small');
$owner_link = "<a href=\"{$owner->getURL()}\">$owner->name</a>";

$menu = elgg_view_menu('annotation', array(
	'annotation' => $annotation,
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz float-alt',
));

$text = elgg_view("output/longtext", array("value" => $annotation->value));


$author = elgg_view('output/url', array(
		'text' => $owner->name,
		//    'href' => $owner->getURL(),
		'class' => 'hj-comments-item-comment-owner'
));

$comment = elgg_view('output/text', array(
		'value' => $annotation->value
));

$comment = elgg_echo('hj:alive:comments:commentcontent', array($owner_link, $comment));




$friendlytime = elgg_view_friendly_time($annotation->time_created);

$body = <<<HTML
<div class="mbn">
	$comment
	<div style="padding-top:5px;">
	<span class="elgg-subtext">
		$friendlytime
	</span>
					<div style="float:right">

	
	</div>
	</div>

	
	     
	

	
</div>
HTML;

//echo elgg_view_image_block($icon, $body);

$content = <<<HTML
    <div class="bubble-left">
       $body
    </div><br/>

HTML;
$comment = <<<HTML2
<div class="elgg-image-block clearfix">
<div style="float:left;vertical-align: middle;">$icon</div>
<div class="elgg-body">$content</div>
</div>
HTML2;


echo $comment;
