<?php
/**
 * The Wire English language file
 */

$spanish = array(
	
	/**
	 * Menu items and titles
	 */
	'thewire' => "Tweets",
	'thewire:everyone' => "Todos los tweets",
	'thewire:user' => "Tweets de %s",
	'thewire:friends' => "Tweets de amigos",
	'thewire:reply' => "Responder",
	'thewire:replying' => "Responder a %s (@%s) quien escribe",
	'thewire:thread' => "Debate",
	'thewire:charleft' => "caracteres restantes",
	'thewire:tags' => "Tweets que coinciden con la etiqueta '%s'",
	'thewire:noposts' => "No hay tweets aún",
	'item:object:thewire' => "Tweets",
	'thewire:update' => 'Actualizar',
        'thewire:by' => 'Tweets por %s',

	'thewire:previous' => "Anterior",
	'thewire:hide' => "Ocultar",
	'thewire:previous:help' => "Ver publicación anterior",
	'thewire:hide:help' => "Ocultar publicación anterior",

	/**
	 * The wire river
	 */
	'river:create:object:thewire' => "%s publicó un nuevo %s",
	'thewire:wire' => 'tweet',

	/**
	 * Wire widget
	 */
	'thewire:widget:desc' => 'Mostrar sus últimos tweets',
	'thewire:num' => 'Número de comentarios a mostrar',
	'thewire:moreposts' => 'Más tweets',

	/**
	 * Status messages
	 */
	'thewire:posted' => "El mensaje se publicó correctamente.",
	'thewire:deleted' => "El mensaje se eliminó correctamente.",
	'thewire:blank' => "Debe ingresar contenido para poder publicar.",
	'thewire:notfound' => "Lo sentimos, no se pudo encontrar la publicación solicitada.",
	'thewire:notdeleted' => "Lo sentimos, no se pudo eliminar el tweet.",

	/**
	 * Notifications
	 */
	'thewire:notify:subject' => "Nuevo tweet",
	'thewire:notify:reply' => '%s respondió a %s con un tweet:',
	'thewire:notify:post' => '%s publicó un nuevo tweet:',

/*AO: Abril 16, añadida pregunta*/
        'thewire:deletequestion' => "¿Seguro que quiere eliminar este mensaje?",

);
					
add_translation("es",$spanish);

?>
