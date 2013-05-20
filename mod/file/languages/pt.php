<?php

/**

 * Elgg file plugin language pack

 *

 * @package ElggFile

 */



$port = array(



	/**

	 * Menu items and titles

	 */

	'file' => "Arquivos",

	'file:user' => "Arquivos pertencentes a %s",

	'file:friends' => "Arquivos de amigos",

	'file:all' => "Todos os arquivos do site",

	'file:edit' => "Editar arquivo",

	'file:more' => "Mais arquivos",

	'file:list' => "Exibição de lista",

	'file:group' => "Arquivos da comunidade",

	'file:gallery' => "Exibição de galeria",

	'file:gallery_list' => "Exibição de lista ou galeria",

	'file:num_files' => "Número de arquivos para exibir",

	'file:user:gallery'=>'Exibir %s galeria',

	'file:upload' => "Fazer upload de um arquivo",

	'file:replace' => 'Substituir o conteúdo do arquivo (deixe em branco se não deseja modificar o arquivo)',

	'file:list:title' => "%s's %s %s",

	'file:title:friends' => "Amigos",



	'file:add' => 'Fazer upload de um arquivo',



	'file:file' => "Arquivo",

	'file:title' => "Título",

	'file:desc' => "Descrição",

	'file:tags' => "Tags",



	'file:list:list' => 'Mudar para exibição de lista',

	'file:list:gallery' => 'Mudar para exibição de galeria',



	'file:types' => "Tipos de arquivos enviados",



	'file:type:' => 'Arquivos',

	'file:type:all' => "Todos os arquivos",

	'file:type:video' => "Vídeos",

	'file:type:document' => "Documentos",

	'file:type:audio' => "Áudio",

	'file:type:image' => "Fotos",

	'file:type:general' => "Geral",



	'file:user:type:video' => "Vídeos pertencentes a %s",

	'file:user:type:document' => "Documentos pertencentes a %s",

	'file:user:type:audio' => "Áudio pertencente a %s",

	'file:user:type:image' => "Fotos pertencentes a %s",

	'file:user:type:general' => "Arquivos gerais pertencentes a %s",



	'file:friends:type:video' => "Vídeos dos seus amigos",

	'file:friends:type:document' => "Documentos dos seus amigos",

	'file:friends:type:audio' => "Áudio dos seus amigos",

	'file:friends:type:image' => "Fotos dos seus amigos",

	'file:friends:type:general' => "Arquivos gerais dos seus amigos",



	'file:widget' => "File widget",

	'file:widget:description' => "Mostrar seus últimos arquivos",



	'groups:enablefiles' => 'Permitir arquivos da comunidade',



	'file:download' => "Faça download deste arquivo",



	'file:delete:confirm' => "Tem certeza que deseja exluir este arquivo?",



	'file:tagcloud' => "Tag cloud",



	'file:display:number' => "Número de arquivos para exibir",



	'river:create:object:file' => '%s atualizou o arquivo %s',

	'river:comment:object:file' => '%s comentou no arquivo %s',



	'item:object:file' => 'Arquivos',



	'file:newupload' => 'Foi realizado o upload de um novo arquivo',

	'file:notification' =>

'%s atualizou um novo arquivo:



%s

%s



Visualize e comente o novo arquivo:

%s

',



	/**

	 * Embed media

	 **/



		'file:embed' => "Incorporar mídia",

		'file:embedall' => "Todos",



	/**

	 * Status messages

	 */



		'file:saved' => "Seu arquivo foi salvo com sucesso.",

		'file:deleted' => "Seu arquivo foi excluído com sucesso.",



	/**

	 * Error messages

	 */



		'file:none' => "Nenhum arquivo.",

		'file:uploadfailed' => "Desculpe; não pudemos salvar seu arquivo.",

		'file:downloadfailed' => "Desculpe; este arquivo não está disponível neste momento.",

		'file:deletefailed' => "Seu arquivo pode não ter sido excluído neste momento.",

		'file:noaccess' => "Você não tem permissões para modificar este arquivo.",

		'file:cannotload' => "Houve um erro no processo de upload do arquivo",

		'file:nofile' => "Você deve selecionar um arquivo",

);



add_translation("port", $port);
