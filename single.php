
<?php get_header(); ?>

<main id="main" class="site-main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <div class="entry-meta">
                    <span class="posted-on"> 
                        <?php _e('Publicado em', 'aqbank-theme'); ?> <?php echo get_the_date(); ?>
                    </span> 
                    <span class="byline">
                        <?php _e('por', 'aqbank-theme'); ?> <?php the_author(); ?>
                    </span> 
                </div>
            </header>
         </article>
            <div class="entry-content">
                <?php the_content(); ?>
                <?php
                wp_link_pages([
                    'before' => '<div class="page-links">' . __('Páginas:', 'aqbank-theme'),
                    'after'  => '</div>',
                ]);
                ?>
            </div>

            <footer class="entry-footer">
                <span class="cat-links">
                    <?php _e('Categorias:', 'aqbank-theme'); ?> <?php the_category(', '); ?>
                </span>
                <span class="tags-links">
                    <?php the_tags(__('Tags:', 'aqbank-theme') . ' ', ', ', ''); ?>
                </span>
            </footer>
        </article>

        <nav class="post-navigation">
            <div class="nav-previous"><?php previous_post_link('%link', __('&larr; Post Anterior', 'aqbank-theme')); ?></div>
            <div class="nav-next"><?php next_post_link('%link', __('Próximo Post &rarr;', 'aqbank-theme')); ?></div>
        </nav>

        <?php if (comments_open() || get_comments_number()) : comments_template(); endif; ?>
    <?php endwhile; endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
