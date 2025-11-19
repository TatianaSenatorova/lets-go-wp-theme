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

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">

<?php
if ( is_front_page() ) :
?>
    <header class="header header--bottom-padding-sm" data-header data-scroll-lock-fill-gap>
        <!-- ТВОЙ ХЭДЕР ДЛЯ ГЛАВНОЙ (оставляю как есть) -->
        <div class="container">
            <div class="header__inner">

                <!-- ЛОГО -->
                <span class="header__logo logo">
                    <span class="logo__wrap logo__wrap--light">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo $theme_uri; ?>/assets/img/svg/logos/logo-light-text-mobile.svg">
                            <source media="(max-width: 1023px)" srcset="<?php echo $theme_uri; ?>/assets/img/svg/logos/logo-light-text-tablet.svg">
                            <img src="<?php echo $theme_uri; ?>/assets/img/svg/logos/logo-light-text-desktop.svg" alt="">
                        </picture>
                    </span>
                    <span class="logo__wrap logo__wrap--dark">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo $theme_uri; ?>/assets/img/svg/logos/logo-dark-text-mobile.svg">
                            <img src="<?php echo $theme_uri; ?>/assets/img/svg/logos/logo-dark-text-tablet.svg" alt="">
                        </picture>
                    </span>
                </span>

                <!-- НАВИГАЦИЯ -->
                <?php /* оставлено как у тебя */ ?>
                <nav class="header__main-nav">
                    <button class="header__toggle" type="button" data-burger>
                        <span class="header__icon-burger"><svg width="25" height="11"><use xlink:href="<?php echo $theme_uri; ?>/assets/img/sprite.svg#burger"></use></svg></span>
                        <span class="header__icon-close"><svg width="18" height="19"><use xlink:href="<?php echo $theme_uri; ?>/assets/img/sprite.svg#close"></use></svg></span>
                    </button>

                    <div class="header__menu-wrapper">
                        <div class="header__menu-scroll" data-scroll-lock-scrollable data-lenis-prevent>

                            <ul class="header__nav-list">
                                <li><a class="header__nav-link" href="#about">О сервисе</a></li>
                                <li><a class="header__nav-link" href="#directions">Направления</a></li>
                                <li><a class="header__nav-link" href="/catalog">Попутчики</a></li>
                            </ul>

                            <?php
                            get_template_part('template-parts/components/contacts', null, ['class'=>'header__contacts contacts']);
                            get_template_part('template-parts/components/social', null, ['class'=>'header__social social','modifier'=>'social--header']);
                            ?>

                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </header>

<?php
elseif ( is_page( 'catalog' ) ) :
?>

    <!-- Хэдер каталога -->
    <header class="header header--dark-background" data-header data-scroll-lock-fill-gap>
        <div class="container">
            <div class="header__inner">

                <a class="header__logo logo" href="/">
                    <picture>
                        <source media="(max-width: 767px)" srcset="<?php echo $theme_uri; ?>/assets/img/svg/logos/logo-light-text-mobile.svg">
                        <img src="<?php echo $theme_uri; ?>/assets/img/svg/logos/logo-light-text-desktop.svg" alt="">
                    </picture>
                </a>

                <nav class="header__main-nav">
                    <button class="header__toggle" type="button" data-burger>
                        <span class="header__icon-burger"><svg width="25" height="11"><use xlink:href="<?php echo $theme_uri; ?>/assets/img/sprite.svg#burger"></use></svg></span>
                        <span class="header__icon-close"><svg width="18" height="19"><use xlink:href="<?php echo $theme_uri; ?>/assets/img/sprite.svg#close"></use></svg></span>
                    </button>

                    <div class="header__menu-wrapper">
                        <div class="header__menu-scroll">

                            <ul class="header__nav-list">
                                <li><a href="/#about">О сервисе</a></li>
                                <li><a href="/#directions">Направления</a></li>
                                <li><span class="header__nav-link is-active">Попутчики</span></li>
                            </ul>

                            <?php
                            get_template_part('template-parts/components/contacts', null, ['class'=>'header__contacts contacts']);
                            get_template_part('template-parts/components/social', null, ['class'=>'header__social social','modifier'=>'social--header']);
                            ?>

                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </header>

<?php endif; ?>

<!-- ВАЖНО! ТЕПЕРЬ МЫ ОТКРЫВАЕМ MAIN ЗДЕСЬ -->
<main class="main">
