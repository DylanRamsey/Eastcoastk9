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
    </main>
    <section class="services">
      <h2 class="heading heading--brown heading--center heading--tablet-up">
        <?php
          $service_row_main_heading = get_field("service_row_main_heading");
          if($service_row_main_heading) {
              echo $service_row_main_heading;
          }
        ?>
      </h2>
      <div class="service-row service-row--green" id="training">
        <img 
          class="service-row service-row__image" 
          src=
          "
            <?php
              $service_row_image = get_field("service_row_image");
              if($service_row_image) {
                  echo $service_row_image;
              }
            ?>
          "           
          alt="
            <?php
              $service_row_image_alt = get_field("service_row_image_alt");
              if($service_row_image_alt) {
                  echo $service_row_image_alt;
              }
            ?>     
          ">
        <div class="service-row-copy">
          <h3 class="heading heading--brown">
            <?php
              $service_row_heading = get_field("service_row_heading");
              if($service_row_heading) {
                  echo $service_row_heading;
              }
            ?>            
          </h3>
          <p class="service-row-copy__body">
            <?php
              $service_row_body = get_field("service_row_body");
              if($service_row_body) {
                  echo $service_row_body;
              }
            ?> 
          </p>
          <a 
            class="button button--brown" 
            href="
              <?php
                $cta_link = get_field("cta_link");
                if($cta_link) {
                    echo $cta_link;
                }
              ?>             
            ">
              <?php
                $cta_text = get_field("cta_text");
                if($cta_link) {
                    echo $cta_text;
                }
              ?>              
          </a>
        </div>
      </div>
      <div class="service-row service-row--brown" id="lodging">
        <img 
          class="service-row service-row__image service-row__image--reversed" 
          src=
          "
            <?php
              $service_row_image_rev = get_field("service_row_image_rev");
              if($service_row_image_rev) {
                  echo $service_row_image_rev;
              }
            ?>
          "           
          alt="
            <?php
              $service_row_image_alt_rev = get_field("service_row_image_alt_rev");
              if($service_row_image_alt_rev) {
                  echo $service_row_image_alt_rev;
              }
            ?>     
          ">        
        <div class="service-row-copy service-row-copy--reversed service-row-copy--green">
          <h3 class="heading heading--secondary-green">
          <?php
              $service_row_heading_rev = get_field("service_row_heading_rev");
              if($service_row_heading_rev) {
                  echo $service_row_heading_rev;
              }
            ?>             
          </h3>
          <p class="service-row-copy__body">
            <?php
              $service_row_body_rev = get_field("service_row_body_rev");
              if($service_row_body_rev) {
                  echo $service_row_body_rev;
              }
            ?> 
          </p>
          <a class="button button--green"
          href="
              <?php
                $cta_link_rev = get_field("cta_link_rev");
                if($cta_link_rev) {
                    echo $cta_link_rev;
                }
              ?>             
            ">
              <?php
                $cta_text_rev = get_field("cta_text_rev");
                if($cta_link_rev) {
                    echo $cta_text_rev;
                }
              ?>              
          </a>          
        </div>
      </div>
      <div class="service-row service-row--green" id="training">
        <img 
          class="service-row service-row__image" 
          src=
          "
            <?php
              $service_row_image_2 = get_field("service_row_image_2");
              if($service_row_image_2) {
                  echo $service_row_image_2;
              }
            ?>
          "           
          alt="
            <?php
              $service_row_image_alt_2 = get_field("service_row_image_alt_2");
              if($service_row_image_alt_2) {
                  echo $service_row_image_alt_2;
              }
            ?>     
          ">
        <div class="service-row-copy">
          <h3 class="heading heading--brown">
            <?php
              $service_row_heading_2 = get_field("service_row_heading_2");
              if($service_row_heading_2) {
                  echo $service_row_heading_2;
              }
            ?>            
          </h3>
          <p class="service-row-copy__body">
            <?php
              $service_row_body_2 = get_field("service_row_body_2");
              if($service_row_body_2) {
                  echo $service_row_body_2;
              }
            ?> 
          </p>
          <a 
            class="button button--brown" 
            href="
              <?php
                $cta_link_2 = get_field("cta_link_2");
                if($cta_link_2) {
                    echo $cta_link_2;
                }
              ?>             
            ">
              <?php
                $cta_text_2 = get_field("cta_text_2");
                if($cta_link_2) {
                    echo $cta_text_2;
                }
              ?>
          </a>
        </div>
      </div>
    </section>
    <section class="home-form">
      <h2 class="heading heading--center heading--one heading--brown" id="form">Get Started Today!</h2>
      <div class="home-form__wrapper">
        <?php echo apply_shortcodes( '[contact-form-7 id="21" title="Site Contact"]' ); ?>
      </div>
    </section>
    <?php
      get_footer();
    ?>
</body>
</html>