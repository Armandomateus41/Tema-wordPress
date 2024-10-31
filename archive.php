
<?php get_header(); ?>

<main id="main" class="site-main">
    <header class="archive-header">
        <h1 class="archive-title">
            <?php the_archive_title(); ?>
        </h1>
        <div class="archive-description">
            <?php the_archive_description(); ?>
        </div>
    </header>

    <?php if (have_posts()) : ?>
        <div class="archive-posts">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('templates/parts/content', get_post_format()); ?>
            <?php endwhile; ?>
        </div>

        <div class="pagination">
            <?php
            the_posts_pagination([
                'prev_text' => __('Anterior', 'aqbank-theme'),
                'next_text' => __('Próximo', 'aqbank-theme'),
                'mid_size'  => 2,
            ]);
            ?>
        </div>

    <?php else : ?>
        <?php get_template_part('templates/parts/content', 'none'); ?>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
