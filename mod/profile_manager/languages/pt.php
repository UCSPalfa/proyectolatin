<?php 

	/**

	* Profile Manager

	* 

	* English language

	* 

	* @package profile_manager

	* @author ColdTrick IT Solutions

	* @copyright Coldtrick IT Solutions 2009

	* @link http://www.coldtrick.com/

	*/



	$port = array(

		// LATIn field names:
                'latin:field:bio' => 'Bio',
                'latin:field:institution' => 'Instituição',
                'latin:field:country' => 'País',
                'latin:field:city' => 'Cidade',
                'latin:field:interests' => 'Interesses',
                'latin:field:curriculum' => 'CV',
                'latin:field:languages' => 'Línguas',
                'latin:field:email_visibility' => 'Visibilidade e-mail',
                'latin:field:areas' => 'Áreas de interesse',
                'latin:field:proposal' => 'Proposta de nomeação',
                'latin:field:booktitle' => 'Título do Livro',
                'latin:field:description' => 'Descrição do grupo',
                'latin:field:policies' => 'Você aceita as regras do concurso?',
                'latin:field:policies:title' => 'Regras do concurso',
                'latin:field:policies:link' => 'profile_manager/contestrules-pt',
                'latin:field:policies:linkdesc1' => 'A aceitar as ',
                'latin:field:policies:linkdesc2' => 'regras do concurso ',
                'latin:field:policies:linkdesc3' => 'você concorda com os nossos termos e participar automaticamente na chamada para a criação colaborativa de livros abertos.',

		// entity names

		'item:object:custom_profile_field' => 'Personalizar Campo de Perfil',

		'item:object:custom_profile_field_category' => 'Personalizar categoria do campo de perfil',

		'item:object:custom_profile_type' => 'Personalizar o Tipo de Perfil',

		'item:object:custom_group_field' => 'Personalizar o Campo de Grupo',

	

		'profile:custom_profile_type' => 'Personalizar o Tipo de Perfil',

		

		// admin menu 

		'admin:appearance:group_fields' => "Editar Campos do Grupo",

		'admin:appearance:export_fields' => "Exportar Dados do Perfil",

		'admin:appearance:user_summary_control' => "Resumo de Controle de Usuário",



		'admin:groups' => "Grupos",

		'admin:groups:export' => "Exportar grupos",

		

		'admin:users:export' => "Exportar usuários",

		'admin:users:inactive' => "Listar usuários inativos",

	

		// plugin settings

		'profile_manager:settings:registration' => 'Cadastro',

		'profile_manager:settings:edit_profile' => 'Editar Perfil',

		'profile_manager:settings:view_profile' => 'Ver perfil',

		'profile_manager:settings:other' => 'Outro',

	

		'profile_manager:settings:profile_icon_on_register' => 'Adicionar campo de entrada para ícone de perfil obrigatório no formulário de cadastro',

		'profile_manager:settings:simple_access_control' => 'Mostrar apenas um controle de acesso popup na edição do formulário do perfil',

		'profile_manager:settings:default_profile_type' => "Tipo de perfil padrão no formulário de cadastro",

		'profile_manager:settings:hide_profile_type_default' => "Esconder o 'Padrão' no tipo de perfil no formulário de cadastro",

	

		'profile_manager:settings:hide_non_editables' => 'Esconder os campos não editáveis do Editar formulário de Perfil',

	

		'profile_manager:settings:edit_profile_mode' => "Como exibir a tela 'editar perfil'",

		'profile_manager:settings:edit_profile_mode:list' => "Lista",

		'profile_manager:settings:edit_profile_mode:tabbed' => "Em abas",

	

		'profile_manager:settings:show_profile_type_on_profile' => "Mostrar os tipos de perfil dos usuários no perfil",

	

		'profile_manager:settings:display_categories' => 'Selecionar como as diferentes categorias são mostradas no perfil',

		'profile_manager:settings:display_categories:option:plain' => 'Simples',

		'profile_manager:settings:display_categories:option:accordion' => 'Sanfona',

	

		'profile_manager:settings:display_system_category' => 'Mostrar uma categoria extra no perfil com dados do sistema (apenas para administradores)',

	

		'profile_manager:settings:profile_type_selection' => 'Quem pode mudar o tipo de perfil?',

		'profile_manager:settings:profile_type_selection:option:user' => 'Usuário',

		'profile_manager:settings:profile_type_selection:option:admin' => 'Apenas administrador',



		'profile_manager:settings:description_position' => 'Onde posicionar a o campo de descrição("Sobre mim")',

		'profile_manager:settings:user_summary_control' => 'Deixar o Gerenciador de Perfil controlar o resumo do usuário / visualização de lista ',

		

		'profile_manager:settings:enable_profile_completeness_widget' => "Habilitar o widget de completude do perfil",

		'profile_manager:settings:enable_username_change' => "Permitir que usuário mudem seu nome de usuário nas configurações",

		'profile_manager:settings:enable_username_change:option:admin' => "Apenas administrador",

		'profile_manager:settings:enable_site_join_river_event' => "Adicionar um evento river quando pessoas se juntarem a esse site",

		

		'profile_manager:settings:registration:terms' => "Para mostrar um campo 'Aceito os termos' na página de cadastro, por favor preencha a URL para os termos abaixo",

		'profile_manager:settings:registration:extra_fields' => "Onde mostrar campos extras do perfil",

		'profile_manager:settings:registration:extra_fields:extend' => "Formulário de cadastro padrão abaixo",

		'profile_manager:settings:registration:extra_fields:beside' => "Ao lado do formulário de cadastro",

		'profile_manager:settings:registration:free_text' => "Insira texto extra para mostrar na página de cadastro",

		

		// Field Configuration

		'profile_manager:admin:metadata_name' => 'Nome',	

		'profile_manager:admin:metadata_label' => 'Legenda',

		'profile_manager:admin:metadata_hint' => 'Dica',

		'profile_manager:admin:metadata_description' => 'Descrição',

		'profile_manager:admin:metadata_label_translated' => 'Legenda (Traduzida)',

		'profile_manager:admin:metadata_label_untranslated' => 'Legenda (Não traduzida)',

		'profile_manager:admin:metadata_options' => 'Opções (separadas por vírgula)',

		'profile_manager:admin:field_type' => "Tipo de Campo",

		'profile_manager:admin:options:datepicker' => 'Seleção de data',

		'profile_manager:admin:options:pm_datepicker' => 'Seleção de data (Modelo de Gerenciamento de Perfil)',

		'profile_manager:admin:options:dropdown' => 'Popup',

		'profile_manager:admin:options:radio' => 'Radio',

		'profile_manager:admin:options:multiselect' => 'Multi Seleção',

		'profile_manager:admin:options:file' => 'Arquivo',

		'profile_manager:admin:options:pm_rating' => 'Classificação',

		

		'profile_manager:admin:additional_options' => 'Opções Adicionais',

		'profile_manager:admin:show_on_register' => 'Mostrar no formulário de cadastro',	

		'profile_manager:admin:mandatory' => 'Obrigatório',

		'profile_manager:admin:user_editable' => 'O usuário pode editar este campo',

		'profile_manager:admin:output_as_tags' => 'Mostrar no perfil como tags',

		'profile_manager:admin:admin_only' => 'Campo apenas para dministrador',

		'profile_manager:admin:count_for_completeness' => 'Contar este campo no widget de completude do perfil',

		'profile_manager:admin:blank_available' => 'O campo possui uma opção em branco',		

		'profile_manager:admin:option_unavailable' => 'Opção não disponível',

		'profile_manager:admin:subgroups_only' => 'Apenas subgrupos',	//po5i

	

		// field options additionals description

		'profile_manager:admin:show_on_register:description' => "Se você quer que este campo esteja no formulário de cadastro.",	

		'profile_manager:admin:mandatory:description' => "Se você quer que este campo seja obrigatório (se aplica apenas ao formulário de cadastro).",

		'profile_manager:admin:user_editable:description' => "Se definido como 'Não' usuário não podem editar este campo (útil quando os dados são gerenciados em um sistema exerno).",

		'profile_manager:admin:output_as_tags:description' => "A saída de dados será tratada como tags (se aplica apenas no perfil de usuário).",

		'profile_manager:admin:admin_only:description' => "Selecionar 'Sim' se o campo está disponível apenas para administradores.",

		'profile_manager:admin:blank_available:description' => "Selecionar Select 'Sim' se uma opção em branco deve ser adicionada às opções de campo",	

	

		// profile fields

		'profile_manager:profile_fields:list:title' => "Campos de Perfil",	

	

		'profile_manager:profile_fields:no_fields' => "Atualmente nenhum campo foi configurado utilizando o plugin Gerenciador de Perfil. Adicione o seu próprio ou importe através de uma das ações abaixo.",

		

		'profile_manager:profile_fields:add' => "Adicionar um novo campo de perfil",

		'profile_manager:profile_fields:edit' => "Editar um campo de perfil",

		'profile_manager:profile_fields:add:description' => "Aqui você pode editar os campos que um usuário pode editar em seu perfil",

	

		// group fields

		'profile_manager:group_fields:list:title' => "Campos de Perfil de Grupo",	

	

		'profile_manager:group_fields:add:description' => "Aqui você pode editar os campos que aparecem em uma página de perfil de grupo",

		'profile_manager:group_fields:add' => "Adicionar um novo campo de perfil de grupo",

		'profile_manager:group_fields:edit' => "Editar um campo de perfil de grupo",

	

		// Custom fields categories

		'profile_manager:categories:add' => "Adicionar uma nova categoria",

		'profile_manager:categories:edit' => "Editar uma categoria",

		'profile_manager:categories:list:title' => "Categorias",

		'profile_manager:categories:list:default' => "Padrão",

		'profile_manager:categories:list:system' => "Sistema (apenas administrador)",	

		'profile_manager:categories:list:view_all' => "Ver todos os campos",

		'profile_manager:categories:list:no_categories' => "Nenhuma categoria definida",

		'profile_manager:categories:delete:confirm' => "Você tem certeza que deseja excluir esta categoria?",

		

		// Custom Profile Types

		'profile_manager:profile_types:add' => "Adicionar um novo tipo de perfil",

		'profile_manager:profile_types:edit' => "Editar um tipo de perfil",

		'profile_manager:profile_types:list:title' => "Tipos de Perfil",

		'profile_manager:profile_types:list:no_types' => "Nenhum tipo de perfil definido",

		'profile_manager:profile_types:delete:confirm' => "Você tem certeza que deseja excluir este tipo de perfil?",

		'profile_manager:user_details:profile_type' => "Tipo de Perfil",

		

		// User Summary Control

		'profile_manager:user_summary_control:config' => "Configuração",

		'profile_manager:user_summary_control:info' => "Adicionar campos aos diferentes containers e ver na prévia o resultado da configuração. Se você estiver satisfeito pode 'Salvar' a configuração.",

		

		'profile_manager:user_summary_control:container:title' => "Título",

		'profile_manager:user_summary_control:container:entity_menu' => "Menu da Entidade",

		'profile_manager:user_summary_control:container:subtitle' => "Subtitulo",

		'profile_manager:user_summary_control:container:content' => "Conteúdo",

		

		'profile_manager:user_summary_control:options:spacers' => "Espaçadores",

		'profile_manager:user_summary_control:options:spacers:new_line' => "Nova linha",

		'profile_manager:user_summary_control:options:spacers:space' => "Espaço",

		'profile_manager:user_summary_control:options:spacers:dash' => "-",

		

		// profile manager inactive users

		'profile_manager:admin:users:inactive:last_login' => "Último login",

		'profile_manager:admin:users:inactive:list' => "Usuários inativos",

		'profile_manager:admin:users:inactive:never' => "Nunca",

		'profile_manager:admin:users:inactive:download' => "Download",

	

		// admin actions

		'profile_manager:actions:title' => 'Ações',

	

		// Reset

		'profile_manager:actions:reset:description' => 'Remove todos os campos de perfil personalizados',

		'profile_manager:actions:reset:confirm' => 'Você tem certeza que deseja resetar todos os campos de perfil?',

		'profile_manager:actions:reset:error:unknown' => 'Um erro desconhecido ocorreu durante a tentativa de resetar todos os campos de perfil',

		'profile_manager:actions:reset:error:wrong_type' => 'Tipo de campo de perfil errado (grupo ou perfil)',

		'profile_manager:actions:reset:success' => 'Campos resetados com sucesso',

	

		// import from custom

		'profile_manager:actions:import:from_custom' => 'Importar campos personalizados',

		'profile_manager:actions:import:from_custom:description' => 'Importa campos de perfil previamente definidos (com a funcionalidade Elgg padrão)',

		'profile_manager:actions:import:from_custom:confirm' => 'Você tem certeza que deseja importar campos personalizados?',

		'profile_manager:actions:import:from_custom:no_fields' => 'Nenhum campo personalizado disponíel para importação',

		'profile_manager:actions:import:from_custom:new_fields' => 'Novos campos <b>%s</b> importados com sucesso',

	

		// import from default

		'profile_manager:actions:import:from_default' => 'Importar campos padrão',

		'profile_manager:actions:import:from_default:description' => "Importa campos padrão do Elgg",

		'profile_manager:actions:import:from_default:confirm' => 'Você tem certeza que deseja importar campos padrão?',

		'profile_manager:actions:import:from_default:no_fields' => 'Nenhum campo padrão disponível para importação',

		'profile_manager:actions:import:from_default:new_fields' => 'Novos campos <b>%s</b> importados com sucesso',

		'profile_manager:actions:import:from_default:error:wrong_type' => 'Tipo de campo de perfil errado (grupo ou perfil)',

	

		// Export

		'profile_manager:actions:export' => "Exportar",

		'profile_manager:actions:export:description' => "Exportar dados do perfil para um arquivo csv",

		'profile_manager:export:title' => "Exportar Dados do Perfil",

		'profile_manager:export:description:custom_profile_field' => "Esta função irá exportar todos os metadados de <b>usuário</b> basedos nos campos selecionados.",

		'profile_manager:export:description:custom_group_field' => "Esta função irá exportar todos os metadados de <b>grupo</b> baseados nos campos selecionados.",

		'profile_manager:export:list:title' => "Selecione os campos que você deseja exportar",

		'profile_manager:export:nofields' => "Nenhum campo de perfil personalizado disponível para exportação",

	

		// Configuration Backup and Restore

		'profile_manager:actions:configuration:backup' => "Backup",

		'profile_manager:actions:configuration:backup:description' => "Realizar backup das configurações destes campos (categorias e tipos não são considerados)",

		'profile_manager:actions:configuration:restore' => "Restaurar",

		'profile_manager:actions:configuration:restore:description' => "Restaure um arquivo de configuração salvo por backup prévio (<b>you will loose relations between fields and categories</b>)",

		

		'profile_manager:actions:configuration:restore:upload' => "Restaurar",

	

		'profile_manager:actions:restore:success' => "Restauração bem sucedida",

		'profile_manager:actions:restore:error:deleting' => "Erro durante a restauração: não foi possível excluir os campos atuais",	

		'profile_manager:actions:restore:error:fieldtype' => "Erro durante a restauração: os tipos de campo não combinam",

		'profile_manager:actions:restore:error:corrupt' => "Erro durante a restauração: o arquivo de backup parece estar corrompido ou há informações faltando",

		'profile_manager:actions:restore:error:json' => "Erro durante a restauração: arquivo json inválido",

		'profile_manager:actions:restore:error:nofile' => "Erro durante a restauração: nenhum arquivo carregado",

	

		// new

		'profile_manager:actions:new:success' => 'Novo campo de perfil personalizado adicionado com sucesso',	

		'profile_manager:actions:new:error:metadata_name_missing' => 'Nenhum nome de metadados fornecido',	

		'profile_manager:actions:new:error:metadata_name_invalid' => 'O nome dos metadados é inválido',	

		'profile_manager:actions:new:error:metadata_options' => 'Você precisa entrar em opções quando estiver usando este tipo',	

		'profile_manager:actions:new:error:unknown' => 'Um erro desconhecido ocorreu enquanto o novo campo de perfil customizado estava sendo salvo',

		'profile_manager:action:new:error:type' => 'Tipo de campo de perfil errado (grupo ou perfil)',

		

		// edit

		'profile_manager:actions:edit:error:unknown' => 'Erro durante a busca de dados de campos de perfil',

	

		//delete

		'profile_manager:actions:delete:confirm' => 'Você tem certeza que deseja excluir este campo?',

		'profile_manager:actions:delete:error:unknown' => 'Um erro desconhecido ocorreu durante a exclusão',



		// toggle option

		'profile_manager:actions:toggle_option:error:unknown' => 'Um erro desconhecido ocorreu durante a mudança de opção',

	

		// category to field

		'profile_manager:actions:change_category:error:unknown' => "Um erro desconhecido ocorreu durante a mudança de categoria",

	

		// add category

		'profile_manager:action:category:add:error:name' => "Nenhum nome ou nome inválido fornecido para a categoria",

		'profile_manager:action:category:add:error:object' => "Erro durante a criação do objeto categoria ",

		'profile_manager:action:category:add:error:save' => "Erro enquanto o objeto categoria estava sendo salvo",

		'profile_manager:action:category:add:succes' => "A categoria foi criada com sucesso",

	

		// delete category

		'profile_manager:action:category:delete:error:guid' => "Nenhum GUID fornecido",

		'profile_manager:action:category:delete:error:type' => "O GUID fornecido não é uma categoria do campo de perfil personalizado",

		'profile_manager:action:category:delete:error:delete' => "Um erro ocorrou durante a exclusão da categoria",

		'profile_manager:action:category:delete:succes' => "A categoria foi excluída com sucesso",

	

		// add profile type

		'profile_manager:action:profile_types:add:error:name' => "Nenhum nome ou nome inválido fornecido para o Tipo de Perfil Personalizado",

		'profile_manager:action:profile_types:add:error:object' => "Erro durante a criação do Tipo de Perfil Personalizado",

		'profile_manager:action:profile_types:add:error:save' => "Erro enquanto o Tipo de Perfil Personalizado estava sendo salvo",

		'profile_manager:action:profile_types:add:succes' => "O Tipo de Perfil Personalizado foi criado com sucesso",

		

		// delete profile type

		'profile_manager:action:profile_types:delete:error:guid' => "Nenhum GUID forncido",

		'profile_manager:action:profile_types:delete:error:type' => "O GUID fornecido não é um Tipo de Perfil Personalizado",

		'profile_manager:action:profile_types:delete:error:delete' => "Um erro desconhecido ocorreu durante a exclusão do Tipo de Perfil Personalizado",

		'profile_manager:action:profile_types:delete:succes' => "O Tipo de Perfil Personalizado foi excluído com sucesso",

		

		// change username action

		'profile_manager:action:username:change:succes' => "Seu nome de usuário foi alterado com sucesso",

	

		// Tooltips

		'profile_manager:tooltips:profile_field' => "

			<b>Campo de Perfil</b><br />

			Aqui você pode adicionar um novo campo de perfil.<br /><br />

			Se você deixar a legenda vazia, você pode internacionalizar a legenda do campo de perfil (<i>profile:[name]</i>).<br /><br />

			Use o campo de dica para fornecer formulários de entrada (cadastro e perfil/edição de grupo) um ícone suspenso com uma descrição de campo.

			Se você deixar a dica vazia, você pode internacionalizar a dica (<i>profile:hint:[name]</i>).<br /><br />

			As opções são obrigatórias apenas para tipos de campo <i>Popup, Radio e Multi Seleção</i>.

		",

		'profile_manager:tooltips:profile_field_additional' => "

			<b>Mostrar no cadastro</b><br />

			Se você quer que este campo esteja no formulário de cadastro.<br /><br />

			

			<b>Obrigatório</b><br />

			Se você quer que este campo seja obrigatório (se aplica apenas ao formulário de cadastro).<br /><br />

			

			<b>Editável pelo usuário</b><br />

			Se definido como 'Não' usuários não podem editar este campo (útil quando os dados são gerenciados em um sistema externo).<br /><br />

			

			<b>Mostrar como tags</b><br />

			A saída de dados será tratada como tags (se aplica apenas ao perfil do usuário).<br /><br />

			

			<b>Campo apenas para administradores</b><br />

			Selecione 'Sim' se o campo está disponível apenas para administradores.

		",

		'profile_manager:tooltips:category' => "

			<b>Categoria/b><br />

			Aqui você pode adicionar uma nova categoria de perfil.<br /><br />

			Se você deixar a legenda vazia, você pode internacionalzar a legenda da categoria (<i>profile:categories:[name]</i>).<br /><br />

			

			Se os Tipos de Perfil estão definidos você pode escolher em qual tipo de perfil esta categoria se aplica. Se nenhum perfil for especificado, a categoria se aplicará a todos os tipos de perfil (até os indefinidaos).

		",

		'profile_manager:tooltips:category_list' => "

			<b>Categorias</b><br />

			Mostra uma lista de todas as categorias configuradas.<br /><br />

			

			<i>Padrão</i> é a categoria que se aplica a todos os perfis.<br /><br />

			

			Adicionar campos à essas categorias arrastando-os até elas.<br /><br />

			

			Clique na legenda da categoria para filtrar os campos visíveis. Clicando em ver todos os campos todos os campos são mostrados.<br /><br />

			

			Você também pode mudar a ordem das categorias arrastando-as (<i>As Padrão não podem ser arrastadas</i>. <br /><br />

			

			Clique no ícone de edição para editar a categoria.

		",

		'profile_manager:tooltips:profile_type' => "

			<b>Tipo de Perfil</b><br />

			Aqui você pode adicionar um novo tipo de perfil.<br /><br />

			Se você deixar a legenda vazia , você pode internacionalizar a legenda de tipo de perfil (<i>profile:types:[name]</i>).<br /><br />

			Insira uma descrição que os usuários poderão ver quando estiverem selecionando este tipo de perfil ou deixe vazio para internacionalizar (<i>profile:types:[name]:description</i>).<br /><br />

			

			Se as Categorias estão definidas você pode escolher quais se aplicam a este tipo de perfil.

		",

		'profile_manager:tooltips:profile_type_list' => "

			<b>Tipos de Perfil</b><br />

			Mostra uma lista de todos os tipos de perfil configurados.<br /><br />

			Clique no ícone de edição para editar este tipo de perfil.

		",

		'profile_manager:tooltips:actions' => "

			<b>Ações</b><br />

			Várias ações relacionadas à estes campos de perfil.

		",

	

		// widgets

		'widgets:profile_completeness:title' => 'Completude do Perfil',

		'widgets:profile_completeness:description' => 'Mostrar a completude do perfil',

		'widgets:profile_completeness:view:tips' => 'Dica! Atualize seu %s para melhorar a Completude do Perfil.',

		'widgets:profile_completeness:view:complete' => 'Parabéns! Se perfil está 100% completo!',

		

		'widgets:register:title' => "Cadastro",

		'widgets:register:description' => "Mostrar a tela de registro",

		'widgets:register:loggedout' => "Você precisa estar logado para usar este widget",

	

		// datepicker		

		'profile_manager:datepicker:trigger' => 'Selecione uma data',

		'profile_manager:datepicker:output:dateformat' => '%a %d %b %Y', // For available notations see http://nl.php.net/manual/en/function.strftime.php

		'profile_manager:datepicker:input:localisation' => '', // change it to the available localized js files in custom_profile_fields/vendors/jquery.datepick.package-3.5.2 (e.g. jquery.datepick-nl.js), leave blank for default 

		'profile_manager:datepicker:input:dateformat' => '%m/%d/%Y', // Notation is based on strftime, but must result in output like http://keith-wood.name/datepick.html#format

		'profile_manager:datepicker:input:dateformat_js' => 'mm/dd/aaaa', // Notation is based on strftime, but must result in output like http://keith-wood.name/datepick.html#format



		'profile_manager:input:multi_select:empty_text' => 'Por favor, selecione ...',

	

		// Edit profile => profile type selector

		'profile_manager:profile:edit:custom_profile_type:label' => "Selecione seu tipo de perfil",

		'profile_manager:profile:edit:custom_profile_type:description' => "Descrição do tipo de perfil selecionado",

		'profile_manager:profile:edit:custom_profile_type:default' => "Padrão",

	

		// non_editable

		'profile_manager:non_editable:info' => 'Este campo não pode ser editado',

		

		// register form mandatory notice

		'profile_manager:register:mandatory' => "Itens marcados com * são obrigatórios",

		

		// register profile icon

		'profile_manager:register:profile_icon' => 'Este site exige que você faça upload de um ícone de perfil',

		

		// register accept terms

		'profile_manager:registration:accept_terms' => "Eu li e aceito os %sTermos de Serviço%s",

	

		// simple access control

		'profile_manager:simple_access_control' => 'Selecione quem pode ver suas informações de perfil',

	

		// register pre check

		'profile_manager:register_pre_check:missing' => 'O próximo campo deve ser preenchido: %s',

		'profile_manager:register_pre_check:terms' => 'Você precisa aceitar os termos para completar o cadastro',

		'profile_manager:register_pre_check:profile_icon:error' => 'Erro durante o upload do seu ícone de perfil (provavelmente relacionado ao tamanho do arquivo)',

		'profile_manager:register_pre_check:profile_icon:nosupportedimage' => 'O Ícone do perfil carregado não está no tipo adequado (jpg, gif, png)',

	

		// Admin add user form

		'profile_manager:admin:adduser:notify' => "Notificar usuário",

		'profile_manager:admin:adduser:use_default_access' => "Metadados extra criados com base no nível de acesso padrão do site",

		'profile_manager:admin:adduser:extra_metadata' => "Adicionar dados extras ao perfil",

		

		// change username form

		'profile_manager:account:username:button' => "Clique para mudar seu nome de usuário",

		'profile_manager:account:username:info' => "Mude seu nome de usuário. Um ícone irá te informar se o nome de usuário inserido é válido e disponível.",

		

		// river events

		'river:join:site:default' => '%s se juntou ao site',

	

		// login history

		'profile_manager:account:login_history' => "Histórico de Login",

		'profile_manager:account:login_history:date' => "Data",

		'profile_manager:account:login_history:ip' => "Endereço IP",

		'profile_manager:profile:communities' => "Comunidades",

		'profile_manager:profile:groups' => "Grupos de Escrita",

		'profile_manager:profile:no_groups' => "Nenhum grupo encontrado",

		'profile_manager:profile:no_communities' => "Nenhuma comunidade encontrada",

		//AO: Abril 30, términos
		'profile_manager:terms' => "Condições",
		'profile_manager:t1' => "Termos básicos",
		'profile_manager:t2' => "Condições gerais",
		'profile_manager:p1' => "Se você utiliza o serviço comunidad.proyectolatin.org, deve aceitar os seguintes termos e condições (Termos de Uso), que regem nossa relação com todos aqueles que interagem com  comunidad.proyectolatin.org.",
		'profile_manager:l1' => "<ol><li>Você é responsável por qualquer atividade que ocorra em seu nome de usuário..</li>
		<li>Você é responsável por manter sua senha segura..</li>
		<li>Você não deve abusar, acusar, ameaçar, intimidar ou suplantar outros usuários de  comunidad.proyectolatin.org.</li>
		<li>Você não pode usar o serviço  comunidad.proyectolatin.org para nenhum propósito ilegal ou não autorizado. Os usuários internacionais se comprometem a cumprir todas as leis locais sobre conduta e conteúdo aceito.</li>
		<li>Você é o único responsável por sua conduta e por qualquer dado, texto, informação, nomes de exibição, gráficos, fotos, perfis, áudio e videoclipes, links (“Conteúdo”) que você envie, publique e exiba no serviço comunidad.proyectolatin.org.</li>
		<li>comunidad.proyectolatin.org é para uso pessoal, não é uma solução de negócio. Os usos profissionais ou empresariais de comunidad.proyectolatin.org estão por sua conta e risco.</li>
		<li>Você não deve mudar, adaptar ou hackear comunidad.proyectolatin.org ou modificar outro web site para indicar falsamente que está associado a  comunidad.proyectolatin.org.</li>
		<li>Você não deve criar ou enviar e-mails não desejados ou anúncios à  comunidad.proyectolatin.org ou à qualquer um de seus membros ('Spam').</li>
		<li>Você não deve transmitir nenhum worm, vírus ou qualquer código de natureza destrutiva.</li>
		<li>Você não deve, usando comunidad.proyectolatin.org, violar qualquer lei em sua jurisdição (incluindo, mas não limitado às leis de direitos autorais).</li>
		<li>Qualquer perda de dados não é responsabilidade de comunidad.proyectolatin.org. O uso deste serviço é feito por sua conta e risco.</li>
		</ol>",
		'profile_manager:p2' => "A violação de qualquer um destes acordos terá como resultado o cancelamento de sua conta em  comunidad.proyectolatin.org. Enquanto comunidad.proyectolatin.org proíbe tal conduta e conteúdo em seu site, você entende e aceita que comunidad.proyectolatin.org não pode ser responsável pelo conteúdo publicado em seu web site e, apesar de nossos melhores esforços, pode estar exposto a tais materiais. Você utiliza o serviço comunidad.proyectolatin.org por sua conta e risco.",
		'profile_manager:l2' => "<ul>
		<li>Reservamo-nos o direito de modificar ou encerrar o serviço  comunidad.proyectolatin.org, por qualquer motivo, com prévio aviso.</li>
		<li>Reservamo-nos o direito de modificar estes Termos de uso a qualquer momento. Se as modificações constituem uma mudança substancial nas condições de uso, notificaremos os usuários através de um método apropriado. Deixamos a nosso critério o que é uma “mudança substancial”.</li>
		<li>Reservamo-nos o direito de reivindicar nomes de usuário em nome de empresas ou indivíduos que tenham Direitos ou marca comercial sobre estes nomes de usuário.</li>
		</ul>",
		'profile_manager:t3' => "Publicidade",
		'profile_manager:l3' => "<ul>
		<li>A publicidade de bens e serviços está proibida no site da comunidade.</li>
		<li>Os usuários que não cumprirem com estas condições serão proibidos e o conteúdo ofensivo será apagado, a nosso critério, com ou sem notificação.</li>
		</ul>",
		'profile_manager:t4' => "Direitos autorais(O que é seu é seu)",
		'profile_manager:p3' => "Não exigimos os direitos de propriedade intelectual sobre qualquer material que você forneça/faça upload ou contribua ao serviço comunidad.latinproject.org.<p>Se tiver alguma dúvida, encaminhe ao e-mail contacto@latinproject.org</p>",
		'profile_manager:priv' => "Privacidade",
		'profile_manager:priv:p1' => "Você é dono de seu conteúdo. O projeto LATIn não é responsável pelo conteúdo publicado neste site por parte de terceiros.",


	);

	

	add_translation("pt", $port);

	
