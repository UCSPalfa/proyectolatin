<?php 

//AO: Abril 30, página añadida de privacidad

$title = elgg_echo('profile_manager:priv');

$content = elgg_view_title($title);


$content .= "<div class='terms'>";
$content .= "<p>" . elgg_echo('profile_manager:priv:p1') . "</p>";
$content .= "</div>";


$body = elgg_view_layout("one_column", array('content' => $content));

echo elgg_view_page($title, $body);
?>
