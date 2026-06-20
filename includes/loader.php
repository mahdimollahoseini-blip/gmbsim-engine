<?php

if (!defined('ABSPATH')) {
    exit;
}

class GMBSIM_Loader
{
    public static function init()
    {
        require_once GMBSIM_PATH . 'admin/admin.php';
        require_once GMBSIM_PATH . 'api/irancell-api.php';
        require_once GMBSIM_PATH . 'includes/shortcodes.php';

        add_action('plugins_loaded', [__CLASS__, 'loaded']);
    }

    public static function loaded()
    {
        // در نسخه‌های بعدی اینجا کدهای راه‌اندازی اجرا می‌شوند.
    }
}
require_once GMBSIM_PATH.'includes/ajax.php';