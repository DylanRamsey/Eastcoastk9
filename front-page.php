<?php
  get_header();
?>
    <div class="site-banner">
      <img 
        src="<?php
              $home_banner_image = get_field("home_banner_image");
              if($home_banner_image) {
                echo $home_banner_image;
              }
            ?>" 
        alt="<?php
              $home_banner_image_alt = get_field("home_banner_image_alt");
              if($home_banner_image_alt) {
                echo $home_banner_image_alt;
              }?>">
    </div>

    <main class="site-body">
      <section class="service-cards">
        <h1 class="heading heading--brown heading--center">East Coast K9</h1>
        <div class="service-cards-group">
          <a 
            href="
              <?php
                $service_card_1 = get_field("service_card_1");
                if($service_card_1) {
                    echo $service_card_1['service_card_1_link'];
                }
              ?>
            " 
            class="single-service-card"
          >
            <img 
              class="single-service-card--image" 
              src="
                <?php
                  $service_card_1 = get_field("service_card_1");
                  if($service_card_1) {
                      echo $service_card_1['service_card_1_icon'];
                  }
                ?>
              " 
              alt="
                <?php
                  $service_card_1 = get_field("service_card_1");
                  if($service_card_1) {
                      echo $service_card_1['service_card_1_icon_alt'];
                }?>
              "
            />
            <h6>
              <?php
                $service_card_1 = get_field("service_card_1");
                if($service_card_1) {
                    echo $service_card_1['service_card_1_heading'];
                }
              ?>                 
            </h6>
          </a>
          <a 
            href="
              <?php
                $service_card_2 = get_field("service_card_2");
                if($service_card_2) {
                    echo $service_card_2['service_card_2_link'];
                }
              ?>
            " 
            class="single-service-card"
          >
            <img 
              class="single-service-card--image" 
              src="
                <?php
                  $service_card_2 = get_field("service_card_2");
                  if($service_card_2) {
                      echo $service_card_2['service_card_2_icon'];
                  }
                ?>
              " 
              alt="
                <?php
                  $service_card_2 = get_field("service_card_2");
                  if($service_card_2) {
                      echo $service_card_2['service_card_2_icon_alt'];
                }?>
              "
            />
            <h6>
              <?php
                $service_card_2 = get_field("service_card_2");
                if($service_card_2) {
                    echo $service_card_2['service_card_2_heading'];
                }
              ?>                 
            </h6>
          </a>
          <a 
            class="single-service-card"
            href="
              <?php
                $service_card_3 = get_field("service_card_3");
                if($service_card_3) {
                    echo $service_card_3['service_card_3_link'];
                }
              ?>
            " 
          >
            <img 
              class="single-service-card--image" 
              src="
                <?php
                  $service_card_3 = get_field("service_card_3");
                  if($service_card_3) {
                      echo $service_card_3['service_card_3_icon'];
                  }
                ?>
              " 
              alt="
                <?php
                  $service_card_3 = get_field("service_card_3");
                  if($service_card_3) {
                      echo $service_card_3['service_card_3_icon_alt'];
                }?>
              "
            />
            <h6>
              <?php
                $service_card_3 = get_field("service_card_3");
                if($service_card_3) {
                    echo $service_card_3['service_card_3_heading'];
                }
              ?>                 
            </h6>
          </a>                
        </div>
      </section>
      <section class="introduction">
        <img 
          class="introduction__image" 
          src="
            <?php
              $home_introduction_image = get_field("home_introduction_image");
              if($home_introduction_image) {
                echo $home_introduction_image;
              }
            ?>
          " 
          alt="
            <?php
              $home_introduction_alt = get_field("home_introduction_alt");
              if($home_introduction_alt) {
                echo $home_introduction_alt;
              }
            ?>          
          "
        >
        <div class="introduction__copy">
          <h2 class="heading heading--brown">
            <?php
              $home_introduction_heading = get_field("home_introduction_heading");
              if($home_introduction_heading) {
                echo $home_introduction_heading;
              }
            ?>                
          </h2>
          <p>
            <?php
              $home_introduction_text = get_field("home_introduction_text");
              if($home_introduction_text) {
                echo $home_introduction_text;
              }
            ?>      
          </p>
          <a 
            class="button button--green" 
            href="
              <?php
                $home_introduction_link = get_field("home_introduction_link");
                if($home_introduction_link) {
                  echo $home_introduction_link;
                }
              ?>               
            ">
            <?php
              $home_introduction_cta = get_field("home_introduction_cta");
              if($home_introduction_cta) {
                echo $home_introduction_cta;
              }
            ?>
          </a>
        </div>
      </section>
      <section class="testimonials">
        <h2 class="heading heading--brown heading--center">
          <?php
            $testimonial_slider_heading = get_field("testimonial_slider_heading");
            if($testimonial_slider_heading) {
                echo $testimonial_slider_heading
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
    </main>
    <section class="services">
      <h2 class="heading heading--brown heading--center heading--tablet-up">Services</h2>
      <div class="service-row service-row--green" id="training">
        <img class="service-row service-row__image" src="/wp-content/uploads/homepage-training.webp" alt="Group of dogs walking across an 'a-frame'">
        <div class="service-row-copy">
          <h3 class="heading heading--brown">Training</h3>
          <p class="service-row-copy__body">
          Our board and train program only accepts a handful of students monthly and is custom tailored for his/her training needs. This ensures quality training and is the best foundation for success!
Examples of daily training sessions may include concepts of basic obedience as well as exercises to build confidence and socialization. High distraction environments such as local parks, coffee shops, and other public
spaces may be incorporated as needed.  
Please feel free to reach out with any questions you have! We are here to help educate you and want you and your dog to have a beautiful relationship for many years to come!
          </p>
          <a class="button button--brown" href="#form">Sign up now</a>
        </div>
      </div>
      <div class="service-row service-row--brown" id="lodging">
        <img class="service-row service-row__image service-row__image--reversed" src="/wp-content/uploads/kennels.webp" alt="Group of dogs walking across an 'a-frame'">
        <div class="service-row-copy service-row-copy--reversed service-row-copy--green">
          <h3 class="heading heading--secondary-green">Lodging</h3>
          <p class="service-row-copy__body">
          Our newly renovated boarding facility includes 4 x 6 suites, peaceful music, pet friendly and relaxing essential oils, and two yards for play and exercise.
Temperament evaluations are always completed to be sure each pet is safe to play in a group setting. Our goal is for all dogs in the play groups to have as much fun as possible
interacting with others of similar age and size.
In the warmer months we offer water zones to cool off so you can fully anticipate him/her getting down and dirty! All dogs go home bathed and cleaned if they enjoy the waterworks!
We love to keep you updated throughout your pet's stay so be prepared for pictures and text messages!

*we also offer more advanced grooming for boarding dogs. Please ask about that if you have any questions*
          </p>
          <a class="button button--green" href="#form">Book Now</a>
        </div>
      </div>
      <div class="service-row service-row--green" id="spa">
        <img class="service-row service-row__image" src="/wp-content/uploads/spa-pup.jpeg" alt="Group of dogs walking across an 'a-frame'">
        <div class="service-row-copy">
          <h3 class="heading heading--brown">Spa Services</h3>
          <p class="service-row-copy__body">
            Give your pup a spa day! We offer two different spa servies, Standard and Deluxe. Standard includes the bath, blow drying, nail trimming, and ears cleaning. Deluxe
            includes Deshedding shampoo and conditioner, nails clipper and filed, ears cleaning, and anal glandes
          </p>
          <a class="button button--brown" href="#form">Sign up now</a>
        </div>
      </div>       
    </section>
  
    <section class="home-form">
      <h2 class="heading heading--center heading--one heading--brown" id="form">Get Started Today!</h2>
      <?php echo apply_shortcodes( '[contact-form-7 id="21" title="Site Contact"]' ); ?>
    </section>
    <?php
      get_footer();
    ?>
</body>
</html>