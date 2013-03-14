<?php
function compare_member_id($a, $b) {

 	if ($a->guid == $b->guid){
 		return 0;
 	}elseif ($a->guid > $b->guid){
 		return 1;
 	}else{
 		return -1;
 	}

}
$group = $vars['group'];

$count_groups = elgg_get_entities(array(
		'type' => 'group',
		'count' => true,
		
));

$allgroups = elgg_get_entities(array(
		'type' => 'group',
		'limit' => $count_groups,
));



$options['type'] = 'group';
$options['relationship'] = 'related';
$options['relationship_guid'] = $group->guid;
$options['count'] = true;

$options['limit'] = elgg_get_entities_from_relationship($options);
unset($options['count']);
$related_groups = elgg_get_entities_from_relationship($options);


$group_list = array();
foreach ($allgroups as $egroup){
	if (! au_subgroups_get_parent_group($egroup)){
		//check if the group is not selected or is the group
		if ($egroup!= $group && !in_array($egroup,$related_groups))
			$group_list[] =$egroup;
	}
}



foreach ($group_list as $cgroup){
	$user_icon = elgg_view_entity_icon($cgroup, 'tiny');
	$response[] = array($cgroup->guid, $cgroup->name, $cgroup->name, $user_icon.$cgroup->name);
}
?>
<script type="text/javascript">
	window.addEvent('load', function(){
		// Autocomplete initialization
		var t4 = new TextboxList('othergroup', {unique: true, plugins: {autocomplete: {}}});
		var autocomplete = t4.plugins['autocomplete'];
		autocomplete.setValues(
<?php 

echo json_encode($response);
?>
);


});

</script>
<?php 
elgg_load_js('mootools');
elgg_load_js('GrowingInput');
elgg_load_js('JSTextboxList');
elgg_load_js('JSTextboxList.Autocomplete');


$title_to_invite = elgg_echo('au_subgroups:invitations:selecttoinvite');
echo '<br />';

echo "<b> ".elgg_echo('relatedgroups:add:label') ."</b>"; echo '<br />';
echo <<< HTML
	<table><tr><td>
		
	<input type="text" name="othergroup" value="" id="othergroup"/></td>
	<td>&nbsp;
HTML;
?>
<!-- 
<label class="relatedgroups-add-autocomplete" style="display:none">
 -->
 
<?php

//	echo elgg_echo('relatedgroups:add:label'); echo '<br />';
//	echo elgg_view('input/autocomplete', array('name' => 'othergroup', 'class' => 'mvm'));
?>
<!-- </label>
<label class="relatedgroups-add-url"> -->
<?php
	//echo elgg_echo('relatedgroups:addurl:label'); echo '<br />';
	//echo elgg_view('input/url', array('name' => 'othergroup_url', 'class' => 'mvm'));
?>
<!-- </label>  -->
<?php
	
	echo elgg_view('input/hidden', array(
		'name' => 'group',
		'value' => $vars['group']->guid));
	echo elgg_view('input/submit', array(
		'value' => elgg_echo('relatedgroups:add:button')));

	echo "</td></tr></table>";
	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';
?>

<a href="" class="relatedgroups-dontwork-link mlm" style="display:none">(<?php echo elgg_echo('relatedgroups:dontwork'); ?>)</a>

<script type="text/javascript">
$(function(){
	$('.relatedgroups-add-autocomplete').show();
	$('.relatedgroups-add-url').hide();
	$('.relatedgroups-dontwork-link').show().click(function(){
		$('.relatedgroups-add-autocomplete').hide();
		$('.relatedgroups-add-url').show();
		$(this).hide();
		return false;
	});
});
</script>
