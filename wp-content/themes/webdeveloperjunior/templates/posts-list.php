<?php

function render_posts()
{
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $query = new WP_Query([
    'post_type'        => 'post',
    'posts_per_page'   => 9,
    'paged'            => $paged
  ]);

  if ($query->have_posts()) {
?>
    <section class="wrapper posts">
      <div class="container">
        <ul id="posts-list" class="posts-list">
          <?php
          while ($query->have_posts()) {
          ?>
            <li class="post-item">
              <?php
              $query->the_post();
              get_template_part('template-parts/post-item', 'post');
              ?>
            </li>
          <?php
          }
          ?>
        </ul>
      </div>
    </section>
    <div class="wrapper pagination">
      <?php
      pagination($query);
      ?>
    </div>
<?php
  } else {
    echo 'Nenhum post encontrado';
  }
  wp_reset_postdata();
}

?>