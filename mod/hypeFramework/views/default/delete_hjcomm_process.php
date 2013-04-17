<?php
/*AO: Abril 13, procesa borrado de hjannotation. Solo puedo borrar los comentarios del que soy autor ya sea en mi muro, el muro de otro usuario o de un grupo*/

if (elgg_is_xhr()){

	// Get input data - hjannotation id
	$guid = (int) get_input('guid');
	$entity = get_entity($guid);


	// Make sure we actually have permission to edit

	if($entity->getSubtype() == "hjannotation" && $entity->canEdit()){
		if ($entity->delete()) {
			// Success
			echo json_encode(array('success'=> true, 'msg' => elgg_echo("hj:framework:deleted")));
		}else{
			// Fail
			echo json_encode(array('success'=> false, 'msg' => elgg_echo("hj:framework:notdeleted")));
		}
	}else{
		// Fail
		echo json_encode(array('success'=> false, 'msg' => elgg_echo("hj:framework:notdeleted")));
	}
}
