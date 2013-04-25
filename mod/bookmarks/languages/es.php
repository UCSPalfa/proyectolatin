<?php
/**
 * Bookmarks Spanish language file
 */

$spanish = array(

	/**
	 * Menu items and titles
	 */
	'bookmarks' => "Favoritos",
	'bookmarks:add' => "Añadir favorito",
	'bookmarks:edit' => "Editar favorito",
	'bookmarks:owner' => "Favoritos de %s",
	'bookmarks:friends' => "Favoritos de amigos",
	'bookmarks:everyone' => "Favoritos de todo el sitio",
	'bookmarks:this' => "Agregar a favoritos esta página",
	'bookmarks:this:group' => "Favoritos en %s",
	'bookmarks:bookmarklet' => "Obtener marcador",
	'bookmarks:bookmarklet:group' => "Obtener el marcador de la comunidad",
	'bookmarks:inbox' => "Bandeja de entrada de favoritos",
	'bookmarks:morebookmarks' => "Más favoritos",
	'bookmarks:more' => "Más",
	'bookmarks:with' => "Compartir con",
	'bookmarks:new' => "Un nuevo favorito",
	'bookmarks:address' => "Dirección del favorito",
	'bookmarks:none' => 'No hay favoritos',

	'bookmarks:notification' =>
'%s agregó un nuevo favorito:

%s - %s
%s

Revisa y comenta sobre su nuevo favorito:
%s
',

	'bookmarks:delete:confirm' => "Está seguro que desea eliminar este recurso?",

	'bookmarks:numbertodisplay' => 'Número de favoritos a mostrar',

	'bookmarks:shared' => "Favorito",
	'bookmarks:visit' => "Visitar recurso",
	'bookmarks:recent' => "Favoritos recientes",

	'river:create:object:bookmarks' => '%s hizo favorito %s',
	'river:comment:object:bookmarks' => '%s comentó en el favorito %s',
	'bookmarks:river:annotate' => 'un comentario en este favorito',
	'bookmarks:river:item' => 'un ítem',

	'item:object:bookmarks' => 'Favoritos',

	'bookmarks:group' => 'Favoritos de la Comunidad',
	'bookmarks:enablebookmarks' => 'Habilitar favoritos de la comunidad',
	'bookmarks:nogroup' => 'Esta comunidad no tiene favoritos por el momento',
	'bookmarks:more' => 'Más favoritos',

	'bookmarks:no_title' => 'Sin título',

	/**
	 * Widget and bookmarklet
	 */
	'bookmarks:widget:description' => "Mostrar sus ultimos favoritos.",

	'bookmarks:bookmarklet:description' =>
			"El marcador de favoritos le permite compartir o guardar cualquier recurso que encuentre en la web. Para usarlo, simplemente arrastre el siguiente botón a la barra de links de su navegador:",

	'bookmarks:bookmarklet:descriptionie' =>
			"Si está usando Internet Explorer, será necesario hacer click derecho en el icono del marcador, seleccionar 'agregar a favoritos' y luego en la barra de Links.",

	'bookmarks:bookmarklet:description:conclusion' =>
			"Usted puede guardar cualquier página que visite haciendo click en el mismo en cualquier momento.",

	/**
	 * Status messages
	 */

	'bookmarks:save:success' => "Su ítem ha sido agregado exitosamente a los favoritos.",
	'bookmarks:delete:success' => "Su ítem ha sido eliminado de los favoritos.",

	/**
	 * Error messages
	 */

	'bookmarks:save:failed' => "Su favorito no pudo ser guardado. Asegurese de haber ingresado un título y una dirección e intente nuevamente por favor.",
	'bookmarks:save:invalid' => "La dirección del favorito no es válida y no pudo ser guardada.",
	'bookmarks:delete:failed' => "Su favorito no pudo ser eliminado. Por favor intente nuevamente.",
);

add_translation('es', $spanish);
