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
    <section class="home-banner">
            <div class="home-banner__content">
                <div class="home-banner__top">
                    <h1 class="home-banner__heading">Перевозка грузов<br><span class="red-text">по России, Белоруси и из Китая</span></h1>
                    <div class="home-banner__flex-group">
                        <div class="home-banner__flex-subgroup">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/svgs/red-tick.svg';?>" alt="Красная галочка в красном кружке">
                            ЖД перевозки
                        </div>
                        <div class="home-banner__flex-subgroup">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/svgs/red-tick.svg';?>" alt="Красная галочка в красном кружке">
                            Контейнеровозы
                        </div>
                        <div class="home-banner__flex-subgroup">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/svgs/red-tick.svg';?>" alt="Красная галочка в красном кружке">
                            Негабаритные
                        </div>
                        <div class="home-banner__flex-subgroup">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/svgs/red-tick.svg';?>" alt="Красная галочка в красном кружке">
                            Сборные
                        </div>
                    </div>
                </div>
                <div class="home-banner__bottom">
                    <form class="consultation-form" action="">
                        <h3 class="form-title">Мы решим любую задачу, пока вы заняты своими делами</h3>
                        <div class="input-wrapper">
                            <input type="text" placeholder="Имя">
                            <input type="text" placeholder="Телефон">
                            <button type="submit" class="animated-btn-2">Заказать консультацию</button>
                        </div>
                        <p class="policy-notice">Нажимая на кнопку, вы соглашаетесь с политикой обработки данных</p>
                    </form>
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
                </div>
            </div>
            <div class="banner-img-wrapper">
                <img class="banner-img low-rez" src="<?php echo get_template_directory_uri() . '/assets/images/main-header-low-rez.png';?>" alt="Большой красный грузовик с контейнером">
                <img class="banner-img high-rez" src="<?php echo get_template_directory_uri() . '/assets/images/main-header.png';?>" alt="Большой красный грузовик с контейнером">
            </div>
    </section>
    <section class="services-section">
        <div class="serv__flex-group">
            <div class="serv__card">
                <h3><span class="red-text">Автоперевозка</span> морских контейнеров по России и Белоруси</h3>
                <p>От 3 часов</p>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/serv-img-1.png';?>" alt="Красная фура с контейнером" class="serv-img">
                <button class="serv__find-more-btn animated-btn-3">Подробнее</button>
            </div>
            <div class="serv__card">
                <h3><span class="red-text">ЖД доставка</span> морских контейнеров по России и из Китая</h3>
                <p>4–17 дней</p>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/serv-img-2.png';?>" alt="Красная фура с контейнером" class="serv-img">
                <button class="serv__find-more-btn animated-btn-3">Подробнее</button>
            </div>
            <div class="serv__card">
                <h3><span class="red-text">Автовоз</span> для доставки автомобилей по России и из Китая</h3>
                <p>1–12 дней</p>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/serv-img-3.png';?>" alt="Красная фура с контейнером" class="serv-img">
                <button class="serv__find-more-btn animated-btn-3">Подробнее</button>
            </div>
            <div class="serv__card">
                <h3>⁠Перевозка <span class="red-text">негабаритных</span> грузов</h3>
                <p>1–12 дней</p>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/serv-img-4.png';?>" alt="Красная фура с контейнером" class="serv-img">
                <button class="serv__find-more-btn animated-btn-3">Подробнее</button>
            </div>
            <div class="serv__card last-card">
                <h3>Доставка из Китая <span class="red-text">«под ключ»</span></h3>
                <p>От завода в Китае до вашего порога, быстро и без хлопот. Мы сделаем все, пока вы занимаетесь своим бизнесом</p>
                <p>До 25 дней</p>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/serv-img-5.png';?>" alt="Красная фура с контейнером" class="serv-img">
                <button class="serv__find-more-btn animated-btn-3">Подробнее</button>
            </div>
        </div>
    </section>
    <?php get_template_part('includes/section','steps'); ?>
    <?php get_template_part('includes/section','reviews'); ?>
    <?php get_template_part('includes/section','about'); ?>
    <section class="letters-section">
    <h2 class="heading-large"><span class="red-text">Благодарственные</span> письма</h2>
        <div class="letters-carousel">
            <div class="letters-carousel-track-container">
                <ul class="letters-carousel-track">
                    <?php for ($i = 1; $i <= 7; $i++):?>
                        <?php if ($i === 1):?>
                        <li class="letters-carousel-slide current-slide">
                        <?php else:?>
                         <li class="letters-carousel-slide">
                        <?php endif;?>
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/letter-' . $i . '.jpg';?>" alt="Благодарственное письмо">
                        </li>
                    <?php endfor;?>
                </ul>
            </div>
        </div>
        <div class="letters-carousel-controls-wrapper">
            <div class="letters-carousel-btn-wrapper">
                <button class="letters-carousel-btn carousel-btn-left"><?php include get_template_directory() . '/assets/images/svgs/carousel-arrow-left.svg';?></button>
                <button class="letters-carousel-btn carousel-btn-right"><?php include get_template_directory() . '/assets/images/svgs/carousel-arrow-right.svg';?></button>
            </div>
        </div>
    </section>
    <?php get_template_part('includes/section','webform'); ?>
    <?php get_template_part('includes/section','accordion'); ?>
</main>
<?php get_footer(); ?>
