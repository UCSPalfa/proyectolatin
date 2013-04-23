<?php
/**
 * Personal notifications form body
 *
 * @uses $vars['user'] ElggUser
 */

/* @var ElggUser $user */
$user = $vars['user'];

echo elgg_view('notifications/subscriptions/personal', $vars);
/*AO: Abril 22, comentadas las 2 líneas sgtes para quitar del menú notifications del perfil, las opciones con Friends*/
//echo elgg_view('notifications/subscriptions/collections', $vars);
//echo elgg_view('notifications/subscriptions/forminternals', $vars);

?>
<div class="elgg-foot">
<?php
echo elgg_view('input/hidden', array('name' => 'guid', 'value' => $user->guid));
echo elgg_view('input/submit', array('value' => elgg_echo('save')));
?>
</div>
