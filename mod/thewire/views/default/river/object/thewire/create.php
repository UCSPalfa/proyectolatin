<?php
/**
 * File river view.
 */

elgg_load_js('elgg.deletepost');
elgg_extend_view('js/elgg', 'js/delete-post');

$object = $vars['item']->getObjectEntity();
$excerpt = strip_tags($object->description);
$excerpt = thewire_filter($excerpt);

$subject = $vars['item']->getSubjectEntity();
$subject_link = elgg_view('output/url', array(
	'href' => $subject->getURL(),
	'text' => $subject->name,
	'class' => 'elgg-river-subject',
	'is_trusted' => true,
));

$object_link = elgg_view('output/url', array(
	'href' => "thewire/owner/$subject->username",
	'text' => elgg_echo('thewire:wire'),
	'class' => 'elgg-river-object',
	'is_trusted' => true,
));

$summary = elgg_echo("river:create:object:thewire", array($subject_link, $object_link));

if($object->canEdit()){
        $id_comment = $vars['item']->object_guid;
/*AO: Abril 22, añadido title remove a botón de eliminar */
        $delete_button = "<a id='$id_comment' title='Remove' class='delete_button_post' style='color: #0054A7;' href='#'>" . elgg_view_icon('delete') . "</a>";
}else{
        $delete_button = "";
}

echo elgg_view('river/elements/layout', array(
	'item' => $vars['item'],
	'message' => $delete_button.$excerpt,
	'summary' => $summary,
));
