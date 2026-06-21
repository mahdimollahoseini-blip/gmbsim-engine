<?php

if (!defined('ABSPATH')) {
    exit;
}

function gmbsim_install()
{
    global $wpdb;

    $table = $wpdb->prefix . 'gmbsim_products';

    $charset = $wpdb->get_charset_collate();

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

    ) $charset;";

    dbDelta($sql);
}