<?php
/**
 * Template Name: Carhauler
 */
get_header(); 
?>

<?php get_header(); ?>
<div class="popup-menu-overlay">
    <div class="popup-menu">
        <div class="popup-menu__logo-wrapper">
            <img src="<?php echo get_template_directory_uri() .
                "/assets/images/logo-black.png"; ?>" alt="logo" class="popup-logo">
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
    <section class="hauler-banner">
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

    <h2 class="hauler-banner__heading"><span class="red-text">Автовоз</span> для доставки автомобилей по России и из Китая</h2>
    <div class="hauler__subheading-wrapper">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/red-tick.svg"; ?>" alt="красная галочка">
        <h3>Надёжная и безопасная доставка автомобилей</h3>
    </div>
    <div class="hauler-banner__grid-group">
        <div class="hb__flex-group">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/haul-bnr-svg1.svg"; ?>" alt="image1">
            <p>Сопроводительная документация</p>
        </div>
        <div class="hb__flex-group">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/haul-bnr-svg2.svg"; ?>" alt="image2">
            <p>Специально оборудованные автовозы</p>
        </div>
        <div class="hb__flex-group">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/haul-bnr-svg3.svg"; ?>" alt="image3">
            <p>Страхование на весь маршрут</p>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri() . "/assets/images/hauler-banner.png"; ?>" alt="красный грузовик" class="hauler-banner-bg">
    </section>
    <?php get_template_part('includes/section','steps'); ?>
    <?php get_template_part('includes/section','accordion'); ?>
    <?php get_template_part('includes/section','about'); ?>
    <?php get_template_part('includes/section','reviews'); ?>
    <?php get_template_part('includes/section','webform'); ?>
</main>

<?php get_footer(); ?>
