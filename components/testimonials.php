<section class="testimonials">
  <?php if( have_rows('content_designer') ): ?>
      <?php while( have_rows('content_designer') ): the_row(); ?>
        <?php if (get_row_layout() == 'testimonials'):
          $testimonials_heading = get_sub_field( 'testimonial_heading' );
          $testimonials = get_sub_field( 'testimonial' );
        ?>
          <h2 class="heading heading--brown heading--center">
            <?php echo $testimonials_heading;?>  
          </h2>
          <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">        
            <?php foreach($testimonials as $testimonial):?>
              <div class="swiper-slide">
                <img 
                  class="testimonials-slider__image" 
                  src="<?php echo $testimonial['testimonial_image'];?>" 
                  alt="<?php echo $testimonial['testimonial_image_alt'];?>">
                <p class="testimonials-slider__copy">
                  <?php echo $testimonial['testimonial_text'];?>         
                </p>
                <p class="testimonials-slider__author">
                  <?php echo $testimonial['testimonial_author'];?>     
                </p>
              </div>
            <?php endforeach;?>
          </div>  
        <?php endif;?>
        <div class="swiper-pagination"></div>     
      <?php endwhile;?>
  <?php endif;?>     
</section>