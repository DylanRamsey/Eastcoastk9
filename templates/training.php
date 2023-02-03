<?php /* Template Name: Training */ ?>
<?php get_header(); ?>

    <div class="site-body">
      <?php /*
          $interior_page_heading = get_field("interior_page_heading");
          if($interior_page_heading) {
              echo $interior_page_heading;
          } */
      ?>

      <div class="interior-page-heading interior-page-heading--brown">
        <h2>Doggie <span class="interior-page-heading--green">Bootcamp</span></h2>
        <h5>Off Leash Board & Train Program</h5>
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
    </div>
</section>

<?php get_footer(); ?>