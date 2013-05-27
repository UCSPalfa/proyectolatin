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
	//GC: only notify when is a community not a writing group
	if (!au_subgroups_get_parent_group($entity)){
		//po5i: notificar a los moderadores
		$operators = get_group_operators($entity);
		foreach($operators as $op)
		{
			//GC:no se deberia notificar al moderador que está ejecutando la acción
			if ($op->guid != elgg_get_logged_in_user_entity()->guid){
				//GC:cambiar los mensajes usando los mensajes de idioma, agregado nuevos en au_subgroups!
				$recipient_guid = $op->guid;
				$subject = elgg_echo('groups:delete:subject:operator');
				$body = elgg_echo('groups:delete:body:operator',array($entity->name));
				$result = messages_send($subject, $body, $recipient_guid, 0);
			}
		}
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
	$subgroup = isSubgroup($entity);	//po5i
	if ($entity->delete()) {
		if($subgroup)
			system_message(elgg_echo('writing:group:deleted'));		//po5i
		else
			system_message(elgg_echo('group:deleted'));
	} else {
		register_error(elgg_echo('group:notdeleted'));
	}
	

} else {
	register_error(elgg_echo('group:notdeleted'));
}

$url_name = elgg_get_logged_in_user_entity()->username;
forward(elgg_get_site_url() . "groups/member/{$url_name}");
