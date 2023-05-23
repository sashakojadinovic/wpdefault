<?php

/**
 * @package LobbsterPlugin
 */
/*
Plugin Name: Lobbster Plugin
Plugin URI: http://lobbster.co
Description: My First WP Plugin
Version: 1.0.0
Author: Saša Kojadinović
Author URI: http://lobbster.co
License: GPLv2 or later
Text Domain: lobbster-plugin
*/
if (!defined('ABSPATH')) {
    die;
}
if( file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once(dirname(__FILE__).'/vendor/autoload.php');
}
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url(__FILE__));
define('PLUGIN', plugin_basename(__FILE__) );
if (class_exists('Lobbster\\Init')){
    Lobbster\Init::register_services();
} 