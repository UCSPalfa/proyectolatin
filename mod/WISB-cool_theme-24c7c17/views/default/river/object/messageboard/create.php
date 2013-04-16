<?php
/**
 * Post comment river view
 */
$object = $vars['item']->getObjectEntity();
$comment = $vars['item']->getAnnotation();

echo elgg_view('river/elements/layout', array(
	'item' => $vars['item'],
	'message' => ($comment->value),    //po5i: limitaba los caracteres con esta funcion: elgg_get_excerpt()
));
