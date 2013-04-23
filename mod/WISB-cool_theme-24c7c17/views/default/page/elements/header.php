<?php

$site = elgg_get_site_entity();

/*AO: Abril 19, para colocar link en banner de latin*/

if(elgg_get_context()!="main"){

/*echo "<div id=\"facebook-header-logo\">";*/
echo elgg_view('output/url', array(
	'href' => "/",
	'text' => '',
	'id' => 'logo_sitio',
));
}else{
	echo "<div id=\"logo_sitio\"></div>";
}

//echo "</div>";

//echo elgg_view_form('login', array('id' => 'facebook-header-login'));
