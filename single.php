<?php get_header(); ?>

<main class="home-main centering">
    <section class="privacy-policy-page blog single">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>

                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>

        <?php endwhile;
        else: endif; ?>
    </section>
</main>

<?php get_footer(); ?>