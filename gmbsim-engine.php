<?php
/**
 * Plugin Name: GMB SIM Engine
 * Plugin URI: https://gmbsim.ir
 * Description: موتور جستجو و فروش شماره‌های ایرانسل
 * Version: 1.0.0
 * Author: GMB SIM
 * Author URI: https://gmbsim.ir
 * Requires at least: 6.0
 * Requires PHP: 8.1
 * License: GPL2
 */

if (!defined('ABSPATH')) {
    exit;
}

define('GMBSIM_VERSION', '1.0.0');
define('GMBSIM_PLUGIN_FILE', __FILE__);
define('GMBSIM_PATH', plugin_dir_path(__FILE__));
define('GMBSIM_URL', plugin_dir_url(__FILE__));

require_once GMBSIM_PATH . 'includes/loader.php';

GMBSIM_Loader::init();
register_activation_hook(__FILE__, 'gmbsim_install');
add_action('wp_enqueue_scripts', function () {

    wp_enqueue_script(

        'gmbsim',

        GMBSIM_URL.'assets/js/main.js',

        array('jquery'),

        GMBSIM_VERSION,

        true

    );

    wp_localize_script(

        'gmbsim',

        'gmbsim',

        array(

            'ajaxurl'=>admin_url('admin-ajax.php')

        )

    );

});