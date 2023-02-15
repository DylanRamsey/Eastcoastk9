<div class="site-banner">
  <img 
    src="
      <?php
        $home_banner_image = get_field("home_banner_image");
        if($home_banner_image) {
          echo $home_banner_image;
        }
      ?>
    " 
    alt="
      <?php
        $home_banner_image_alt = get_field("home_banner_image_alt");
        if($home_banner_image_alt) {
          echo $home_banner_image_alt;
      }?>
  ">
</div>