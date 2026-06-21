<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_ajax_gmbsim_search', 'gmbsim_search');
add_action('wp_ajax_nopriv_gmbsim_search', 'gmbsim_search');

function gmbsim_search()
{
    if (empty($_POST['pattern'])) {
        wp_send_json_error('الگوی جستجو ارسال نشده است.');
    }

    $pattern = sanitize_text_field($_POST['pattern']);

    // دریافت نتایج از موتور جستجو
    $results = GMBSIM_Irancell_API::search($pattern);

    wp_send_json_success($results);
}