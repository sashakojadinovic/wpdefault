<?php

/**
 * @package LobbsterPlugin
 */

namespace Lobbster;

class Activation
{
    public static function activate()
    {
        echo "ACTIVE!";
        flush_rewrite_rules();
    }
    public static function deactivate()
    {
        //echo "Plugin deactivated!";
        //die("Deactivated from Activation Class");
        flush_rewrite_rules();
    }
}
