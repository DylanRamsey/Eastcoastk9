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