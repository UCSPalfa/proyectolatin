<?php
/**
 * Elgg file plugin language pack
 *
 * @package ElggFile
 */

$spanish = array(

	/**
	 * Menu items and titles
	 */
	'file' => "Archivos",
	'file:user' => "Archivos de %s",
	'file:friends' => "Archivos de mis amigos",
	'file:all' => "Todos los archivos del sitio",
	'file:edit' => "Editar archivos",
	'file:more' => "Más archivos",
	'file:list' => "vista de lista",
	'file:group' => "Archivos de la Comunidad",
	'file:gallery' => "vista de galería",
	'file:gallery_list' => "Vista de Galería o Lista",
	'file:num_files' => "Número de archivos a mostrar",
	'file:user:gallery'=>'Vista de galería %s',
	'file:upload' => "Subir un archivo",
	'file:replace' => 'Reemplazar el contenido del archivo (deje en blanco para no modificar el archivo)',
	'file:list:title' => "De %s %s %s",
	'file:title:friends' => "De mis amigos",

	'file:add' => 'Subir un archivo',

	'file:file' => "Archivo",
	'file:title' => "Título",
	'file:desc' => "Descripción",
	'file:tags' => "Etiquetas",

	'file:list:list' => 'Cambiar a la vista de lista',
	'file:list:gallery' => 'Cambiar a la vista de galería',

	'file:types' => "Tipos de archivos subidos",

	'file:type:' => 'Archivos',
	'file:type:all' => "Todos los archivos",
	'file:type:video' => "Videos",
	'file:type:document' => "Documentos",
	'file:type:audio' => "Audio",
	'file:type:image' => "Imágenes",
	'file:type:general' => "General",

	'file:user:type:video' => "Videos de %s",
	'file:user:type:document' => "Documentos de %s",
	'file:user:type:audio' => "Audios de %s",
	'file:user:type:image' => "Imágenes de %s",
	'file:user:type:general' => "Archivos generales de %s",

	'file:friends:type:video' => "Videos de sus amigos",
	'file:friends:type:document' => "Documentos de sus amigos",
	'file:friends:type:audio' => "Audios de sus amigos",
	'file:friends:type:image' => "Imágenes de sus amigos",
	'file:friends:type:general' => "Archivos generales de sus amigos",

	'file:widget' => "Widget de archivos",
	'file:widget:description' => "Mostrar sus últimos archivos",

	'groups:enablefiles' => 'Habilitar archivos para la Comunidad',

	'file:download' => "Descargar",

	'file:delete:confirm' => "¿Está seguro que desea eliminar este archivo?",

	'file:tagcloud' => "Nube de etiquetas",

	'file:display:number' => "Número de archivos a mostrar",

	'river:create:object:file' => '%s subió el archivo %s',
	'river:comment:object:file' => '%s comentó en el archivo %s',

	'item:object:file' => 'Archivos',

	'file:newupload' => 'Un nuevo archivo ha sido subido',
	'file:notification' =>
'%s subió un nuevo archivo:

%s
%s

Ver y comentar en el nuevo archivo:
%s
',

	/**
	 * Embed media
	 **/

		'file:embed' => "Embeber medio",
		'file:embedall' => "Todo",

	/**
	 * Status messages
	 */

		'file:saved' => "Su archivo fue exitosamente guardado.",
		'file:deleted' => "Su archivo fue exitosamente eliminado.",

	/**
	 * Error messages
	 */

		'file:none' => "Ningún archivo.",
		'file:uploadfailed' => "Lo sentimos;no pudimos guardar su archivo.",
		'file:downloadfailed' => "Lo sentimos; este archivo no se encuentra disponible en este momento.",
		'file:deletefailed' => "Su archivo no pudo ser eliminado en este momento.",
		'file:noaccess' => "Usted no tiene permisos susficientes para cambiar este archivo",
		'file:cannotload' => "Hubo un error en la subida de su archivo",
		'file:nofile' => "Debe seleccionar un archivo",
);

add_translation("es", $spanish);