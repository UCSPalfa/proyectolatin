<?php
/**
 * Object summary
 *
 * Sample output
 * <ul class="elgg-menu elgg-menu-entity"><li>Public</li><li>Like this</li></ul>
 * <h3><a href="">Title</a></h3>
 * <p class="elgg-subtext">Posted 3 hours ago by George</p>
 * <p class="elgg-tags"><a href="">one</a>, <a href="">two</a></p>
 * <div class="elgg-content">Excerpt text</div>
 *
 * @uses $vars['entity']    ElggEntity
 * @uses $vars['title']     Title link (optional) false = no title, '' = default
 * @uses $vars['metadata']  HTML for entity menu and metadata (optional)
 * @uses $vars['subtitle']  HTML for the subtitle (optional)
 * @uses $vars['tags']      HTML for the tags (default is tags on entity, pass false for no tags)
 * @uses $vars['content']   HTML for the entity content (optional)
 */

$entity = $vars['entity'];

$title_link = elgg_extract('title', $vars, '');
if ($title_link === '') {
	if (isset($entity->title)) {
		$text = $entity->title;
	} else {
		$text = $entity->name;
	}
	$params = array(
		'text' => $text,
		'href' => $entity->getURL(),
		'is_trusted' => true,
		'class' => "title_link",
	);
	$title_link = elgg_view('output/url', $params);
}

$metadata = elgg_extract('metadata', $vars, '');
$subtitle = elgg_extract('subtitle', $vars, '');
$content = elgg_extract('content', $vars, '');

$tags = elgg_extract('tags', $vars, '');
if ($tags === '') {
	$tags = elgg_view('output/tags', array('tags' => $entity->tags));
}

if ($metadata) {
	echo $metadata;
}
if ($title_link) {
	echo "<h3>$title_link</h3>";
}
if ($content) {
	echo "<div class=\"elgg-content space_top\">$content</div>";
}
$num_replies = elgg_get_annotations(array(
		'annotation_name' => 'group_topic_post',
		'guid' => $entity->getGUID(),
		'count' => true,
));
$replies_link ="";
if ($num_replies>0){
		$replies_link = elgg_view('output/url', array(
		'href' => $entity->getURL() . '#group-replies',
		'text' => elgg_echo('group:all:replies') . " ($num_replies)",
		'is_trusted' => true,
	));
}

echo "<div class=\"elgg-subtext\">$subtitle  <div style= \"float:right\">$replies_link</div></div>";

//get 3 first comments


elgg_load_js('JTabContent');
$first_replies = $entity->getAnnotations('group_topic_post', 3, 0, 'asc');
/*$first_replies = elgg_get_annotations(array(
 'annotation_name' => 'group_topic_post',
		'guid' => $topic->getGUID(),
		'count' => false,
));*/
//print_r($first_replies);owner_guid
$lastu=null;
$topic_id = $entity->getGUID();
echo "<ul id=\"commentsTopic$topic_id\" class=\"shadetabs\">";
$maxidx = count($first_replies);

if ($maxidx>0){
foreach ($first_replies as $idx => $infoComment){
	$poster = $infoComment->getOwnerEntity();
//$widget = get_entity($widget_guid);
$poster_icon = elgg_view_entity_icon($poster, 'tiny');
$iconurl= $poster->getIconURL('tiny');
$comment_id=$topic_id.$infoComment->id;
$selected="";

if ($idx == $maxidx-1 ) $selected="class=\"selected\"";
echo <<<tab
<li><a href="#" rel="comment$comment_id" $selected ><img class="img_bordered" src="$iconurl"></a></li>
tab;
}

echo <<<commentsini
</ul>

<div style="width:90%; margin-bottom: 1em;padding: 10px 0 0 0">
commentsini;

foreach ($first_replies as $idx => $infoComment){
	$poster = $infoComment->getOwnerEntity();
	$author = elgg_view('output/url', array(
			'text' => $poster->name,
			 'href' => $poster->getURL(),
			'class' => 'hj-comments-item-comment-owner'
	));
	
	$comment_id=$topic_id.$infoComment->id;
	$profile_link= $poster->getUrl();
	$date_comment = elgg_view_friendly_time($infoComment->time_created);
	$comment_value = elgg_get_excerpt($infoComment->value,150);
	echo <<<tab
<div id="comment$comment_id" class="speech-comment">
<div style="float:left;padding-right:5px;">$author</div>
<div style="float:left;padding-right:5px;" class="elgg-subtext">$date_comment </div>-
$comment_value
		

</div>
tab;
}


echo "</div>";


echo <<<jscommentsinit

<script type="text/javascript">



var comments$topic_id=new ddtabcontent("commentsTopic$topic_id")
comments$topic_id.setpersist(true)
comments$topic_id.setselectedClassTarget("link") //"link" or "linkparent"
comments$topic_id.init()

</script>
jscommentsinit;

}
//echo elgg_view('object/summary/extend', $vars);

