<?php

/**

 * Pages languages

 *

 * @package ElggPages

 */



$port = array(



	/**

	 * Menu items and titles

	 */



	'pages' => "Páginas",

	'pages:owner' => "Páginas pertencentes a %s",

	'pages:friends' => "Páginas de amigos",

	'pages:all' => "Todas as páginas do site",

	'pages:add' => "Adicionar página",



	'pages:group' => "Páginas da comunidade",

	'groups:enablepages' => 'Ativar páginas da comunidade',



	'pages:edit' => "Editar esta página",

	'pages:delete' => "Excluir esta página",

	'pages:history' => "Histórico",

	'pages:view' => "Ver página",

	'pages:revision' => "Revisão",



	'pages:navigation' => "Navigação",

	'pages:new' => "Uma nova página",

	'pages:notification' =>

'%s adicionou uma nova página:



%s

%s



Visualize e commente na nova página:

%s

',

	'item:object:page_top' => 'Páginas de nível superior',

	'item:object:page' => 'Páginas',

	'pages:nogroup' => 'Esta comunidade ainda não possui nenhuma página',

	'pages:more' => 'Mais páginas',

	'pages:none' => 'Nenhuma página foi criada até agora',



	/**

	* River

	**/



	'river:create:object:page' => '%s criou uma página %s',

	'river:create:object:page_top' => '%s criou uma página %s',

	'river:update:object:page' => '%s atualizou uma página %s',

	'river:update:object:page_top' => '%s atualizou uma página %s',

	'river:comment:object:page' => '%s comentou na página entitulada %s',

	'river:comment:object:page_top' => '%s comentou na página entitulada %s',



	/**

	 * Form fields

	 */



	'pages:title' => 'Título da página',

	'pages:description' => 'Texto da página',

	'pages:tags' => 'Tags',

	'pages:parent_guid' => 'Página pai',

	'pages:access_id' => 'Acesso de leitura',

	'pages:write_access_id' => 'Acesso de escrita',



	/**

	 * Status and error messages

	 */

	'pages:noaccess' => 'Sem acesso à página',

	'pages:cantedit' => 'Você não pode editar esta página',

	'pages:saved' => 'Página salva',

	'pages:notsaved' => 'A página não pôde ser salva',

	'pages:error:no_title' => 'Você deve especificar o título desta página.',

	'pages:delete:success' => 'A página foi excluída com sucesso.',

	'pages:delete:failure' => 'A página não pôde ser deletada.',



	/**

	 * Page

	 */

	'pages:strapline' => 'Última atualização %s por %s',



	/**

	 * History

	 */

	'pages:revision:subtitle' => 'Revisão criada %s por %s',



	/**

	 * Widget

	 **/



	'pages:num' => 'Número de páginas para exibir',

	'pages:widget:description' => "Esta é uma lista das suas páginas.",



	/**

	 * Submenu items

	 */

	'pages:label:view' => "Ver página",

	'pages:label:edit' => "Editar página",

	'pages:label:history' => "Histórico da página",



	/**

	 * Sidebar items

	 */

	'pages:sidebar:this' => "Esta página",

	'pages:sidebar:children' => "Sub-páginas",

	'pages:sidebar:parent' => "Pai",



	'pages:newchild' => "Criar uma sub-página",

	'pages:backtoparent' => "Voltar para '%s'",

);



add_translation("pt", $port);
