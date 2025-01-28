<?php get_header(); ?>

<div class="content">
    <?php 
    // Exibe o formulário renderizado pelo home.php
    form_render();
    
    // Exibe a lista de posts renderizado pelo home.php
    render_posts();
    ?>
</div>

<?php get_footer(); ?>