<?php
/**
 * Секция "О сервисе"
 */

$theme_uri = get_template_directory_uri();
?>

<section class="about" id="about">
    <div class="container container--wider-right">
        <div class="about__inner">

            <div class="about__info">

                <h2 class="about__section-title section-title">
                    О&nbsp;сервисе
                </h2>

                <div class="about__content">
                    <p>
                        Любое путешествие веселее с&nbsp;попутчиками,
                        которые на&nbsp;одной волне с&nbsp;тобой!
                        Делитесь своими идеями путешествий и&nbsp;черпайте
                        вдохновение в&nbsp;чужих.
                    </p>

                    <small>
                        А&nbsp;если найдете кого-то близкого по&nbsp;духу&nbsp;&mdash;
                        скорее зовите в&nbsp;совместный трип!
                    </small>
                </div>

            <?php
$button_path = get_theme_file_path() . '/template-parts/components/button-primary.php';

echo '<div style="padding:10px;margin:10px 0;border:2px solid red">';
echo 'Проверка пути: <br><b>' . $button_path . '</b><br>';

if ( file_exists( $button_path ) ) {
    echo '<span style="color:green">ФАЙЛ НАЙДЕН ✔</span>';
    include $button_path;
} else {
    echo '<span style="color:red">ФАЙЛ НЕ НАЙДЕН ❌</span>';
}

echo '</div>';
?>

            </div>

            <div class="about__image">
                <div class="about__image-wrapper" data-anim="parallax" data-speed="0.25">
                    <picture>
                        <!-- mobile webp -->
                        <source media="(max-width: 767px)" type="image/webp"
                            srcset="<?php echo $theme_uri; ?>/assets/img/content/about/about-parallax-mobile.webp,
                                     <?php echo $theme_uri; ?>/assets/img/content/about/about-parallax-mobile@2x.webp 2x"
                            width="292" height="353">

                        <!-- mobile png -->
                        <source media="(max-width: 767px)" type="image/png"
                            srcset="<?php echo $theme_uri; ?>/assets/img/content/about/about-parallax-mobile.png,
                                     <?php echo $theme_uri; ?>/assets/img/content/about/about-parallax-mobile@2x.png 2x"
                            width="292" height="353">

                        <!-- tablet webp -->
                        <source media="(max-width: 1023px)" type="image/webp"
                            srcset="<?php echo $theme_uri; ?>/assets/img/content/about/about-parallax-tablet.webp,
                                     <?php echo $theme_uri; ?>/assets/img/content/about/about-parallax-tablet@2x.webp 2x"
                            width="368" height="546">

                        <!-- tablet png -->
                        <source media="(max-width: 1023px)" type="image/png"
                            srcset="<?php echo $theme_uri; ?>/assets/img/content/about/about-parallax-tablet.png,
                                     <?php echo $theme_uri; ?>/assets/img/content/about/about-parallax-tablet@2x.png 2x"
                            width="368" height="546">

                        <!-- desktop -->
                        <source type="image/webp"
                            srcset="<?php echo $theme_uri; ?>/assets/img/content/about/about-parallax-desktop.webp,
                                     <?php echo $theme_uri; ?>/assets/img/content/about/about-parallax-desktop@2x.webp 2x"
                            width="655" height="665">

                        <img src="<?php echo $theme_uri; ?>/assets/img/content/about/about-parallax-desktop.png"
                            srcset="<?php echo $theme_uri; ?>/assets/img/content/about/about-parallax-desktop@2x.png 2x"
                            width="655" height="665"
                            alt="Карточка с фото на воде"
                            loading="lazy">
                    </picture>
                </div>
            </div>

        </div>
    </div>
</section>