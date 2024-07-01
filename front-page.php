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
                    <h1 class="home-banner__heading">Перевозка грузов<br><span class="red-text">по России, Белорусии и из Китая</span></h1>
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
            <div class="banner-img-wrapper"><img class="banner-img" src="<?php echo get_template_directory_uri() . '/assets/images/main-header.png';?>" alt="Большой красный грузовик с контейнером">
            </div>
    </section>
    <section class="services-section">
        <div class="serv__flex-group">
            <div class="serv__card">
                <h3><span class="red-text">Автоперевозка</span> морских контейнеров по России и Белорусии</h3>
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
                <h3>Доставка из Китая «под ключ»</h3>
                <p>От завода в Китае до вашего порога, быстро и без хлопот. Мы сделаем все, пока вы занимаетесь своим бизнесом</p>
                <p>До 25 дней</p>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/serv-img-5.png';?>" alt="Красная фура с контейнером" class="serv-img">
                <button class="serv__find-more-btn animated-btn-3">Подробнее</button>
            </div>
        </div>
    </section>
    <section class="steps-section">
        <h2>До получения груза всего 5 шагов</h2>
        <div class="steps-wrapper">
            <div class="step-flex-element">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/svgs/request.svg';?>" alt="Заявка">
                Заявка
            </div>
            <div class="step-flex-element">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/svgs/calc.svg';?>" alt="Расчёт">
                Расчёт
            </div>
            <div class="step-flex-element">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/svgs/contract.svg';?>" alt="Договор">
                Договор
            </div>
            <div class="step-flex-element">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/svgs/delivery.svg';?>" alt="Доставка">
                Доставка
            </div>
            <div class="step-flex-element">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/svgs/payment.svg';?>" alt="Оплата">
                Оплата
            </div>
        </div>
    </section>
    <section class="reviews-section">
        <h2>Люди нам доверяют</h2>
        <div class="carousel">
            <div class="carousel-track-container">
                <ul class="carousel-track">
                    <li class="carousel-slide current-slide">
                        <div class="review">
                            <div class="review-top">
                                <div class="review-name-wrapper">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/avatar-1.png';?>" alt="Аватар аккаунта Гугл">
                                    <div>Юлия</div>
                                </div>
                                <div class="review-stars-wrapper">
                                <?php
                                    for ($i = 1; $i <= 5; $i++) {
                                        echo '<img src="' . get_template_directory_uri() . '/assets/images/svgs/star-review.svg" alt="Желтая звезда">';
                                    }
                                    ;?>
                                </div>
                            </div>
                            <div class="review-content">
                                Финальная цена оказалась даже не много ниже,чему я была приятно удивлена,перевозка выполнена качественно, все сроки соблюдены за что огромное спасибо.
                            </div>
                        </div>
                    </li>
                    <li class="carousel-slide">
                        <div class="review">
                            <div class="review-top">
                                <div class="review-name-wrapper">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/avatar-2.png';?>" alt="Аватар аккаунта Гугл">
                                    <div>Елена</div>
                                </div>
                                <div class="review-stars-wrapper">
                                <?php
                                    for ($i = 1; $i <= 5; $i++) {
                                        echo '<img src="' . get_template_directory_uri() . '/assets/images/svgs/star-review.svg" alt="Желтая звезда">';
                                    }
                                    ;?>
                                </div>
                            </div>
                            <div class="review-content">
                                Цена соответствовала заявленной. Всю работу выполнили быстро и качественно. Вежливость, главное качество. Всё прошло отлично.
                            </div>
                        </div>
                    </li>
                    <li class="carousel-slide slide-video">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/video-review.png';?>" alt="Image 3">
                    </li>
                    <li class="carousel-slide">
                        <div class="review">
                            <div class="review-top">
                                <div class="review-name-wrapper">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/avatar-3.png';?>" alt="Аватар аккаунта Гугл">
                                    <div>Dolly</div>
                                </div>
                                <div class="review-stars-wrapper">
                                <?php
                                    for ($i = 1; $i <= 5; $i++) {
                                        echo '<img src="' . get_template_directory_uri() . '/assets/images/svgs/star-review.svg" alt="Желтая звезда">';
                                    }
                                    ;?>
                                </div>
                            </div>
                            <div class="review-content">
                                Перевезли все достаточно быстро. Водитель на протяжении поездки выходил на связь и сделал необходимые фото груза. Цены приятно удивили, есть с чем сравнить. Спасибо!
                            </div>
                        </div>
                    </li>
                    <li class="carousel-slide">
                        <div class="review">
                            <div class="review-top">
                                <div class="review-name-wrapper">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/avatar-4.png';?>" alt="Аватар аккаунта Гугл">
                                    <div>Максим Швецов</div>
                                </div>
                                <div class="review-stars-wrapper">
                                <?php
                                    for ($i = 1; $i <= 5; $i++) {
                                        echo '<img src="' . get_template_directory_uri() . '/assets/images/svgs/star-review.svg" alt="Желтая звезда">';
                                    }
                                    ;?>
                                </div>
                            </div>
                            <div class="review-content">
                                Всё прошло хорошо, продавец очень хороший и вежливый, обсудили всё за чашечкой кофе и спокойно договорились)
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="carousel-controls-wrapper">
            <div class="carousel-btn-wrapper">
                <button class="carousel-btn carousel-btn-left"><?php include get_template_directory() . '/assets/images/svgs/carousel-arrow-left.svg';?></button>
                <button class="carousel-btn carousel-btn-right"><?php include get_template_directory() . '/assets/images/svgs/carousel-arrow-right.svg';?></button>
            </div>
            <a href="" class="carousel-link animated-btn-2">Больше отзывов на Авито</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
