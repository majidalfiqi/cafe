<div class="post">
  <img class="post-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_caption()?>" />
  <h2 class="post-title"><?php the_title();?></h2>
  <p class="post-summary">
    <?php the_excerpt();?>
  </p>
  <a class="post-button" href="<?php the_permalink(); ?>">Read</a>
</div>