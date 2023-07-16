<?php
  $serviceCardHeading = get_sub_field('service_card_heading');
  $serviceCards = get_sub_field('service_card');
  $serviceCardLayout = get_sub_field('service_card_layout');

?>

<?php if($serviceCardLayout == '2 Column') {
    $serviceCardLayoutClass = 'service-cards-group--two-col';
  }
?>
<?php if($serviceCardLayout == '3 Column') {
    $serviceCardLayoutClass = 'service-cards-group--three-col';
  }
?>
<?php if($serviceCardLayout == '5 Column') {
    $serviceCardLayoutClass = 'service-cards-group--five-col';
  }
?>

<section class="site-body service-cards">
  <h1 class="heading heading--brown heading--center">
    <?php echo $serviceCardHeading ?>
  </h1>
  <div class="service-cards-group <?= $serviceCardLayoutClass ?>">
    <?php foreach($serviceCards as $serviceCard):?>
      <a 
        href="<?php echo $serviceCard['service_card_link'];?>" 
        class="single-service-card"
      >
        <img 
          class="single-service-card__image" 
          src="<?php echo $serviceCard['service_card_icon'];?>" 
          alt="<?php echo $serviceCard['service_card_icon_alt'];?>"
        />
        <h6 class="single-service-card__heading">
          <?php echo $serviceCard['service_card_heading'];?>
        </h6>
      </a>
    <?php endforeach;?>
  </div>
</section>