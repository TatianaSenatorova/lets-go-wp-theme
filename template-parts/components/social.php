<?php
/**
 * Social links list.
 * Можно использовать в хедере, футере и т.д.
 */

// Базовый класс-обёртка по умолчанию
$wrapper_class = 'social';

// Если передали класс из get_template_part — используем его
if ( ! empty( $args['class'] ) ) {
    $wrapper_class = esc_attr( $args['class'] );
}

// Модификатор (например, social--header)
$modifier_class = '';
if ( ! empty( $args['modifier'] ) ) {
    $modifier_class = ' ' . esc_attr( $args['modifier'] );
}

// Итоговый класс для <ul>
$final_class = trim( $wrapper_class . $modifier_class );

// Путь к спрайту
$sprite_url = get_template_directory_uri() . '/assets/img/sprite.svg';
?>

<ul class="<?php echo $final_class; ?>">
    <li class="social__item">
        <a class="social__link"
           href="#"
           target="_blank"
           rel="noreferrer noopener nofollow"
           aria-label="Мы в Telegram">
            <svg width="32" height="32" aria-hidden="true">
                <use xlink:href="<?php echo $sprite_url; ?>#telegram"></use>
            </svg>
        </a>
    </li>

    <li class="social__item">
        <a class="social__link"
           href="#"
           target="_blank"
           rel="noreferrer noopener nofollow"
           aria-label="Мы ВКонтакте">
            <svg width="32" height="32" aria-hidden="true">
                <use xlink:href="<?php echo $sprite_url; ?>#vk"></use>
            </svg>
        </a>
    </li>

    <li class="social__item">
        <a class="social__link"
           href="#"
           target="_blank"
           rel="noreferrer noopener nofollow"
           aria-label="Мы на YouTube">
            <svg width="32" height="32" aria-hidden="true">
                <use xlink:href="<?php echo $sprite_url; ?>#youtube"></use>
            </svg>
        </a>
    </li>
</ul>
