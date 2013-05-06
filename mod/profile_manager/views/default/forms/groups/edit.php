<?php


/**
 * Profile Manager
 * 
 * Overrules group edit form to support options (radio, dropdown, multiselect)
 * 
 * @package profile_manager
 * @author ColdTrick IT Solutions
 * @copyright Coldtrick IT Solutions 2009
 * @link http://www.coldtrick.com/
 */

$editingWritingGroup = false;
$addingWritingGroup = false;

$currentContext = elgg_get_context();
// The entity already exists, so the form is loaded TO EDIT a community or a writing group
if (isset($vars['entity'])) {
    if (isSubgroup($vars['entity'])) {
        // The edited entity corresponds to a Writing Group
        $editingWritingGroup = true;
    } else {
        $editingWritingGroup = false;
    }
} else {
    // The entity does not exists, so the form is loaded TO ADD a NEW community or writing group
    if ($currentContext == 'au_subgroups_creation') {
        $addingWritingGroup = true;
    } else if ($currentContext == 'groups') {
        $addingWritingGroup = false;
    }
}



// new groups default to open membership
if (isset($vars['entity'])) {
    $membership = $vars['entity']->membership;
    $access = $vars['entity']->access_id;
    if ($access != ACCESS_PUBLIC && $access != ACCESS_LOGGED_IN) {
        // group only - this is done to handle access not created when group is created
        $access = ACCESS_PRIVATE;
    }
} else {
    $membership = ACCESS_PUBLIC;
    $access = ACCESS_PUBLIC;
}

$currentContext = elgg_get_context();
$nameField = 'groups:name';
$iconField = 'groups:icon';

$is_subgroup = isSubgroup($vars['entity']); //po5i

if ($currentContext == 'au_subgroups_creation' or $currentContext == 'au_subgroups_edition') {
    $nameField = 'au_subgroups:name';
    $iconField = 'au_subgroups:icon';
    
    $id_name_input_view = '';
}
else{
    $id_name_input_view = 'name_ajax_group_search';

    //po5i-ajax: cargar js
    elgg_load_js('elgg.searchgroup');
    elgg_extend_view('js/elgg', 'js/search-group');
}
?>

<div class="elgg-module  elgg-module-info">
<div class="elgg-head">
    <h3><?php echo elgg_echo($iconField); ?></h3>
    <?php echo elgg_view("input/file", array('name' => 'icon')); ?>
</div>
</div>

<div class="elgg-module  elgg-module-info">
<div class="elgg-head mandatory">
    <h3><?php echo elgg_echo($nameField); ?></h3>
    <!-- po5i -->
    <?php
    echo elgg_view("input/text", array(
        'name' => 'name',
        'value' => $vars['entity']->name,
        'id'    => $id_name_input_view,
        'autocomplete' => 'off'
        //'js' => 'onKeyDown="alert(11)";'    //po5i
    ));
    ?>
</div>
</div>

<!-- po5i: hidden div con sugerencias: diseño -->
<style>
#name_ajax_recommendations{
    display:none;
    /*position:absolute;*/
    background: #eeeeee;
    border: solid 1px #aaaaaa;
    padding:20px;
    border-radius: 5px;
    width: 300px;
    height: 123px;
    overflow: scroll;    
}
#name_ajax_close{
    cursor: pointer;
    font-weight: bold;
    text-align: right;
}
#nane_ajax_legend{
    padding-bottom: 5px;
}
#name_title{
    font-size: 150%;
}
#name_ajax_results{
    display: table;
}
#name_ajax_results img {
  vertical-align: middle;
  display: table-cell;
  border: solid thin #DDDDDD;
  margin-right: 10px;
  width: 50px;
  height: 50px;
}

#name_ajax_results span {
  vertical-align: middle;
  display: table-cell;
}
</style>

<div id="name_ajax_recommendations">
    <div id="nane_ajax_legend"><?php echo elgg_echo('profile_manager:groups:similar'); ?></div>
    <div id="name_ajax_results"></div>
    <div id="name_ajax_close"><?php echo elgg_echo('profile_manager:groups:close'); ?></div>
</div>

<!-- po5i -->
<div class="elgg-module  elgg-module-info">
<div class="elgg-head">
    <h3><?php echo elgg_echo("groups:description"); ?></h3>
    <?php echo elgg_view("input/longtext", array(
        'name' => 'description',
        'value' => $vars['entity']->description,
    ));
    ?>
</div>
</div>

