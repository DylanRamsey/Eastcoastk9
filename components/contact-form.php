<section class="home-form">
  <h2 class="heading heading--center heading--one heading--brown" id="form">
    <?php
      $contact_form_home_page_heading = get_field("contact_form_home_page_heading");
      if($contact_form_home_page_heading) {
          echo $contact_form_home_page_heading;
      }
    ?>    
  </h2>

  <h3 class="heading heading--center heading--brown" id="form">
    <?php
      $contact_form_interior_page_heading = get_field("contact_form_interior_page_heading");
      if($contact_form_interior_page_heading) {
          echo $contact_form_interior_page_heading;
      }
    ?>  
  </h3>

  <h6 class="heading heading--center heading--brown">
    <?php
      $contact_form_subheading = get_field("contact_form_subheading");
      if($contact_form_subheading) {
          echo $contact_form_subheading;
      }
    ?>      
  </h6>


  <?php if( have_rows('content_designer') ): ?>
    <?php while( have_rows('content_designer') ): the_row(); ?>
      <?php if (get_row_layout() == 'contact_form'):  ?>   
        <div class="home-form__wrapper">
          <?php echo apply_shortcodes( '[contact-form-7 id="21" title="Site Contact"]' ); ?>
        </div>
      <?php endif;?>
    <?php endwhile;?>
  <?php endif;?>            
</section>