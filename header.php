<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="Сервис поиска попутчиков в путешествиях - «Погнали!». С «Погнали!» твои поездки - только с теми, кто на одной волне.">

    <?php
    // Базовый путь до темы, чтобы не повторяться
    $theme_uri = get_template_directory_uri();
    ?>

    <!-- FAVICONS -->
    <link rel="icon" type="image/png" href="<?php echo $theme_uri; ?>/assets/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="<?php echo $theme_uri; ?>/assets/favicon/favicon.svg">
    <link rel="shortcut icon" href="<?php echo $theme_uri; ?>/assets/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $theme_uri; ?>/assets/favicon/apple-touch-icon.png">
    <link rel="manifest" href="<?php echo $theme_uri; ?>/assets/favicon/site.webmanifest" crossorigin="use-credentials">

    <!-- PRELOAD FONTS -->
    <link rel="preload" href="<?php echo $theme_uri; ?>/assets/fonts/roboto/roboto-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="<?php echo $theme_uri; ?>/assets/fonts/roboto/roboto-500.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="<?php echo $theme_uri; ?>/assets/fonts/roboto/roboto-700.woff2" as="font" type="font/woff2" crossorigin="anonymous">

    <?php if ( is_front_page() ) : ?>
        <!-- PRELOAD HERO IMAGES (ГЛАВНАЯ) -->
        <link rel="preload"
              as="image"
              type="image/webp"
              media="(max-width: 320px)"
              href="<?php echo $theme_uri; ?>/assets/img/content/hero/globe-mobile.webp"
              imagesrcset="<?php echo $theme_uri; ?>/assets/img/content/hero/globe-mobile.webp 1x, <?php echo $theme_uri; ?>/assets/img/content/hero/globe-mobile@2x.webp 2x">

        <link rel="preload"
              as="image"
              type="image/webp"
              media="(min-width: 321px) and (max-width: 1023px)"
              href="<?php echo $theme_uri; ?>/assets/img/content/hero/globe-tablet.webp"
              imagesrcset="<?php echo $theme_uri; ?>/assets/img/content/hero/globe-tablet.webp 1x, <?php echo $theme_uri; ?>/assets/img/content/hero/globe-tablet@2x.webp 2x">

        <link rel="preload"
              as="image"
              type="image/webp"
              media="(min-width: 1024px)"
              href="<?php echo $theme_uri; ?>/assets/img/content/hero/globe-desktop.webp"
              imagesrcset="<?php echo $theme_uri; ?>/assets/img/content/hero/globe-desktop.webp 1x, <?php echo $theme_uri; ?>/assets/img/content/hero/globe-desktop@2x.webp 2x">

        <link rel="preload"
              as="image"
              type="image/webp"
              media="(max-width: 767px)"
              href="<?php echo $theme_uri; ?>/assets/img/content/hero/traveller-mobile.webp"
              imagesrcset="<?php echo $theme_uri; ?>/assets/img/content/hero/traveller-mobile.webp 1x, <?php echo $theme_uri; ?>/assets/img/content/hero/traveller-mobile@2x.webp 2x">

        <link rel="preload"
              as="image"
              type="image/webp"
              media="(min-width: 768px) and (max-width: 1023px)"
              href="<?php echo $theme_uri; ?>/assets/img/content/hero/traveller-tablet.webp"
              imagesrcset="<?php echo $theme_uri; ?>/assets/img/content/hero/traveller-tablet.webp 1x, <?php echo $theme_uri; ?>/assets/img/content/hero/traveller-tablet@2x.webp 2x">

        <link rel="preload"
              as="image"
              type="image/webp"
              media="(min-width: 1024px)"
              href="<?php echo $theme_uri; ?>/assets/img/content/hero/traveller-desktop.webp"
              imagesrcset="<?php echo $theme_uri; ?>/assets/img/content/hero/traveller-desktop.webp 1x, <?php echo $theme_uri; ?>/assets/img/content/hero/traveller-desktop@2x.webp 2x">

    <?php elseif ( is_page( 'catalog' ) ) : ?>
        <!-- PRELOAD IMAGES (КАТАЛОГ) -->
        <link rel="preload"
              as="image"
              type="image/webp"
              media="(max-width: 767px)"
              href="<?php echo $theme_uri; ?>/assets/img/content/companions/firsova-mobile-catalog.webp"
              imagesrcset="<?php echo $theme_uri; ?>/assets/img/content/companions/firsova-mobile-catalog.webp 1x, <?php echo $theme_uri; ?>/assets/img/content/companions/firsova-mobile-catalog@2x.webp 2x">

        <link rel="preload"
              as="image"
              type="image/webp"
              media="(min-width: 768px) and (max-width: 1023px)"
              href="<?php echo $theme_uri; ?>/assets/img/content/companions/firsova-tablet-catalog.webp"
              imagesrcset="<?php echo $theme_uri; ?>/assets/img/content/companions/firsova-tablet-catalog.webp 1x, <?php echo $theme_uri; ?>/assets/img/content/companions/firsova-tablet-catalog@2x.webp 2x">

        <link rel="preload"
              as="image"
              type="image/webp"
              media="(min-width: 1024px)"
              href="<?php echo $theme_uri; ?>/assets/img/content/companions/firsova-desktop-catalog.webp"
              imagesrcset="<?php echo $theme_uri; ?>/assets/img/content/companions/firsova-desktop-catalog.webp 1x, <?php echo $theme_uri; ?>/assets/img/content/companions/firsova-desktop-catalog@2x.webp 2x">

        <link rel="preload"
              as="fetch"
              href="<?php echo $theme_uri; ?>/assets/data/companions.json"
              crossorigin>
    <?php endif; ?>

    <!-- СТИЛИ (если пока не подключаешь через wp_enqueue_style) -->
    <link rel="stylesheet" href="<?php echo $theme_uri; ?>/assets/css/style.min.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
