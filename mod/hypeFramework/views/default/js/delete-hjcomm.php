<?php
/**
 */
/*AO: Abril 13, js para borrado de mis hjannotation (comentarios de post) en mi muro o de otro usuario o grupo*/

$site_url = elgg_get_site_url();

?>

$(document).ready(function() {
	$(".delete_hjcomm").click(function (){
		var $id_hjcomment = $(this).attr("id");
		var $comment_container = $(this).closest('li');

		if(confirm(elgg.echo('hj:framework:deletequestion'))){

			$.ajax({
				type: "GET",
				url: elgg.config.wwwroot + "ajax/view/delete_hjcomm_process",
				data: {'guid': $id_hjcomment},
				dataType: "json",
				success: function(data){
					if(data.success){
						$comment_container.slideUp('slow', function() {$comment_container.remove();});
						$content = "<li class='elgg-message elgg-state-success'><p>" + data.msg + "</p></li>";
//						$(".elgg-page-messages ul").append($content).fadeIn('slow').animate({opacity: 1.0}, 3000).fadeOut('slow', function() { $($this).remove(); });
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
