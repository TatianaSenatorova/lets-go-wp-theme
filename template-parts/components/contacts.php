<?php
/**
 * Header contacts list (phone + email).
 * Можно использовать и вне хедера.
 */

// Класс по умолчанию, если ничего не передали
$contacts_class = 'contacts';

if ( ! empty( $args['class'] ) ) {
    // Берём класс, который передали из get_template_part
    $contacts_class = esc_attr( $args['class'] );
}
?>

<ul class="<?php echo $contacts_class; ?>">
    <li class="contacts__item">
        <a class="icon-link icon-link--hidden-text-desktop icon-link--on-light-bg"
           href="tel:+78005558628"
           aria-label="Позвонить по телефону 88005558628">
            <span class="icon-link__svg-wrapper icon-link__svg-wrapper--desktop">
                <svg width="21" height="21" aria-hidden="true">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#phone-desktop-header"></use>
                </svg>
            </span>
            <span class="icon-link__svg-wrapper icon-link__svg-wrapper--tablet">
                <svg width="21" height="21" aria-hidden="true">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#phone"></use>
                </svg>
            </span>
            <span class="icon-link__text">8&nbsp;800 555-86-28</span>
        </a>
    </li>

    <li class="contacts__item">
        <a class="icon-link icon-link--hidden-text-desktop icon-link--on-light-bg"
           href="mailto:mail@htmlacademy.ru"
           aria-label="Написать на электронную почту mail@htmlacademy.ru">
            <span class="icon-link__svg-wrapper icon-link__svg-wrapper--desktop">
                <svg width="21" height="21" aria-hidden="true">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#mail-desktop-header"></use>
                </svg>
            </span>
            <span class="icon-link__svg-wrapper icon-link__svg-wrapper--tablet">
                <svg width="21" height="21" aria-hidden="true">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#mail"></use>
                </svg>
            </span>
            <span class="icon-link__text">mail@htmlacademy.ru</span>
        </a>
    </li>
</ul>
