<?php
/**
 * The wire's JavaScript
 */

$site_url = elgg_get_site_url();
/*AO: Abril 8, js para borrado de mi post en mi profile*/

?>

$(document).ready(function() {
	$(".delete_button_post").click(function (){
		var $id_comment = $(this).attr("id");
		var $comment_container = $(this).closest('li');

	if(confirm(elgg.echo('thewire:deletequestion'))){

		$.ajax({
			type: "GET",
			url: elgg.config.wwwroot + "ajax/view/thewire/delete_post_process",
			data: {'guid': $id_comment},
			dataType: "json",
			success: function(data){
				if(data.success){
					$comment_container.slideUp('slow', function() {$comment_container.remove();});
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
