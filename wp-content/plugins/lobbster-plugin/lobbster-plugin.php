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
use Lobbster\Activation;
class LobbsterPlugin 
{
    public $plugin;
    function __construct()
    {
        $this->plugin = plugin_basename(__FILE__);
    }
    function register() {
        //die(plugin_basename(__FILE__));
        //add_action('admin_enqueue_scripts', array($this, 'enqueue'));
        add_action('admin_menu', array($this, 'add_admin_pages'));
        add_filter("plugin_action_links_$this->plugin",array($this,'settings_link'));
    }
    public function settings_link($links) {
        $settings_link = '<a href="admin.php?page=lobbster_plugin">Settings</a>';
        array_push($links, $settings_link);
        return $links;
    }
    function activate() {
        //
       /*  $this->custom_post_type();
        flush_rewrite_rules(); */
        Activation::activate();
    }
    function deactivate() {
        //echo "deactivated!!!";
        //die("Deactivated");
        Activation::deactivate();
    }
    public function add_admin_pages() {
        add_menu_page('Lobbster Plugin', 'Lobbster', 'manage_options','lobbster_plugin',array($this,'admin_index'),'dashicons-pets');
    }
    public function admin_index(){
        require_once plugin_dir_path(__FILE__).'templates/admin.php';
    }
    function enqueue() {
        //Enqueue scripts
       echo "HELLO";
        wp_enqueue_style('mypluginstyle', plugins_url('/assets/css/style.css',__FILE__), array(''),false,'all');
        wp_enqueue_script('mypluginstyle', plugins_url('/assets/js/script.js',__FILE__), array(''),false,'all');

        //die(plugins_url('/assets/css/style.css',__FILE__));

    }
    function custom_post_type() {
        register_post_type('book', ['public' => true, 'label'=>'Books']);
    }
}
if ( class_exists('LobbsterPlugin')){
    //die("IT EXISTS");
    $lobbsterPlugin = new LobbsterPlugin();
    $lobbsterPlugin->register();
}
//activation
register_activation_hook(__FILE__, array($lobbsterPlugin,'activate'));
//deactivation
register_deactivation_hook(__FILE__, array($lobbsterPlugin, 'deactivate'));

