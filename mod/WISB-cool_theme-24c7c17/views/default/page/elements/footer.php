<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */

//echo elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz'));

//Modificación Feb 15 2013


echo "<div class=\"footer_izq\">";
	echo "<h2 class=\"titulo\">";
		echo elgg_echo('main:title:contact');
	echo "</h2>";
	echo "<p>";
		echo elgg_echo('main:contact:email');
	echo "</p>";
echo "</div>";
echo "<div class=\"footer_der\">";
	echo "<h2 class=\"titulo\">";
		echo elgg_echo('main:title:legal');
	echo "</h2>";
	echo "<p>";
		echo elgg_echo('main:legal:alfa');
	echo "</p>";
	echo "<p>";
		echo elgg_echo('main:legal:fund');
	echo "</p>";
echo "</div>";
echo "<div class=\"legal\">";
	echo "<div class=\"footer_izq\">";
		echo "<p>";
			echo elgg_echo('main:legal:copy');
		echo "</p>";
	echo "</div>";
	echo "<div class=\"footer_der\">";
		echo "<p>";
			echo elgg_echo('main:legal:elgg');
		echo "</p>";
	echo "</div>";
echo "</div>";
