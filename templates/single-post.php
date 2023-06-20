<div class="blog-post__heading">
  <div class="blog-post__blog-info">
    <p class="blog-post__tags">
      <?php the_tags($before = ''); ?>
    </p>
    <h1 class="blog-post__title">
      <?php the_title(); ?>
    </h1>
    <div class="blog-post__author-and-date">
      <h3 class="blog-post__author">
        <?php the_author(); ?>
      </h3>
      <h3 class="blog-post__date">
        <?php the_date(); ?>
      </h3>
    </div>
  </div>
  <img 
    class="blog-post__image" 
    src="<?php the_post_thumbnail_url(); ?>" 
  />
</div>
<main class="blog-post__content">
  <?php the_content(); ?>
</main>