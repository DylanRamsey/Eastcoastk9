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