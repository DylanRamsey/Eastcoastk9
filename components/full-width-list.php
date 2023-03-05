<section class="full-width-list">
  <h2 class="heading heading--one heading--brown heading--center">
    <?php
      $full_width_list_heading = get_field("full_width_list_heading");
      if($full_width_list_heading) {
        echo $full_width_list_heading;
      }
    ?>    
  </h2>
  <div class="full-width-list__paw-print-list-container">
    <ul class="paw-print-list">
      <?php /* This is where it would have been great to have that repeating field functionality for free 🤷‍♂️ */ ?>
      <?php
        $full_width_list_item_1 = get_field("full_width_list_item_1");
        if($full_width_list_item_1) {
          echo '<li>' . $full_width_list_item_1 . '</li>';
        }
      ?>
      <?php
        $full_width_list_item_2 = get_field("full_width_list_item_2");
        if($picture_with_list_image_list_item_2) {
          echo '<li>' . $picture_with_list_image_list_item_2 . '</li>';
        }
      ?>
      <?php
        $full_width_list_item_3 = get_field("full_width_list_item_3");
        if($picture_with_list_image_list_item_3) {
          echo '<li>' . $picture_with_list_image_list_item_3 . '</li>';
        }
      ?>
      <?php
        $full_width_list_item_4 = get_field("full_width_list_item_4");
        if($full_width_list_item_4) {
          echo '<li>' . $full_width_list_item_4 . '</li>';
        }
      ?>
    </ul>
    <ul class="paw-print-list">
      <?php
        $full_width_list_item_5 = get_field("full_width_list_item_5");
        if($full_width_list_item_5) {
          echo '<li>' . $full_width_list_item_5 . '</li>';
        }
      ?>
      <?php
        $full_width_list_item_6 = get_field("full_width_list_item_6");
        if($full_width_list_item_6) {
          echo '<li>' . $full_width_list_item_6 . '</li>';
        }
      ?>       
      <?php
        $full_width_list_item_7 = get_field("full_width_list_item_7");
        if($full_width_list_item_7) {
          echo '<li>' . $full_width_list_item_7 . '</li>';
        }
      ?>
      <?php
        $full_width_list_item_8 = get_field("full_width_list_item_8");
        if($full_width_list_item_8) {
          echo '<li>' . $full_width_list_item_8 . '</li>';
        }
      ?>
    </ul>
  </div>                
   
</section>