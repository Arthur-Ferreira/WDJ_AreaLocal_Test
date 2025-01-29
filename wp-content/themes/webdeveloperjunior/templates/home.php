<?php get_header(); ?>

<main>
  <h1>Bem-vindo ao Wordpress Posts</h1>
    <?php 
    // Exibe o formulário de postagem
    form_render();
    
    // Exibe a lista de postagem
    render_posts();
    ?>
</main>

<?php get_footer(); ?>