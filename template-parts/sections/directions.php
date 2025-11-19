<?php
/**
 * Секция "Направления"
 */

$theme_uri = get_template_directory_uri();

// Параметры для кнопки (используем компонент)
$button_text  = 'Показать все';
$button_url   = '/catalog'; // можно временно сделать '#'
$button_class = 'button-primary--wide directions__button-primary';
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
                        // Чтобы не дублировать длинный HTML — позже мы сделаем вывод циклом из админки
                        // Сейчас оставим один примерный слайд, чтобы проверить работу
                        ?>

                        <div class="directions__slide swiper-slide" data-directions-slide>
                            <article class="directions__country-card country-card">
                                <div class="country-card__info">
                                    <h3>Таиланд</h3>
                                    <p>Джунгли зовут!</p>

                                    <div class="country-card__meta">
                                        <div class="country-card__meta-icon">
                                            <svg width="28" height="24" aria-hidden="true">
                                                <use xlink:href="<?php echo $theme_uri; ?>/assets/img/sprite.svg#user"></use>
                                            </svg>
                                        </div>
                                        <span class="country-card__count">18321</span>
                                    </div>

                                    <div class="country-card__flag-wrapper">
                                        <img src="<?php echo $theme_uri; ?>/assets/img/content/flags/flag-thailand.png"
                                             srcset="<?php echo $theme_uri; ?>/assets/img/content/flags/flag-thailand@2x.png 2x"
                                             width="70" height="47" loading="lazy" alt="Флаг Таиланда">
                                    </div>
                                </div>

                                <div class="country-card__image">
                                    <img src="<?php echo $theme_uri; ?>/assets/img/content/directions/slides/thailand-desktop.jpg"
                                         srcset="<?php echo $theme_uri; ?>/assets/img/content/directions/slides/thailand-desktop@2x.jpg 2x"
                                         width="203" height="140" loading="lazy" alt="Таиланд">
                                </div>
                            </article>
                        </div>

                    </div>
                </div>
            </div>

            <div class="directions__actions">
                <?php
                // Подключаем ТВОЙ компонент кнопки
                $text  = $button_text;
                $url   = $button_url;
                $class = $button_class;

                include get_theme_file_path('template-parts/components/button-primary.php');
                ?>
            </div>

        </div>
    </div>
</section>

