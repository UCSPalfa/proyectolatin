<?php

/**

 * Blog English language file.

 *

 */



$port = array(

	'blog' => 'Blogs',

	'blog:blogs' => 'Blogs',

	'blog:revisions' => 'Revisões',

	'blog:archives' => 'Arquivos',

	'blog:blog' => 'Blog',

	'item:object:blog' => 'Blogs',



	'blog:title:user_blogs' => 'Blogs pertencentes a %s\'',

	'blog:title:all_blogs' => 'Todos os blogs',

	'blog:title:friends' => 'Blogs de amigos\'',



	'blog:group' => 'Blog da comunidade',

	'blog:enableblog' => 'Habilitar blog da comunidade',

	'blog:write' => 'Escrever um post',



	// Editing

	'blog:add' => 'Adicinar um post',

	'blog:edit' => 'Editar um post',

	'blog:excerpt' => 'Excerto (parte de um livro)',

	'blog:body' => 'Corpo',

	'blog:save_status' => 'Última gravação: ',

	'blog:never' => 'Nunca',



	// Statuses

	'blog:status' => 'Status',

	'blog:status:draft' => 'Rascunho',

	'blog:status:published' => 'Publicado',

	'blog:status:unsaved_draft' => 'Rascunho Não salvo',



	'blog:revision' => 'Revisão',

	'blog:auto_saved_revision' => 'Revisão Salva Automaticamente',



	// messages

	'blog:message:saved' => 'Post salvo.',

	'blog:error:cannot_save' => 'Não é possível salvar o post.',

	'blog:error:cannot_write_to_container' => 'Acesso induficiente para salvar o blog na comunidade.',

	'blog:messages:warning:draft' => 'Há um rascunho não salvo deste post!',

	'blog:edit_revision_notice' => '(Versão antiga)',

	'blog:message:deleted_post' => 'Post excluído.',

	'blog:error:cannot_delete_post' => 'Não é possível excluir o post.',

	'blog:none' => 'Não há posts',

	'blog:error:missing:title' => 'Por favor, insira um título para o blog!',

	'blog:error:missing:description' => 'Por favor, insira conteúdo no seu blog!',

	'blog:error:cannot_edit_post' => 'Este post pode não existir, ou talvez você não tenha permissões para editá-lo.',

	'blog:error:revision_not_found' => 'Cannot find this revision.',



	// river

	'river:create:object:blog' => '%s publicou um post %s',

	'river:comment:object:blog' => '%s comentou no blog %s',



	// notifications

	'blog:newpost' => 'Um novo post',

	'blog:notification' =>

'

%s escreveu um novo post.



%s

%s



Visualize e comente o novo post:

%s

',



	// widget

	'blog:widget:description' => 'Mostrar seus posts antigos',

	'blog:moreblogs' => 'Mais posts',

	'blog:numbertodisplay' => 'Número de posts para exibição',

	'blog:noblogs' => 'Não há posts'

);



add_translation('pt', $port);
