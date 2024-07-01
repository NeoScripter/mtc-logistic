jQuery(document).ready(function ($) {
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

    initDropdownMenu();

    function initCarouselControls() {
        const track = $(".carousel-track");
        let slides = $(".carousel-slide");
        const videoSlide = $('.slide-video');
        const nextButton = $(".carousel-btn-right");
        const prevButton = $(".carousel-btn-left");
        let currentIndex = 0;

        const updateSlidePosition = () => {
            const amountToMove = -slides.eq(currentIndex).position().left;
            track.css("transform", `translateX(${amountToMove}px)`);
        };

        const replaceVideoSlide = () => {
            if ($(window).width() < 600) {
                videoSlide.prependTo(track);
            } else if ($(window).width() < 900) {
                videoSlide.insertAfter(slides.eq(0));
            } else {
                videoSlide.insertAfter(slides.eq(1));
            }
            slides = $('.carousel-slide');
            currentIndex = 0;
            updateSlidePosition();
        };
    
        replaceVideoSlide();
    
        $(window).resize(function() {
            replaceVideoSlide();
        });

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

    initCarouselControls();
});
