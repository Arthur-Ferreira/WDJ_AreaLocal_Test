<?php

function render_posts() {
  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
  $query = new WP_Query( [
    'post_type'        => 'post',
    'posts_per_page'   => 9,
    'paged'            => $paged
  ]);

  if($query -> have_posts()) {
    ?>
    <section>
      <?php
        while($query -> have_posts()) {
          $query -> the_post();
          get_template_part('template-parts/post-item', 'post');
        }
        pagination($query);
      ?>
    </section>
    <?php
      wp_reset_postdata();
  } else {
    echo 'Nenhum post encontrado';
  }

  wp_reset_postdata();
}

?>