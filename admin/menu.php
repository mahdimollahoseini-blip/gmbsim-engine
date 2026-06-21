<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('admin_menu', 'gmbsim_admin_menu');

function gmbsim_admin_menu()
{
    // منوی اصلی
    add_menu_page(
        'GMB SIM',
        'GMB SIM',
        'manage_options',
        'gmbsim',
        'gmbsim_dashboard_page',
        'dashicons-smartphone',
        26
    );

    // داشبورد
    add_submenu_page(
        'gmbsim',
        'داشبورد',
        'داشبورد',
        'manage_options',
        'gmbsim',
        'gmbsim_dashboard_page'
    );

    // دسته بندی محصولات
    add_submenu_page(
        'gmbsim',
        'دسته بندی محصولات',
        'دسته بندی محصولات',
        'manage_options',
        'gmbsim-products',
        'gmbsim_products_page'
    );

    // تنظیمات
    add_submenu_page(
        'gmbsim',
        'تنظیمات',
        'تنظیمات',
        'manage_options',
        'gmbsim-settings',
        'gmbsim_settings_page'
    );
}

function gmbsim_dashboard_page()
{
    ?>
    <div class="wrap">
        <h1>GMB SIM Engine</h1>

        <p>نسخه: <?php echo esc_html(GMBSIM_VERSION); ?></p>

        <p>به موتور جستجوی سیم کارت ایرانسل خوش آمدید.</p>
    </div>
    <?php
}