<?php
/**
 * Compose message form
 *
 * @package ElggMessages
 * @uses $vars['friends']
 */
elgg_load_js('JSMultiSelect');
elgg_load_js('autosuggest');
elgg_load_js('autosuggest1');
elgg_load_js('autosuggest2');

$recipient_guid = elgg_extract('recipient_guid', $vars, 0);
$user = null;
if ($recipient_guid){
	$user = get_entity($recipient_guid);
}
$subject = elgg_extract('subject', $vars, '');
$body = elgg_extract('body', $vars, '');
$site_members = elgg_get_site_entity()->getMembers(0);
$recipients_options = array();
$data =array();
//foreach ($vars['friends'] as $friend) {
foreach ($site_members as $friend) {
	$recipients_options[$friend->guid] = $friend->name;
	$json['value'] = $friend->guid;
	$json['name'] = $friend->name;
	$data[] = $json;
}

if (!array_key_exists($recipient_guid, $recipients_options)) {
	$recipient = get_entity($recipient_guid);
	if (elgg_instanceof($recipient, 'user')) {
		$recipients_options[$recipient_guid] = $recipient->name;

	}
}



$recipient_drop_down = elgg_view('input/dropdown', array(
		'name' => 'recipient_guid',
		'value' => $recipient_guid,
		'options_values' => $recipients_options,
));

?>


<div>
	<label><?php echo elgg_echo("messages:to"); ?>: </label> <input
		id="recipient_guid" size="20" type="text" />
	<script type="text/javascript">
		var data = {items: 
		
		<?php 
		echo json_encode($data);
		?>
		
		};
		<?php 
		if (!is_null($user)){

			$user_to['value'] = $user->guid;
			$user_to['name'] = $user->name;
		?>
		 var selectedData = {items:[ <?php 
					echo json_encode($user_to);
			?>
			]
			};
		 <?php 
			}
		 	else{
		 ?>
		 var selectedData =  {items:[]};
		 <?php 
			}  ?>
		$("input#recipient_guid").autoSuggest(data.items, {
			<?php echo "emptyText:\"". elgg_echo("notfound")."\",";?>
			selectedItemProp: "name", selectedValuesProp: "value", searchObjProps: "name", startText: "", preFill: selectedData.items, keyDelay: 50, minChars: 1,asHtmlID:"rcpt"});

		
		</script>


	<?php //echo $recipient_drop_down; ?>
</div>
<div>
	<label><?php echo elgg_echo("messages:title"); ?>: <br /> </label>
	<?php echo elgg_view('input/text', array(
			'name' => 'subject',
			'value' => $subject,
	));
	?>
</div>
<div>
	<label><?php echo elgg_echo("messages:message"); ?>:</label>
	<?php echo elgg_view("input/longtext", array(
			'name' => 'body',
			'value' => $body,
	));
	?>
</div>
<div class="elgg-foot">
	<?php echo elgg_view('input/submit', array('value' => elgg_echo('messages:send'))); ?>
</div>
