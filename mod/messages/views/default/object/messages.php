<?php
/**
 * File renderer.
 *
 * @package ElggFile
 */

$full = elgg_extract('full_view', $vars, false);
$message = elgg_extract('entity', $vars, false);


if (!$message) {
	return true;
}

if ($message->toId == elgg_get_page_owner_guid()) {
	$detail_label =elgg_echo("messages:from");
	// received
	$user = get_entity($message->fromId);
	if ($user) {
		$icon = elgg_view_entity_icon($user, 'small');
		$user_link = elgg_view('output/url', array(
			'href' => "messages/compose?send_to=$user->guid",
			'text' => $user->name,
			'is_trusted' => true,
		));
	} else {
		$icon = '';
		$user_link = elgg_echo('messages:deleted_sender');
	}

	if ($message->readYet) {
		$class = 'message read';
		$class_row = "message-read";
	} else {
		$class = 'message unread';
		$class_row = "message-unread";
	}

} else {
	// sent
	$detail_label =elgg_echo("messages:to");
	$user = get_entity($message->toId);

	if ($user) {
		$icon = elgg_view_entity_icon($user, 'tiny');
		$user_link = elgg_view('output/url', array(
			'href' => "messages/compose?send_to=$user->guid",
			'text' => $user->name,
			'is_trusted' => true,
		));
	} else {
		$icon = '';
		$user_link = elgg_echo('messages:deleted_sender');
	}

	$class = 'message read';
}

$timestamp = elgg_view_friendly_time($message->time_created);

$subject_info = '';
$check ="";
if (!$full) {
	$check = "<input type='checkbox' name=\"message_id[]\" value=\"{$message->guid}\" />";
}
$subject_info .= elgg_view('output/url', array(
	'href' => $message->getURL(),
	'text' => $message->title,
	'is_trusted' => true,
));

$delete_link = elgg_view("output/confirmlink", array(
						'href' => "action/messages/delete?guid=" . $message->getGUID(),
						'text' => "<span class=\"elgg-icon elgg-icon-delete float-alt\"></span>",
						'confirm' => elgg_echo('deleteconfirm'),
						'encode_text' => false,
					));
/*
$body = <<<HTML
<div class="messages-check" >$check</div>
<div class="messages-owner">$user_link</div>
<div class="messages-subject">$subject_info</div>
<div class="messages-timestamp">$timestamp</div>
<div class="messages-delete">$delete_link</div>
HTML;
*/
$body = <<<HTML
<tr class="$class_row">
<td class="messages-check" >$check</td>
<td class="messages-owner">$user_link</td>
<td class="messages-subject">$subject_info</td>
<td class="messages-timestamp">$timestamp</td>
<td class="messages-delete">$delete_link</td>
</tr>
HTML;

$icon_small = elgg_view_entity_icon($user, 'small');
if ($full) {
	//mostrar el detalle del mensaje
	echo "<table width='100%' class='message-header-details'><tr >";
	echo "<td>";
	echo "<table width='100%'>";
	echo "<tr>";
	echo "<td width='8%' align='center'>$icon_small</td>";
	echo "<td>";
	echo "<table  width='100%'>";
	echo "<tr><td width='15%' style='text-align:right'>".elgg_echo("messages:title").":</td><td width='3%'><td> <b>$message->title </b> </td></tr>";
	echo "<tr><td width='15%' style='text-align:right'>".$detail_label.":</td><td width='3%'><td> $user_link</td></tr>";
	echo "<tr><td width='15%' style='text-align:right'>".elgg_echo("messages:date").":</td><td width='3%'><td> ".date("Y-m-d H:i:s",$message->time_created ) ."</td></tr>";
	echo "<tr>";
	echo "</table>";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
	echo "</td>";
	echo "</tr>";
	echo "<tr class='message-read'><td><br></br></td></tr>";
	echo "<tr class='message-read'><td>";
	echo elgg_view('output/longtext', array('value' => $message->description));
	echo "</td></tr>";
	echo "</table>";
} else {
	//echo $body;
	echo elgg_view_image_block("", $body, array('class' => $class));
	//echo elgg_view_image_block("", $body, array());
}