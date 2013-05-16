<?php

/**

* Elgg send a message action page

* 

* @package ElggMessages

*/



$port = array(

	/**

	* Menu items and titles

	*/



	'messages' => "Mensagens",

	'messages:unreadcount' => "%s não lidas",

	'messages:back' => "voltar para mensages",

	'messages:user' => "Caixa de entrada de %s",

	'messages:posttitle' => "Mensagens de %s: %s",

	'messages:inbox' => "Caixa de Entrada",

	'messages:send' => "Enviar",

	'messages:sent' => "Enviadas",

	'messages:message' => "Mensagem",

	'messages:title' => "Assunto",

	'messages:to' => "Para",

	'messages:from' => "De",

	'messages:fly' => "Enviada",

	'messages:replying' => "Mensagem em resposta a",

	'messages:inbox' => "Caixa de Entrada",

	'messages:sendmessage' => "Enviar uma mensagem",

	'messages:compose' => "Escrever uma mensagem",

	'messages:add' => "Escrever uma mensagem",

	'messages:sentmessages' => "Mensagens enviadas",

	'messages:recent' => "Mensagens recentes",

	'messages:original' => "Mensagem original",

	'messages:yours' => "Sua mensagem",

	'messages:answer' => "Responder",

	'messages:toggle' => 'Alternar todas',

	'messages:markread' => 'Marcar como lida',

	'messages:recipient' => 'Escolher um recipiente&hellip;',

	'messages:to_user' => 'Para: %s',

	'messages:date' => 'Data',

	'messages:new' => 'Nova mensagem',



	'notification:method:site' => 'Site',



	'messages:error' => 'Houve um problema ao salvar sua mensagem. Por favor, tente novamente.',



	'item:object:messages' => 'Mensagens',



	/**

	* Status messages

	*/



	'messages:posted' => "Sua mensagem foi enviada com sucesso.",

	'messages:success:delete:single' => 'A mensagem foi excluída',

	'messages:success:delete' => 'Mensagens excluídas',

	'messages:success:read' => 'Mensagens marcadas como lidas',

	'messages:error:messages_not_selected' => 'Nenhuma mensagem selecionada',

	'messages:error:delete:single' => 'Não é possivel excluir a mensagem',



	/**

	* Email messages

	*/



	'messages:email:subject' => 'Você tem uma nova mensagem!',

	'messages:email:body' => "Você tem uma nova mensagem de %s. Lê-se:





	%s





	Para ver suas mensagens, clique aqui:



	%s



	Para enviar uma mensagem para %s, clique aqui:



	%s



	Não responda este email.",



	/**

	* Error messages

	*/



	'messages:blank' => "Desculpe; você precisa escrever algo no corpo da mensagem antes de salvá-la.",

	'messages:notfound' => "Desculpe; não pudemos encontrar a mensagem especificada.",

	'messages:notdeleted' => "Desculpe; não pudemos excluir esta mensagem.",

	'messages:nopermission' => "Você não tem permissão para alterar esta mensagem.",

	'messages:nomessages' => "Não há mensagens.",

	'messages:user:nonexist' => "Nós não pudemos encontrar o recipient no banco de dados de usuários.",

	'messages:user:blank' => "Você não selecionou os destinatários desta mensagem.",



	'messages:deleted_sender' => 'Usuário excluído',



);

		

add_translation("pt", $port);
