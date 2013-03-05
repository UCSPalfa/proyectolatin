<?php
/**
 * Group operators helper functions
 *
 * @package ElggGroupOperators
 */


/**
 * Gives the list of the operators of a group
 *
 * @param ElggGroup $group
 * @return array
 */
function get_group_roles($group){
	if($group instanceof ElggGroup){
		$members_roles = elgg_get_entities_from_relationship(
			array('types'=>'user', 'limit'=>0, 'relationship_guid'=>$group->guid, 'relationship'=>'member', 'inverse_relationship'=>true));
		$group_owner = get_entity($group->getOwnerGUID());

		if(!in_array($group_owner, $members_roles)){
			$members_roles[$group_owner->guid] = $group_owner;
		}
		return $members_roles;
	}
	else {
		return null;
	}
}

function elgg_view_group_roles_list($group){
	$operators = get_group_roles($group);
	$html = '<ul class="elgg-list">';
	foreach($operators as $operator){
		$html .= '<li class="elgg-item">';
		$html .= elgg_view('group_roles/display', array(
			'entity' => $operator,
			'group' => $group
		));
		$html .= '</li>';
	}
	$html .= '</ul>';
	return $html;
}

/**
 * Prepare the manage form variables
 *
 * @param ElggGroup $group
 * @return array
 */
function group_roles_prepare_form_vars($group) {
	$parent = au_subgroups_get_parent_group($group);
	$com_members = $parent->getMembers(0);
	$members = get_group_roles($group);
	$no_members = array_obj_diff($com_members, $members);

	// input names => defaults
	$values = array(
		'entity' => $group,
		'candidates' => $no_members
	);

	return $values;
}

/**
 * Prepare the manage form variables
 *
 * @param array $candidates Candidate entities
 * @return array guids => 'name - username'
 */
function group_roles_prepare_combo_vars($candidates) {
	$values = array('' => elgg_echo('group_roles:selectone'));
	foreach($candidates as $candidate){
		$values[$candidate->guid] = $candidate->name." - ".$candidate->username;
	}
	return $values;
}

/**
 * array_diff doesn't work with arrays of objects because it compares the
 * string-represantation of the arguments (which is always "Object" for an object).
 */
function array_obj_diff ($array1, $array2) {
   
    foreach ($array1 as $key => $value) {
        $array1[$key] = serialize ($value);
    }

    foreach ($array2 as $key => $value) {
        $array2[$key] = serialize ($value);
    }
   
    $array_diff = array_diff ($array1, $array2);
   
    foreach ($array_diff as $key => $value) {
        $array_diff[$key] = unserialize ($value);
    }
   
    return $array_diff;
}
