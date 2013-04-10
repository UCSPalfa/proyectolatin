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

if ($currentContext == 'au_subgroups_creation' or $is_subgroup) {
    $nameField = 'au_subgroups:name';
    $iconField = 'au_subgroups:icon';
}
?>

<div class="elgg-module  elgg-module-info">
<div class="elgg-head">
    <h3><?php echo elgg_echo($iconField); ?></h3>
    <?php echo elgg_view("input/file", array('name' => 'icon')); ?>
</div>
</div>

<div class="elgg-module  elgg-module-info">
<div class="elgg-head">
    <h3><?php echo elgg_echo($nameField); ?> (*) </h3>
    <!-- po5i -->
    <?php
    echo elgg_view("input/text", array(
        'name' => 'name',
        'value' => $vars['entity']->name,
        //'js' => 'onKeyDown="alert(11)";'    //po5i
    ));
    
    /*$params = array(
        'types' => 'group',   
    );
    $groups = elgg_get_entities($params );
    echo elgg_view('input/autocomplete', array(
        'entities' => $groups,
        'internalname' => 'namehidden',
        'internalname_text' => 'name',
        'value_text' => $vars['entity']->name,
    ));*/

    /*echo elgg_view('input/autocomplete', array(
        'value' => $vars['entity']->name,
        'match_on' =>$groups,
        'match_owner' =>false,
        'name' =>'name',
        ));*/
    ?>
</div>
</div>

<!-- po5i -->
<div class="elgg-module  elgg-module-info">
<div class="elgg-head">
    <h3><?php echo elgg_echo("groups:description"); ?></h3>
    <?php echo elgg_view("input/text", array(
        'name' => 'description',
        'value' => $vars['entity']->description
    ));
    ?>
</div>
</div>

<?php
if($is_subgroup):       //po5i

    /////////////////////////////////////////////////////////
    //TODO: Agregar usuarios dinamicamente (solo para create)
    if ($currentContext == 'au_subgroups_creation') {
        $candidates = elgg_get_site_entity()->getMembers(0);

        foreach ($candidates as $user){
            $user_icon = elgg_view_entity_icon($user, 'tiny');
            $response[] = array($user->guid, $user->name." - ".$user->username." - ".$user->email, $user->name." - ".$user->username, $user_icon.$user->name." - ".$user->username." - ".$user->email);
        }
        ?>
        <script type="text/javascript">
            window.addEvent('load', function(){
                // Autocomplete initialization
                var t4 = new TextboxList('recipient_guid', {unique: true, plugins: {autocomplete: {}}});
                var autocomplete = t4.plugins['autocomplete'];
                autocomplete.setValues(
                    <?php echo json_encode($response); ?>
                );
        });
        </script>
        <?php 
        elgg_load_js('mootools');
        elgg_load_js('GrowingInput');
        elgg_load_js('JSTextboxList');
        elgg_load_js('JSTextboxList.Autocomplete')
        ?>

        <div class="elgg-module  elgg-module-info"><div class="elgg-head">
            <h3><?php echo elgg_echo('au_subgroups:invite:subgroup') ?></h3>
            <input type="text" name="recipient_guid" value="" id="recipient_guid" /><!--csv-->
        </div></div>
        <?
    }
    /////////////////////////////////////////////////////////

    // retrieve group fields
    $group_fields = profile_manager_get_categorized_group_fields();

    if (count($group_fields["fields"]) > 0) {
        $group_fields = $group_fields["fields"];

        foreach ($group_fields as $field) {
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

            $line_break = '<br />';
            if ($valtype == 'longtext') {
                $line_break = '';
            }
            echo '<div class="elgg-module  elgg-module-info"><div class="elgg-head"><h3>';
            echo $title;
            echo "</h3>";

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

            echo elgg_view("input/{$valtype}", array(
                'name' => $metadata_name,
                'value' => $value,
                'options' => $options
            ));

            if ($valtype == "dropdown") {
                echo "</div>";
            }

            echo '</div>';
            echo '</div>';
        }
    }

    //po5i:politicas
    ?>
    <div class="elgg-module  elgg-module-info"><div class="elgg-head">
        <h3>Politicas</h3>
        <a href='#'>Quemado en codigo (profile_manager form group edit)</a>
    </div></div>
    <?    

endif;  //po5i
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