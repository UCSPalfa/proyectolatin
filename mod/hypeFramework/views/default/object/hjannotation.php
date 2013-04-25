<?php

/*AO: Abril 15, carga de js*/
elgg_load_js('elgg.deletehjcomm');
elgg_extend_view('js/elgg', 'js/delete-hjcomm');
$logged_user = elgg_get_logged_in_user_entity();
$entity = elgg_extract('entity', $vars, false);
if (elgg_get_context()=="discussion"){
$topic = get_entity($entity->container_guid);
$group = null;

if ($topic){
	$group = get_entity($topic->container_guid);
	
}
}
if (elgg_get_context()=="group_profile"){
	//get group id from request uri
	//echo $_SERVER['REQUEST_URI'];
	$data = explode("profile/",$_SERVER['REQUEST_URI']);
	if (isset($data[1])){
		$info = explode("/",$data[1]);
		//
		$group = get_entity($info[0]);
		
	}
	
}
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

/*AO: Abril 15, comentado para que no aparezca el menú delete en hjannotation*/
/*$menu = elgg_view_menu('commentshead', array(
    'entity' => $entity,
    'handler' => $handler,
    'class' => 'elgg-menu-entity elgg-menu-hz',
    'sort_by' => 'priority',
    'params' => $params
	));*/

$icon = elgg_view_entity_icon($owner, 'small', array('use_hover' => false));

/*$author = elgg_view('output/url', array(
    'text' => $owner->name,
//    'href' => $owner->getURL(),
    'class' => 'hj-comments-item-comment-owner'
	));*/

/* AO: Abril 13, un ouptput text ya que no se desea poner como link al nombre del autor*/
$author = elgg_view('output/text', array(
    'value' => $owner->name
));

$comment = elgg_view('output/text', array(
    'value' => $entity->annotation_value
	));

$comment = elgg_echo('hj:alive:comments:commentcontent', array($author, $comment));

$bar = elgg_view('hj/comments/bar', $vars);


$pageowner = elgg_get_page_owner_entity();
$canDelete =true;
if (elgg_get_context()=="discussion" || elgg_get_context()=="group_profile"){
	if ($group!=null && $group->isMember($logged_user)){
		 $canDelete =true;
	}else $canDelete =false;
}
//
//if($entity->canEdit() || ($pageowner->username == $_SESSION['user']->username && elgg_get_context()!="discussion")){
/* AO: Abril 13, delete para borrar mis comentarios en mi muro, muro de otro usuario o grupo. Solo puedo borrar los comentarios del que soy autor...*/
if($entity->canEdit()  && $canDelete){
        $id_hjcomment = $entity->guid;
/*AO: Abril 22, añadido title remove a botón de eliminar */
        $delete_comment = "<a id='$id_hjcomment' title='Remove' class='delete_hjcomm' style='color: #0054A7;' href='#'>" . elgg_view_icon('delete') . "</a>";
}else{
        $delete_comment = "";
}


$content = <<<HTML


    <div class="bubble-left">
<!--        $menu -->
        $delete_comment
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
