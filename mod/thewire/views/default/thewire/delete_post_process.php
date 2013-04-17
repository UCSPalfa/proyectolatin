<?php
/*AO: Abril 8, procesa borrado de mi post en mi wire*/

if (elgg_is_xhr()){

	// Get input data - post id
	$guid = (int) get_input('guid');

	// Make sure we actually have permission to edit
	$thewire = get_entity($guid);
	if ($thewire->getSubtype() == "thewire" && $thewire->canEdit()) {
	        $rowsaffected = $thewire->delete();
		if ($rowsaffected > 0) {
			// Success
			echo json_encode(array('success'=> true, 'msg' => elgg_echo("thewire:deleted")));
		}else{
			// Fail
			echo json_encode(array('success'=> false, 'msg' => elgg_echo("thewire:notdeleted")));
		}
	}
}
