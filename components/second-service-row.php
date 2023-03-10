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
    <div class="paw-print-trail">
      <img class="paw-print-trail__1" src="/wp-content/themes/eastcoastk9/assets/svgs/paw-print-light-brown.svg">
      <img class="paw-print-trail__2" src="/wp-content/themes/eastcoastk9/assets/svgs/paw-print-light-brown.svg">
      <img class="paw-print-trail__3" src="/wp-content/themes/eastcoastk9/assets/svgs/paw-print-light-brown.svg">
      <img class="paw-print-trail__4" src="/wp-content/themes/eastcoastk9/assets/svgs/paw-print-light-brown.svg">
      <img class="paw-print-trail__5" src="/wp-content/themes/eastcoastk9/assets/svgs/paw-print-light-brown.svg">
      <img class="paw-print-trail__6" src="/wp-content/themes/eastcoastk9/assets/svgs/paw-print-light-brown.svg">
    </div>        
  </div>
</div>