<?php
/////////////////////////////////////////////////////////
//TODO: Agregar usuarios dinamicamente (solo para create)
if($is_subgroup):    
    if ($currentContext == 'au_subgroups_creation') {
        ?>

        <div class="elgg-module  elgg-module-info"><div class="elgg-head">
            <h3><?php echo elgg_echo('au_subgroups:invite:subgroup') ?></h3>
            <input type="text" name="recipient_guid" value="" id="recipient_guid" /><!--csv-->
        </div></div>
        
        <?
        $candidates = elgg_get_site_entity()->getMembers(0);

        //autocompletar v.1
        /*foreach ($candidates as $user){
            $user_icon = elgg_view_entity_icon($user, 'tiny');
            $response[] = array($user->guid, $user->name." - ".$user->username." - ".$user->email, $user->name." - ".$user->username, $user_icon.$user->name." - ".$user->username." - ".$user->email);
        }*/
        
        //autocompletar v.2
        $data =array();
        foreach ($candidates as $friend) {
            $recipients_options[$friend->guid] = $friend->name;
            $json['value'] = $friend->guid;
            $json['name'] = $friend->name;
            $data[] = $json;
        }
        ?>
        <script type="text/javascript">
            //autocompletar v.1
            /*window.addEvent('load', function(){
                // Autocomplete initialization
                var t4 = new TextboxList('recipient_guid', {unique: true, plugins: {autocomplete: {}}});
                var autocomplete = t4.plugins['autocomplete'];
                autocomplete.setValues(
                    <?php echo json_encode($response); ?>
                );
            });*/
            
            //autocompletar v.2
            var data = {items: 
                                <?php echo json_encode($data); ?>
                        };

            $("input#recipient_guid").autoSuggest(data.items, {<?php echo "emptyText:\"". elgg_echo("notfound")."\",";?> selectedItemProp: "name", selectedValuesProp: "value", searchObjProps: "name", startText: "", keyDelay: 50, minChars: 1,asHtmlID:"rcpt"});

        </script>
        <?php 
        //autocompletar v.1
        /*elgg_load_js('mootools');
        elgg_load_js('GrowingInput');
        elgg_load_js('JSTextboxList');
        elgg_load_js('JSTextboxList.Autocomplete')*/

        //autocompletar v.2
        elgg_load_js('JSMultiSelect');
        elgg_load_js('autosuggest');
        elgg_load_js('autosuggest1');
        elgg_load_js('autosuggest2');
    }

endif; 
/////////////////////////////////////////////////////////



// retrieve group fields
$group_fields = profile_manager_get_categorized_group_fields();

if (count($group_fields["fields"]) > 0) {
    $group_fields = $group_fields["fields"];

    foreach ($group_fields as $field) {

        //po5i: validacion para mostrar campos de subgrupos exclusivamente en subgrupos:
        if(
            $field->subgroups_only == "yes" and ($currentContext == 'au_subgroups_creation' or $currentContext == 'au_subgroups_edition')
            or
            $field->subgroups_only == "no" and $currentContext == 'groups'
            )
            echo "";    //pass
        else
            continue;

        $metadata_name = $field->metadata_name;

        // get options
        $options = $field->getOptions();

        // get type of field
        $valtype = $field->metadata_type;

        // get title
        $title = $field->getTitle();

        // get value
        $value = '';
        if ($metadata = $vars['entity']->$metadata_name) {
            if (is_array($metadata)) {
                foreach ($metadata as $md) {
                    if (!empty($value))
                        $value .= ', ';
                    $value .= $md;
                }
            } else {
                $value = $metadata;
            }
        }

        $line_break = ''; //'<br />';
        if ($valtype == 'longtext') {
            $line_break = '';
        }
        $mandatory = $field->mandatory == "yes" ? 'mandatory' : ''; //po5i
        if($metadata_name == "Proposal")    //po5i: propuesta
            $mandatory .= " proposal_showhide";
        echo '<div class="elgg-module  elgg-module-info"><div class="elgg-head '.$mandatory.'">';        
        echo "<h3>" . elgg_echo($title) . "</h3>";        //po5i: multilang support

        if ($hint = $field->getHint()) {
            ?>
            <span class='custom_fields_more_info' id='more_info_<?php echo $metadata_name; ?>'></span>		
            <span class="custom_fields_more_info_text" id="text_more_info_<?php echo $metadata_name; ?>"><?php echo $hint; ?></span>
            <?php
        }

        echo $line_break;

        if ($valtype == "dropdown") {
            // add div around dropdown to let it act as a block level element
            echo "<div>";
        }

        if($valtype == "radio" && $metadata_name == "PoliciesDropdown"){    //po5i: politicas
            $js = 'onClick="ProposalShowHide(this.value)";';
        }

        echo elgg_view("input/{$valtype}", array(
            'name' => $metadata_name,
            'value' => $value,
            'options' => $options,
            'js' => $js,    //po5i
        ));

        if ($valtype == "dropdown") {
            echo "</div>";
        }

        echo '</div>';
        echo '</div>';
    }

    //po5i:politicas
    if ($is_subgroup and ($currentContext == 'au_subgroups_creation' or $currentContext == 'au_subgroups_edition')) {
        ?>
        <div class="elgg-module  elgg-module-info"><div class="elgg-head">
            <h3><?php echo elgg_echo('latin:field:policies:title') ?></h3>
            <a href='<?php echo elgg_echo('latin:field:policies:link') ?>' target='_blank'><?php echo elgg_echo('au_subgroups:policies:link') ?></a>
        </div></div>

        <!-- función para ocultar o mostrar el adjuntar la propuesta si acepta o no las politicas -->
        <script>
        function ProposalShowHide(val){
            if(val == "yes"){
                //$('[name="Proposal"]').show();
                //$('[name="Proposal"]').animate({opacity: 1.0}, 100).fadeIn('slow', function() { $(this).show(); });
                $('.proposal_showhide').animate({opacity: 1.0}, 100).fadeIn('slow', function() { $(this).show(); });
            }
            if(val == "no"){
                //$('[name="Proposal"]').hide();
                //$('[name="Proposal"]').animate({opacity: 1.0}, 100).fadeOut('slow', function() { $(this).hide(); });
                $('.proposal_showhide').animate({opacity: 1.0}, 100).fadeOut('slow', function() { $(this).hide(); });

            }
        }
        //$('[name="Proposal"]').hide();
        $('.proposal_showhide').hide();
        </script>
        <?    
    }

}

