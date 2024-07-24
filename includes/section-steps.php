<?php
if (is_page('Home')) {
    $section_heading = 'До получения груза всего <span class="red-text">5 шагов</span>';
} else {
    $section_heading = 'Процесс <span class="red-text">сотрудничества</span>';
}
?>

<section class="steps-section">
    <h2 class="heading-large"><?php echo $section_heading; ?></h2>
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