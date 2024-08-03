<?php
/**
 * Template Name: Fulfillment
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
<section class="car-banner-section fulfillment-section">
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

        <h2 class="car-banner__heading"><span class="red-text">Фулфилмент:</span> доставка товаров для маркетплейсов <span class="red-text">из Китая</span></h2>
        <div class="car-banner__subheading-wrapper">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/red-tick.svg"; ?>" alt="красная галочка">
            <h3>Обращаясь к нам, вы избегаете лишних посредников и значительно экономите на доставке вашего груза. Мы предлагаем комплексное решение: от закупки и доставки на склад фулфилмента до ведения личного кабинета на маркетплейсах</h3>
        </div>
        <div class="car-banner__grid-group">
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/dollar-shield.svg"; ?>" alt="image1">
                <div>
                    <h4 class="seacargo__grid-subheading">Снижение затрат</h4>
                    <p>В 95% случаев селлеры используют китайские карго, которые не занимаются доставкой и таможенной очисткой, а пользуются нашими услугами. Обходя посредников, вы сокращаете себестоимость доставки</p>
                </div>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/ch-svg-4.svg"; ?>" alt="image1">
                <div>
                    <h4 class="seacargo__grid-subheading">Уменьшение рисков</h4>
                    <p>Минимизация ошибок и получение качественного обслуживания</p>
                </div>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/increment.svg"; ?>" alt="image2">
                <div>
                    <h4 class="seacargo__grid-subheading">Повышение эффективности</h4>
                    <p>Автоматизация процессов и быстрая обработка заказов</p>
                </div>
            </div>
            <div class="car-banner__flex-group">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/svgs/money-clock.svg"; ?>" alt="image3">
                <div>
                    <h4 class="seacargo__grid-subheading">Фокус на бизнесе</h4>
                    <p>Возможность сосредоточиться на развитии и росте бизнеса, а не на операционных задачах</p>
                </div>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri() . "/assets/images/fulfillment-bg.webp"; ?>" alt="красный грузовик" class="car-banner-bg">
    </section>
    <section class="how-it-works-section">
        <h2 class="heading-large">Как <span class="red-text">это работает?</span></h2>
        <div class="fulfillment__grid-group">
            <div class="fulfillment__grid-item">
                <h2 class="fulfillment__heading">1</h2>
                <h3 class="fulfillment__subheading">Консолидация и доставка</h3>
                <p>Мы консолидируем ваши товары в Китае и организуем их доставку на склад фулфилмента, минуя посредников</p>
            </div>
            <div class="fulfillment__grid-item">
                <h2 class="fulfillment__heading">2</h2>
                <h3 class="fulfillment__subheading">Таможенная очистка</h3>
                <p>Благодаря статусу экономического оператора, выпуск товаров происходит в день прибытия груза на таможню</p>
            </div>
            <div class="fulfillment__grid-item">
                <h2 class="fulfillment__heading">3</h2>
                <h3 class="fulfillment__subheading">Поступление товара</h3>
                <p>Как только ваш товар прибудет на склад, вы получите уведомление, детализированный отчёт, фото и видео</p>
            </div>
            <div class="fulfillment__grid-item">
                <h2 class="fulfillment__heading">4</h2>
                <h3 class="fulfillment__subheading">Управление поставками</h3>
                <p>Вы указываете в личном кабинете, на какой маркетплейс доставить товар, а мы берём на себя всю рутинную работу</p>
            </div>
        </div>
        <p>*Услуга предоставляется совместно с нашим партнёром, являющимся одной из самых крупных компаний, оказывающих услуги фулфилмента. Более подробную информацию можно получить на их <a href="" class="red-text">сайте</a>, по телефону: <a href="tel:+74952150430" class="red-text">+7 495 215-04-30</a> или по электронной почте: <a class="red-text" href="mailto:info@teamdeem.ru">info@teamdeem.ru</a></p>
    </section>
    <section class="extra-services">
        <h2 class="heading-large"><span class="red-text">Дополнительные услуги</span> для вашего успеха</h2>
        <p class="extra-services__prg">Наши клиенты не взаимодействуют с товаром напрямую и освобождены от повседневных операционных задач</p>
        <div class="extra-services__grid-group">
            <div class="extra-services__grid-item">Ведение личного кабинета на маркетплейсах</div>
            <div class="extra-services__grid-item">Создание продающих фотографий товаров</div>
            <div class="extra-services__grid-item">Подготовка продающих описаний товаров</div>
        </div>
        <a href="" class="about-us-btn animated-btn-2">Больше о компании</a>
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
