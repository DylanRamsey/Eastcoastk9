<?php //This is a single blog post template ?>
<?php get_header(); ?>
<section class="site-body blog-post">
  <?php
    if( have_posts() ) {
      while( have_posts() ) {
        the_post();
        get_template_part('templates/single', 'post');
      }
    }
  ?>
</section>
<?php get_footer(); ?>