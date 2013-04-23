<?php

/**
 * Elgg owner block
 * Displays page ownership information
 *
 * @package Elgg
 * @subpackage Core
 *
 */

$file = elgg_get_site_url() . '_graphics/communities.png';

$icon = "<img class='' src='$file' width='50%' style='text-align:center; margin-left:25%;'  >";



$header = "<h2 style='text-align:center;'>" . elgg_echo('latin:communities') . "</h2><br />"; 

$header .= $icon . "<br /><br />";

$header .= "<hr>";

$header .= "<div style='font-size:13px; font-weight: normal; text-align:justify; '>  <br /><br />";

$header .=  elgg_echo('latin:invitation') . "<br />";

$header .= "</div>";


$header .= "<div style='font-size:13px; font-weight: normal; text-align:center; '>  <br /><br />";

$header .= "<b>" . elgg_view('output/url', array('href' => '/', 'text' => elgg_echo('latin:login'), 'style' => 'color: #0054A7;')) . "</b>";

$header .=  " " . elgg_echo('latin:or') . " ";

$header .= "<b>" . elgg_view('output/url', array('href' => 'register', 'text' => elgg_echo('latin:register'), 'style' => 'color: #0054A7;')) . "</b>";

$header .=  " " . elgg_echo('latin:now') . ".";

$header .= "</div>";



echo elgg_view('page/components/module', array(
    'header' => $header,
//    'body' => $body,
    'class' => 'elgg-owner-block',
));
