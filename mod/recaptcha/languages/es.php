<?php
/**
 * recaptcha language pack.
 */

$spanish = array(
	
    'recaptcha:public_key' => 'Escriba la clave pública:',
    'recaptcha:private_key' => 'Escriba la clave privada:',
    'recaptcha:use_recaptcha_registration' => 'Usar Recaptcha para registro de usuario.',
    'recaptcha:form_error' => 'Las claves pública y privada son obligatorias',
    'recaptcha:settings_saved' => 'Todas las configuraciones se guardaron exitosamente',
    'recaptcha:label:human_verification' => 'Demuestra que no eres un robot',
	'recaptcha:human_verification_failed' => 'La verificación falló.<br>Los caracteres escritos no coinciden con la palabra de verificación. Inténtelo de nuevo.<br>
	    Haga clic en el botón actualizar para obtener una nueva palabra de verificación',
    'recaptcha:signup' => 'Por favor regístrese en recaptcha para obtener la clave pública y privada en %s',
    'recaptcha:verified' => 'Verificado',
);

add_translation("es", $spanish);
