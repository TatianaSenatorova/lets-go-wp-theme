<?php

// Подключаем стили и скрипты темы
function liga_letsgo_assets() {
    wp_enqueue_style(
        'liga-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        null
    );

    wp_enqueue_script(
        'liga-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'liga_letsgo_assets');


// Чтобы WordPress поддерживал меню и миниатюры
function liga_letsgo_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
}
add_action('after_setup_theme', 'liga_letsgo_theme_setup');
