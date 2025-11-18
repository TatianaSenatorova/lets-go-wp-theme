<?php
/**
 * Hero main section for front page
 */

$theme_uri = get_template_directory_uri();
?>

<section class="hero-main" data-push-below-header>
    <div class="hero-main__background-wrapper">
        <picture>
            <source media="(max-width: 320px)" type="image/webp"
                srcset="<?php echo $theme_uri; ?>/assets/img/content/hero/globe-mobile.webp,
                        <?php echo $theme_uri; ?>/assets/img/content/hero/globe-mobile@2x.webp 2x"
                width="320" height="626">

            <source media="(max-width: 320px)" type="image/jpeg"
                srcset="<?php echo $theme_uri; ?>/assets/img/content/hero/globe-mobile.jpg,
                        <?php echo $theme_uri; ?>/assets/img/content/hero/globe-mobile@2x.jpg 2x"
                width="320" height="626">

            <source media="(min-width: 321px) and (max-width: 1023px)" type="image/webp"
                srcset="<?php echo $theme_uri; ?>/assets/img/content/hero/globe-tablet.webp,
                        <?php echo $theme_uri; ?>/assets/img/content/hero/globe-tablet@2x.webp 2x"
                width="1023" height="906">

            <source media="(min-width: 321px) and (max-width: 1023px)" type="image/jpeg"
                srcset="<?php echo $theme_uri; ?>/assets/img/content/hero/globe-tablet.jpg,
                        <?php echo $theme_uri; ?>/assets/img/content/hero/globe-tablet@2x.jpg 2x"
                width="1023" height="906">

            <source type="image/webp"
                srcset="<?php echo $theme_uri; ?>/assets/img/content/hero/globe-desktop.webp,
                        <?php echo $theme_uri; ?>/assets/img/content/hero/globe-desktop@2x.webp 2x"
                width="1440" height="742">

            <img src="<?php echo $theme_uri; ?>/assets/img/content/hero/globe-desktop.png"
                 srcset="<?php echo $theme_uri; ?>/assets/img/content/hero/globe-desktop@2x.png 2x"
                 width="1440" height="742" alt="Глобус" fetchpriority="high">
        </picture>
    </div>

    <div class="container">
        <div class="hero-main__inner">
            <h1 class="visually-hidden">
                Сервис для поиска попутчиков для путешествий «Погнали?»
            </h1>

            <div class="hero-main__content">
                <p>В&nbsp;путешествие с&nbsp;крутыми попутчиками!</p>
            </div>

            <div class="hero-main__img-wrapper">
                <picture>
                    <source media="(max-width: 767px)" type="image/webp"
                        srcset="<?php echo $theme_uri; ?>/assets/img/content/hero/traveller-mobile.webp,
                                <?php echo $theme_uri; ?>/assets/img/content/hero/traveller-mobile@2x.webp 2x"
                        width="192" height="255">

                    <source media="(max-width: 767px)" type="image/png"
                        srcset="<?php echo $theme_uri; ?>/assets/img/content/hero/traveller-mobile.png,
                                <?php echo $theme_uri; ?>/assets/img/content/hero/traveller-mobile@2x.png 2x"
                        width="192" height="255">

                    <source media="(max-width: 1023px)" type="image/webp"
                        srcset="<?php echo $theme_uri; ?>/assets/img/content/hero/traveller-tablet.webp,
                                <?php echo $theme_uri; ?>/assets/img/content/hero/traveller-tablet@2x.webp 2x"
                        width="437" height="530">

                    <source media="(max-width: 1023px)" type="image/png"
                        srcset="<?php echo $theme_uri; ?>/assets/img/content/hero/traveller-tablet.png,
                                <?php echo $theme_uri; ?>/assets/img/content/hero/traveller-tablet@2x.png 2x"
                        width="437" height="530">

                    <source type="image/webp"
                        srcset="<?php echo $theme_uri; ?>/assets/img/content/hero/traveller-desktop.webp,
                                <?php echo $theme_uri; ?>/assets/img/content/hero/traveller-desktop@2x.webp 2x"
                        width="431" height="640">

                    <img src="<?php echo $theme_uri; ?>/assets/img/content/hero/traveller-desktop.png"
                         srcset="<?php echo $theme_uri; ?>/assets/img/content/hero/traveller-desktop@2x.png 2x"
                         width="431" height="640"
                         alt="Путешественник" fetchpriority="high">
                </picture>
            </div>

            <ol class="hero-main__list" data-anim="slide-right">
                <li><p>Выберите направление</p></li>
                <li><p>Изучите идеи путешественников</p></li>
                <li><p>Находите тех, кто&nbsp;похож на&nbsp;вас</p></li>
                <li><p>Путешествуйте вместе!</p></li>
            </ol>
        </div>
    </div>
</section>
