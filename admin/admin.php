<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('admin_menu', function () {

    add_menu_page(
        'GMB SIM',
        'GMB SIM',
        'manage_options',
        'gmbsim',
        function () {

            echo '<div class="wrap">';
            echo '<h1>GMB SIM Engine</h1>';
            echo '<p>نسخه : 1.0.0</p>';
            echo '<hr>';
            echo '<p>افزونه با موفقیت بارگذاری شد.</p>';
            echo '</div>';

        },
        'dashicons-smartphone'
    );

});