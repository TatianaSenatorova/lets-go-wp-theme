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
                        $directions = new WP_Query([
                            'post_type'      => 'direction',
                            'posts_per_page' => -1,
                        ]);

                        if ( $directions->have_posts() ) :
                            while ( $directions->have_posts() ) :
                                $directions->the_post();

                                $title        = get_field('title');
                                $subtitle     = get_field('subtitle');
                                $people_count = get_field('people_count');
                                $flag         = get_field('flag');
                                $card_image   = get_field('card_image');
                        ?>
                            <div class="directions__slide swiper-slide" data-directions-slide>
                                <article class="directions__country-card country-card">

                                    <div class="country-card__info">
                                        <h3><?php echo esc_html( $title ); ?></h3>
                                        <p><?php echo esc_html( $subtitle ); ?></p>

                                        <div class="country-card__meta">
                                            <div class="country-card__meta-icon">
                                                <svg width="28" height="24"><use xlink:href="<?php echo $theme_uri; ?>/assets/img/sprite.svg#user"></use></svg>
                                            </div>
                                            <span class="country-card__count"><?php echo esc_html( $people_count ); ?></span>
                                        </div>

                                        <?php if ( $flag ) : ?>
                                            <div class="country-card__flag-wrapper">
                                                <img src="<?php echo esc_url( $flag['url'] ); ?>" width="70" height="47" loading="lazy" alt="">
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <?php if ( $card_image ) : ?>
                                    <div class="country-card__image">
                                        <img src="<?php echo esc_url( $card_image['url'] ); ?>" width="203" height="140" loading="lazy" alt="">
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
                // Параметры для компонента кнопки
                $text  = 'Показать все';
                $url   = '/catalog';
                $class = 'directions__button-primary button-primary--wide';

                include get_theme_file_path( 'template-parts/components/button-primary.php' );
                ?>
            </div>

        </div>
    </div>
</section>


