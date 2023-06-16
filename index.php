<?php get_header(); ?>
<section class="site-body">
  <?php
    if( have_posts() ) {
      while( have_posts() ) {
        the_post();
        the_post_thumbnail_url();
        the_title();
        the_date();

        the_excerpt();

        the_permalink();
      }
    }
  ?>
</section>

<?php get_footer(); ?>