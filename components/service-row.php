
<?php if( have_rows('content_designer') ): ?>
  <?php while( have_rows('content_designer') ): the_row(); ?>
    <?php if (get_row_layout() == 'service_row'):
      $service_row_style = get_sub_field('service_row_style');
      $service_row_main_heading = get_sub_field('service_row_main_heading');
      $service_heading = get_sub_field('service_heading');
      $service_row_image = get_sub_field('service_row_image');
      $service_row_image_alt = get_sub_field('service_row_image_alt');
      $service_row_text = get_sub_field('service_row_text');
      $service_row_button_text = get_sub_field('service_row_button_text');
      $service_row_button_link = get_sub_field('service_row_button_link');
    ?>
    <?php if ($service_row_style == 'Style 1') {
      $heading_color = 'heading--brown';
      $service_row_color = 'service-row--green';
      $service_row_button_color = 'button--brown';
    }
    ?>
      <h2 class="heading heading--brown heading--center heading--tablet-up">
        <?php echo $service_row_main_heading; ?>
      </h2>
      <div class="service-row <?php echo $service_row_color;?>" id="training">
        <img 
          class="service-row service-row__image" 
          src="<?php echo $service_row_image;?>"           
          alt="<?php echo $service_row_image_alt;?>">
        <div class="service-row-copy">
          <h3 class="heading <?php echo $heading_color;?>">
            <?php echo $service_heading; ?>
          </h3>
          <p class="service-row-copy__body">
            <?php echo $service_row_text; ?>
          </p>
          <a 
            class="button <?php echo $service_row_button_color;?>" 
            href="<?php echo $service_row_button_link;?>">
              <?php echo $service_row_button_text;?>
          </a>
          <div class="paw-print-trail">
            <img class="paw-print-trail__1" src="/wp-content/themes/eastcoastk9/assets/svgs/paw-print-light-brown.svg">
            <img class="paw-print-trail__2" src="/wp-content/themes/eastcoastk9/assets/svgs/paw-print-light-brown.svg">
            <img class="paw-print-trail__3" src="/wp-content/themes/eastcoastk9/assets/svgs/paw-print-light-brown.svg">
            <img class="paw-print-trail__4" src="/wp-content/themes/eastcoastk9/assets/svgs/paw-print-light-brown.svg">
            <img class="paw-print-trail__5" src="/wp-content/themes/eastcoastk9/assets/svgs/paw-print-light-brown.svg">
            <img class="paw-print-trail__6" src="/wp-content/themes/eastcoastk9/assets/svgs/paw-print-light-brown.svg">
          </div>
        </div>
      </div>
    <?php endif;?>
  <?php endwhile;?>
<?php endif;?>