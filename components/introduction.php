<section class="introduction">
  <?php if( have_rows('content_designer') ): ?>
    <?php while( have_rows('content_designer') ): the_row(); ?>
      <?php if (get_row_layout() == 'introduction'):
        $introduction_heading = get_sub_field('introduction_heading');
        $introduction_image = get_sub_field('introduction_image');
        $introduction_image_alt = get_sub_field('introduction_image_alt');
        $introduction_button_text = get_sub_field('introduction_button_text');
        $introduction_button_link = get_sub_field('introduction_button_link');
        $introduction_text = get_sub_field('introduction_text');
      ?>     
    <img 
      class="introduction__image" 
      src="<?php echo $introduction_image;?>" 
      alt="<?php echo $introduction_image_alt;?>" 
    >
    <div class="introduction__copy">
      <h2 class="heading heading--brown">
        <?php echo $introduction_heading;?>
      </h2>
      <p>
        <?php echo $introduction_text;?>     
      </p>
      <a class="button button--green" href="<?php echo $introduction_button_link;?>">
        <?php echo $introduction_button_text;?>
      </a>
    </div>
    <?php endif;?>
    <?php endwhile;?>
  <?php endif;?>
</section>