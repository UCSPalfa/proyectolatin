<?php
/**
 * Forum topic entity view
 *
 * @package ElggGroups
*/

$full = elgg_extract('full_view', $vars, FALSE);
$topic = elgg_extract('entity', $vars, FALSE);

if (!$topic) {
	return true;
}
elgg_load_js('JTabContent');
$logged_user = elgg_get_logged_in_user_entity();
$poster = $topic->getOwnerEntity();
$group = $topic->getContainerEntity();
$excerpt = elgg_get_excerpt($topic->description);

$poster_icon = elgg_view_entity_icon($poster, 'small');
$poster_link = elgg_view('output/url', array(
	'href' => $poster->getURL(),
	'text' => $poster->name,
	'is_trusted' => true,
));
$poster_text = elgg_echo('groups:started', array($poster->name));

$tags = elgg_view('output/tags', array('tags' => $topic->tags));
$date = elgg_view_friendly_time($topic->time_created);

$replies_link = '';
$reply_text = '';
$num_replies = elgg_get_annotations(array(
	'annotation_name' => 'group_topic_post',
	'guid' => $topic->getGUID(),
	'count' => true,
));
if ($num_replies != 0) {
	$last_reply = $topic->getAnnotations('group_topic_post', 1, 0, 'desc');
	$poster = $last_reply[0]->getOwnerEntity();
	$reply_time = elgg_view_friendly_time($last_reply[0]->time_created);
	$reply_text = elgg_echo('groups:updated', array($poster->name, $reply_time));
	
	$replies_link = elgg_view('output/url', array(
		'href' => $topic->getURL() . '#group-replies',
		'text' => elgg_echo('group:replies') . " ($num_replies)",
		'is_trusted' => true,
	));
}

$metadata = elgg_view_menu('entity', array(
	'entity' => $vars['entity'],
	'handler' => 'discussion',
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz',
));
$access = elgg_view('output/access', array('entity' => $vars['entity']));
// do not show the metadata and controls in widget view
if (elgg_in_context('widgets')) {
	$metadata = '';
}
if (!$group->isMember($logged_user)){
	$metadata = <<<METAD
	<ul class="elgg-menu elgg-menu-entity elgg-menu-hz elgg-menu-entity-default"><li class="elgg-menu-item-access">$access</li></ul>
METAD;
}
if ($full) {
	$subtitle = "$poster_text $date $replies_link";
	$subtitle = "<div style='margin-top:4px;'>$poster_text $date</div>";
	$params = array(
		'entity' => $topic,
		'metadata' => $metadata,
		'subtitle' => $subtitle,
		'tags' => $tags,
		'title_class' => "title_link",
	);
	$params = $params + $vars;
	$list_body = elgg_view('object/elements/summary', $params);
	
	$message= elgg_view('output/longtext', array('value' => $topic->description));
	$message .=  "<div class=\"elgg-subtext\">$subtitle</div>";
	//$info = elgg_view_image_block($poster_icon, $list_body);
	$info = elgg_view_image_block($poster_icon, $list_body."<br/>".$message);
	echo "<div style='width:90%'>";
	echo $info;
	echo "</div>";
} else {
	// brief view
	$metadata_name="menu_topic_".$topic->getGUID();
	$metadata = "<div id='$metadata_name' style='display:none'>$metadata</div>";
	$subtitle = "$poster_text $date $replies_link <span class=\"groups-latest-reply\">$reply_text</span>";
	$subtitle = "<div style='margin-top:4px;'>$poster_text $date</div>";
	$params = array(
		'entity' => $topic,
		'metadata' => $metadata,
		'subtitle' => $subtitle,
		'tags' => $tags,
		'content' => $excerpt,
	);
	$params = $params + $vars;

	$list_body = elgg_view('object/elements/topic', $params);

	echo "<div onmouseover=\"show_element('$metadata_name');\"  onmouseout=\"hide_element('$metadata_name');\" style='width:85%'>";
	echo elgg_view_image_block($poster_icon, $list_body);
	echo "</div>";
}