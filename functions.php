<?php

/**
 * Подключение стилей и скриптов темы
 */
function letsgo_theme_scripts() {

    // Main CSS
    $style_path = get_template_directory() . '/assets/css/style.css';
    if ( file_exists( $style_path ) ) {
        wp_enqueue_style(
            'letsgo-main-style',
            get_template_directory_uri() . '/assets/css/style.css',
            [],
            filemtime( $style_path )
        );
    }

    // Vendor JS
    $vendor_path = get_template_directory() . '/assets/js/vendor.js';
    if ( file_exists( $vendor_path ) ) {
        wp_enqueue_script(
            'letsgo-vendor',
            get_template_directory_uri() . '/assets/js/vendor.js',
            ['jquery'],
            filemtime( $vendor_path ),
            true
        );
    }

    // Main JS
    $main_js_path = get_template_directory() . '/assets/js/main.js';
    if ( file_exists( $main_js_path ) ) {
        wp_enqueue_script(
            'letsgo-main',
            get_template_directory_uri() . '/assets/js/main.js',
            ['jquery', 'letsgo-vendor'],
            filemtime( $main_js_path ),
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'letsgo_theme_scripts' );



/**
 * Регистрация кастомного пост-типа «Направления»
 */
function register_directions_cpt() {

    register_post_type( 'direction', [
        'labels' => [
            'name'          => 'Направления',
            'singular_name' => 'Направление',
        ],
        'public'                => true,
        'publicly_queryable'    => true,
        'has_archive'           => false,
        'menu_icon'             => 'dashicons-location-alt',
        'supports'              => [ 'title' ],
        'rewrite'               => [ 'slug' => 'directions' ],
        'show_in_rest'          => false, // нам REST не нужен
    ] );
}
add_action( 'init', 'register_directions_cpt' );



/**
 * Размеры изображений для секции Дирекшнс (для <picture>)
 */
function letsgo_register_image_sizes() {

    // mobile — 270×111
    add_image_size( 'dir_mobile', 270, 111, true );

    // tablet — 186×140
    add_image_size( 'dir_tablet', 186, 140, true );

    // desktop — 203×140
    add_image_size( 'dir_desktop', 203, 140, true );
}
add_action( 'after_setup_theme', 'letsgo_register_image_sizes' );

