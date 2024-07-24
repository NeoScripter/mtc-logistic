<footer class="footer-primary centering">
    <div class="footer-top-flex">
        <div class="footer__flex-top-col-1">
            <h3>Карта сайта</h3>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu',
                    'container'      => 'nav',
                    'container_class' => 'nav-footer',
                    'menu_class'     => 'nav-footer__ul',
                    'fallback_cb'    => false,
                )
            );
            ?>
        </div>
        <div class="footer__flex-top-col-2">
            <h3>Услуги</h3>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu-services',
                    'container'      => 'nav',
                    'container_class' => 'nav-services',
                    'menu_class'     => 'nav-services__ul',
                    'fallback_cb'    => false,
                )
            );
            ?>
        </div>
        <div class="footer__flex-top-col-3">
            <h3>Контакты</h3>
            <div class="footer__flex-contacts">
                <div class="footer__links-wrapper">
                    <a href="tel:+74991135559" class="footer__tel">+7 499 113-55-59</a>
                    <a href="mailto:info@mtc-logistic.com">info@mtc-logistic.com</a>
                    <div class="footer__social-links">
                        <a href="" class="footer__social-link">
                            <img class="footer__social-link-img" src="<?php echo get_template_directory_uri() . '/assets/images/svgs/telegram.svg';?>" alt="MTC Logistic логотип">
                        </a>
                        <a href="" class="footer__social-link">
                            <img class="footer__social-link-img" src="<?php echo get_template_directory_uri() . '/assets/images/svgs/whatsapp.svg';?>" alt="MTC Logistic логотип">
                        </a>
                        <a href="" class="footer__social-link">
                            <img class="" src="<?php echo get_template_directory_uri() . '/assets/images/svgs/vk.svg';?>" alt="MTC Logistic логотип">
                        </a>
                    </div>
                </div>
                <button class="footer__calc-btn animated-btn-3">Рассчитать стоимость</button>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© MTC Logistic, 2010–2024</p>
        <div class="logo-footer-wrapper"><img class="logo-footer" src="<?php echo get_template_directory_uri() . '/assets/images/logo-white.png';?>" alt="MTC Logistic логотип"></div>
        <a class="footer__privacy-policy">Политика конфиденциальности</a>
    </div>
</footer>
<style>
    body {
        background-image: url(<?php echo get_template_directory_uri() . '/assets/images/bg-pattern.png';?>);
    }
    .about-us-section:before {
        background-image: url(<?php echo get_template_directory_uri() . '/assets/images/abous-us-bg.png';?>);
    }
    .webform-section:before {
        background-image: url(<?php echo get_template_directory_uri() . '/assets/images/abous-us-bg.png';?>);
    }
    .header-main__nav-wrapper .arrow-li::before {
        content: "";
        position: absolute;
        right: 0;
        top: 50%;
        width: 10px;
        height: 5px; 
        background-image: url('<?php echo get_template_directory_uri(); ?> . /assets/images/svgs/arrow-down.svg');
        background-size: contain;
        background-repeat: no-repeat;
        transition: transform 0.3s;
        cursor: pointer;
    }
    .accordion__img-wrapper::after {
        content: "";
        position: absolute;
        right: 0;
        top: 0;
        z-index: 20;
        width: var(--_img-width);
        height: 100%;
        background-image: url(<?php echo get_template_directory_uri() . '/assets/images/accordion-desktop.png';?>);
        background-size: cover;
        background-position: right center;
        background-repeat: no-repeat;
    }
    .footer__social-link-img {
        height: 47px;
    }
</style>
<?php wp_footer();?>
</body>
</html>