<?php
$theme_uri = get_template_directory_uri();
?>

</main> <!-- закрываем main -->

<footer class="footer">
    <div class="container">
        <div class="footer__inner">

            <a class="footer__logo logo" href="/" aria-label="Погнали?">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo $theme_uri; ?>/assets/img/svg/logos/logo-dark-text-mobile.svg">
                    <source media="(max-width: 1023px)" srcset="<?php echo $theme_uri; ?>/assets/img/svg/logos/logo-dark-text-tablet.svg">
                    <img src="<?php echo $theme_uri; ?>/assets/img/svg/logos/logo-dark-text-desktop.svg" alt="">
                </picture>
            </a>

            <ul class="footer__social social">
                <li><a class="social__link social__link--badge" href="#" aria-label="Telegram><svg width="32"><use xlink:href="<?php echo $theme_uri; ?>/assets/img/sprite.svg#telegram"></use></svg></a></li>
                <li><a class="social__link social__link--badge" href="#" aria-label="VK><svg width="32"><use xlink:href="<?php echo $theme_uri; ?>/assets/img/sprite.svg#vk"></use></svg></a></li>
                <li><a class="social__link social__link--badge" href="#" aria-label="YouTube><svg width="32"><use xlink:href="<?php echo $theme_uri; ?>/assets/img/sprite.svg#youtube"></use></svg></a></li>
            </ul>

        </div>
    </div>
</footer>

</div><!-- wrapper -->

<?php wp_footer(); ?>
</body>
</html>
