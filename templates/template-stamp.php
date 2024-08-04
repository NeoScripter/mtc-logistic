<?php
/**
 * Template Name: Stamp
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
<section class="car-banner-section stamp-section">
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

        <h2 class="car-banner__heading">Таможенное оформление <span class="red-text">«за печатью»</span> клиента</h2>
        <div class="car-banner__subheading-wrapper">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/red-tick.svg"; ?>" alt="красная галочка">
            <h3>Минимальные затраты и быстрое прохождение таможни. Мы поможем подготовить все документы и пройти таможенный контроль, заверяя их вашим именем</h3>
        </div>
        <div class="car-banner__grid-group">
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/car-bnr-svg-3.svg"; ?>" alt="image1">
                <div>
                    <h4 class="seacargo__grid-subheading">Экономия</h4>
                    <p>Снижение затрат за счёт самостоятельного оформления документов</p>
                </div>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/haul-bnr-svg3.svg"; ?>" alt="image1">
                <div>
                    <h4 class="seacargo__grid-subheading">Ответственность</h4>
                    <p>Полная ответственность за оформление ложится на клиента</p>
                </div>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/ch-svg-4.svg"; ?>" alt="image2">
                <div>
                    <h4 class="seacargo__grid-subheading">Прозрачность</h4>
                    <p>Чёткое понимание процесса и отсутствие скрытых платежей</p>
                </div>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/support.svg"; ?>" alt="image3">
                <div>
                    <h4 class="seacargo__grid-subheading">Поддержка</h4>
                    <p>Консультации и помощь специалистов на каждом этапе</p>
                </div>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri() . "/assets/images/stamp-bg.webp"; ?>" alt="красный грузовик" class="car-banner-bg">
    </section>
    <section class="price-calc-section">
        <h2 class="heading-large">Расчёт <span class="red-text">стоимости</span></h2>
        <p class="stamp-price-desc">Стоимость таможенного оформления зависит от количества кодов ТН ВЭД и объёма груза. Оплачиваются таможенные пошлины, НДС и акцизы. Для точного расчёта обратитесь к нашим специалистам или используйте калькулятор на сайте</p>
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
