<?php

if (!defined('ABSPATH')) {
    exit;
}

function gmbsim_admin_menu()
{
    add_menu_page(
    'GMBSIM',
    'GMBSIM',
    'manage_options',
    'gmbsim-settings',
    'gmbsim_settings_page',
    'dashicons-smartphone',
    30
);

add_submenu_page(
    'gmbsim-settings',
    'دسته بندی ها',
    'دسته بندی ها',
    'manage_options',
    'gmbsim-products',
    'gmbsim_products_page'
);
}

add_action('admin_menu', 'gmbsim_admin_menu');