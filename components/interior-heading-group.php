<section class="interior-page-heading interior-page-heading--brown">
  <h2>
    <?php 
      $interior_page_heading = get_field("interior_page_heading");
      if($interior_page_heading) {
          echo $interior_page_heading;
      } 
    ?>      
  </h2>
  <h5>
    <?php 
      $interior_page_subheading = get_field("interior_page_subheading");
      if($interior_page_subheading) {
        echo $interior_page_subheading;
      } 
    ?>
  </h5>
</section>