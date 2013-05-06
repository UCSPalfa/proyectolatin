<?php

/**
 * LATIn info page
 * AO: Marzo, añadido para mostrar info de LATIn es página de inicio
 *
 */
echo "<div class=\"bloque_vd\">";

echo "<h1 style='text-align:center; font-weight: bold; margin-bottom: 50px'>";
echo elgg_echo("latin:site:name");
echo "</h1>";
echo "<p>";
echo elgg_echo("");
echo "</p>";
echo "<img src='_graphics/latinImage.png' style='margin-top: -63px;'>";
echo "</div>";

echo "<div class=\"bloque_t2\">";
echo "<h2>";
echo elgg_echo('latin:communities');
echo "</h2>";

/* AO: Abril 24, agregado div contenido*/
echo "<div class=\"contenido\">";
$options = array(
    'type' => 'group',
    'relationship' => 'member',
    'inverse_relationship' => false,
    'full_view' => false,
    'rendering_mode' => 'mini_grid',
    'list_type' => 'gallery',
    'size' => 'small',
    'limit' => 100,
    'pagination' => false,
);

$theGroups = elgg_get_entities_from_relationship_count ($options);


$communities = array();

foreach ($theGroups as $currentGroup) {
    if (!isSubgroup($currentGroup)) {
        array_push($communities, $currentGroup);
    }
}
//echo print_r($communities);
//$content = elgg_list_entities_from_relationship_count($options);

$limit = 12;
if (count($communities) >= $limit) {
    $communities = array_slice($communities, 0, $limit);
}

$content = elgg_view_entity_list($communities, array('limit' => 24, 'full_view' => false, 'list_type' => 'gallery', 'pagination' => false, 'rendering_mode' => 'mini_grid',));

$url = elgg_get_site_url() . 'groups/search';
$body = elgg_view_form('groups/find', array(
    'action' => $url,
    'method' => 'get',
    'disable_security' => true,
        ));

echo elgg_view_module('aside', '', $body);

echo "<h3>" . elgg_echo("popular:communities") . ":" . "</h3>";

echo "<br />";

echo $content;

echo "<h3>";
echo elgg_view('output/url', array(
    'text' => elgg_echo("view:all"),
    'value' => '/groups',
    'class' => 'bottonRight',
));
echo "</h3>";

echo "<p>";
echo elgg_echo("");
echo "</p>";
echo "</div>";
echo "</div>";

echo "<div class=\"bloque_t1\">";
echo "<h2>";
echo elgg_echo("latin:participate");
echo "</h2>";
echo "<div class=\"contenido\">";
echo elgg_echo("latin:steps");
echo "<h3>";
echo elgg_view('output/url', array(
    'text' => elgg_echo("contest:info"),
    'value' => '/',
));
echo "</h3>";
echo "</div>";
echo "</div>";
