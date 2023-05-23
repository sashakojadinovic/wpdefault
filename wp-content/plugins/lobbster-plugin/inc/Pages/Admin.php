<?php

/**
 * @package LobbsterPlugin
 */

namespace Lobbster\Pages;
class Admin
{
    public function register()
    {
        add_action('admin_menu', array($this, 'add_admin_pages'));
    }
    public function add_admin_pages()
    {
        add_menu_page('Lobbster Plugin', 'Lobbster', 'manage_options', 'lobbster_plugin', array($this, 'admin_index'), 'dashicons-pets');
    }
    public function admin_index(){
        require_once PLUGIN_PATH.'templates/admin.php';
    }
}