// -------------------------------
// ЕСЛИ ГЛАВНАЯ
// -------------------------------
if ( is_front_page() ) :
?>
    <header class="header header--bottom-padding-sm" data-header data-scroll-lock-fill-gap>
        <div class="container">
            <div class="header__inner">

                <!-- ЛОГО (главная версия - без ссылки) -->
                <span class="header__logo logo">
                    <span class="logo__wrap logo__wrap--light">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo $theme_uri; ?>/assets/img/svg/logos/logo-light-text-mobile.svg">
                            <source media="(max-width: 1023px)" srcset="<?php echo $theme_uri; ?>/assets/img/svg/logos/logo-light-text-tablet.svg">
                            <img src="<?php echo $theme_uri; ?>/assets/img/svg/logos/logo-light-text-desktop.svg" alt="Логотип Погнали?">
                        </picture>
                    </span>
                    <span class="logo__wrap logo__wrap--dark">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo $theme_uri; ?>/assets/img/svg/logos/logo-dark-text-mobile.svg">
                            <img src="<?php echo $theme_uri; ?>/assets/img/svg/logos/logo-dark-text-tablet.svg" alt="Логотип Погнали?">
                        </picture>
                    </span>
                </span>

                <!-- НАВИГАЦИЯ ДЛЯ ГЛАВНОЙ -->
                <nav class="header__main-nav">
                    <button class="header__toggle" type="button" aria-label="Переключатель отображения меню" aria-pressed="false" data-burger>
                        <span class="header__icon-burger">
                            <svg width="25" height="11" aria-hidden="true">
                                <use xlink:href="<?php echo $theme_uri; ?>/assets/img/sprite.svg#burger"></use>
                            </svg>
                        </span>
                        <span class="header__icon-close">
                            <svg width="18" height="19" aria-hidden="true">
                                <use xlink:href="<?php echo $theme_uri; ?>/assets/img/sprite.svg#close"></use>
                            </svg>
                        </span>
                    </button>

                    <div class="header__menu-wrapper">
                        <div class="header__menu-scroll" data-scroll-lock-scrollable data-lenis-prevent>

                            <ul class="header__nav-list">
                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="#about" data-nav="about" data-close-menu="true">
                                        <span class="header__link-clip">
                                            <span class="header__link-text" data-hover="О сервисе">О сервисе</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="#directions" data-nav="directions" data-close-menu="true">
                                        <span class="header__link-clip">
                                            <span class="header__link-text" data-hover="Направления">Направления</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="/catalog" data-nav="catalog" data-close-menu="true">
                                        <span class="header__link-clip">
                                            <span class="header__link-text" data-hover="Попутчики">Попутчики</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>

                            <?php
                            // контакты в хэдере
                            get_template_part(
                                'template-parts/components/contacts',
                                null,
                                ['class' => 'header__contacts contacts']
                            );

                            // соцсети в хэдере
                            get_template_part(
                                'template-parts/components/social',
                                null,
                                [
                                    'class'    => 'header__social social',
                                    'modifier' => 'social--header',
                                ]
                            );
                            ?>

                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </header>

