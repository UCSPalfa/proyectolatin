<?php
/**
 * The Wire CSS
 */

?>
/********************************
The Wire
*********************************/
#thewire-textarea {
/*      height: 40px;*/
/*      padding: 6px;*/
/* AO: Abril 13, cambios de estilo en textarea del composer de dashboard de usuario*/
        height: 35px;
        box-sizing: border-box; /*For IE and modern versions of Chrome*/
        -moz-box-sizing: border-box; /*For Firefox*/
        -webkit-box-sizing: border-box;
        display: block;
        max-width: 600px;
        margin: 0 auto;
        resize: none;
}

#thewire-characters-remaining {
	text-align: right;
	float: right;
	font-weight: bold;
	color: #333333;
}
.thewire-characters-remaining {
	color:#333333;
	border:none;
	font-size: 100%;
	font-weight: bold;
	padding:0 2px 0 0;
	margin:0;
	text-align: right;
	background: white;
}
.thewire-characters-remaining-warning {
	color: #D40D12 !important;
}
.thewire-parent {
	margin-left: 40px;
/*AO: Abril 17, añadido width no estaba al descargar del repo*/
        width: 80%;
}

/*AO: Abril 13, añadidos estilos para formulario de thewire*/
.thewire-form2{
        width: 70%;
        margin-bottom: 15px;
}

.thewire-form2 #thewire-textarea{
        margin: 0;
}
