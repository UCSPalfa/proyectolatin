<?php

$spanish = array(

	/**
	 * Menu items and titles
	 */

	'messageboard:board' => "Tablón de mensajes",
	'messageboard:messageboard' => "tablón de mensajes",
	'messageboard:viewall' => "Ver todos",
	'messageboard:postit' => "Publicar",
	'messageboard:history:title' => "Historial",
	'messageboard:none' => "No hay mensajes por mostrar aún",
	'messageboard:num_display' => "Número de mensajes para mostrar",
	'messageboard:desc' => "Este es un tablón de mensajes que usted puede poner en su perfil donde otros usuarios pueden comentar.",

	'messageboard:user' => "tablón de mensajes de %s",

	'messageboard:replyon' => 'responder sobre',
	'messageboard:history' => "historial",

	'messageboard:owner' => 'tablón de mensajes de %s',
	'messageboard:owner_history' => 'publicaciones de %s sobre el tablón de mensajes de %s',

	/**
	 * Message board widget river
	 */
	'river:messageboard:user:default' => "%s publicó en el tablón de mensajes de %s",

	/**
	 * Status messages
	 */

	'messageboard:posted' => "Usted ha publicado exitosamente en el tablón de mensajes.",
	'messageboard:deleted' => "Usted ha eliminado exitosamente el mensaje.",

	/**
	 * Email messages
	 */

	'messageboard:email:subject' => 'Usted tiene un nuevo comentario en su tablón de mensajes',
	'messageboard:email:body' => "Usted tiene un nuevo comentario de %s en su tablón de mensajes. El mensaje dice:


%s


Para ver los comentarios en su tablón de mensajes, haga clic aquí:

	%s

Para ver el perfil de %s, haga clic aquí:

	%s

No responda este correo.",

	/**
	 * Error messages
	 */

	'messageboard:blank' => "No hay nada que guardar.",
	'messageboard:notfound' => "Lo siento; no pudimos encontrar el ítem especificado.",
	'messageboard:notdeleted' => "Lo siento; no pudimos eliminar el mensaje.",
	'messageboard:somethingwentwrong' => "Intento fallido al guardar su mensaje, asegúrese de haberlo ingresado.",

	'messageboard:failure' => "Se ha producido un error inesperado al intentar añadir su mensaje. Por favor inténtelo de nuevo.",

);

add_translation("es", $spanish);
