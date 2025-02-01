<?php get_header(); ?>

<main>

  <section class="wrapper">
    <div class="container">
      <div class="info">
        <span>
          curtiu a Área Local?
        </span>
        <h1>Bem-vindo ao Wordpress Posts</h1>
      </div>
      <?php
      // Exibe o formulário de postagem
      form_render();
      ?>
    </div>
  </section>
  <?php
  // Exibe a lista de postagem
  render_posts();
  ?>
</main>

<?php get_footer(); ?>