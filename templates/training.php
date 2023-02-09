<?php /* Template Name: Training */ ?>
<?php get_header(); ?>
  <div class="site-body">
    <?php /*
        $interior_page_heading = get_field("interior_page_heading");
        if($interior_page_heading) {
            echo $interior_page_heading;
        } */
    ?>

    <section class="interior-page-heading interior-page-heading--brown">
      <h2>Doggie <span class="interior-page-heading--green">Bootcamp</span></h2>
      <h5>Off Leash Board & Train Program</h5>
    </section>

    <?php include dirname(dirname(__FILE__))."/components/picture-with-list.php" ?>
    


    
    <section class="full-width-list">
      <h2 class="heading heading--one heading--brown heading--center">Commands Learned</h2>
      <ul class="paw-print-list">
        <li>Sit</li>
        <li>Down</li>
        <li>Rapid recall/ Come</li>
        <li>Heel: Walks loosely on leash</li>
        <li>Place: Stays on a mat/dog bed until released</li>
        <li>Free: Release word</li>
        <li>Off: Stopping of an unwanted behavior</li>
        <li>Load up: Either into a kennel or a vehicle</li>
      </ul>      
    </section>
  </div>
  <section class="services">
    <div class="service-row service-row--green service-row--single" id="training">
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
  </section>
  <div class="site-body">
    <section class="simple-pricing">
      <h2 class="heading heading--center heading--brown">Pricing</h2>
      <div class="pricing-disclaimer pricing-disclaimer--brown">
        <h5>
          Prices for training bootcamp ranges between $1,500-$2,300. Call 941-374-7161 for exact pricing. Pricing is determined during first welcome call when we get to know your pet and determine their personal needs and what we'd need to 
          provide to give your pet their best possible experience.
        </h5>
      </div>
    </section>
    
    <section class="home-form">
    <h2 class="heading heading--center heading--one heading--brown" id="form">Contact Us for More Information</h2>
    <div class="home-form__wrapper">
      <?php echo apply_shortcodes( '[contact-form-7 id="21" title="Site Contact"]' ); ?>
    </div>
    </section>   
  </div>   
<!-- This is closing section tag from php get_header() function -->
</section>
<?php get_footer(); ?>