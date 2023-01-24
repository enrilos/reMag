<?php

/*
Plugin Name:  reMag
Version    :  1.0
Description: reMag plugin
*/

//=================================================
// Security: Abort if this file is called directly
//=================================================
if (!defined('ABSPATH')) {
    die;
}

define('PLUGINPATH', plugin_dir_path(__FILE__));

require_once PLUGINPATH . '/includes/engine.php';

add_action('plugins_loaded', '\Remag\Engine::init');
