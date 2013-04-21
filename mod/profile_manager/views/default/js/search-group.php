<?php
/**
 * profile_manager's JavaScript
 */

$site_url = elgg_get_site_url();

?>
//funcion JS para procesar el ajax
$(function() {
        $("#name_ajax_group_search").keyup(function (){
            var $query = $(this).val();

            if($query.length < 3)
                return;

            $.ajax({
                    type: "GET",
                    url: elgg.config.wwwroot + "ajax/view/groups/search_group_process",
                    data: {'query': $query},
                    dataType: "json",
                    success: function(data){
                            //console.log(data);
                            if(data.success){
                                    //TODO: mostrar div con las sugerencias (el show debe ir aqui) de data.results
                                    $("#name_ajax_results").text("");
                                    $("#name_ajax_recommendations").animate({opacity: 1.0}, 100).fadeIn('slow', function() { $(this).show(); });                                        
                                    for (var i = 0; i < data.results.length; i++) {                                                                                        
                                        var div = "<div>";
                                        div += "<span id=name_icon>"+data.results[i].icon+"</span>";
                                        div += "<span id=name_title>"+data.results[i].title+"</span>";
                                        div += "</div>";
                                        $("#name_ajax_results").append(div);
                                    }
                            }else{
                                    //limpiar
                                    $("#name_ajax_results").text("");
                                    $("#name_ajax_recommendations").hide();
                            }
                    }
            });
        });
        $("#name_ajax_close").click(function(){
                $("#name_ajax_recommendations").animate({opacity: 1.0}, 100).fadeOut('slow', function() { $(this).hide(); });
        });
});
