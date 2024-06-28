<?php get_header(); ?>

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
</main>

<?php get_footer(); ?>
