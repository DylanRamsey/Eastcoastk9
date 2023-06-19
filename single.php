<?php //This is a single blog post template ?>
<?php get_header(); ?>
<section class="site-body">
  <?php
    if( have_posts() ) {
      while( have_posts() ) {
        the_post();
        the_date();
        the_tags();

        the_content();
      }
    }
  ?>
</section>
<?php get_footer(); ?>