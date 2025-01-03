<?php

/**
 * Template Name: Seacargo China
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
    <section class="car-banner-section sea-china-section">
        <?php get_template_part('includes/section', 'social.links'); ?>

        <h2 class="car-banner__heading"><span class="red-text">Морские контейнерные</span> перевозки из Китая</h2>
        <div class="car-banner__subheading-wrapper">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/red-tick.svg"; ?>" alt="красная галочка">
            <h3>Надёжная и доступная доставка грузов для крупного и мелкого бизнеса. Мы предлагаем гибкие решения для различных типов грузов с использованием современных контейнеров</h3>
        </div>
        <div class="car-banner__grid-group">
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/haul-bnr-svg3.svg"; ?>" alt="image1">
                <div>
                    <h4 class="seacargo__grid-subheading">Надежность</h4>
                    <p>Независимость от качества дорог, минимальное влияние погодных условий</p>
                </div>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/car-bnr-svg-3.svg"; ?>" alt="image1">
                <div>
                    <h4 class="seacargo__grid-subheading">Доступность</h4>
                    <p>Низкая стоимость, особенно выгодна для крупных партий</p>
                </div>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/ch-svg-4.svg"; ?>" alt="image2">
                <div>
                    <h4 class="seacargo__grid-subheading">Мультимодальность</h4>
                    <p>Без перегрузок и повторного оформления документов</p>
                </div>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/ch-svg-1.svg"; ?>" alt="image3">
                <div>
                    <h4 class="seacargo__grid-subheading">Широкая география</h4>
                    <p>Доставка в различные порты России</p>
                </div>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri() . "/assets/images/sea-china-bg.webp"; ?>" alt="красный грузовик" class="car-banner-bg">
    </section>
    <section class="price-calc-section">
        <h2 class="heading-large">Расчёт <span class="red-text">стоимости</span></h2>
        <div class="price-calc-title">
            <h3 class="h3-price-title">Стоимость доставки морских контейнерных перевозок зависит от нескольких факторов</h3>
            <div class="price-calc__grid-group">
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/ch-svg-1.svg"; ?>" alt="Маршрут и расстояние">Маршрут и расстояние</div>
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/car-bnr-svg-4.svg"; ?>" alt="Тип автовоза">Tип контейнера</div>
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/car-bnr-svg-1.svg"; ?>" alt="Габариты и вес автомобиля">Габариты и вес груза</div>
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/ch-svg-4.svg"; ?>" alt="Дополнительные услуги">Дополнительные услуги</div>
            </div>
        </div>
    </section>
    <?php get_template_part('includes/section', 'steps'); ?>
    <?php get_template_part('includes/section', 'accordion'); ?>
    <?php get_template_part('includes/section', 'whyus'); ?>
    <?php get_template_part('includes/section', 'reviews'); ?>
    <?php get_template_part('includes/section', 'webform'); ?>
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