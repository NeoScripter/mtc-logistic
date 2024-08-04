<?php
/**
 * Template Name: Services
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
    <section class="services-page">
        <div class="service-page_item">
            <h3><span class="red-text">Автоперевозка</span> морских контейнеров по России и Белоруси</h3>
            <p>От 3 часов</p>
            <img src="<?php echo get_template_directory_uri() . "/assets/service-img/service-1.webp"; ?>" alt="Красный грузовик">
            <a class="animated-btn-3" href="<?php echo get_permalink_by_title("Автоперевозка морских контейнеров по России и Белоруси"); ?>">Подробнее</a>
        </div>
        <div class="service-page_item">
            <h3><span class="red-text">ЖД доставка</span> морских контейнеров по России и из Китая</h3>
            <p>4–17 дней</p>
            <img src="<?php echo get_template_directory_uri() . "/assets/service-img/service-2.webp"; ?>" alt="Красный грузовик">
            <a class="animated-btn-3" href="<?php echo get_permalink_by_title("ЖД доставка морских контейнеров из Китая"); ?>">Подробнее</a>
        </div>
        <div class="service-page_item">
            <h3><span class="red-text">Автовоз</span> для доставки автомобилей по России и из Китая</h3>
            <p>1–12 дней</p>
            <img src="<?php echo get_template_directory_uri() . "/assets/service-img/service-3.webp"; ?>" alt="Красный грузовик">
            <a class="animated-btn-3" href="<?php echo get_permalink_by_title("Автовоз для доставки автомобилей по России и из Китая"); ?>">Подробнее</a>
        </div>
        <div class="service-page_item">
            <h3>⁠Перевозка <span class="red-text">негабаритных</span> грузов</h3>
            <p>1–12 дней</p>
            <img src="<?php echo get_template_directory_uri() . "/assets/service-img/service-4.webp"; ?>" alt="Красный грузовик">
            <a class="animated-btn-3" href="<?php echo get_permalink_by_title("⁠Перевозка негабаритных грузов"); ?>">Подробнее</a>
        </div>
        <div class="service-page_item">
            <h3><span class="red-text">Морские</span> контейнерные перевозки из Китая</h3>
            <p></p>
            <img src="<?php echo get_template_directory_uri() . "/assets/service-img/service-5.webp"; ?>" alt="Красный грузовик">
            <a class="animated-btn-3" href="<?php echo get_permalink_by_title("Морские контейнерные перевозки из Китая"); ?>">Подробнее</a>
        </div>
        <div class="service-page_item">
            <h3>Доставка <span class="red-text">сборных грузов</span> из Китая</h3>
            <p></p>
            <img src="<?php echo get_template_directory_uri() . "/assets/service-img/service-6.webp"; ?>" alt="Красный грузовик">
            <a class="animated-btn-3" href="<?php echo get_permalink_by_title("Доставка сборных грузов из Китая"); ?>">Подробнее</a>
        </div>
        <div class="service-page_item">
            <h3><span class="red-text">Фулфилмент:</span> доставка товаров для маркетплейсов из Китая</h3>
            <p></p>
            <img src="<?php echo get_template_directory_uri() . "/assets/service-img/service-7.webp"; ?>" alt="Красный грузовик">
            <a class="animated-btn-3" href="<?php echo get_permalink_by_title("Фулфилмент: доставка товаров для маркетплейсов из Китая"); ?>">Подробнее</a>
        </div>
        <div class="service-page_item larger">
            <h3><span class="red-text">Страхование</span> грузов</h3>
            <p></p>
            <img src="<?php echo get_template_directory_uri() . "/assets/service-img/service-8.webp"; ?>" alt="Красный грузовик">
            <a class="animated-btn-3" href="<?php echo get_permalink_by_title("Страхование грузов"); ?>">Подробнее</a>
        </div>
        <div class="service-page_item larger">
            <h3>Таможенное оформление <span class="red-text">«за печатью»</span> клиента</h3>
            <p></p>
            <img src="<?php echo get_template_directory_uri() . "/assets/service-img/service-9.webp"; ?>" alt="Красный грузовик">
            <a class="animated-btn-3" href="<?php echo get_permalink_by_title("Таможенное оформление «за печатью» клиента"); ?>">Подробнее</a>
        </div>
        <div class="service-page_item turnkey">
            <h3>Доставка из Китая <span class="red-text">«под ключ»</span></h3>
            <p>От завода в Китае до вашего порога, быстро и без хлопот. Мы сделаем все, пока вы занимаетесь своим бизнесом</p>
            <p>До 25 дней</p>
            <img src="<?php echo get_template_directory_uri() . "/assets/service-img/service-10.webp"; ?>" alt="Красный грузовик">
            <a class="animated-btn-3" href="<?php echo get_permalink_by_title("Доставка из Китая «под ключ»"); ?>">Подробнее</a>
        </div>
    </section>
    <?php get_template_part('includes/section','webform'); ?>
</main>
<?php get_footer(); ?>
