<?php
/*AO: Abril 17, procesa el borrado de annotations*/
/*Puedo eliminar mis annotations en muro de otro usuario o grupo o eliminar annotations de otros en mi muro*/

if (elgg_is_xhr()){

	// Get input data - annotation id
	$annotation_id = (int) get_input('annotation_id');
	$message = elgg_get_annotation_from_id($annotation_id);

	// Make sure we actually have permission to edit

	if ($message && $message->canEdit() && $message->delete()){
		// Success
		echo json_encode(array('success'=> true, 'msg' => elgg_echo("river:annotation:deleted")));
	}else{
		// Fail
		echo json_encode(array('success'=> false, 'msg' => elgg_echo("river:annotation:notdeleted")));
	}
}
