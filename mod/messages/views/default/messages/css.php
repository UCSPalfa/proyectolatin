<?php
/**
 * Elgg Messages CSS
 * 
 * @package ElggMessages
 */
?>

.messages-container {
	min-height: 200px;
	vertical-align: middle;
}
.message.unread a {
	color: #d40005;
}
.messages-buttonbank {
	text-align: right;
}
.messages-buttonbank input {
	margin-left: 10px;
}

/*** message metadata ***/
.messages-check {
	margin-right: 2%;
    vertical-align: middle;
}
.messages-owner {
	font-weight:inherit;
	width: 20%;
	margin-right: 2%;
    vertical-align: middle;
}
.messages-subject {
 	font-weight:inherit;
	width: 55%;
	margin-right: 2%;
	vertical-align: middle;
}
.messages-timestamp {
	font-weight:inherit;
	width: 14%;
	margin-right: 2%;
    vertical-align: middle;
}
.messages-delete {

	width: 5%;
	vertical-align: middle;
}
/*** topbar icon ***/
.messages-new {
	color: white;
	background-color: #277fcf;
	
	-webkit-border-radius: 10px; 
	-moz-border-radius: 10px;
	border-radius: 10px;
	
	-webkit-box-shadow: -2px 2px 4px rgba(0, 0, 0, 0.50);
	-moz-box-shadow: -2px 2px 4px rgba(0, 0, 0, 0.50);
	box-shadow: -2px 2px 4px rgba(0, 0, 0, 0.50);
	
	position: absolute;
	text-align: center;
	top: 0px;
	left: 26px;
	min-width: 16px;
	height: 14px;
	font-size: 10px;
	font-weight: bold;
}

.message-header-details {
	background-color: #D8D8D8;
}

.message-unread {
	background-color: #DEDEDE;
    height: 25px;
    vertical-align: middle;
   font-weight:bold;

}

.message-read {
	background-color: #FAFAFA;
    height: 25px;
    vertical-align: middle;
}
