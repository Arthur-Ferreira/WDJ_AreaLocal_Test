<?php
function child_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/assets/css/index.css');
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');

add_action( 'after_setup_theme', 'custom_post_format_setup' );
function custom_post_format_setup() {
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote' ) );
}

require_once get_template_directory() . '/templates/form-render.php';
require_once get_template_directory() . '/templates/form-handler.php';
require_once get_template_directory() . '/templates/pagination.php';
require_once get_template_directory() . '/templates/posts-list.php';
require_once get_template_directory() . '/templates/home.php';

// **Configurações do tema**
function theme_setup() {
  // Suporte a miniaturas (imagens destacadas)
  add_theme_support('post-thumbnails');
  // Suporte ao título dinâmico
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_setup');
