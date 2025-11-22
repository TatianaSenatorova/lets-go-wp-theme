<?php
/**
 * Функции темы LetsGo
 */

// =================== СТИЛИ И СКРИПТЫ =====================
function letsgo_theme_scripts() {
    $style_path = get_template_directory() . '/assets/css/style.css';
    if (file_exists($style_path)) {
        wp_enqueue_style(
            'letsgo-main-style',
            get_template_directory_uri() . '/assets/css/style.css',
            [],
            filemtime($style_path)
        );
    }

    $vendor_path = get_template_directory() . '/assets/js/vendor.js';
    if (file_exists($vendor_path)) {
        wp_enqueue_script(
            'letsgo-vendor',
            get_template_directory_uri() . '/assets/js/vendor.js',
            [],
            filemtime($vendor_path),
            true
        );
    }

    $main_js_path = get_template_directory() . '/assets/js/main.js';
    if (file_exists($main_js_path)) {
        wp_enqueue_script(
            'letsgo-main',
            get_template_directory_uri() . '/assets/js/main.js',
            ['letsgo-vendor'],
            filemtime($main_js_path),
            true
        );

        wp_localize_script('letsgo-main', 'wp_ajax_data', [
            'url' => admin_url('admin-ajax.php'),
        ]);
    }
}
add_action('wp_enqueue_scripts', 'letsgo_theme_scripts');


// =================== ПОСТ ТИП =====================
function register_directions_cpt() {
    register_post_type('direction', [
        'labels' => [
            'name' => 'Направления',
            'singular_name' => 'Направление',
        ],
        'public' => true,
        'publicly_queryable' => false,
        'has_archive' => false,
        'menu_icon' => 'dashicons-location-alt',
        'supports' => ['title'],
        'rewrite' => false,
        'show_in_rest' => false,
    ]);
}
add_action('init', 'register_directions_cpt');


// =================== AJAX MAILPOET =====================

add_action('wp_ajax_custom_subscribe', 'custom_subscribe_handler_ajax');
add_action('wp_ajax_nopriv_custom_subscribe', 'custom_subscribe_handler_ajax');

function custom_subscribe_handler_ajax() {

    // Логирование
    $log = function($msg) {
        $file = __DIR__ . '/mailpoet_debug.log';
        file_put_contents($file, date('H:i:s') . " — " . print_r($msg, true) . "\n", FILE_APPEND);
    };

    $log("=== AJAX STARTED ===");

    // Проверяем MailPoet API
    if (!class_exists('\MailPoet\API\API')) {
        $log("MailPoet API not found");
        wp_send_json_error(['status' => 'mailpoet_missing']);
    }
    $log("MailPoet API found");

    // Email
    $email = isset($_POST['reg_email']) ? sanitize_email($_POST['reg_email']) : '';
    $log("Email: $email");

    if (!is_email($email)) {
        $log("Invalid email");
        wp_send_json_error(['status' => 'invalid_email']);
    }

    $list_id = 4;
    $log("List ID: $list_id");

    try {
        $api = \MailPoet\API\API::MP('v1');
        $log("API Loaded");

        try {
            // Попробуем получить подписчика
            $subscriber = $api->getSubscriber($email);
            $log(['Found subscriber' => $subscriber]);

            // Если найден — подписываем в список
            $api->subscribeToLists($subscriber['id'], [$list_id]);
            $log("Subscriber added to list");

            wp_send_json_success(['status' => 'subscribed_existing']);
        }
        catch (\Exception $e) {

            // Подписчика нет — создаём
            if (strpos($e->getMessage(), 'не существует') !== false) {
                $log("Subscriber does not exist — creating");

                $subscriber = $api->addSubscriber([
                    'email' => $email,
                    'status' => 'subscribed'
                ], [$list_id]);

                $log(['Created subscriber' => $subscriber]);

                wp_send_json_success(['status' => 'subscribed_new']);
            }

            // Любая другая ошибка
            $log(['API error' => $e->getMessage()]);
            wp_send_json_error(['status' => 'exception', 'message' => $e->getMessage()]);
        }

    } catch (\Exception $e) {
        $log(['FATAL error' => $e->getMessage()]);
        wp_send_json_error(['status' => 'exception', 'message' => $e->getMessage()]);
    }
}
