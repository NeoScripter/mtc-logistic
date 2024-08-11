<?php

/**
 * Template Name: Privacy Policy
 */
?>

<?php get_header(); ?>
<div class="popup-menu-overlay">
    <div class="popup-menu">
        <div class="popup-menu__logo-wrapper">
            <a href="<?php echo home_url(); ?>" class="homepage-link"><img src="<?php echo get_template_directory_uri() .
                                                                                    "/assets/images/logo-black.png"; ?>" alt="logo" class="popup-logo"></a>
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
    <section class="privacy-policy">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>

                <?php the_content(); ?>

        <?php endwhile;
        else: endif; ?>
    </section>
</main>
<?php get_footer(); ?>