<?php
// ------------------------------------
// ЕСЛИ СТРАНИЦА КАТАЛОГА
// ------------------------------------
elseif ( is_page( 'catalog' ) ) :
?>
    <header class="header header--dark-background" data-header data-scroll-lock-fill-gap>
        <div class="container">
            <div class="header__inner">

                <!-- ЛОГО КАК ССЫЛКА -->
                <a class="header__logo logo" href="/" aria-label="Погнали?">
                    <span class="logo__wrap logo__wrap--light">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo $theme_uri; ?>/assets/img/svg/logos/logo-light-text-mobile.svg">
                            <img src="<?php echo $theme_uri; ?>/assets/img/svg/logos/logo-light-text-desktop.svg" alt="Логотип Погнали?">
                        </picture>
                    </span>
                    <span class="logo__wrap logo__wrap--dark">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo $theme_uri; ?>/assets/img/svg/logos/logo-dark-text-mobile.svg">
                            <img src="<?php echo $theme_uri; ?>/assets/img/svg/logos/logo-dark-text-tablet.svg" alt="Логотип Погнали?">
                        </picture>
                    </span>
                </a>

                <!-- НАВИГАЦИЯ КАТАЛОГА -->
                <nav class="header__main-nav">
                    <button class="header__toggle" type="button" aria-label="Переключатель отображения меню" aria-pressed="false" data-burger>
                        <span class="header__icon-burger">
                            <svg width="25" height="11" aria-hidden="true">
                                <use xlink:href="<?php echo $theme_uri; ?>/assets/img/sprite.svg#burger"></use>
                            </svg>
                        </span>
                        <span class="header__icon-close">
                            <svg width="18" height="19" aria-hidden="true">
                                <use xlink:href="<?php echo $theme_uri; ?>/assets/img/sprite.svg#close"></use>
                            </svg>
                        </span>
                    </button>

                    <div class="header__menu-wrapper">
                        <div class="header__menu-scroll" data-scroll-lock-scrollable data-lenis-prevent>

                            <ul class="header__nav-list">
                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="/#about" data-nav="about" data-close-menu="true">
                                        <span class="header__link-clip">
                                            <span class="header__link-text" data-hover="О сервисе">О сервисе</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="/#directions" data-nav="directions" data-close-menu="true">
                                        <span class="header__link-clip">
                                            <span class="header__link-text" data-hover="Направления">Направления</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="header__nav-item">
                                    <span class="header__nav-link is-active" aria-current="page" data-close-menu="true">
                                        Попутчики
                                    </span>
                                </li>
                            </ul>

                            <?php
                            // контакты
                            get_template_part(
                                'template-parts/components/contacts',
                                null,
                                ['class' => 'header__contacts contacts']
                            );

                            // соцсети
                            get_template_part(
                                'template-parts/components/social',
                                null,
                                [
                                    'class'    => 'header__social social',
                                    'modifier' => 'social--header',
                                ]
                            );
                            ?>

                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </header>

<?php
endif;
?>
