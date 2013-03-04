<?php
/**
 * Delete a group
 */

/* ***************************************** */
//po5i: COPY
/**
 * Gives the list of the operators of a group
 *
 * @param ElggGroup $group
 * @return array
 */
function get_group_operators($group){
	if($group instanceof ElggGroup){
		$operators = elgg_get_entities_from_relationship(
			array('types'=>'user', 'limit'=>0, 'relationship_guid'=>$group->guid, 'relationship'=>'operator', 'inverse_relationship'=>true));
		$group_owner = get_entity($group->getOwnerGUID());

		if(!in_array($group_owner, $operators)){
			$operators[$group_owner->guid] = $group_owner;
		}
		return $operators;
	}
	else {
		return null;
	}
}
/* ***************************************** */
		
$guid = (int) get_input('guid');
if (!$guid) {
	// backward compatible
	elgg_deprecated_notice("Use 'guid' for group delete action", 1.8);
	$guid = (int)get_input('group_guid');
}
$entity = get_entity($guid);

if (!$entity->canEdit()) {
	register_error(elgg_echo('group:notdeleted'));
	forward(REFERER);
}

if (($entity) && ($entity instanceof ElggGroup)) {
	
	//po5i: notificar a los moderadores
	$operators = get_group_operators($entity);
	foreach($operators as $op)
	{
		$recipient_guid = $op->guid;
		$subject = "Notificación de eliminación de comunidad";
		$body = "He borrado la comunidad: ".$entity->name;
		$body .= "\nMensaje enviado a los moderadores automaticamente.";
		$result = messages_send($subject, $body, $recipient_guid, 0);
	}
	/////////////////////////////////////	

	// delete group icons
	$owner_guid = $entity->owner_guid;
	$prefix = "groups/" . $entity->guid;
	$imagenames = array('.jpg', 'tiny.jpg', 'small.jpg', 'medium.jpg', 'large.jpg');
	$img = new ElggFile();
	$img->owner_guid = $owner_guid;
	foreach ($imagenames as $name) {
		$img->setFilename($prefix . $name);
		$img->delete();
	}

	// delete group
	if ($entity->delete()) {
		system_message(elgg_echo('group:deleted'));
	} else {
		register_error(elgg_echo('group:notdeleted'));
	}

} else {
	register_error(elgg_echo('group:notdeleted'));
}

$url_name = elgg_get_logged_in_user_entity()->username;
forward(elgg_get_site_url() . "groups/member/{$url_name}");
