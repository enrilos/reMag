<?php

/*
Plugin Name:  reMag
Version    :  1.0
Description: reMag plugin
*/

namespace Remag;

//=================================================
// Security: Abort if this file is called directly
//=================================================

if (!defined('ABSPATH')) {
    die;
}


use Remag\Hooks\PostHooks;

require_once __DIR__ . '/hooks/PostHooks.php';

PostHooks::register();
