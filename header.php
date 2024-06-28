<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header class="header-main centering">
    <div class="header-main__top-line">
        <div>+7 499 113-55-59</div>
        <div class="top-line__email">info@mtc-logistic.com</div>
        <div class="working-hours">с 10:00 до 18:00 по Москве</div>
        <div class="location-svg-holder"><img src="<?php echo get_template_directory_uri() . '/assets/images/svgs/location.svg';?>" alt="Белый значок геолокации"> Москва</div>
    </div>
    <div class="header-main__nav-wrapper">
        <img class="header-main-logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo-black.png';?>" alt="MTC Logistic логотип">
        <img class="header-main-logo-small" src="<?php echo get_template_directory_uri() . '/assets/images/logo-small.png';?>" alt="MTC Logistic логотип">
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'container'      => 'nav',
                    'container_class' => 'nav-main',
                    'menu_class'     => 'nav-main__ul',
                    'fallback_cb'    => false,
                )
            );
            ?>
        <div class="header-main__btn-group">
            <button class="header-btn animated-btn-3">Рассчитать стоимость</button>
            <button class="header-btn animated-btn-2">Бесплатный звонок</button>
        </div>
        <div class="header-small-menu-group">
            <div class="header-main__btn-group-small">
                <div class="calculate-wrapper header-svg"><?php include get_template_directory() . '/assets/images/svgs/calculate.svg';?></div>
                <div class="free-call-wrapper header-svg"><?php include get_template_directory() . '/assets/images/svgs/free-call.svg';?></div>
            </div>
            <img class="header-main-burger" src="<?php echo get_template_directory_uri() . '/assets/images/svgs/burger.svg';?>" alt="Бургер меню" >
        </div>
    </div>
</header>