<article>
  <!-- <?php if ($image) : ?> -->
    <!-- <img src="<?php echo $image; ?>" alt="<?php the_title(); ?>"> -->
  <!-- <?php endif; ?> -->
  <h3><?php the_title(); ?></h3>
  <p><?php the_excerpt(); ?></p>
  <a href="<?php the_permalink(); ?>">Saiba mais</a>
</article>