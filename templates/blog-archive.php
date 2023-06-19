<div class="blog-preview">
  <a href="<?php echo the_permalink(); ?>">
    <img 
      class="blog-preview__image" 
      src="<?php the_post_thumbnail_url(); ?>" 
      alt=""
    >
    <h2 class="blog-preview__title">
      <?php echo the_title(); ?>
    </h2>
    <p class="blog-preview__date">
      Published <?php echo the_date(); ?>
    </p>
    <p class="blog-preview__excerpt"><?php echo get_the_excerpt(); ?></p>
    <p class="blog-preview__link">
      Read More
    </p>
  </a>
</div>