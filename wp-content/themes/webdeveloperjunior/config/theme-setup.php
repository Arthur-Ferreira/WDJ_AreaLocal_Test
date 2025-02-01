<?php
// Configuração do tema
function webdeveloperjunior_theme_setup()
{
  // Suporte a thumbnails
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'webdeveloperjunior_theme_setup');
