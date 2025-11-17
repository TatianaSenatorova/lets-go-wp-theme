<?php

function letsgo_theme_scripts() {

    // ---- СТИЛИ ----
    wp_enqueue_style(
        'letsgo-main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/main.css')
    );

    // ---- VENDOR JS ----
    wp_enqueue_script(
        'letsgo-vendor',
        get_template_directory_uri() . '/assets/js/vendor.js',
        array('jquery'),
        filemtime(get_template_directory() . '/assets/js/vendor.js'),
        true
    );

    // ---- MAIN JS ----
    wp_enqueue_script(
        'letsgo-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery', 'letsgo-vendor'),
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );
}

add_action('wp_enqueue_scripts', 'letsgo_theme_scripts');
