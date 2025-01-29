<?php
// Configuração do tema
function webdeveloperjunior_theme_setup() {
    // Suporte a thumbnails
    add_theme_support('post-thumbnails');

    // Registro de menus
    register_nav_menus([
        'header-menu' => __('Menu do Cabeçalho', 'webdeveloperjunior')
    ]);
}
add_action('after_setup_theme', 'webdeveloperjunior_theme_setup');
?>