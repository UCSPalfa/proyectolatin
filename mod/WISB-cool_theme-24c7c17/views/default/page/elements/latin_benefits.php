<?php

/**
 * LATIn benefits page 
 * AO: Abril 17, sidebar añadido para mostrar beneficios de LATIn en página de registro
 *
 */
echo "<div class=\"benefit\">";
echo "<div class=\"benefitImage\">";

$file = elgg_get_site_url() . '_graphics/explore.png';
$icon = "<img src='$file' style='width: 100%; '>";

echo $icon;

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


echo "<hr class='registerBreak' />";

echo "<div class=\"benefitImage\">";

$file = elgg_get_site_url() . '_graphics/collaborate.png';
$icon = "<img src='$file' style='width: 100%; '>";

echo $icon;

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

echo "<hr class='registerBreak' />";


echo "<div class=\"benefit\">";

echo "<div class=\"benefitImage\">";
        
        $file = elgg_get_site_url() . '_graphics/share.png';
        $icon = "<img src='$file' style='width: 100%; '>";        
        echo $icon;
            
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
