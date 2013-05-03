<?php 
/**
 * Fixes/tweaks
 */

$url = elgg_get_site_url();

?>
/* <style>
/*
.elgg-icon{vertical-align:middle;} dl,dt,dd{margin:0;padding:0;}.elgg-profile{display:block;}.elgg-profile > dt{float:left;width:120px;font-weight:700;color:#999;padding:10px 0;}.elgg-profile > dd{padding:10px 0 10px 120px;}.elgg-profile > dd ~ dd{border-top:1px solid #E9E9E9;}.elgg-profile > dd + dd{padding-left:0;margin-left:120px;} img{max-width:100%;}#groups-tools > .elgg-module{width:229px;}#facebook-topbar-logo{margin-top:-4px;font-size:20px;color:#FFF;text-shadow:0 0 1px #AAA;width:128px;text-align:center;}#facebook-header-logo a{color:#FFF;text-decoration:none;font-size:2.5em;}.elgg-form-small input,.elgg-form-small textarea{font-size:11px;}.elgg-image-block-small > .elgg-image{margin-right:5px;}.ui-tabs-hide{display:none;}.elgg-composer{border-top:1px solid #CCC;padding-top:6px;margin-top:7px;}.elgg-composer > h4{height:22px;display:inline-block;vertical-align:baseline;color:gray;}.elgg-composer > .ui-tabs-panel{margin-top:5px;border:1px solid #B4BBCD;padding:10px;}.messageboard-input{margin-bottom:5px;height:60px;}.elgg-attachment-description{margin-top:5px;}#thewire-form-composer #thewire-textarea{margin-top:0;}#facebook-header-login{bottom:25px;position:absolute;right:0;}#facebook-header-login label{color:#FFF;display:block;font-weight:400;padding:2px 2px 4px;}#facebook-header-login .elgg-foot > label{bottom:-16px;color:#98A9CA;cursor:pointer;left:0;position:absolute;}#facebook-header-login div{display:inline-block;margin-bottom:3px;padding-right:10px;}#facebook-header-login .elgg-input-text,#facebook-header-login .elgg-input-password{color:#000;font-size:11px;width:150px;border-color:#1D2A5B;margin:0;padding:3px 3px 4px;}#facebook-header-login .elgg-menu{position:absolute;margin-left:-160px;}#facebook-header-login .elgg-menu > li{display:inline-block;margin-right:10px;}#facebook-header-login .elgg-menu > li > a{color:#98A9CA;display:inline;}#facebook-header-login .elgg-menu > li > a:hover{text-decoration:underline;}#facebook-header-login .elgg-button-submit{position:relative;top:10px;} input[type=checkbox]{vertical-align:bottom;}.label-edit-head{  max-width: 490px;height: 100%;background-color: #eeeeee;background-repeat: repeat-x;background-image: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f5f5f5), color-stop(100%,#eeeeee));background-image: -webkit-linear-gradient(top, #f5f5f5 0%,#eeeeee 100%);background-image: -ms-linear-gradient(top, #f5f5f5 0%,#eeeeee 100%);background-image: -o-linear-gradient(top, #f5f5f5 0%,#eeeeee 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f5f5f5', endColorstr='#eeeeee',GradientType=0 );background-image: linear-gradient(top, #f5f5f5 0%,#eeeeee 100%);border: 1px solid #e5e5e5;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;margin-bottom: 5px;padding: 5px 8px;}
.ui-autocomplete{background-color: #FFF;border: 1px solid #555;max-width:450px;}
.elgg-autocomplete-item{border-top: 1px solid #E9E9E9;}
#facebook-topbar-logo{background: url(<?php echo $url; ?>_graphics/logo.png) 0 0 no-repeat; width: 115px; height: 20px; background-size: 115px 20px}
*/

.elgg-icon {
    vertical-align: middle;
}

dl,dt,dd {
    margin: 0;
    padding: 0;
}

.elgg-profile {
    display: block;
}

.elgg-profile > dt {
    float: left;
    width: 120px;
    font-weight: 700;
    color: #999;
    padding: 10px 0;
}

.elgg-profile > dd {
    padding: 10px 0 10px 120px;
}

.elgg-profile > dd ~ dd {
    border-top: 1px solid #E9E9E9;
}

.elgg-profile > dd + dd {
    padding-left: 0;
    margin-left: 120px;
}

img {
    max-width: 100%;
}

#groups-tools > .elgg-module {
    width: 229px;
}

#facebook-topbar-logo {
    margin-top: -4px;
    font-size: 20px;
    color: #FFF;
    text-shadow: 0 0 1px #AAA;
    width: 128px;
    text-align: center;
}

#facebook-header-logo a {
    color: #FFF;
    text-decoration: none;
    font-size: 2.5em;
}

.elgg-form-small input,.elgg-form-small textarea {
    font-size: 11px;
}

