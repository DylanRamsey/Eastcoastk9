<section class="home-form">
  <?php 
    $heading_size = get_sub_field('heading_size');  
    $contact_form_heading = get_sub_field('contact_form_heading');
    $contact_form_sub_heading = get_sub_field('contact_form_sub_heading');  
  ?>
  <?php if ($heading_size == 'Small') {
    $heading_size = 'heading--brown';
  }?>
  <?php if ($heading_size == 'Large') {
    $heading_size = 'heading--one';
  }?>      
    <h2 class="heading heading--center heading--brown <?php echo $heading_size;?>" id="form">
      <?php echo $contact_form_heading;?>
    </h2>        
    <h6 class="heading heading--center heading--brown">
      <?php echo $contact_form_sub_heading;?>
    </h6>         
    <div class="home-form__wrapper">          
      <?php echo apply_shortcodes( '[contact-form-7 id="21" title="Site Contact"]' ); ?>
    </div>
</section>