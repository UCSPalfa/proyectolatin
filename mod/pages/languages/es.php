<?php
/**
 * Pages languages
 *
 * @package ElggPages
 */

$spanish = array(

	/**
	 * Menu items and titles
	 */

	'pages' => "Páginas",
	'pages:owner' => "Páginas de %s",
	'pages:friends' => "Páginas de mis amigos",
	'pages:all' => "Todas las páginas del sitio",
	'pages:add' => "Añadir nueva página",

	'pages:group' => "Páginas de la Comunidad",
	'groups:enablepages' => 'Habilitar páginas para esta Comunidad',

	'pages:edit' => "Editar esta página",
	'pages:delete' => "Eliminar esta página",
	'pages:history' => "Historial",
	'pages:view' => "Ver página",
	'pages:revision' => "Revisión",

	'pages:navigation' => "Navegación",
	'pages:new' => "Nueva página",
	'pages:notification' =>
'%s añadió una nueva página:

%s
%s

Ver y comentar en la nueva página:
%s
',
	'item:object:page_top' => 'Páginas de primer nivel',
	'item:object:page' => 'Paginas',
	'pages:nogroup' => 'Esta Comunidad aún no tiene páginas',
	'pages:more' => 'Más páginas',
	'pages:none' => 'No se han creado páginas todavía',

	/**
	* River
	**/

	'river:create:object:page' => '%s creó una página %s',
	'river:create:object:page_top' => '%s creó una página %s',
	'river:update:object:page' => '%s actualizó una página %s',
	'river:update:object:page_top' => '%s actualizó una página %s',
	'river:comment:object:page' => '%s comentó en la página titulada %s',
	'river:comment:object:page_top' => '%s comentó en la página titulada %s',

	/**
	 * Form fields
	 */

	'pages:title' => 'Título de la página',
	'pages:description' => 'Texto de la página',
	'pages:tags' => 'Etiquetas',
	'pages:parent_guid' => 'Página padre',
	'pages:access_id' => 'Permiso de lectura',
	'pages:write_access_id' => 'Permiso de escritura',

	/**
	 * Status and error messages
	 */
	'pages:noaccess' => 'No se tiene acceso a esta página',
	'pages:cantedit' => 'Usted no puede editar esta página',
	'pages:saved' => 'Página guardada',
	'pages:notsaved' => 'La página no pudo ser guardada',
	'pages:error:no_title' => 'Debe especificar un título para esta página.',
	'pages:delete:success' => 'La página fue exitosamente eliminada.',
	'pages:delete:failure' => 'La página no pudo ser eliminada.',

	/**
	 * Page
	 */
	'pages:strapline' => 'Última actualización %s por %s',

	/**
	 * History
	 */
	'pages:revision:subtitle' => 'Revisión creada %s por %s',

	/**
	 * Widget
	 **/

	'pages:num' => 'Número de páginas a mostrar',
	'pages:widget:description' => "Esta es una lista de sus páginas.",

	/**
	 * Submenu items
	 */
	'pages:label:view' => "Ver página",
	'pages:label:edit' => "Editar página",
	'pages:label:history' => "Historial de la página",

	/**
	 * Sidebar items
	 */
	'pages:sidebar:this' => "Esta página",
	'pages:sidebar:children' => "Sub-páginas",
	'pages:sidebar:parent' => "Padre",

	'pages:newchild' => "Crear una sub-página",
	'pages:backtoparent' => "Regresar a '%s'",
);

add_translation("es", $spanish);
