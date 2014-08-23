<?php

elgg_register_action("circuit/save", elgg_get_plugins_path() . "circuit/actions/circuit/save.php");

elgg_register_page_handler('circuit', 'circuit_page_handler');

function circuit_page_handler($segments) {
     switch ($segments[0]) {
        case 'add':
           include elgg_get_plugins_path() . 'circuit/pages/circuit/add.php';
           break;

        case 'all':
        default:
           include elgg_get_plugins_path() . 'circuit/pages/circuit/all.php';
           break;
    }

    return true;
}

function circuit_init() {
    // Replace the default index page
    elgg_register_plugin_hook_handler('index', 'system', 'new_index');
}

function new_index() {
	echo dirname(__FILE__) . "/pages/index.php";
    echo include_once(dirname(__FILE__) . "/pages/index.php");
    return true;
}

// register for the init, system event when our plugin start.php is loaded
elgg_register_event_handler('init', 'system', 'circuit_init');