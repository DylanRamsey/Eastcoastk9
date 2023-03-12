<div class="site-banner">
  <img class="site-banner__emblem" src="/wp-content/uploads/2022/12/ECK-logo-e1674105395468.webp" alt="">
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