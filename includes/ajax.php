<?php

if (!defined('ABSPATH')) exit;

add_action('wp_ajax_gmbsim_search','gmbsim_search');

add_action('wp_ajax_nopriv_gmbsim_search','gmbsim_search');

function gmbsim_search(){

    $pattern = sanitize_text_field($_POST['pattern']);

    echo "<h3>نتیجه تست</h3>";

    echo "<p>شماره وارد شده:</p>";

    echo "<strong>".$pattern."</strong>";

    wp_die();

}