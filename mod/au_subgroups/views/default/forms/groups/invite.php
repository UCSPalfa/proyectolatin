<?php
/**
 * Elgg groups invite form
 *
 * @package ElggGroups
 */


function compare_member_id($a, $b) {

 	if ($a->guid == $b->guid){
 		return 0;
 	}elseif ($a->guid > $b->guid){
 		return 1;
 	}else{
 		return -1;
 	}

}

$group = $vars['entity'];
$owner = $group->getOwnerEntity();
$forward_url = $group->getURL();
$friends = elgg_get_logged_in_user_entity()->getFriends('', 0);
$parent = au_subgroups_get_parent_group($group);
$site_members = elgg_get_site_entity()->getMembers(0);
$group_members = $group->getMembers(0);
//remove group members of the list of site members
$members = array_udiff($site_members,$group_members,'compare_member_id');

/*
$members = $group->getMembers(0);
$operators = get_group_operators($group);
$no_operators = array_obj_diff($members, $operators);

*/

$group_guid =  $group->guid;
//$candidates = elgg_extract('candidates', $vars);
$candidates = $members;

foreach ($candidates as $user){
	$response[] = array($user->guid, $user->name." - ".$user->username, null, $user->name." - ".$user->username);
}
?>
<script type="text/javascript">
	window.addEvent('load', function(){
		// Autocomplete initialization
		var t4 = new TextboxList('invite_list', {unique: true, plugins: {autocomplete: {}}});
		var autocomplete = t4.plugins['autocomplete'];
		autocomplete.setValues(
<?php 

echo json_encode($response);
?>
);


});

</script>
<?php 


//print_r($response);


if ($members) {
	$introduction = elgg_echo('invitefriends:introduction');
	//echo elgg_view('input/friendspicker', array('entities' => $members, 'name' => 'user_guid', 'highlight' => 'all'));
	//echo $body;
	elgg_load_js('mootools');
	elgg_load_js('GrowingInput');
	elgg_load_js('JSTextboxList');
	elgg_load_js('JSTextboxList.Autocomplete');
	$title_to_invite = elgg_echo('au_subgroups:invitations:selecttoinvite');
	
	echo <<< HTML
	<div>$title_to_invite</div>
		<div class="form_friends">
	<input type="text" name="invite_list" value="" id="invite_list" />
	</div>
	
	<div>
			<p class="note">Type the tag (one or more words) and press enter. Use left/right arrows, backspace, delete to navigate/remove boxes, and up/down/enter to navigate/add suggestions.</p>

HTML;
	echo '<div class="elgg-foot">';
	echo elgg_view('input/hidden', array('name' => 'forward_url', 'value' => $forward_url));
	echo elgg_view('input/hidden', array('name' => 'group_guid', 'value' => $group->guid));
	echo elgg_view('input/submit', array('value' => elgg_echo('invite')));
	echo '</div>';


} else {
	echo elgg_echo('groups:nofriendsatall');
}