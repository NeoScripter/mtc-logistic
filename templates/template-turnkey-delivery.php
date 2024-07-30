<?php
/**
 * Template Name: Turnkey Delivery
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
    <section class="car-banner-section turnkey-delivery-section">
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

        <h2 class="car-banner__heading">⁠Доставка из Китая <span class="red-text">«под ключ»</span></h2>
        <div class="car-banner__subheading-wrapper">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/red-tick.svg"; ?>" alt="красная галочка">
            <h3>Комплексная услуга доставки товаров, включая таможенное оформление, транспортировку и страхование грузов</h3>
        </div>
        <div class="car-banner__grid-group">
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/ch-svg-4.svg"; ?>" alt="image1">
                <p>Комплексный подход</p>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/ch-svg-1.svg"; ?>" alt="image1">
                <p>Экономия времени</p>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/haul-bnr-svg2.svg"; ?>" alt="image2">
                <p>Безопасность грузов</p>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/haul-bnr-svg3.svg"; ?>" alt="image3">
                <p>Прозрачное ценообразование</p>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri() . "/assets/images/turnkey-delivery-bg.webp"; ?>" alt="красный грузовик" class="car-banner-bg">
    </section>
    <section class="price-calc-section">
        <h2 class="heading-large">Расчёт <span class="red-text">стоимости</span></h2>
        <div class="price-calc-title">
            <h3 class="h3-price-title">Стоимость доставки из «Китая под ключ» зависит от нескольких факторов</h3>
            <div class="price-calc__grid-group">
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/ch-svg-1.svg"; ?>" alt="Маршрут и расстояние">Маршрут и расстояние</div>
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/car-bnr-svg-3.svg"; ?>" alt="Тип автовоза">Таможенные пошлины и налоги</div>
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/car-bnr-svg-1.svg"; ?>" alt="Габариты и вес автомобиля">Габариты и вес груза</div>
                <div class="price-calc__flex-group"><img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/speed.svg"; ?>" alt="Дополнительные услуги">Срочность доставки</div>
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
    <?php get_template_part('includes/section','about'); ?>
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
