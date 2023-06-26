<?php 
  $home_banner_logo = get_sub_field( 'home_banner_logo' );
  $home_banner_logo_alt = get_sub_field( 'home_banner_logo_alt' );
  $home_banner_image = get_sub_field( 'home_banner_image' );
  $home_banner_image_alt = get_sub_field( 'home_banner_image_alt' );
?>

<div class="site-banner" id="main-content">
  <img 
    class="site-banner__emblem" 
    src="<?php echo $home_banner_logo;?>" 
    alt="<?php echo $home_banner_logo_alt;?>"
  >
  <img 
    src="<?php echo $home_banner_image;?>" 
    alt="<?php echo $home_banner_image_alt;?>"
  >
</div>