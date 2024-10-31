
<aside class="site-sidebar">
    <?php if (is_active_sidebar('main-sidebar')) : ?>
        <?php dynamic_sidebar('main-sidebar'); ?>
    <?php else : ?>
        <p>Adicione widgets à barra lateral.</p>
    <?php endif; ?>
</aside>
