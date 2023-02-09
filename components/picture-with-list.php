<section class="picture-with-list">
  <img 
    class="picture-with-list__image" 
    src="
      <?php
        $picture_with_list_image = get_field("picture_with_list_image");
        if($picture_with_list_image) {
          echo $picture_with_list_image;
        }
      ?>
    " 
    alt="
      <?php
        $picture_with_list_image_alt = get_field("picture_with_list_image_alt");
        if($picture_with_list_image_alt) {
          echo $picture_with_list_image_alt;
        }
      ?>    
    "
  >
  <div class="picture-with-list__content">
    <h3 class="heading heading--brown">
      <?php
        $picture_with_list_heading = get_field("picture_with_list_heading");
        if($picture_with_list_heading) {
          echo $picture_with_list_heading;
        }
      ?>      
    </h3>
    <ul class="paw-print-list">
      <?php
        $picture_with_list_image_list_item_1 = get_field("picture_with_list_image_list_item_1");
        if($picture_with_list_image_list_item_1) {
          echo '<li>' . $picture_with_list_image_list_item_1 . '</li>';
        }
      ?>
      <?php
        $picture_with_list_image_list_item_2 = get_field("picture_with_list_image_list_item_2");
        if($picture_with_list_image_list_item_2) {
          echo '<li>' . $picture_with_list_image_list_item_2 . '</li>';
        }
      ?>
      <?php
        $picture_with_list_image_list_item_3 = get_field("picture_with_list_image_list_item_3");
        if($picture_with_list_image_list_item_3) {
          echo '<li>' . $picture_with_list_image_list_item_3 . '</li>';
        }
      ?>
      <?php
        $picture_with_list_image_list_item_4 = get_field("picture_with_list_image_list_item_4");
        if($picture_with_list_image_list_item_4) {
          echo '<li>' . $picture_with_list_image_list_item_4 . '</li>';
        }
      ?>               
    </ul>
    <a 
      class="button button--green" 
      href="
        <?php
          $picture_with_list_image_link = get_field("picture_with_list_image_link");
          if($picture_with_list_image_link) {
            echo $picture_with_list_image_link;
          }
        ?>        
      ">
      <?php
        $picture_with_list_button_text = get_field("picture_with_list_button_text");
        if($picture_with_list_button_text) {
          echo $picture_with_list_button_text;
        }
      ?>        
    </a>          
  </div>
</section>