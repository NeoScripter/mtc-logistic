<?php
/**
 * Template Name: Sea Cargo
 */
get_header(); 
?>

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
    
    <?php get_template_part('includes/section','steps'); ?>
    <?php get_template_part('includes/section','accordion'); ?>
    <?php get_template_part('includes/section','about'); ?>
    <?php get_template_part('includes/section','reviews'); ?>
    <?php get_template_part('includes/section','webform'); ?>
</main>

<?php get_footer(); ?>
