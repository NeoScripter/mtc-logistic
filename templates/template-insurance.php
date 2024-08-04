<?php
/**
 * Template Name: Insurance
 */
?>


<?php get_header(); ?>

<div class="popup-menu-overlay">
    <div class="popup-menu">
        <div class="popup-menu__logo-wrapper">
            <a href="<?php echo home_url(); ?>" class="homepage-link"><img src="<?php echo get_template_directory_uri() .
            "/assets/images/logo-black.png"; ?>" alt="logo" class="popup-logo"></a>
            <img src="<?php echo get_template_directory_uri() .
                "/assets/images/svgs/close.svg"; ?>" alt="burger-menu" class="close-burger-menu">
        </div>
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'container'      => 'nav',
                    'container_class' => 'nav-popup',
                    'menu_class'     => 'nav-popup__ul',
                    'fallback_cb'    => false,
                )
            );
            ?>
        <div class="popup-btn-group">
            <button class="popup-btn animated-btn-3">Рассчитать стоимость</button>
            <button class="popup-btn animated-btn-2">Бесплатный звонок</button>
        </div>
    </div>
</div>
<main class="home-main centering">
<section class="car-banner-section insurance-section">
        <div class="social-icons-flex-group">
            <a href="" class="social-icons-flex-subgroup">
                <div class="banner-bottom__svg-wrapper"><?php include get_template_directory() . '/assets/images/svgs/telegram.svg';?></div>
                <div class="banner-bottom__text-wrapper">Telegram</div>
            </a>
            <a href="" class="social-icons-flex-subgroup">
                <div class="banner-bottom__svg-wrapper"><?php include get_template_directory() . '/assets/images/svgs/whatsapp.svg';?></div>
                <div class="banner-bottom__text-wrapper">WhatsApp</div>
            </a>
        </div>

        <h2 class="car-banner__heading"><span class="red-text">Страхование</span> грузов</h2>
        <div class="car-banner__subheading-wrapper">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/red-tick.svg"; ?>" alt="красная галочка">
            <h3>Безопасно доставить ваш груз с минимальными рисками. Мы предлагаем страхование товаров для защиты от различных рисков, обеспечивая надёжность и спокойствие нашим клиентам</h3>
        </div>
        <div class="car-banner__grid-group">
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/haul-bnr-svg3.svg"; ?>" alt="image1">
                <div>
                    <h4 class="seacargo__grid-subheading">Широкий спектр покрываемых рисков</h4>
                </div>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/location-red.svg"; ?>" alt="image1">
                <div>
                    <h4 class="seacargo__grid-subheading">Индивидуальный подход</h4>
                </div>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/ch-svg-4.svg"; ?>" alt="image2">
                <div>
                    <h4 class="seacargo__grid-subheading">Прозрачность и доступность</h4>
                </div>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/tracking.svg"; ?>" alt="image3">
                <div>
                    <h4 class="seacargo__grid-subheading">Реальное время отслеживания</h4>
                </div>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri() . "/assets/images/insurance-bg.webp"; ?>" alt="красный грузовик" class="car-banner-bg">
    </section>
    <section class="price-calc-section mb">
        <h2 class="heading-large">Расчёт <span class="red-text">стоимости</span></h2>
        <div class="price-calc-title">
            <h3 class="h3-price-title">Стоимость рассчитывается индивидуально, обеспечивая оптимальные условия для каждого клиента и зависит от:</h3>
            <div class="price-calc__grid-group">
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/ch-svg-1.svg"; ?>" alt="Маршрут и расстояние">Стоимости страхуемого груза</div>
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/car-bnr-svg-4.svg"; ?>" alt="Тип автовоза">Перечня выбранных рисков</div>
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/car-bnr-svg-1.svg"; ?>" alt="Габариты и вес автомобиля">Периода действия страховки</div>
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/ch-svg-4.svg"; ?>" alt="Дополнительные услуги">Дополнительных расходов</div>
            </div>
        </div>
    </section>
    <?php get_template_part('includes/section','steps'); ?>
    <?php get_template_part('includes/section','accordion'); ?>
    <?php get_template_part('includes/section','whyus'); ?>
    <?php get_template_part('includes/section','reviews'); ?>
    <?php get_template_part('includes/section','webform'); ?>
</main>
<style>
    .accordion-section {
        margin-bottom: 50px;
    }
    @media screen and (max-width: 900px) {
        .accordion-section {
            margin-bottom: 100px;
        }
    }
</style>

<?php get_footer(); ?>