.elgg-image-block-small > .elgg-image {
    margin-right: 5px;
}

.ui-tabs-hide {
    display: none;
}

.elgg-composer {
    border-top: 1px solid #CCC;
    padding-top: 6px;
    margin-top: 7px;
}

.elgg-composer > h4 {
    height: 22px;
    display: inline-block;
    vertical-align: baseline;
    color: gray;
}

.elgg-composer > .ui-tabs-panel {
    margin-top: 5px;
    border: 1px solid #B4BBCD;
    padding: 10px;
}

.messageboard-input {
    margin-bottom: 5px;
    height: 60px;
}

.elgg-attachment-description {
    margin-top: 5px;
}

#thewire-form-composer #thewire-textarea {
    margin-top: 0;
}

#facebook-header-login {
    bottom: 25px;
    position: absolute;
    right: 0;
}

#facebook-header-login label {
    color: #FFF;
    display: block;
    font-weight: 400;
    padding: 2px 2px 4px;
}

#facebook-header-login .elgg-foot > label {
    bottom: -16px;
    color: #98A9CA;
    cursor: pointer;
    left: 0;
    position: absolute;
}

#facebook-header-login div {
    display: inline-block;
    margin-bottom: 3px;
    padding-right: 10px;
}

#facebook-header-login .elgg-input-text,#facebook-header-login .elgg-input-password {
    color: #000;
    font-size: 11px;
    width: 150px;
    border-color: #1D2A5B;
    margin: 0;
    padding: 3px 3px 4px;
}

#facebook-header-login .elgg-menu {
    position: absolute;
    margin-left: -160px;
}

#facebook-header-login .elgg-menu > li {
    display: inline-block;
    margin-right: 10px;
}

#facebook-header-login .elgg-menu > li > a {
    color: #98A9CA;
    display: inline;
}

#facebook-header-login .elgg-menu > li > a:hover {
    text-decoration: underline;
}

#facebook-header-login .elgg-button-submit {
    position: relative;
    top: 10px;
}

input[type=checkbox] {
    vertical-align: bottom;
}

.label-edit-head {
    max-width: 490px;
    height: 100%;
    background-color: #eeeeee;
    background-repeat: repeat-x;
    background-image: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f5f5f5), color-stop(100%,#eeeeee));
    background-image: -webkit-linear-gradient(top, #f5f5f5 0%,#eeeeee 100%);
    background-image: -ms-linear-gradient(top, #f5f5f5 0%,#eeeeee 100%);
    background-image: -o-linear-gradient(top, #f5f5f5 0%,#eeeeee 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f5f5f5', endColorstr='#eeeeee',GradientType=0 );
    background-image: linear-gradient(top, #f5f5f5 0%,#eeeeee 100%);
    border: 1px solid #e5e5e5;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    margin-bottom: 5px;
    padding: 5px 8px;
}

.ui-autocomplete {
    background-color: #FFF;
    border: 1px solid #555;
    max-width: 450px;
}

.elgg-autocomplete-item {
    border-top: 1px solid #E9E9E9;
}

#facebook-topbar-logo {
    background: url(<?php echo $url; ?>_graphics/logo.png) 0 0 no-repeat;
    width: 115px;
    height: 20px;
    background-size: 115px 20px;
}


/*AO: Abril 13, modificado tamaño de elgg-composer del muro de usuarios y grupos*/
.elgg-composer{
        width: 80%;
/*      margin: 0px auto;*/
}

/* AO: Abril 13, cambios de estilo en textarea del composer de dashboard de grupos*/
.messageboard-input{
        height: 35px;
        box-sizing: border-box; /*For IE and modern versions of Chrome*/
        -moz-box-sizing: border-box; /*For Firefox*/
        -webkit-box-sizing: border-box;
        display: block;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 5px;
        resize: none;
}

/* AO: Abril 13, botón para eliminar post de dashboard de usuario*/
.delete_button_post{
        float: right;
}

/* AO: Abril 13, botón para eliminar comentario hjcomment*/
.delete_hjcomm{
        float: right;
}

/* AO: Abril 17, botón para eliminar post en muro de otro usuario o grupo*/
.delete_opost{
        float: right;
}

/*AO: Abril 30, css de términos y condiciones*/
.terms{
        margin-top: 30px;
        color : #000;
	font-size: 13px;
}

.terms h3{
	font-size: 14px;
        color : #000;
	margin-bottom: 15px;
}

.terms .parr{
        font-weight: bold;
}

.terms ol{
        list-style-type: decimal;
        padding-left: 25px;
        margin: 0 1.5em 1.5em 0;
}

.terms ol li{
	margin-top: 0.5em;
}

.terms ul{
	list-style-type: square;
        padding-left: 25px;
        margin: 0 1.5em 1.5em 0;
}

.terms ul li{
	display: list-item;
	text-align: -webkit-match-parent;
	margin-top: 0.5em;
}
