<?php //This is the post archive template ?>
<?php get_header(); ?>
<section class="site-body">
<section class="site-body interior-page-heading interior-page-heading--brown">
  <h2>
    Blog
  </h2>
  <h5>
    Ruff Ruff, <span class="interior-page-heading--green">Read All About It!</span>
  </h5>
</section>  
  <div class="blog-archive">
    <?php if( have_posts() ) {
        while( have_posts() ) {
          the_post();
          get_template_part('templates/blog', 'archive');
        }
      }
    ?>
  </div>
  <div class="pagination">
    <?php 
      the_posts_pagination( array(
        'mid_size'  => 2,
        'prev_text' => __( '<', 'textdomain' ),
        'next_text' => __( '>', 'textdomain' ),
    ) );
    ?>
  </div>
</section>

<?php get_footer(); ?>