<section class="testimonials">
  <h2 class="heading heading--brown heading--center">
    <?php
      $testimonial_slider_heading = get_field("testimonial_slider_heading");
      if($testimonial_slider_heading) {
          echo $testimonial_slider_heading;
      }
    ?>          
  </h2>
  <div class="testimonials-slider swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
        <img 
          class="testimonials-slider__image" 
          src="
            <?php
              $testimonial_slider_testimonial_1 = get_field("testimonial_slider_testimonial_1");
              if($testimonial_slider_testimonial_1) {
                  echo $testimonial_slider_testimonial_1['testimonial_slider_testimonial_image'];
              }
            ?>                  
          " 
          alt="
            <?php
              $testimonial_slider_testimonial_1 = get_field("testimonial_slider_testimonial_1");
              if($testimonial_slider_testimonial_1) {
                  echo $testimonial_slider_testimonial_1['testimonial_slider_testimonial_alt'];
              }
            ?>                
          ">
        <p class="testimonials-slider__copy">
          <?php
            $testimonial_slider_testimonial_1 = get_field("testimonial_slider_testimonial_1");
            if($testimonial_slider_testimonial_1) {
                echo $testimonial_slider_testimonial_1['testimonial_slider_testimonial_content'];
            }
          ?>              
        </p>
        <p class="testimonials-slider__author">
          <?php
            $testimonial_slider_testimonial_1 = get_field("testimonial_slider_testimonial_1");
            if($testimonial_slider_testimonial_1) {
                echo $testimonial_slider_testimonial_1['testimonial_slider_testimonial_author'];
            }
          ?>
        </p>
    </div>
    <div class="swiper-slide">
        <img 
          class="testimonials-slider__image" 
          src="
            <?php
              $testimonial_slider_testimonial_2 = get_field("testimonial_slider_testimonial_2");
              if($testimonial_slider_testimonial_2) {
                  echo $testimonial_slider_testimonial_2['testimonial_slider_testimonial_image'];
              }
            ?>                  
          " 
          alt="
            <?php
              $testimonial_slider_testimonial_2 = get_field("testimonial_slider_testimonial_2");
              if($testimonial_slider_testimonial_2) {
                  echo $testimonial_slider_testimonial_2['testimonial_slider_testimonial_alt'];
              }
            ?>                
          ">
        <p class="testimonials-slider__copy">
          <?php
            $testimonial_slider_testimonial_2 = get_field("testimonial_slider_testimonial_2");
            if($testimonial_slider_testimonial_2) {
                echo $testimonial_slider_testimonial_2['testimonial_slider_testimonial_content'];
            }
          ?>              
        </p>
        <p class="testimonials-slider__author">
          <?php
            $testimonial_slider_testimonial_2 = get_field("testimonial_slider_testimonial_2");
            if($testimonial_slider_testimonial_2) {
                echo $testimonial_slider_testimonial_2['testimonial_slider_testimonial_author'];
            }
          ?>
        </p>
    </div>
    <div class="swiper-slide">
        <img 
          class="testimonials-slider__image" 
          src="
            <?php
              $testimonial_slider_testimonial_3 = get_field("testimonial_slider_testimonial_3");
              if($testimonial_slider_testimonial_3) {
                  echo $testimonial_slider_testimonial_3['testimonial_slider_testimonial_image'];
              }
            ?>                  
          " 
          alt="
            <?php
              $testimonial_slider_testimonial_3 = get_field("testimonial_slider_testimonial_3");
              if($testimonial_slider_testimonial_3) {
                  echo $testimonial_slider_testimonial_3['testimonial_slider_testimonial_alt'];
              }
            ?>                
          ">
        <p class="testimonials-slider__copy">
          <?php
            $testimonial_slider_testimonial_3 = get_field("testimonial_slider_testimonial_3");
            if($testimonial_slider_testimonial_3) {
                echo $testimonial_slider_testimonial_3['testimonial_slider_testimonial_content'];
            }
          ?>              
        </p>
        <p class="testimonials-slider__author">
          <?php
            $testimonial_slider_testimonial_3 = get_field("testimonial_slider_testimonial_3");
            if($testimonial_slider_testimonial_3) {
                echo $testimonial_slider_testimonial_3['testimonial_slider_testimonial_author'];
            }
          ?>
        </p>
    </div>                    
                          
  </div>
  <div class="swiper-pagination"></div>       
</section>