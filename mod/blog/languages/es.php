<?php
/**
 * Blog Spanish language file.
 *
 */

$spanish = array(
	'blog' => 'Blogs',
	'blog:blogs' => 'Blogs',
	'blog:revisions' => 'Revisiones',
	'blog:archives' => 'Archivos',
	'blog:blog' => 'Blog',
	'item:object:blog' => 'Blogs',

	'blog:title:user_blogs' => 'Blogs de %s',
	'blog:title:all_blogs' => 'Todos los blogs',
	'blog:title:friends' => 'Blogs de mis amigos',

	'blog:group' => 'Blog de la Comunidad',
	'blog:enableblog' => 'Habilitar blog para Comunidad',
	'blog:write' => 'Escribir nueva entrada de blog',

	// Editing
	'blog:add' => 'Añadir entrada de blog',
	'blog:edit' => 'Editar entrada de blog',
	'blog:excerpt' => 'Extracto',
	'blog:body' => 'Cuerpo',
	'blog:save_status' => 'Guardado por última vez: ',
	'blog:never' => 'Nunca',

	// Statuses
	'blog:status' => 'Estado',
	'blog:status:draft' => 'Borrador',
	'blog:status:published' => 'Publicado',
	'blog:status:unsaved_draft' => 'Borrador no guardado',

	'blog:revision' => 'Revisión',
	'blog:auto_saved_revision' => 'Revisión guardada automáticamente',

	// messages
	'blog:message:saved' => 'Entrada de blog guardada.',
	'blog:error:cannot_save' => 'No se puede guardar la entrada de blog.',
	'blog:error:cannot_write_to_container' => 'Permisos de acceso insuficientes para guardar el Blog en la Comunidad.',
	'blog:messages:warning:draft' => 'Ya existe un borrador no guardado de esta entrada!',
	'blog:edit_revision_notice' => '(Version antigua)',
	'blog:message:deleted_post' => 'Entrada de blog eliminada.',
	'blog:error:cannot_delete_post' => 'No se puede eliminar la entrada de blog.',
	'blog:none' => 'No hay entradas en este blog',
	'blog:error:missing:title' => 'Por favor, ingrese el título de este blog',
	'blog:error:missing:description' => 'Por favor, ingrese el cuerpo de este blog',
	'blog:error:cannot_edit_post' => 'Lo sentimos, esta entrada de blog no existe o usted no tiene los permisos suficientes para editarla.',
	'blog:error:revision_not_found' => 'No ha sido posible encontrar esta revisión.',

	// river
	'river:create:object:blog' => '%s publicó una entrada de blog %s',
	'river:comment:object:blog' => '%s comentó en el blog %s',

	// notifications
	'blog:newpost' => 'Una nueva entrada de blog',
	'blog:notification' =>
'
%s hizo una nueva entrada de blog.

%s
%s

Ver y comentar en la nueva nueva entrada de blog:
%s
',

	// widget
	'blog:widget:description' => 'Mostrar sus últimas entradas de blog',
	'blog:moreblogs' => 'Más entradas de blog',
	'blog:numbertodisplay' => 'Número de entradas de blog a mostrar',
	'blog:noblogs' => 'No blog posts'
);

add_translation('es', $spanish);
