<?php 

//AO: Abril 30, página añadida de términos y servicios

$title = elgg_echo('profile_manager:terms');

$content = elgg_view_title($title);


$content .= "<div class='terms'>";
$content .= "<h3>" . elgg_echo('profile_manager:t1') . "</h3>";
$content .= "<p class='parr'>" . elgg_echo('profile_manager:p1') . "</p>";
$content .= elgg_echo('profile_manager:l1');
$content .= "<p>" . elgg_echo('profile_manager:p2') . "</p>";
$content .= "<h3>" . elgg_echo('profile_manager:t2') . "</h3>";
$content .= elgg_echo('profile_manager:l2');
$content .= "<h3>" . elgg_echo('profile_manager:t3') . "</h3>";
$content .= elgg_echo('profile_manager:l3');
$content .= "<h3>" . elgg_echo('profile_manager:t4') . "</h3>";
$content .= "<p class='parr'>" . elgg_echo('profile_manager:p3') . "</p>";
$content .= "</div>";


$body = elgg_view_layout("one_column", array('content' => $content));

echo elgg_view_page($title, $body);
?>
