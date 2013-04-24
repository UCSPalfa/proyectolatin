<?php
/**
 * Likes Spanish language file
 */

$spanish = array(
	'likes:this' => 'le gusta esto',
	'likes:deleted' => 'Ya no le gusta',
	'likes:see' => 'Mira a quién le gusta esto',
	'likes:remove' => 'Ya no me gusta',
	'likes:notdeleted' => 'Hubo un problema al ejecutar la acción',
	'likes:likes' => 'Ahora le gusta esto',
	'likes:failure' => 'Hubo un problema al ejecutar la acción sobre este ítem',
	'likes:alreadyliked' => 'Ya le gusta',
	'likes:notfound' => 'No existe el ítem',
	'likes:likethis' => 'Le gusta esto',
	'likes:userlikedthis' => '%s like',
	'likes:userslikedthis' => '%s likes',
	'likes:river:annotate' => 'likes',
	'likes:delete:confirm' => '¿Seguro que quiere eliminar el me gusta?',

	'river:likes' => 'likes %s %s',

	// notifications. yikes.
	'likes:notifications:subject' => '%s le(s) gusta su publicación "%s"',
	'likes:notifications:body' =>
'Hola %1$s,

%2$s le(s) gusta su publicación "%3$s" sobre %4$s

Ver la publicación aquí:

%5$s

o ver el perfil de %2$s aquí:

%6$s

Gracias,
%4$s
',
	
);

add_translation('es', $spanish);
