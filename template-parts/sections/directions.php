<?php

/**
 * Секция "Направления"
 */

$theme_uri = get_template_directory_uri();
?>

<section class="directions" id="directions">
    <div class="container container--flex">
        <div class="directions__inner">

            <div class="directions__info">
                <h2 class="directions__section-title section-title section-title--dark section-title--small">
                    Направления
                </h2>
                <div class="directions__content">
                    <p>
                        Мы&nbsp;не&nbsp;продаем туры и&nbsp;ничего не&nbsp;рекламируем.<br>
                        Люди сами пишут о&nbsp;странах, куда хотели&nbsp;бы
                        отправиться и&nbsp;чем можно там заняться.
                    </p>
                </div>
            </div>

            <div class="directions__slider-block">
                <div class="directions__swiper swiper" data-directions-swiper>
                    <div class="directions__swiper-wrapper swiper-wrapper">

                        <?php
                        // порядок — drag&drop в админке
                        $directions = new WP_Query([
                            'post_type'      => 'direction',
                            'posts_per_page' => -1,
                            'orderby'        => 'menu_order',
                            'order'          => 'ASC',
                        ]);

                        if ($directions->have_posts()) :
                            while ($directions->have_posts()) :
                                $directions->the_post();

                                // ----- ТЕКСТ -----
                                $title        = get_field('title');
                                $subtitle     = get_field('subtitle');
                                $people_count = get_field('people_count');

                                // ----- ФЛАГИ -----
                                $flag_mobile     = get_field('flag_mobile');
                                $flag_mobile_2x  = get_field('flag_mobile_2x');
                                $flag_tablet     = get_field('flag_tablet');
                                $flag_tablet_2x  = get_field('flag_tablet_2x');

                               
                                // ----- КАРТИНКИ -----
                                $card_mobile        = get_field('card_image_mobile');
                                $card_mobile_2x     = get_field('card_image_mobile_2x');
                                $card_tablet        = get_field('card_image_tablet');
                                $card_tablet_2x     = get_field('card_image_tablet_2x');
                                $card_desktop       = get_field('card_image_desktop');
                                $card_desktop_2x    = get_field('card_image_desktop_2x');
                        ?>

                                <div class="directions__slide swiper-slide" data-directions-slide>
                                    <article class="directions__country-card country-card">

                                        <div class="country-card__info">
                                            <h3><?= esc_html($title); ?></h3>
                                            <p><?= esc_html($subtitle); ?></p>

                                            <div class="country-card__meta">
                                                <div class="country-card__meta-icon">
                                                    <svg width="28" height="24" aria-hidden="true">
                                                        <use xlink:href="<?= $theme_uri; ?>/assets/img/sprite.svg#user"></use>
                                                    </svg>
                                                </div>
                                                <span class="country-card__count"><?= esc_html($people_count); ?></span>
                                            </div>

                                            <!-- ======= ФЛАГ ======= -->
                                            <?php if ($flag_mobile || $flag_tablet): ?>
                                                <div class="country-card__flag-wrapper">
                                                    <picture>

                                                        <?php if ($flag_mobile): ?>
                                                            <source media="(max-width: 767px)"
                                                                srcset="<?= esc_url($flag_mobile['url']); ?><?= $flag_mobile_2x ? ', ' . esc_url($flag_mobile_2x['url']) . ' 2x' : ''; ?>"
                                                                width="35" height="24">
                                                        <?php endif; ?>

                                                        <?php if ($flag_tablet): ?>
                                                            <source media="(max-width: 1023px)"
                                                                srcset="<?= esc_url($flag_tablet['url']); ?><?= $flag_tablet_2x ? ', ' . esc_url($flag_tablet_2x['url']) . ' 2x' : ''; ?>"
                                                                width="70" height="47">
                                                        <?php endif; ?>

                                                        <?php
                                                        // fallback
                                                        $flag_final    = $flag_tablet ?: $flag_mobile;
                                                        $flag_final_2x = $flag_tablet_2x ?: $flag_mobile_2x;
                                                        ?>

                                                        <img src="<?= esc_url($flag_final['url']); ?>"
                                                            <?= $flag_final_2x ? 'srcset="' . esc_url($flag_final['url']) . ', ' . esc_url($flag_final_2x['url']) . ' 2x"' : ''; ?>
                                                            width="70" height="47" loading="lazy"
                                                            alt="<?= esc_attr($flag_final['alt'] ?: $title); ?>">
                                                    </picture>
                                                </div>
                                            <?php endif; ?>

                                        </div>

                                        <!-- ======= КАРТИНКИ КАРТОЧКИ ======= -->
                                        <?php if ($card_mobile || $card_tablet || $card_desktop): ?>
                                            <div class="country-card__image">
                                                <picture>

                                                    <?php if ($card_mobile): ?>
                                                        <source media="(max-width: 767px)"
                                                            srcset="<?= esc_url($card_mobile['url']); ?><?= $card_mobile_2x ? ', ' . esc_url($card_mobile_2x['url']) . ' 2x' : ''; ?>"
                                                            width="270" height="111">
                                                    <?php endif; ?>

                                                    <?php if ($card_tablet): ?>
                                                        <source media="(max-width: 1023px)"
                                                            srcset="<?= esc_url($card_tablet['url']); ?><?= $card_tablet_2x ? ', ' . esc_url($card_tablet_2x['url']) . ' 2x' : ''; ?>"
                                                            width="186" height="140">
                                                    <?php endif; ?>

                                                    <?php
                                                    $img_final    = $card_desktop ?: ($card_tablet ?: $card_mobile);
                                                    $img_final_2x = $card_desktop_2x ?: ($card_tablet_2x ?: $card_mobile_2x);
                                                    ?>

                                                    <img src="<?= esc_url($img_final['url']); ?>"
                                                        <?= $img_final_2x ? 'srcset="' . esc_url($img_final['url']) . ', ' . esc_url($img_final_2x['url']) . ' 2x"' : ''; ?>
                                                        width="203" height="140" loading="lazy"
                                                        alt="<?= esc_attr($img_final['alt'] ?: $title); ?>">
                                                </picture>
                                            </div>
                                        <?php endif; ?>

                                    </article>
                                </div>

                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>

                    </div>
                </div>
            </div>

            <div class="directions__actions">
                <?php
                $text  = 'Показать все';
                $url   = '#';
                $class = 'directions__button-primary button-primary--wide';

                include get_theme_file_path('template-parts/components/button-primary.php');
                ?>
            </div>

        </div>
    </div>
</section>