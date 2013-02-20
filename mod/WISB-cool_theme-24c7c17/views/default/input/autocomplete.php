<?php
/**
 * Displays an autocomplete text input.
 *
 * @package Elgg
 * @subpackage Core
 *
 * @todo This currently only works for ONE AUTOCOMPLETE TEXT FIELD on a page.
 *
 * @uses $vars['value']       Current value for the text input
 * @uses $vars['match_on']    Array | str What to match on. all|array(groups|users|friends)
 * @uses $vars['match_owner'] Bool.  Match only entities that are owned by logged in user.
 * @uses $vars['class']       Additional CSS class
 */

if (isset($vars['class'])) {
	$vars['class'] = "elgg-input-autocomplete2 {$vars['class']}";      //carlos:2
} else {
	$vars['class'] = "elgg-input-autocomplete2";                       //carlos:2
}

$defaults = array(
	'value' => '',
	'disabled' => false,
);

$vars = array_merge($defaults, $vars);

$params = array();
if (isset($vars['match_on'])) {
	$params['match_on'] = $vars['match_on'];
	unset($vars['match_on']);
}
if (isset($vars['match_owner'])) {
	$params['match_owner'] = $vars['match_owner'];
	unset($vars['match_owner']);
}
$ac_url_params = http_build_query($params);

//carlos:2 Cambio para prevenir que se use el livesearch del HypeAlive (lo que ahora dice autocomplete2 antes decia autocomplete)
elgg_register_js('elgg.autocomplete2', 'js/lib/ui.autocomplete2.js');
elgg_load_js('elgg.autocomplete2');     
elgg_load_js('jquery.ui.autocomplete.html');

?>

<script type="text/javascript">
elgg.provide('elgg.autocomplete2');
elgg.autocomplete2.url = "<?php echo elgg_get_site_url() . 'livesearch?' . $ac_url_params; ?>";
</script> 
<input type="text" <?php echo elgg_format_attributes($vars); ?> />
