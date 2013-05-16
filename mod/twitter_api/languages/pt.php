<?php

/**

 * An english language definition file

 */



$port = array(

	'twitter_api' => 'Serviços do Twitter',



	'twitter_api:requires_oauth' => 'Os Serviços do Twitter exigem o plugin das Bibliotecas OAuth para serem habilitados.',



	'twitter_api:consumer_key' => 'Chave do Consumidor',

	'twitter_api:consumer_secret' => 'Segredo do Consumidor',



	'twitter_api:settings:instructions' => 'Você deve obter uma chave e um segredo de consumidor do <a href="https://dev.twitter.com/apps/new" target="_blank">Twitter</a>. Preencha a nova aplicação. Selecione "Browser" como o tipo de aplicação e "Read & Write" para o tipo de acesso. A url callback é %stwitter_api/authorize',



	'twitter_api:usersettings:description' => "Vincule sua conta %s com o Twitter.",

	'twitter_api:usersettings:request' => "Primeiro você deve <a href=\"%s\">autorizar</a> %s para acessar sua conta no Twitter.",

	'twitter_api:usersettings:cannot_revoke' => "Você não pode desvincular sua conta com o Twitter porque você não forneceu um endereço de email ou senha. <a href=\"%s\">Forneça-os agora</a>.",

	'twitter_api:authorize:error' => 'Não é possível autorizar o Twitter.',

	'twitter_api:authorize:success' => 'O acesso ao Twitter foi autorizado.',



	'twitter_api:usersettings:authorized' => "Você autorizou %s à acessar sua conta no Twitter: @%s.",

	'twitter_api:usersettings:revoke' => 'Clique <a href="%s">aqui</a> para revogar o acesso.',

	'twitter_api:usersettings:site_not_configured' => 'Um administrador deve primeiro configurar o Twitter antes que ele possa ser utilizado.',



	'twitter_api:revoke:success' => 'O acesso ao Twitter foi revogado.',



	'twitter_api:login' => 'Permitir que usuários existentes que conectaram sua conta no Twitter efetuem login através do Twitter?',

	'twitter_api:new_users' => 'Permitir que novos usuários efetuem login utilizando sua conta no Twitter mesmo se o cadastro de usuário estiver desativado?',

	'twitter_api:login:success' => 'Você está logado.',

	'twitter_api:login:error' => 'Não foi possivel efetuar login com o Twitter.',

	'twitter_api:login:email' => "Você deve inserir um endereço de email válido para sua nova conta no %s.",



	'twitter_api:invalid_page' => 'Página inválida',



	'twitter_api:deprecated_callback_url' => 'A URL callback mudou de Twitter API para %s. Por favor, peça ao seu administrador para mudá-la.',



	'twitter_api:interstitial:settings' => 'Modifique suas configurações',

	'twitter_api:interstitial:description' => 'Você\ está quase pronto para usar %s! Nós precisamos de alguns detalhes adicionais antes que você possa continar. Eles são opcionais, mas permitirão que você se faça login se o Twitter cair ou se você decidir desvincular suas contas.',



	'twitter_api:interstitial:username' => 'Este é o seu nome de usuário. Ele não pode ser mudado. Se você definir uma senha, você pode usar o nome de usuário ou endereço de email para efetuar login.',



	'twitter_api:interstitial:name' => 'Este é o nome que as pessoas verão quando interagirem com você.',



	'twitter_api:interstitial:email' => 'Seu endereço de email. Outros usuários não poderão vê-lo por padrão.',



	'twitter_api:interstitial:password' => 'Uma senha para efetuar login se o Twitter cair ou você decidir desvincular suas contas.',

	'twitter_api:interstitial:password2' => 'A mesma senha, novamente.',



	'twitter_api:interstitial:no_thanks' => 'Não, obrigado',



	'twitter_api:interstitial:no_display_name' => 'Você deve ter um nome para exibição.',

	'twitter_api:interstitial:invalid_email' => 'Você deve inserir um endereço de email válido ou nada.',

	'twitter_api:interstitial:existing_email' => 'Este endereço de email já está cadastrado neste site.',

	'twitter_api:interstitial:password_mismatch' => 'Suas senhas não correspondem uma à outra.',

	'twitter_api:interstitial:cannot_save' => 'Não foi possível salvar os detalhes da conta.',

	'twitter_api:interstitial:saved' => 'Detalhes da conta salvos!',

);



add_translation('pt', $port);
