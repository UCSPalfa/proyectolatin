<?php

/**
 * LATIn benefits page 
 * AO: Abril 17, sidebar añadido para mostrar beneficios de LATIn en página de registro
 *
 */


echo "<div class=\"benefit\">";
	echo "<div id=\"benpic1\">";
	echo "</div>";
	echo "<div class=\"ben_text\">";
		echo "<h2>";
			echo elgg_echo('register:explore_interests');
		echo "</h2>";
		echo "<p>";
			echo elgg_echo("register:explore_text");
		echo "</p>";
	echo "</div>";
echo "</div>";

echo "<div class=\"benefit\">";
        echo "<div id=\"benpic2\">";
        echo "</div>";
        echo "<div class=\"ben_text\">";
                echo "<h2>";
                        echo elgg_echo('register:collaborate');
                echo "</h2>";
                echo "<p>";
                        echo elgg_echo("register:coll_text");
                echo "</p>";
        echo "</div>";
echo "</div>";

echo "<div class=\"benefit\">";
        echo "<div id=\"benpic3\">";
        echo "</div>";
        echo "<div class=\"ben_text\">";
                echo "<h2>";
                        echo elgg_echo('register:share');
                echo "</h2>";
                echo "<p>";
                        echo elgg_echo("register:share_text");
                echo "</p>";
        echo "</div>";
echo "</div>";
