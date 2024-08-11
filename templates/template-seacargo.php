<?php

/**
 * Template Name: Sea Cargo
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
    <section class="car-banner-section seacargo-section">
        <?php get_template_part('includes/section', 'social.links'); ?>

        <h2 class="car-banner__heading"><span class="red-text">⁠ЖД доставка</span> морских контейнеров по России и из Китая</h2>
        <div class="car-banner__subheading-wrapper">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/red-tick.svg"; ?>" alt="красная галочка">
            <h3>Мы предлагаем международную и внутреннюю железнодорожную доставку контейнеров, гарантируем высокую скорость, безопасность и конкурентоспособные цены</h3>
        </div>
        <div class="car-banner__grid-group">
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/car-bnr-svg-2.svg"; ?>" alt="image1">
                <div>
                    <h4 class="seacargo__grid-subheading">Скорость и точность</h4>
                    <p>Строгое соблюдение графика доставки, независимо от погодных условий</p>
                </div>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/car-bnr-svg-1.svg"; ?>" alt="image1">
                <div>
                    <h4 class="seacargo__grid-subheading">Универсальность</h4>
                    <p>Перевозки всех типов грузов в специализированных контейнерах</p>
                </div>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/car-bnr-svg-3.svg"; ?>" alt="image2">
                <div>
                    <h4 class="seacargo__grid-subheading">Экономичность</h4>
                    <p>Доступные цены и минимизация дополнительных расходов</p>
                </div>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/haul-bnr-svg3.svg"; ?>" alt="image3">
                <div>
                    <h4 class="seacargo__grid-subheading">Безопасность</h4>
                    <p>Минимальный риск хищения с опломбированными контейнерами</p>
                </div>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri() . "/assets/images/seacargo-bg.webp"; ?>" alt="красный грузовик" class="car-banner-bg">
    </section>
    <section class="price-calc-section">
        <h2 class="heading-large">Расчёт <span class="red-text">стоимости</span></h2>
        <div class="price-calc-title">
            <h3 class="h3-price-title">Стоимость доставки морских контейнеров по России и из Китая зависит от нескольких факторов</h3>
            <div class="price-calc__grid-group">
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/ch-svg-1.svg"; ?>" alt="Маршрут и расстояние">Маршрут и расстояние</div>
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/car-bnr-svg-4.svg"; ?>" alt="Тип автовоза">Tип контейнера</div>
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/car-bnr-svg-1.svg"; ?>" alt="Габариты и вес автомобиля">Габариты и вес груза</div>
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/ch-svg-4.svg"; ?>" alt="Дополнительные услуги">Дополнительные услуги</div>
            </div>
        </div>
    </section>
    <section class="calculator-section">
        <div class="calc__tab-wrapper">
            <div class="calc__step calc__current-step">1 шаг</div>
            <div class="calc__step">2 шаг</div>
            <div class="calc__step">3 шаг</div>
            <div class="calc__step">4 шаг</div>
        </div>
        <div class="quiz-wrapper">
            <h3 class="quiz-heading">Выберите тип, марку и модель вашего транспортного средства</h3>
            <div class="quiz__input-wrapper">
                <input type="text" placeholder="Тип транспорта">
                <div class="quiz__example-wrapper">
                    <input type="text" placeholder="Марка транспорта">
                    <div class="quiz__input-example">например : Volkswagen</div>
                </div>
                <div class="quiz__example-wrapper">
                    <input type="text" placeholder="Модель транспорта">
                    <div class="quiz__input-example">например : Polo</div>
                </div>
                <button class="quiz__continue-btn animated-btn-2">Продолжить</button>
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