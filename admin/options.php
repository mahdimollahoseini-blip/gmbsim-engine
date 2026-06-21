<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('admin_init', 'gmbsim_register_settings');

function gmbsim_register_settings()
{
    register_setting(
        'gmbsim_group',
        'gmbsim_product_id'
    );

    register_setting(
        'gmbsim_group',
        'gmbsim_channel'
    );

    register_setting(
        'gmbsim_group',
        'gmbsim_base_price'
    );

    register_setting(
        'gmbsim_group',
        'gmbsim_fixed_profit'
    );

    register_setting(
        'gmbsim_group',
        'gmbsim_percent_profit'
    );
}