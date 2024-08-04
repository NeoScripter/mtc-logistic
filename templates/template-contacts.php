<?php
/**
 * Template Name: Contacts
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
    <section class="contacts-page">
        <div class="contacts-desc">
        <?php
            while ( have_posts() ) : the_post();
                $content = apply_filters('the_content', get_the_content());
                $content = wpautop($content);

                $paragraphs = preg_split('/(<\/p>)/', $content, -1, PREG_SPLIT_DELIM_CAPTURE);

                $i = 1;
                foreach ( $paragraphs as $paragraph ) {
                    if (trim($paragraph)) {
                        if (trim($paragraph) == '</p>') {
                            echo $paragraph;
                        } else {
                            if ($i % 2 !== 0) {
                                $paragraph = str_replace('<p>', '<p class="contacts-subheading">', $paragraph);
                            }

                            echo $paragraph;
                            $i++;
                        }
                    }
                }
            endwhile;
            ?>
        </div>
        <iframe class="google-map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.308769090626!2d37.631647175916996!3d55.70354310525018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54b49278af23f%3A0x71f7af8882ad1ab1!2sAvtozavodskaya%20Ulitsa%2C%2023%D0%90%D0%BA2%2C%20Moskva%2C%20Russia%2C%20115280!5e0!3m2!1sen!2sph!4v1722757385425!5m2!1sen!2sph"style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <?php get_template_part('includes/section','webform'); ?>
</main>
<?php get_footer(); ?>
