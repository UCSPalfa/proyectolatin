<?php
/**
 * Elgg group operators manage form
 *
 * @package ElggGroupOperators
 */

$group_guid = elgg_extract('entity', $vars)->guid;
$candidates = elgg_extract('candidates', $vars);

if(!empty($candidates)){ 
	$body .= '<label for="who">'.elgg_echo('group_roles:new').'</label><br />';
	$body .= elgg_view('input/combobox', array('name'=>'who','id'=>'who', 'options_values'=>group_roles_prepare_combo_vars($candidates),
							'style'=>'display:inline', 'title'=>elgg_echo('group_roles:new:instructions')));
	$body .= elgg_view('input/submit',array('value'=>elgg_echo('group_roles:new:button')));
	$body .= '<div class="elgg-footer">'.elgg_view('input/hidden', array('name'=>'mygroup', 'value'=>$group_guid)).'</div>';
	echo $body;
}
?>
