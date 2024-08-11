<?php get_header(); ?>

<main class="home-main centering">
    <section class="privacy-policy-page blog">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <div class="blog-flex-group">
                    <div>
                        <h1><?php the_title(); ?></h1>
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="header-btn animated-btn-2 blog-link">Читать далее</a>
                </div>
        <?php endwhile;
        else: endif; ?>
    </section>
</main>

<?php get_footer(); ?>