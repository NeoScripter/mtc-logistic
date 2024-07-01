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
                    <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/video-review.png';?>" alt="Image 3"></a>
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