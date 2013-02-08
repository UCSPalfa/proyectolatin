<?php
    $path = elgg_get_config('url') . 'mod/hypeFramework/graphics/vendors/colorpicker/';
?>
input.hj-color-picker {
width:auto;
}
.miniColors-trigger {
	height: 22px;
	width: 22px;
	background: url(<?php echo $path ?>trigger.png) center no-repeat;
	vertical-align: middle;
	margin: 0 .25em;
	display: inline-block;
	outline: none;
}

.miniColors-selector {
	position: absolute;
	width: 175px;
	height: 150px;
	background: #FFF;
	border: solid 1px #BBB;
	-moz-box-shadow: 0 0 6px rgba(0, 0, 0, .25);
	-webkit-box-shadow: 0 0 6px rgba(0, 0, 0, .25);
	box-shadow: 0 0 6px rgba(0, 0, 0, .25);
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	padding: 5px;
	z-index: 999999;
}

.miniColors-selector.black {
	background: #000;
	border-color: #000;
}

.miniColors-colors {
	position: absolute;
	top: 5px;
	left: 5px;
	width: 150px;
	height: 150px;
	background: url(<?php echo $path ?>gradient.png) center no-repeat;
	cursor: crosshair;
}

.miniColors-hues {
	position: absolute;
	top: 5px;
	left: 160px;
	width: 20px;
	height: 150px;
	background: url(<?php echo $path ?>rainbow.png) center no-repeat;
	cursor: crosshair;
}

.miniColors-colorPicker {
	position: absolute;
	width: 11px;
	height: 11px;
	background: url(<?php echo $path ?>circle.gif) center no-repeat;
}

.miniColors-huePicker {
	position: absolute;
	left: -3px;
	width: 26px;
	height: 3px;
        background: url(<?php echo $path ?>line.gif) center no-repeat;
}