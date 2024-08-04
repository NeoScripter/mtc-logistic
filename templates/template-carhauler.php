<?php
/**
 * Template Name: Carhauler
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
    <section class="hauler-banner car-banner-section">
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

        <h2 class="hauler-banner__heading car-banner__heading"><span class="red-text">Автовоз</span> для доставки автомобилей по России и из Китая</h2>
        <div class="hauler__subheading-wrapper car-banner__subheading-wrapper">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/red-tick.svg"; ?>" alt="красная галочка">
            <h3>Надёжная и безопасная доставка автомобилей</h3>
        </div>
        <div class="hauler-banner__grid-group car-banner__grid-group">
            <div class="hb__flex-group car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/haul-bnr-svg1.svg"; ?>" alt="image1">
                <p>Сопроводительная документация</p>
            </div>
            <div class="hb__flex-group car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/haul-bnr-svg2.svg"; ?>" alt="image2">
                <p>Специально оборудованные автовозы</p>
            </div>
            <div class="hb__flex-group car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/haul-bnr-svg3.svg"; ?>" alt="image3">
                <p>Страхование на весь маршрут</p>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri() . "/assets/images/hauler-banner.webp"; ?>" alt="красный грузовик" class="hauler-banner-bg car-banner-bg">
    </section>
    <section class="price-calc-section">
        <h2 class="heading-large">Расчёт <span class="red-text">стоимости</span></h2>
        <div class="price-calc-title">
            <h3 class="h3-price-title">Стоимость доставки автомобиля автовозом по России и из Китая зависит от нескольких факторов</h3>
            <div class="price-calc__grid-group">
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/ch-svg-1.svg"; ?>" alt="Маршрут и расстояние">Маршрут и расстояние</div>
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/ch-svg-2.svg"; ?>" alt="Тип автовоза">Тип автовоза</div>
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/ch-svg-3.svg"; ?>" alt="Габариты и вес автомобиля">Габариты и вес автомобиля</div>
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
