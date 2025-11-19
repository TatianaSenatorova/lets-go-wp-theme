<?php
/**
 * Button Primary — чистый компонент
 * Работает в WP 5.3.5
 */

$text  = isset($text) ? esc_html($text) : 'Подробнее';
$url   = isset($url) ? esc_url($url) : '#';
$class = isset($class) ? esc_attr($class) : '';
?>

<a class="button-primary <?php echo $class; ?>" href="<?php echo $url; ?>">
    <?php echo $text; ?>
    <span class="button__icon-wrapper">
        <svg width="11" height="14" aria-hidden="true">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#polygon"></use>
        </svg>
    </span>
</a>
