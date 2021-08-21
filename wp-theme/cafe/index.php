<?php
/*
  * Template Name: recettes
  */
?>

<?php get_header('recettes');?>

<section class="posts">

  <?php
  if(have_posts()){
    while(have_posts()){
      the_post();
      get_template_part('template-parts/content', 'posts');
    }
  }
  ?>

</section>

<?php the_posts_pagination();?>

<?php get_footer('recettes');?>