<?php

function child_theme_enqueue_styles() {
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');


function child_theme_enqueue_scripts() {
  wp_enqueue_script('jquery');

  wp_enqueue_script('form-ajax', get_template_directory_uri() . '/assets/js/form-ajax.js', array('jquery'), null, true);

  wp_localize_script('form-ajax', 'ajax_object', array(
    'ajax_url' => admin_url('admin-ajax.php') // WordPress Ajax URL
  ));
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_scripts');

function custom_post_format_setup() {
  add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote' ) );
}
add_action( 'after_setup_theme', 'custom_post_format_setup' );

require_once get_template_directory() . '/config/theme-setup.php';
require_once get_template_directory() . '/includes/form-render.php';
require_once get_template_directory() . '/includes/form-handler.php';
require_once get_template_directory() . '/includes/pagination.php';
require_once get_template_directory() . '/templates/posts-list.php';
require_once get_template_directory() . '/templates/home.php';

