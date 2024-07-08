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
            const content = $(this).next(".accordion-content");
            const svgPlus = $(this).find(".accordion-svg").first();
            const svgMinus = $(this).find(".accordion-svg").last();
    
            content.slideToggle();
            svgPlus.toggleClass("accordion-svg-hidden");
            svgMinus.toggleClass("accordion-svg-hidden");
    
            $(".accordion-content").not(content).slideUp();
            $(".accordion-content").not(content).prev(".accordion-header").find(".accordion-svg").first().removeClass("accordion-svg-hidden");
            $(".accordion-content").not(content).prev(".accordion-header").find(".accordion-svg").last().addClass("accordion-svg-hidden");
        });
    }

    function initDropdownMenu() {
        let hideTimeout;
    
        $(".arrow-li").on("mouseover", function () {
            clearTimeout(hideTimeout);
            $(this).children("ul").fadeIn().css("display", "flex");
            $(this).addClass('rotated');
        });
    
        $(".arrow-li ul").on("mouseover", function () {
            clearTimeout(hideTimeout);
        });
    
        $(".arrow-li").on("mouseleave", function () {
            const dropdownItem = $(this);
            hideTimeout = setTimeout(function () {
                dropdownItem.children("ul").fadeOut();
                dropdownItem.removeClass('rotated');
            }, 500);
        });
    
        $(".arrow-li ul").on("mouseleave", function () {
            const dropdownItem = $(this).parent();
            hideTimeout = setTimeout(function () {
                dropdownItem.children("ul").fadeOut();
            }, 500);
        });
    }
    
    $(document).ready(function() {
        initDropdownMenu();
    });
    
    
    $(document).ready(function() {
        initDropdownMenu();
    });
    
    
    $(document).ready(function() {
        initDropdownMenu();
    });
    

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
    
    jQuery(document).ready(function ($) {
        initDropdownMenu();
        initReviewsCarouselControls();
        if ($(".letters-carousel-track").length) {
            initLettersCarouselControls();
        }
        initAccordion();
    });
})(jQuery);
