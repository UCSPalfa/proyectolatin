<?php
/**
 * Link a gruop to another
 *
 * @uses $vars['entity'] ElggGroup object
 */

// $entity represents the group
$entity = elgg_extract('entity', $vars, null);

$form_vars = array(
	'enctype' => 'multipart/form-data',
	'class' => 'elgg-form-alt',
);

echo elgg_view_form('groups/link', $form_vars, groups_prepare_form_vars($entity));
