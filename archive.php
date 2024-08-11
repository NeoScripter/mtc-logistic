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

        <div class="archive">
            <?php
            global $wp_query;
            $big = 999999999;
            echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $wp_query->max_num_pages
            ));
            ;?>
        </div>
    </section>
</main>

<?php get_footer(); ?>