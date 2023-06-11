<?php
  $serviceCards = get_sub_field( 'service_card' );
?>
<section class="site-body service-cards">
  <h1 class="heading heading--brown heading--center">East Coast K9</h1>
  <div class="service-cards-group">
    <?php foreach($serviceCards as $serviceCard):?>
      <a 
        href="<?php echo $serviceCard['service_card_link'];?>" 
        class="single-service-card"
      >
        <img 
          class="single-service-card--image" 
          src="<?php echo $serviceCard['service_card_icon'];?>" 
          alt="<?php echo $serviceCard['service_card_icon_alt'];?>"
        />
        <h6><?php echo $serviceCard['service_card_heading'];?></h6>
      </a>
    <?php endforeach;?>
  </div>
</section>