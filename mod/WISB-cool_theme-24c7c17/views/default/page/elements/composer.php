<?php
//GC: verificar si tiene acceso a las opciones del wall para mostrar las opciones en Share
$num_items = strlen(elgg_view_menu('composer', array(
		'entity' => elgg_get_page_owner_entity(),
		'class' => 'elgg-menu-hz',
		'sort_by' => 'priority',
)));
if ($num_items>0){
	?>
<div class="elgg-composer">
	<h4>
		<?php echo elgg_echo('composer:prompt'); ?>
		:
	</h4>
	<?php
	echo elgg_view_menu('composer', array(
			'entity' => elgg_get_page_owner_entity(),
			'class' => 'elgg-menu-hz',
			'sort_by' => 'priority',
		));

	?>
</div>
<?php }?>
<script>$('.elgg-composer').tabs({spinner: '',panelTemplate: '<div><div class="elgg-ajax-loader"></div></div>'});</script>
