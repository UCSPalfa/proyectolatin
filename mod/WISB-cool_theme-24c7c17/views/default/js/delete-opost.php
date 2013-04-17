<?php
/**
 */

$site_url = elgg_get_site_url();
/*AO: Abril 17, js para borrado de annotations*/
/*Puedo eliminar mis annotations en muro de otro usuario o grupo o eliminar anotations de otros en mi muro*/

?>

$(document).ready(function() {
	$(".delete_opost").click(function (){
		var $id_opost = $(this).attr("id");
		var $opost_container = $(this).closest('li');

	if(confirm(elgg.echo('river:annotation:deletequestion'))){

		$.ajax({
			type: "GET",
			url: elgg.config.wwwroot + "ajax/view/messageboard/delete_opost_process",
			data: {'annotation_id': $id_opost},
			dataType: "json",
			success: function(data){
				if(data.success){
					$opost_container.slideUp('slow', function() {$opost_container.remove();});
					$content = "<li class='elgg-message elgg-state-success'><p>" + data.msg + "</p></li>";
//					$(".elgg-page-messages ul").append($content).fadeIn('slow').animate({opacity: 1.0}, 3000).fadeOut('slow', function() { $($this).remove(); });
					$(".elgg-page-messages ul").append($content).fadeIn('slow', function () {$(".elgg-message").fadeOut('slow');});
				}else{
					$content = "<li class='elgg-message elgg-state-success'>" + data.msg + "</p></li>";
					$(".elgg-page-messages ul").append($content).fadeIn('slow').animate({opacity: 1.0}, 3000).fadeOut('slow', function() { $($this).remove(); });
				}
			}
		});
	}
	});
});
