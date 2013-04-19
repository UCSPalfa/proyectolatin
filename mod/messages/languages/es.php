<?php
/**
* Elgg send a message action page
* 
* @package ElggMessages
*/

$spanish = array(
	/**
	* Menu items and titles
	*/

	'messages' => "Mensajes",
	'messages:unreadcount' => "%s no leídos",
	'messages:back' => "regresar a mensajes",
	'messages:user' => "Bandeja de entrada de %s",
	'messages:posttitle' => "Mensajes de %s: %s",
	'messages:inbox' => "Bandeja de entrada",
	'messages:send' => "Enviar",
	'messages:sent' => "Enviado",
	'messages:message' => "Mensaje",
	'messages:title' => "Asunto",
	'messages:to' => "Para",
	'messages:from' => "De",
	'messages:fly' => "Enviar",
	'messages:replying' => "Mensaje en respuesta a",
	'messages:inbox' => "Bandeja de entrada",
	'messages:sendmessage' => "Enviar un mensaje",
	'messages:compose' => "Redactar un mensaje",
	'messages:add' => "Redactar un mensaje",
	'messages:sentmessages' => "Mensajes enviados",
	'messages:recent' => "Mensajes recientes",
	'messages:original' => "Mensaje original",
	'messages:yours' => "Su mensaje",
	'messages:answer' => "Responder",
	'messages:toggle' => 'Cambiar todos',
	'messages:markread' => 'Marcar como leído',
	'messages:recipient' => 'Seleccionar un destinatario&hellip;',
	'messages:to_user' => 'Para: %s',
	'messages:date' => 'Fecha',
	'messages:new' => 'Nuevo mensaje',

	'notification:method:site' => 'Sitio',

	'messages:error' => 'Hubo un problema guardando su mensaje. Por favor inténtelo nuevamente.',

	'item:object:messages' => 'Mensajes',

	/**
	* Status messages
	*/

	'messages:posted' => "Su mensaje fue enviado exitosamente.",
	'messages:success:delete:single' => 'El mensaje fue eliminado',
	'messages:success:delete' => 'Mensajes eliminados',
	'messages:success:read' => 'Mensajes marcados como leídos',
	'messages:error:messages_not_selected' => 'Ningún mensaje seleccionado',
	'messages:error:delete:single' => 'No es posible eliminar el mensaje',

	/**
	* Email messages
	*/

	'messages:email:subject' => 'Tiene un nuevo mensaje!',
	'messages:email:body' => "Usted tiene un nuevo mensaje de %s. Dice:


	%s


	Para ver sus mensajes, haga clic aquí:

	%s

	Para enviarle un mensaje a %s, haga clic aquí:

	%s

	Por favor no responda a este correo.",

	/**
	* Error messages
	*/

	'messages:blank' => "Lo sentimos, usted debe escribir el mensaje para poder guardarlo.",
	'messages:notfound' => "Lo sentimos, no pudimos encontrar el mensaje especificado.",
	'messages:notdeleted' => "Lo sentimos, no pudimos eliminar el mensaje.",
	'messages:nopermission' => "Usted no tiene permisos para modificar este mensaje.",
	'messages:nomessages' => "No hay mensajes.",
	'messages:user:nonexist' => "No fue posible encontrar el destinatario en la base de datos de usuarios.",
	'messages:user:blank' => "Usted no ha seleccionado a quién enviarle este mensaje.",

	'messages:deleted_sender' => 'Usuario eliminado',

);
		
add_translation("es", $spanish);