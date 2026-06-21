<?php

if (!defined('ABSPATH')) {
    exit;
}

function gmbsim_install()
{
    global $wpdb;

    $table = $wpdb->prefix . 'gmbsim_products';

    $charset_collate = $wpdb->get_charset_collate();

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';

    $sql = "CREATE TABLE $table (

        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
        title VARCHAR(255) NOT NULL,
        product_id INT NOT NULL,
        channel VARCHAR(50) NOT NULL,
        fixed_profit INT DEFAULT 0,
        percent_profit INT DEFAULT 0,
        active TINYINT DEFAULT 1,

        PRIMARY KEY (id)

    ) $charset_collate;";

    dbDelta($sql);

    $count = $wpdb->get_var("SELECT COUNT(*) FROM $table");

    if ($count == 0) {

        $wpdb->insert($table, array(

            'title' => 'دائمی پایه',
            'product_id' => 314,
            'channel' => 'eShop',
            'fixed_profit' => 50000,
            'percent_profit' => 0,
            'active' => 1

        ));

    }
}