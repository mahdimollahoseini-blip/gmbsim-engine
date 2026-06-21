<?php

if (!defined('ABSPATH')) {
    exit;
}

class GMBSIM_Loader
{
    public static function init()
    {
        
        // Admin
        require_once GMBSIM_PATH . 'admin/admin.php';

        // API
        require_once GMBSIM_PATH . 'api/irancell-api.php';

        // Frontend
        require_once GMBSIM_PATH . 'includes/shortcodes.php';
        require_once GMBSIM_PATH . 'includes/ajax.php';

        add_action('plugins_loaded', array(__CLASS__, 'loaded'));
    }

    public static function loaded()
    {

    }
}