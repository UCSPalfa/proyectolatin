<?php
/**
 * Post comment river view
 */

elgg_load_js('elgg.deleteopost');
elgg_extend_view('js/elgg', 'js/delete-opost');

$object = $vars['item']->getObjectEntity();
$annotation = $vars['item']->getAnnotation();

/*AO: Abril 17, añadida opción para eliminar annotations*/
/*Puedo eliminar mis annotations en muro de otro usuario o grupo o eliminar annotations de otros en mi muro*/

if ($annotation->canEdit()) {
        $annotation_id = $annotation->id;
/*AO: Abril 22, añadido title remove a botón de eliminar */
        $delete_button = "<a id='$annotation_id' title='Remove' class='delete_opost' style='color: #0054A7;' href='#'>" . elgg_view_icon('delete') . "</a>";
}else{
        $delete_button = "";
}


echo elgg_view('river/elements/layout', array(
        'item' => $vars['item'],
        'message' => $delete_button.elgg_get_excerpt($annotation->value),
));
