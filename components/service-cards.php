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