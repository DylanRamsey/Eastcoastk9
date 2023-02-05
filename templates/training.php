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


    <section class="picture-with-list">
      <img class="picture-with-list__image" src="/wp-content/uploads/dogs-sitting-for-their-handlers.webp" alt="Row of dogs sitting for their handlers">
      <div class="picture-with-list__content">
        <h3 class="heading heading--brown">Free Consultation!</h3>
        <ul class="paw-print-list">
          <li>Length: 2-4 weeks</li>
          <li>4 follow up private lessons</li>
          <li>Complimentary bath and nail trim at the end of the program</li>
        </ul>
        <a 
          class="button button--green" 
          href="/#form">
            Sign up now
        </a>          
      </div>
    </section>

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
    <div class="service-row service-row--single service-row--brown" id="lodging">
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