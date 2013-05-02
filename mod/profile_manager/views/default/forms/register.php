<?php
/**
 * Elgg register form
 *
 * @package Elgg
 * @subpackage Core
 */

/*AO: Abril 18, añadida clase registerf junto a mandatory*/

$password = $password2 = '';
$username = get_input('u');
$email = get_input('e');
$name = get_input('n');

if (elgg_is_sticky_form('register')) {
	extract(elgg_get_sticky_values('register'));
	elgg_clear_sticky_form('register');
}

// must accept terms
if($accept_terms = elgg_get_plugin_setting("registration_terms", "profile_manager")){
	$link_begin = "<a target='_blank' href='" . $accept_terms . "'>";
	$link_end = "</a>";
	
	$terms = "<div class='mandatory'>";
	$terms .= "<input id='register-accept_terms' type='checkbox' name='accept_terms' value='yes' /> ";
	$terms .= "<label for='register-accept_terms'>" . elgg_echo("profile_manager:registration:accept_terms", array($link_begin, $link_end)) . "</label>";
	$terms .= "</div>";
}

echo "<div id='profile_manager_register_left'>";
?>

<fieldset>
	<div class="mtm mandatory registerf">
		<label for='register-name'><?php echo elgg_echo('name'); ?></label><br />
		<?php
		echo elgg_view('input/text', array(
			'id' => 'register-name',
			'name' => 'name',
			'value' => $name,
			'class' => 'elgg-autofocus'
		));
		?>
	</div>
	<div class="mandatory registerf">
		<label for='register-email'><?php echo elgg_echo('email'); ?></label><br />
		<div class='profile_manager_register_input_container'>
			<?php
			echo elgg_view('input/text', array(
				'id' => 'register-email',
				'name' => 'email',
				'value' => $email,
			));
			?>
			<span class='elgg-icon profile_manager_validate_icon'></span>
		</div>
	</div>
	<div class="mandatory registerf">
		<label for='register-username'><?php echo elgg_echo('username'); ?></label><br />
		<div class='profile_manager_register_input_container'>
			<?php
			echo elgg_view('input/text', array(
				'id' => 'register-username',
				'name' => 'username',
				'value' => $username,
			));
			?>
			<div class='elgg-icon profile_manager_validate_icon'></div>
		</div>
	</div>
	<div class="mandatory registerf">
		<label for='register-password'><?php echo elgg_echo('password'); ?></label><br />
		<div class='profile_manager_register_input_container'>
			<?php
			echo elgg_view('input/password', array(
				'id' => 'register-password',
				'name' => 'password',
				'value' => $password,
			));
			?>
			<span class='elgg-icon profile_manager_validate_icon'></span>
		</div>
	</div>
	<div class="mandatory registerf">
		<label for='register-password2'><?php echo elgg_echo('passwordagain'); ?></label><br />
		<div class='profile_manager_register_input_container'>
			<?php
			echo elgg_view('input/password', array(
				'id' => 'register-password2',
				'name' => 'password2',
				'value' => $password2,
			));
			?>
			<span class='elgg-icon profile_manager_validate_icon'></span>
		</div>
	</div>
	<?php 
//AO: Abril 30, comentado el div
//              echo "<div id='profile_manager_register_right'>";
                        echo elgg_view("register/extend_side");
//              echo "</div>";
	?>
</fieldset>

<?php
// view to extend to add more fields to the registration form
echo elgg_view('register/extend');
// Add captcha hook
echo elgg_view('input/captcha');
//AO: Abril 30, colocados los términos después del captcha 
echo $terms; 
echo "</div>";

//AO: Abril 30, comentado y colocado arriba
//echo "<div id='profile_manager_register_right'>";
//echo elgg_view("register/extend_side");
//echo "</div>";

echo "<div class='clearfloat'></div>";
echo "<div class='elgg-foot'>";
echo elgg_view('input/hidden', array('name' => 'friend_guid', 'value' => $vars['friend_guid']));
echo elgg_view('input/hidden', array('name' => 'invitecode', 'value' => $vars['invitecode']));
echo elgg_view('input/submit', array('name' => 'submit', 'value' => elgg_echo('register')));
echo "<div class='elgg-subtext mtm'>" . elgg_echo("profile_manager:register:mandatory") . "</div>";
echo "</div>";
