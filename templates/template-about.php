<?php
/**
 * Template Name: About Company
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
    <section class="car-banner-section about-company-section">
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

        <h2 class="car-banner__heading">Надёжная логистика, которая <span class="red-text">экономит ваше время!</span></h2>
        <div class="car-banner__subheading-wrapper">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/red-tick.svg"; ?>" alt="красная галочка">
            <h3>MTC–Logistic — ваш надёжный партнёр в области грузоперевозок. Мы ценим каждого клиента и стремимся предоставлять услуги на высшем уровне. Более 90% наших клиентов становятся постоянными благодаря нашей выгодной системе скидок и высокому качеству обслуживания</h3>
        </div>
        <img src="<?php echo get_template_directory_uri() . "/assets/images/about-bg.webp"; ?>" alt="красный грузовик" class="car-banner-bg large">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/about-bg-small.webp"; ?>" alt="красный грузовик" class="car-banner-bg small">
    </section>
    <section class="our-principles-section">
        <h2 class="heading-large">Наши <span class="red-text">принципы</span></h2>
        <div class="our-principles__grid-group">
            <div class="our-principles__grid-item">
                <h3>Открытость для клиентов</h3>
                <p>Мы всегда честны и прозрачны в своей работе. Наши клиенты всегда в курсе всех этапов транспортировки их грузов</p>
            </div>
            <div class="our-principles__grid-item">
                <h3>Жесткий контроль качества</h3>
                <p>Каждая отправка проходит строгий контроль, чтобы гарантировать безопасность и сохранность ваших товаров</p>
            </div>
            <div class="our-principles__grid-item">
                <h3>Безопасность грузов</h3>
                <p>Наши склады и транспортные средства соответствуют высоким стандартам безопасности и сертифицированы по международным нормам</p>
            </div>
        </div>
    </section>
    
    <section class="about-us-section">
        <h2>Коротко о нашей компании</h2>
        <div class="about-us-flex-group">
            <div class="about__flex-item">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/svgs/about-1.svg';?>" alt="Красный грузовик" class="about-us-svg">
                <h3>Собственный автопарк</h3>
                <p>Контейнеровозы, тралы и автовозы. Без переплат</p>
            </div>
            <div class="about__flex-item">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/svgs/about-2.svg';?>" alt="Кредитная карта" class="about-us-svg">
                <h3>Различные формы оплаты</h3>
                <p>НДС 20%/0%, без НДС и наличные</p>
            </div>
            <div class="about__flex-item">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/svgs/about-3.svg';?>" alt="Красный грузовик" class="about-us-svg">
                <h3>Быстрая подача</h3>
                <p>Гарантируем подачу авто в течение 24 часов после вашей заявки</p>
            </div>
            <div class="about__flex-item">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/svgs/about-4.svg';?>" alt="Красный щит с галочкой" class="about-us-svg">
                <h3>Страхование груза</h3>
                <p>Ваш груз надёжно застрахован для обеспечения безопасности</p>
            </div>
            <div class="about__flex-item">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/svgs/about-5.svg';?>" alt="Красный портфель" class="about-us-svg">
                <h3>Опыт работы</h3>
                <p>12+ лет на рынке, обеспечиваем профессионализм и надёжность</p>
            </div>
            <div class="about__flex-item">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/svgs/about-6.svg';?>" alt="Красный щит со знаком доллара внутри" class="about-us-svg">
                <h3>Фиксированные цены</h3>
                <p>Цены, которые не меняются после заключения договора</p>
            </div>
            <div class="about__flex-item">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/svgs/about-7.svg';?>" alt="Красный значок склада" class="about-us-svg">
                <h3>Бесплатное хранение</h3>
                <p>Предлагаем бесплатное хранение вашего груза</p>
            </div>
            <div class="about__flex-item">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/svgs/about-8.svg';?>" alt="Красный значок часов" class="about-us-svg">
                <h3>Отсрочка платежа</h3>
                <p>Возможность отсрочки платежа для вашего удобства</p>
            </div>
        </div>
    </section>
    <?php get_template_part('includes/section','reviews'); ?>
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
</main>
<?php get_footer(); ?>
