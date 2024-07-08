<?php
$questions = ['Насколько заранее нужно бронировать контейнеры?', 'Страхуете ли вы грузы? Как убедиться в безопасности?', 'Как правильно расчитать цену груза?', 'Есть ли ограничения на перевозку из Китая?', 'Помогаете ли вы с таможенным оформлением?', 'Можно ли заказать доставку контейнера от ж/д станции к складу?'];
$answers = ['У нас всегда есть свободные контейнеры, которые вы можете загрузить своими товарами. Забронировать контейнер можно по телефону, указанному на сайте, или онлайн.', 'Мы осуществляем видео и фотофиксация всех этапов доставки сборных и контейнерных грузов, поэтому вы можете быть уверены, что с вашим грузом все будет в полном порядке. Для особо ценных грузов мы предоставляем услугу страхования грузов.', 'На цену влияет дальность маршрута, вес груза, срочность подачи транспорта. Дополнительно клиент может рассчитать стоимость доставки с помощью калькулятора на сайте. Если нужного города отправки или доставки нет в списке, то наш менеджер произведёт расчёт доставки в течение 5 минут.', 'Грузы класса (ADR) мы не доставляем', 'Да, у нас есть услуга таможенного оформления «под ключ», она включает в себя классификацию груза по ТН ВЭД, проверку документов, предоставленных грузовладельцем, расчёт таможенных платежей, заполнение и подачу декларации, представительство в таможенных органах.', 'Да, в нашей компании вы можете заказать комплексную доставку грузов из Китая. Например, контейнерную жд перевозку груза поездом до ж/д станции с последующей доставкой контейнера к месту назначения автомобильным транспортом.'];
;?>

<section class="accordion-section">
    <div class="accordion__img-wrapper"></div>
    <div class="accordion">
        <h2>Часто задаваемые <span class="red-text">вопросы</span></h2>
        <?php for ($i = 0; $i < count($questions); $i++): ?>
            <div class="accordion-item">
                <div class="accordion-header">
                    <h3><?php echo $questions[$i]; ?></h3>
                    <img class="accordion-svg" src="<?php echo get_template_directory_uri() . '/assets/images/svgs/accordion-plus.svg'; ?>" alt="Плюс">
                    <img class="accordion-svg accordion-svg-hidden" src="<?php echo get_template_directory_uri() . '/assets/images/svgs/accordion-minus.svg'; ?>" alt="Минус">
                </div>
                <div class="accordion-content">
                    <?php echo $answers[$i]; ?>
                </div>
            </div>
        <?php endfor; ?>
    </div>
    <img class="accordion-bg-img__mobile" src="<?php echo get_template_directory_uri() . '/assets/images/accordion-mobile.png';?>" alt="Большой красный грузовик с контейнером">
</section>