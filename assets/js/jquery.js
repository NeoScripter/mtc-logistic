(function ($) {
    function initLettersCarouselControls() {
        const track = $(".letters-carousel-track");
        let slides = $(".letters-carousel-slide");
        const btnWrapper = $(".letters-carousel-btn-wrapper");
        const nextButton = $(btnWrapper).children(".carousel-btn-right");
        const prevButton = $(btnWrapper).children(".carousel-btn-left");
        let currentIndex = 0;

        const updateSlidePosition = () => {
            const amountToMove = -slides.eq(currentIndex).position().left;
            track.css("transform", `translateX(${amountToMove}px)`);
        };

        nextButton.on("click", () => {
            if (currentIndex < slides.length - 1) {
                currentIndex++;
                updateSlidePosition();
            }
        });

        prevButton.on("click", () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlidePosition();
            }
        });

        updateSlidePosition();
    }

    function initAccordion() {
        $(".accordion-content").hide();

        $(".accordion-header").click(function () {
            $(this).next(".accordion-content").slideToggle();

            $(".accordion-content").not($(this).next()).slideUp();
        });
    }

    function initDropdownMenu() {
        let hideTimeout;

        $(".header__dropdown-item").on("mouseover", function () {
            clearTimeout(hideTimeout);
            $(this).children("ul").fadeIn();
        });

        $(".header__dropdown-item ul").on("mouseover", function () {
            clearTimeout(hideTimeout);
        });

        $(".header__dropdown-item").on("mouseleave", function () {
            const dropdownItem = $(this);
            hideTimeout = setTimeout(function () {
                dropdownItem.children("ul").fadeOut();
            }, 500);
        });

        $(".header__dropdown-item ul").on("mouseleave", function () {
            const dropdownItem = $(this).parent();
            hideTimeout = setTimeout(function () {
                dropdownItem.children("ul").fadeOut();
            }, 500);
        });
    }

    function initReviewsCarouselControls() {
        const track = $(".carousel-track");
        let slides = $(".carousel-slide");
        const videoSlide = $(".slide-video");
        const nextButton = $(".carousel-btn-right");
        const prevButton = $(".carousel-btn-left");
        let currentIndex = 0;

        const updateSlidePosition = () => {
            const amountToMove = -slides.eq(currentIndex).position().left;
            track.css("transform", `translateX(${amountToMove}px)`);
        };

        nextButton.on("click", () => {
            const isWideScreen = $(window).width() > 900;
            const maxIndex = isWideScreen ? slides.length - 2 : slides.length - 1;
        
            if (currentIndex < maxIndex) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
        
            updateSlidePosition();
        });

        prevButton.on("click", () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlidePosition();
            } else {
                currentIndex = slides.length - 1;
                replaceVideoSlide();
            }
        });

        updateSlidePosition();
    }

    function setupImageOverlay(selector) {
        $(selector).each(function() {
            $(this).on('click', function() {
                const imgSrc = $(this).find('img').attr('src');
                const $overlay = $('<div class="fullscreen-overlay"></div>');
                $overlay.css({
                    'opacity': '0',
                    'transition': 'opacity 0.3s',
                    'position': 'fixed',
                    'top': '0',
                    'left': '0',
                    'width': '100%',
                    'height': '100%',
                    'background-color': 'rgba(0, 0, 0, 0.8)', 
                    'display': 'flex',
                    'justify-content': 'center',
                    'align-items': 'center',
                    'z-index': '1000'
                });
    
                const $img = $('<img>').attr('src', imgSrc);
                $img.css({
                    'transform': 'scale(0)',
                    'transition': 'transform 0.5s',
                    'object-fit': 'contain',
                    'height': '90%',
                    'cursor': 'pointer'
                });
    
                $overlay.append($img);
                $('body').append($overlay);
    
                setTimeout(function() {
                    $overlay.css('opacity', '1');
                    $img.css('transform', 'scale(1)');
                }, 200);
    
                $overlay.on('click', function() {
                    $(this).css('opacity', '0');
                    $img.css('transform', 'scale(0)');
                    setTimeout(function() {
                        $overlay.remove();
                    }, 300);
                });
            });
        });
    }
    
    jQuery(document).ready(function ($) {
        initDropdownMenu();
        initReviewsCarouselControls();
        initLettersCarouselControls();
        initAccordion();
        setupImageOverlay('.letters-carousel-slide');
    });
})(jQuery);
