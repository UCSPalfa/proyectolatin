<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 981px wide, centered. Used in default page shell
 *
 */
$url = elgg_get_site_url();
?>
/* AUMENTADO BODY*/
body {
    margin: 0;
    padding: 0;
    height: 100%;
}
/* AUMENTADO ELGG-PAGE*/
.elgg-page {
    min-height: 100%;
    position: relative;
}
/* AUMENTADO ELGG-PAGE-BODY*/
.elgg-page-body {
    padding-bottom: 95px;
}
/* <style>
/* ***************************************
    PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/

/*AO: Abril 18, modificados los sgtes 2 estilos para que el banner sea link */

.elgg-page-default .elgg-page-header > .elgg-inner{
    width: 981px;
    margin: 0 auto;
    height: 128px;
}

.elgg-page-header .elgg-inner #logo_sitio{
    background: url(<?php echo $url; ?>_graphics/banner_latin.png) 0 0 no-repeat;
    background-size: 995px 128px;
    width: 995px;
    height: 128px;
    display: block;
}

.elgg-page-default .elgg-page-body > .elgg-inner {
    width: 981px;
    margin: 0 auto;
}

.elgg-page-footer > .elgg-inner:after {
    display: block;
    content: '.';
    clear: both;
    visibility: hidden;
    height: 0;
}
/***** TOPBAR ******/
.elgg-page-topbar {
    position: fixed;
    right: 0;
    left: 0;
    z-index: 1030;
    margin-bottom: 0;
    padding-left: 20px;
    padding-right: 20px;
    background-color: #2c2c2c;
    background-image: -moz-linear-gradient(top, #333333, #222222);
    background-image: -ms-linear-gradient(top, #333333, #222222);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#333333), to(#222222));
    background-image: -webkit-linear-gradient(top, #333333, #222222);
    background-image: -o-linear-gradient(top, #333333, #222222);
    background-image: linear-gradient(top, #333333, #222222);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#333333', endColorstr='#222222', GradientType=0);
    -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25), inset 0 -1px 0 rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25), inset 0 -1px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25), inset 0 -1px 0 rgba(0, 0, 0, 0.1);
}

.elgg-page-topbar > .elgg-inner {
    padding-top: 6px;
    width: 981px;
    margin: 0 auto;
    position: relative;
}

.elgg-page-topbar ~ .elgg-page-body {
    padding-top: 38px;
}
/***** PAGE MESSAGES ******/
.elgg-system-messages {
    position: fixed;
    top: 24px;
    right: 20px;
    max-width: 500px;
    z-index: 1000;
}

.elgg-system-messages li {
    margin-top: 10px;
}

.elgg-system-messages li p {
    margin: 0;
}
/***** PAGE HEADER ******/
.elgg-page-header {
    position: relative;
    background: #000000;
}

.elgg-page-header > .elgg-inner {
    position: relative;
}
/***** PAGE BODY LAYOUT ******/
.elgg-layout {
    min-height: 360px;
}

.elgg-layout-one-column {
    padding: 10px 0;
}

.elgg-sidebar {
    margin-right: 15px;
    position: relative;
    padding: 20px 0;
    float: left;
    width: 181px;
    min-height: 360px;
}

.elgg-sidebar-alt {
    position: relative;
    float: right;
    width: 244px;
    margin-left: 20px;
    min-height: 360px;
}

.elgg-main {
    position: relative;
    min-height: 360px;
}

.elgg-layout-two-sidebar > .elgg-body,.elgg-layout-one-sidebar > .elgg-body {
    border: 1px solid #B3B3B3;
    border-top: 0;
    padding: 15px 20px;
}

.elgg-layout > .elgg-body > .elgg-head {
    padding-bottom: 3px;
    margin-bottom: 10px;
}

.elgg-sidebar-right {
    position: relative;
    padding-top: 20px;
    float: right;
    width: 190px;
    min-height: 360px;
}
/***** PAGE FOOTER ******/
.elgg-page-default .elgg-page-footer > .elgg-inner {
    width: 981px;
    margin: 0 auto;
}
/*.elgg-page-default .elgg-page-footer > .elgg-inner {margin-left: 181px; padding: 0; margin-right:181px}*/
.elgg-page-footer {
    width: 100%;
    height: 80px;
    position: absolute;
    bottom: 0;
    left: 0;
}

.elgg-page-footer {
    color: #fff;
    background-color: #000000;
}

.elgg-page-footer a:hover {
    color: #666;
}
/***** ESTILOS AÑADIDOS ******/
.footer_izq {
    width: 200px;
    float: left;
}

.footer_der {
    margin-left: 0;
    width: 350px;
    float: right;
}

.footer_izq .titulo, .footer_der .titulo {
    display: block;
    letter-spacing: normal;
    line-height: 1em;
    font-size: 140%;
    color: #277fcf;
    margin-bottom: 10px;
    padding-top: 10px;
    margin: 0;
}

.footer_izq p, .footer_der p {
    margin-bottom: 3px;
}
/*Algunos cambios de estilo en página principal*/
.bloque_vd {
    float: left;
    width: 97%;
    border: 1px solid silver;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    min-height: 240px;
    padding: 10px;
    position: relative;
}

.bloque_vd h1 {
    color: #000000;
    font-family: Arial, sans-serif;
    font-size: 2.8em;
    font-weight: normal;
    line-height: 1.4em;
}

.bloque_vd h1 span {
    font-weight: bold;
}

.bloque_t1 {
    width: 45%;
    float: left;
    margin-top: 30px;
    border: 1px solid silver;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    height: 280px;
    padding: 10px;
    position: relative;
}

.bloque_t1 {
    background-image: url(<?php echo $url; ?>_graphics/p_box.gif);
    background-position: 50% 100%;
    background-repeat: no-repeat no-repeat;
    margin-right: 0;
    background-size: 100%;
}

.bloque_t1 h2 {
    color: #0054A7;
    font-weight: bold;
}

.bloque_t2 {
    width: 45%;
    float: right;
    margin-top: 30px;
    border: 1px solid silver;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    height: 280px;
    padding: 10px;
    position: relative;
}

.bloque_t2 {
    background-image: url(<?php echo $url; ?>_graphics/p_box.gif);
    background-position: 50% 100%;
    background-repeat: no-repeat no-repeat;
    margin-right: 0;
    background-size: 100%;
}

.bloque_t2 h2 {
    color: #0054A7;
    font-weight: bold;
}

.elgg-sidebar-right .elgg-head {
    background-color: #fff;
    border-top: 0;
    border-bottom-color: #CCCCCC;
    border-bottom-style: solid;
    border-bottom-width: 1px;
    margin-bottom: 5px;
}

.elgg-sidebar-right .elgg-head h3 {
    font-size: 14px;
    color: #0054A7;
    font-weight: bold;
}
/*Login form de página principal*/
.elgg-form-login label {
    color: #333333;
    font-weight: bold;
    font-size: 13px;
}

.elgg-form-login .elgg-input-text {
    width: 100%;
}

.elgg-form-login .elgg-input-password {
    width: 100%;
}

.elgg-menu-general li {
    display: inline-block;
    padding: 0;
    margin: 0;
}

.elgg-menu-general li a:hover {
    text-decoration: underline;
}
/*Para formulario de registro */
.register_form{
	float: left;
	width: 40%;
	padding: 25px;
	margin: 15px 0 0 0;
	background: #f1f1f1;
	border: 1px solid #e5e5e5;
}

.register_form label{
	font-size: 13px;
}
/******************************/

.elgg-form-register #profile_manager_register_left input{padding: 5px}
.elgg-form-register #profile_manager_register_left .label_captcha{display: block; margin-top: 15px}

/*AO: Abril 18, estilos añadidos para sidebar de página de registro */

.sidebar_r{
	float: right;
	width: 53%;
	padding-top: 40px;
}

.benefit{
	overflow: hidden;
	margin-bottom: 30px;
}

.benefit #benpic1{
	float: left;
	background:url(<?php echo $url; ?>_graphics/wordscoll.png);
	background-repeat: no-repeat no-repeat;
	width: 250px;
	height: 159px;
	margin-left: 30px;
}

.benefit #benpic2{
        float: left;
        background:url(<?php echo $url; ?>_graphics/ben_world.png);
        background-repeat: no-repeat no-repeat;
        width: 170px;
        height: 172px;
        margin-left: 80px;
}

.benefit #benpic3{
        float: left;
        background:url(<?php echo $url; ?>_graphics/ben_share.png);
        background-repeat: no-repeat no-repeat;
        width: 196px;
        height: 170px;
        margin-left: 70px;
}

.benefit h2{
	color: #0054A7;
	font-weight: normal;
	font-size: 20px;
	color: #000;
}

.benefit .ben_text{
	width: 200px;
	margin-left: 60%;
}

.ben_text p{
	font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
	line-height: 19px;
	font-size: 13px;
	color: #555;
}

.registerf{
	max-width: 80%;
}
