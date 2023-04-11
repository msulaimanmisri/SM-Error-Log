<?php

/**
 * @author SulaimanMisri
 * @since 1.0
 */

class WordPressErrorLog
{

    public static function init()
    {
        register_activation_hook(__FILE__, array(__CLASS__, 'activate'));
        register_deactivation_hook(__FILE__, array(__CLASS__, 'deactivate'));
    }

    public static function activate()
    {
        update_option('wp_debug', true);
    }

    public static function deactivate()
    {
        update_option('wp_debug', false);
    }
}

WordPressErrorLog::init();
