<?php
/**
 * Email user validation plugin language pack.
 *
 * @package Elgg.Core.Plugin
 * @subpackage ElggUserValidationByEmail
 */

$spanish = array(
	'admin:users:unvalidated' => 'Invalidado',
	
	'email:validate:subject' => "%s por favor, confirme su dirección de correo electrónico para %s!",
	'email:validate:body' => "%s,

Antes de poder usar %s, usted debe confirmar su dirección de correo electrónico.

Por favor, confirme su dirección de correo electrónico haciendo clic en el vínculo que se muestra a continuación:

%s

Si no puede hacer clic en el link mostrado, por favor, cópielo y péguelo manualmente en su navegador web.

%s
%s
",
	'email:confirm:success' => "¡Usted ha confirmado exitosamente su dirección de correo electrónico!",
	'email:confirm:fail' => "Su dirección de correo electrónico no pudo ser verificada...",

	'uservalidationbyemail:registerok' => "Para activar su cuenta, por favor, confirme su dirección de correo electrónico haciendo clic en el vínculo que le hemos enviado en este momento.",
	'uservalidationbyemail:login:fail' => "Su cuenta no ha sido validada, por tanto el incio de sesión ha fallado. Otro correo de validación ha sido enviado a su cuenta de correo electrónico.",

	'uservalidationbyemail:admin:no_unvalidated_users' => 'Ningún usuario invalidado.',

	'uservalidationbyemail:admin:unvalidated' => 'Invalidad',
	'uservalidationbyemail:admin:user_created' => 'Registrado %s',
	'uservalidationbyemail:admin:resend_validation' => 'Reenviar validación',
	'uservalidationbyemail:admin:validate' => 'Validad',
	'uservalidationbyemail:admin:delete' => 'Eliminar',
	'uservalidationbyemail:confirm_validate_user' => '¿Validar %s?',
	'uservalidationbyemail:confirm_resend_validation' => '¿Reenviar correo de validación a %s?',
	'uservalidationbyemail:confirm_delete' => '¿Elimnar %s?',
	'uservalidationbyemail:confirm_validate_checked' => '¿Validar usuarios seleccionados?',
	'uservalidationbyemail:confirm_resend_validation_checked' => '¿Reenviar correo de validación a todos los usuarios seleccionados?',
	'uservalidationbyemail:confirm_delete_checked' => '¿Eliminar usuarios seleccionados?',
	'uservalidationbyemail:check_all' => 'Todos',

	'uservalidationbyemail:errors:unknown_users' => 'Usuarios desconocidos',
	'uservalidationbyemail:errors:could_not_validate_user' => 'No se pudo validar al usuario.',
	'uservalidationbyemail:errors:could_not_validate_users' => 'No se pudo validar a los usuarios seleccionados.',
	'uservalidationbyemail:errors:could_not_delete_user' => 'No se pudo borrar al usuario.',
	'uservalidationbyemail:errors:could_not_delete_users' => 'No se pudo borrar a los usuarios seleccionados.',
	'uservalidationbyemail:errors:could_not_resend_validation' => 'No se puedo reenviar el correo de validación.',
	'uservalidationbyemail:errors:could_not_resend_validations' => 'No se puedo reenviar el correo de validación a los usuarios seleccionados.',

	'uservalidationbyemail:messages:validated_user' => 'Usuario validado.',
	'uservalidationbyemail:messages:validated_users' => 'Todos los usuarios seleccionados validados.',
	'uservalidationbyemail:messages:deleted_user' => 'Usuario eliminado.',
	'uservalidationbyemail:messages:deleted_users' => 'Todos los usuarios seleccionados eliminado.',
	'uservalidationbyemail:messages:resent_validation' => 'Solicitud de validación enviada.',
	'uservalidationbyemail:messages:resent_validations' => 'Solicitud de validación enviada a todos los usuarios seleccionados.'

);

add_translation("es", $spanish);
