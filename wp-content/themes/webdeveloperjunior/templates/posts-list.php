<?php

function render_posts() {
  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
  $query = new WP_Query( [
    'post_type' => 'post',
    'posts_per_page' => 9,
    'paged' => $paged
  ]);

  if($query -> have_posts()) {
    while($query -> have_posts()) {
      $query -> the_post();
      ?>
      <article>
        <h2><?php the_title(); ?></h2>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>">Saiba mais</a>
      </article>
      <?php
    }
    pagination($query);
  } else {
    echo 'Nenhum post encontrado';
  }

  wp_reset_postdata();
}

?>