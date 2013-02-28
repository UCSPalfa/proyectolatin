<?php
 
function latinIndex_init() {
    // Replace the default index page
    elgg_register_plugin_hook_handler('index', 'system', 'new_index');
}
 
function new_index() {
    if (!include_once(dirname(dirname(__FILE__)) . "/latinIndex/pages/index.php"))
        return false;
 
    return true;
}
 
// register for the init, system event when our plugin start.php is loaded
elgg_register_event_handler('init', 'system', 'latinIndex_init');
?>
