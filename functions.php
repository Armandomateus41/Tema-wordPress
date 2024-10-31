
<?php
// Habilita suporte a miniaturas de posts
add_theme_support('post-thumbnails');

// Enfileira scripts e estilos
function aqbank_enqueue_scripts() {
    wp_enqueue_style('aqbank-style', get_stylesheet_uri());
    wp_enqueue_style('aqbank-custom-style', get_template_directory_uri() . '/assets/css/custom.css', [], '1.0');
    wp_enqueue_script('aqbank-custom-script', get_template_directory_uri() . '/assets/js/custom.js', ['jquery'], '1.0', true);
}
add_action('wp_enqueue_scripts', 'aqbank_enqueue_scripts');
