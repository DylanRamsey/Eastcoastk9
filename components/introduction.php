<section class="introduction">
  <img 
    class="introduction__image" 
    src="
      <?php
        $home_introduction_image = get_field("home_introduction_image");
        if($home_introduction_image) {
          echo $home_introduction_image;
        }
      ?>
    " 
    alt="
      <?php
        $home_introduction_alt = get_field("home_introduction_alt");
        if($home_introduction_alt) {
          echo $home_introduction_alt;
        }
      ?>          
    "
  >
  <div class="introduction__copy">
    <h2 class="heading heading--brown">
      <?php
        $home_introduction_heading = get_field("home_introduction_heading");
        if($home_introduction_heading) {
          echo $home_introduction_heading;
        }
      ?>                
    </h2>
    <p>
      <?php
        $home_introduction_text = get_field("home_introduction_text");
        if($home_introduction_text) {
          echo $home_introduction_text;
        }
      ?>      
    </p>
    <a 
      class="button button--green" 
      href="
        <?php
          $home_introduction_link = get_field("home_introduction_link");
          if($home_introduction_link) {
            echo $home_introduction_link;
          }
        ?>               
      ">
      <?php
        $home_introduction_cta = get_field("home_introduction_cta");
        if($home_introduction_cta) {
          echo $home_introduction_cta;
        }
      ?>
    </a>
  </div>
</section>