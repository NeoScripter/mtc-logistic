jQuery(document).ready(function($) {
    let hideTimeout;

    $('.header__dropdown-item').on('mouseover', function() {
        clearTimeout(hideTimeout); 
        $(this).children('ul').fadeIn();
    });

    $('.header__dropdown-item ul').on('mouseover', function() {
        clearTimeout(hideTimeout); 
    });

    $('.header__dropdown-item').on('mouseleave', function() {
        const dropdownItem = $(this);
        hideTimeout = setTimeout(function() {
            dropdownItem.children('ul').fadeOut();
        }, 500); 
    });

    $('.header__dropdown-item ul').on('mouseleave', function() {
        const dropdownItem = $(this).parent();
        hideTimeout = setTimeout(function() {
            dropdownItem.children('ul').fadeOut();
        }, 500); 
    });
});
