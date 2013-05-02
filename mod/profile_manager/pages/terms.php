<?php 

//AO: Abril 30, página añadida de términos y servicios

$title = elgg_echo('profile_manager:terms');

$content = elgg_view_title($title);


$content .= "<div class='terms'>";
$content .= "<p class='first'>" . elgg_echo('profile_manager:p1') . "</p>";
$content .= elgg_echo('profile_manager:p2');
$content .= "</div>";


$body = elgg_view_layout("one_column", array('content' => $content));

echo elgg_view_page($title, $body);
?>
