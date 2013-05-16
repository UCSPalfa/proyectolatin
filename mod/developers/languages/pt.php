<?php

/**

 * Elgg developer tools English language file.

 *

 */



$port = array(

	// menu

	'admin:develop_tools' => 'Ferramentas',

	'admin:develop_tools:preview' => 'Theming Sandbox',

	'admin:develop_tools:inspect' => 'Inspecionar',

	'admin:develop_tools:unit_tests' => 'Testes de unidade',

	'admin:developers' => 'Desenvolvedores',

	'admin:developers:settings' => 'Configurações',



	// settings

	'elgg_dev_tools:settings:explanation' => 'Controle suas configurações de desenvolvimento e depuração abaixo. Algumas dessas configurações também estão disponíveis em outras páginas de administrador.',

	'developers:label:simple_cache' => 'Usar o cache simples',

	'developers:help:simple_cache' => 'Desligar este cache quando estiver desenvolvendo. Caso contrário, mudanças no CSS e JavaScript serão ignoradas.',

	'developers:label:system_cache' => 'Usar cache do sistema',

	'developers:help:system_cache' => 'Desligar este quando estiver desenvolvendo. Caso contrário, mudanças em seus plugins não serão registradas.',

	'developers:label:debug_level' => "Rastrear nível",

	'developers:help:debug_level' => "Isto controla a quantidade de informação registrada. Veja elgg_log() para mais informações.",

	'developers:label:display_errors' => 'Mostrar erros fatais do PHP',

	'developers:help:display_errors' => "Por padrão, o arquivo Elgg's .htaccess file omite a visualização de erros fatais.",

	'developers:label:screen_log' => "Log para tela",

	'developers:help:screen_log' => "Isto mostra a saída de elgg_log() e elgg_dump() na web page.",

	'developers:label:show_strings' => "Mostrar tradução simples das strings",

	'developers:help:show_strings' => "Isto mostra a tradução das strings utilizadas por elgg_echo().",

	'developers:label:wrap_views' => "Encobrir visualizações",

	'developers:help:wrap_views' => "Isto encobre quase todas as visualizações com comentários HTML. Útil para encontrar a visualização de um HTML em particular.",

	'developers:label:log_events' => "Eventos de log e plugin hooks",

	'developers:help:log_events' => "Escreva eventos e plugin hooks para o log. Aviso: há muitos destes por página.",



	'developers:debug:off' => 'Desligado',

	'developers:debug:error' => 'Erro',

	'developers:debug:warning' => 'Aviso',

	'developers:debug:notice' => 'Note',

	

	// inspection

	'developers:inspect:help' => 'Inspecionar configuração do Elgg framework.',



	// event logging

	'developers:event_log_msg' => "%s: '%s, %s' em %s",



	// theme preview

	'theme_preview:general' => 'Introdução',

	'theme_preview:breakout' => 'Tirar do iframe',

	'theme_preview:buttons' => 'Botões',

	'theme_preview:components' => 'Componentes',

	'theme_preview:forms' => 'Formas',

	'theme_preview:grid' => 'Grade',

	'theme_preview:icons' => 'Ícones',

	'theme_preview:modules' => 'Módulos',

	'theme_preview:navigation' => 'Navegação',

	'theme_preview:typography' => 'Tipografia',

	'theme_preview:miscellaneous' => 'Diversos',



	// unit tests

	'developers:unit_tests:description' => 'Elgg possui testes de unidade e integraçãop para detectar bugs em suas classes e funções do núcleo.',

	'developers:unit_tests:warning' => 'Aviso: Não Execute Estes Testes num Site em Produção. Eles Podem Corromper seu Banco de Dados.',

	'developers:unit_tests:run' => 'Executar',



	// status messages

	'developers:settings:success' => 'Configurações salvas',

);



add_translation('pt', $port);
