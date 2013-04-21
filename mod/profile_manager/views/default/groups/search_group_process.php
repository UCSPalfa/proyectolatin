<?php
//header("Content-type: application/json");
if (elgg_is_xhr()){
    $query = get_input('query');
    $current_params = Array(
                            'query' => $query,
                            'offset' => 0,
                            'limit' => 10,
                            'sort' => 'relevance',
                            'order' => 'desc',
                            'type' => 'group',

                        );
    $results = elgg_trigger_plugin_hook('search', "groupname", $current_params, NULL);
    if(count($results['entities'])>0){        
        $return = Array();       
        foreach($results['entities'] as $r){    
            if(isSubgroup($r))
                continue;

            $file = $r->getIconURL();
            $icon = "<img src='$file'>";

            $t_title = elgg_view('output/url', array(
                'href' => $r->getURL(),
                'text' => $r->name,
                'is_trusted' => true,));
            $t_icon = elgg_view('output/url', array(
                'href' => $r->getURL(),
                'text' => $icon,
                'title' => $r->name,
                'is_trusted' => true,));

            $return[] = Array("title"=>$t_title,"icon"=>$t_icon);
        }
        echo json_encode(Array("success"=>true,"results"=>$return));
    }
    else{
        echo json_encode(Array("success"=>false));    
    }
    
}
?>
