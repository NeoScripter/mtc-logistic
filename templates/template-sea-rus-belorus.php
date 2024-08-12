<?php

/**
 * Template Name: Sea Russia Belarus
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
    <section class="car-banner-section sea-rus-bel-section">
        <?php get_template_part('includes/section', 'social.links'); ?>

        <h2 class="car-banner__heading"><span class="red-text">Автоперевозка</span> морских контейнеров по России и Белорусии</h2>
        <div class="car-banner__subheading-wrapper">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/red-tick.svg"; ?>" alt="красная галочка">
            <h3>Мы предоставляем надежную и быструю доставку морских контейнеров, гарантируя сохранность груза и соблюдение сроков</h3>
        </div>
        <div class="car-banner__grid-group">
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/haul-bnr-svg3.svg"; ?>" alt="image1">
                <div>
                    <h4 class="seacargo__grid-subheading">Надежность</h4>
                    <p>Контроль на всех этапах доставки</p>
                </div>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/speed.svg"; ?>" alt="image1">
                <div>
                    <h4 class="seacargo__grid-subheading">Скорость</h4>
                    <p>Оперативная доставка в заранее оговоренные сроки</p>
                </div>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/location-red.svg"; ?>" alt="image2">
                <div>
                    <h4 class="seacargo__grid-subheading">Персонализация</h4>
                    <p>Индивидуальный подход и адаптация под ваши потребности</p>
                </div>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/haul-bnr-svg3.svg"; ?>" alt="image3">
                <div>
                    <h4 class="seacargo__grid-subheading">Безопасность</h4>
                    <p>Современные системы отслеживания и охраны груза</p>
                </div>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri() . "/assets/images/sea-rus-belr-bg.webp"; ?>" alt="красный грузовик" class="car-banner-bg">
    </section>
    <section class="price-calc-section">
        <h2 class="heading-large">Расчёт <span class="red-text">стоимости</span></h2>
        <div class="price-calc-title">
            <h3 class="h3-price-title">Стоимость доставки морских контейнеров по России и из Китая зависит от нескольких факторов</h3>
            <div class="price-calc__grid-group">
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/ch-svg-1.svg"; ?>" alt="Маршрут и расстояние">Маршрут и расстояние</div>
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/car-bnr-svg-1.svg"; ?>" alt="Тип автовоза">Габариты и вес груза</div>
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/car-bnr-svg-2.svg"; ?>" alt="Габариты и вес автомобиля">Срочность подачи транспорта</div>
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/ch-svg-4.svg"; ?>" alt="Дополнительные услуги">Дополнительные услуги</div>
            </div>
        </div>
    </section>
    <section class="calculator-section">
        <div class="quiz-wrapper">
            <h3 class="quiz-heading">Укажите необходимые данные</h3>
            <div class="quiz__input-wrapper">
                <div class="quiz__example-wrapper">
                    <select id="departure-city" class="quiz-dropdown">
                        <option value="saint-petersburg" disabled selected>Город отправки</option>
                    </select>
                </div>
                <div class="quiz__example-wrapper">
                    <select id="arrival-city" class="quiz-dropdown">
                        <option value="saint-petersburg" disabled selected>Город прибытия</option>
                    </select>
                </div>
                <div class="quiz__example-wrapper mobile-result">
                    <div class="calc-result">Расчет в ₽</div>
                </div>
                <button class="quiz__continue-btn animated-btn-3" id="calculate-btn">Рассчитать стоимость</button>
            </div>
            <div class="quiz__input-wrapper">
                <div class="quiz__example-wrapper">
                    <div class="desktop-result calc-result">Расчет в ₽</div>
                    <div class="quiz__input-example">Ставка действительна при сдаче порожнего контейнера в том же городе, где выгрузили груз. Для расчета точной ставки под ваш запрос свяжитесь с нашим менеджером</div>
                    <div class="quiz__input-example">Если вы не нашли нужного вам города, свяжитесь с нами, мы разработаем для вас индивидуальный маршрут</div>
                </div>
                <a href="#webform" class="quiz__continue-btn animated-btn-2" id="show-result-btn">Заказать точный расчет</a>
            </div>
            <div class="quiz__input-wrapper">
                <div class="quiz__example-wrapper">
                    <div class="table">
                        <p class="table-title">Развернуть таблицу ставок </p>
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/arrow-down-red.svg"; ?>" alt="Красная стрелка вниз">
                        <div class="table-content">
                            <div>Город отправления</div>
                            <div>Город прибытия</div>
                            <div>Стоимость</div>
                        </div>
                    </div>
                </div>
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