?>


<?php
	if ($addingWritingGroup || $editingWritingGroup) {
		$membership = ACCESS_PRIVATE;
	}
//Modification by Gonzalo:
//Elegir si el grupo es privado o no, no deberia ser posible cuando el grupo creado es un Writing Group
// The entity already exists, so the form is loaded TO EDIT a community or a writing group

//if (!($addingWritingGroup || $editingWritingGroup)) {
//    ?>

    <div style="display:none">
        <h3>
            <?php  echo elgg_echo('groups:membership'); ?><br />
            <?php
            echo elgg_view('input/access', array(
                'name' => 'membership',
                'value' => $membership,
                'options_values' => array(
                    ACCESS_PRIVATE => elgg_echo('groups:access:private'),
                    ACCESS_PUBLIC => elgg_echo('groups:access:public')
                )
            ));
            ?>
        </h3>
    </div>
    <?php
//}








if (elgg_get_plugin_setting('hidden_groups', 'groups') == 'yes') {
    $this_owner = $vars['entity']->owner_guid;

    if (!$this_owner) {
        $this_owner = elgg_get_logged_in_user_guid();
    }
    $access_options = array(
        ACCESS_PRIVATE => elgg_echo('groups:access:group'),
        ACCESS_LOGGED_IN => elgg_echo("LOGGED_IN"),
        ACCESS_PUBLIC => elgg_echo("PUBLIC")
    );
    ?>

    <div>
        <label>
            <?php echo elgg_echo('groups:visibility'); ?><br />
            <?php
            echo elgg_view('input/access', array(
                'name' => 'vis',
                'value' => $access,
                'options_values' => $access_options,
            ));
            ?>
        </label>
    </div>

    <?php
}






$tools = elgg_get_config('group_tool_options');
if ($tools) {
    usort($tools, create_function('$a,$b', 'return strcmp($a->label,$b->label);'));
    foreach ($tools as $group_option) {

        $group_option_toggle_name = $group_option->name . "_enable";

        if ($group_option->default_on) {
            $group_option_default_value = 'yes';
        } else {
            $group_option_default_value = 'no';
        }
        $value = $vars['entity']->$group_option_toggle_name ? $vars['entity']->$group_option_toggle_name : $group_option_default_value;
        ?>	
        <div class="elgg-module  elgg-module-info">
        <div class="elgg-head">
            <h3>
                <?php echo $group_option->label; ?><br />
            </h3>
            <?php
            echo elgg_view("input/radio", array(
                "name" => $group_option_toggle_name,
                "value" => $value,
                'options' => array(
                    elgg_echo('groups:yes') => 'yes',
                    elgg_echo('groups:no') => 'no',
                )
            ));
            ?>
        </div>
        </div>
        <?php

    }
}
?>


<div class="elgg-foot">
    <?php
    if (isset($vars['entity'])) {
    	echo elgg_view('input/hidden', array(
    			'name' => 'group_guid',
    			'value' => $vars['entity']->getGUID(),
    	));
    }
    echo elgg_view('input/submit', array('value' => elgg_echo('save')));

    if (isset($vars['entity'])) {
        $delete_url = 'action/groups/delete?guid=' . $vars['entity']->getGUID();
        echo elgg_view('output/confirmlink', array(
            'text' => isSubgroup($vars['entity']) ? elgg_echo('au_subgroups:delete:subgroup') : elgg_echo('groups:delete'),     //po5i:edit
            'href' => $delete_url,
            'confirm' => elgg_echo('groups:deletewarning'),
            'class' => 'elgg-button elgg-button-delete float-alt',
        ));
    }



//echo 'Esta es la entidad que llega aqui: ' . print_r($vars['entity']);
    ?>
</div>