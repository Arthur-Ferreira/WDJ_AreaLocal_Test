<article class="post">
  <?php
  $image = get_the_post_thumbnail_url(get_the_ID()); // Obtém a imagem destacada
  if ($image) :
  ?>
    <div class="post-image">
      <img src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>">
    </div>
  <?php endif; ?>
  <div class="post-info">
    <h3><?php the_title(); ?></h3>
    <p><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink(); ?>">Saiba mais</a>
  </div>
</article>