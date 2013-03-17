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
                echo elgg_echo("Contact");
        echo "</h2>";
        echo "<p>";
                echo elgg_echo("info at latinproject dot org");
        echo "</p>";
echo "</div>";
echo "<div class=\"footer_der\">";
       echo "<h2 class=\"titulo\">";
                echo elgg_echo("Legal");
        echo "</h2>";
	echo "<p>";
		echo elgg_echo("LATIn Project (DCI-ALA/19.09.01/11/21526/279-155/ALFA III(2011)-52)");
	echo "</p>";
	echo "<p>";
		echo elgg_echo("Funded by the ALFA Program, an initiative of EuropeAid");
	echo "</p>";
echo "</div>";
