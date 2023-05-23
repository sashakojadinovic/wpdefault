<?php

/**
 * @package LobbsterPlugin
 */

namespace Lobbster\Base;

class SettingsLink
{
    public function register()
    {
       add_filter("plugin_action_links_".PLUGIN, array($this, 'settings_link'));
        
    }
    public function settings_link($links)
    {
       $setting_link = '<a href="admin.php?page=lobbster_plugin">Settings</a>';
       array_push($links, $setting_link);
       return $links;
    }
}