<?php

/**
 * Elgg invite language file
 * 
 * @package ElggInviteFriends
 */

$spanish = array(

	'friends:invite' => 'Invitar amigos',
	
	'invitefriends:registration_disabled' => 'Registro para usuarios nuevos ha sido deshabilitado; no puede invitar a nuevos usuarios.',
	
	'invitefriends:introduction' => 'Para invitar amigos a que se unan a su red, por favor ingrese sus correos electrónicos (uno en cada línea):',
	'invitefriends:message' => 'Escriba un mensaje que recibirán junto a la invitación:',
	'invitefriends:subject' => 'Invitación a unirse a %s',

	'invitefriends:success' => 'Sus amigos fueron invitados.',
	'invitefriends:invitations_sent' => 'Invitaciones enviadas: %s. Hubo los siguientes problemas:',
	'invitefriends:email_error' => 'Las siguientes direcciones no son válidas: %s',
	'invitefriends:already_members' => 'Los siguientes ya eran miembros de la comunidad: %s',
	'invitefriends:noemails' => 'No se detectaron correos electrónicos ingresados.',
	
	'invitefriends:message:default' => '
Hola,

Quisiera invitarle a que se una a mi comunidad de %s.',

	'invitefriends:email' => '
Usted ha sido invitado a unirse a %s por %s. Ha incluido el siguiente mensaje:

%s

Para unirse, haga clic en el siguiente link:

%s

Luego de esto usted puede proceder a crear una cuenta de usuario nueva.',
	
	);
					
add_translation("es", $spanish);
