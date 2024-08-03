<?php
if (is_page('Home') || is_page('О компании')) {
    $section_heading = 'Коротко о нашей компании';
} else {
    $section_heading = 'Почему мы?';
}
?>

<section class="about-us-section">
    <h2><?php echo $section_heading; ?></h2>
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
    <a href="" class="about-us-btn animated-btn-1">Больше о компании</a>
</section>