<?php

/**

 * Email user validation plugin language pack.

 *

 * @package Elgg.Core.Plugin

 * @subpackage ElggUserValidationByEmail

 */



$port = array(

	'admin:users:unvalidated' => 'Invalidado',

	

	'email:validate:subject' => "%s por favor, confirme seu endereço de email para %s!",

	'email:validate:body' => "%s,



Antes que você possa começar a utilizar %s, você deve confirmar seu endereço de email.



Por favor, confirme seu endereço de email clicando no link abaixo:



%s



Se você não puder clicar no link, copie e cole no seu browser manualmente.



%s

%s

",

	'email:confirm:success' => "Você confirmou seu endereço de email!",

	'email:confirm:fail' => "O endereço de email não pôde ser verificado...",



	'uservalidationbyemail:registerok' => "Para ativar sua conta por favor, confirme seu endereço de email clicando no link que enviamos para você.",

	'uservalidationbyemail:login:fail' => "Sua conta não foi validada, então Your account is not validated so a tentativa de login falhou. Outro email de validação foi enviado.",



	'uservalidationbyemail:admin:no_unvalidated_users' => 'Nenhum usuário inválido.',



	'uservalidationbyemail:admin:unvalidated' => 'Invalidado',

	'uservalidationbyemail:admin:user_created' => 'Registrado %s',

	'uservalidationbyemail:admin:resend_validation' => 'Reenviar validação',

	'uservalidationbyemail:admin:validate' => 'Validar',

	'uservalidationbyemail:admin:delete' => 'Excluir',

	'uservalidationbyemail:confirm_validate_user' => 'Validar %s?',

	'uservalidationbyemail:confirm_resend_validation' => 'Reenviar email de validação para %s?',

	'uservalidationbyemail:confirm_delete' => 'Excluir %s?',

	'uservalidationbyemail:confirm_validate_checked' => 'Validar usuários verificados?',

	'uservalidationbyemail:confirm_resend_validation_checked' => 'Reenviar validação para usuários verificados?',

	'uservalidationbyemail:confirm_delete_checked' => 'Excluir usuários verificados?',

	'uservalidationbyemail:check_all' => 'Todos',



	'uservalidationbyemail:errors:unknown_users' => 'Usuários Desconhecidos',

	'uservalidationbyemail:errors:could_not_validate_user' => 'Não foi possível validar o usuário.',

	'uservalidationbyemail:errors:could_not_validate_users' => 'Não foi posível validar todos os usuários verificados.',

	'uservalidationbyemail:errors:could_not_delete_user' => 'Não foi possível excluir usuário.',

	'uservalidationbyemail:errors:could_not_delete_users' => 'Não foi possível excluir todos os usuários verificados.',

	'uservalidationbyemail:errors:could_not_resend_validation' => 'Não foi possível reenviar a requisição de validação.',

	'uservalidationbyemail:errors:could_not_resend_validations' => 'Não foi possível reenviar todas as requisições de validação para os usuários verificados.',



	'uservalidationbyemail:messages:validated_user' => 'Usário validado.',

	'uservalidationbyemail:messages:validated_users' => 'Todos os usuários verificados foram validados.',

	'uservalidationbyemail:messages:deleted_user' => 'Usuário excluído.',

	'uservalidationbyemail:messages:deleted_users' => 'Todos os usuários verificados foram excluídos.',

	'uservalidationbyemail:messages:resent_validation' => 'Requisição de validação reenviada.',

	'uservalidationbyemail:messages:resent_validations' => 'Requisição de validação reenviada para todos os usuários verificados.'



);



add_translation("pt", $port);
