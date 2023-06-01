<section class="picture-with-list">
<?php if( have_rows('content_designer') ): ?>
    <?php while( have_rows('content_designer') ): the_row(); ?>
      <?php if (get_row_layout() == 'picture_with_list'):
        $flip_component = get_sub_field('flip_component');
        $picture_with_list_image = get_sub_field('picture_with_list_image');
        $picture_with_list_image_alt = get_sub_field('picture_with_list_image_alt');
        $picture_with_list_heading = get_sub_field('picture_with_list_heading');
        $picture_with_list_button_text = get_sub_field('picture_with_list_button_text');
        $picture_with_list_button_link = get_sub_field('picture_with_list_button_link');
        $picture_with_list_items  = get_sub_field('picture_with_list_items');
      ?>
      <?php if ($flip_component == 'Normal') {
        $flip_component_img_class = '';
        $flip_component_content_class = '';
      }
      ?>
      <?php if ($flip_component == 'Flipped') {
        $flip_component_img_class = 'picture-with-list__image--flipped';
        $flip_component_content_class = 'picture-with-list__content--flipped';
      } 
      ?>      
        <img 
          class="picture-with-list__image <?php echo $flip_component_img_class;?>" 
          src="<?php echo $picture_with_list_image;?>" 
          alt="<?php echo $picture_with_list_image_alt;?>"
        >
        <div class="picture-with-list__content <?php echo $flip_component_content_class;?>">
          <h3 class="heading heading--brown">
            <?php echo $picture_with_list_heading;?>   
          </h3>
          <ul class="paw-print-list">  
          <?php foreach($picture_with_list_items as $picture_with_list_item):?>
              <li>
                <?php echo $picture_with_list_item['picture_with_list_single_item'];?>
              </li>
          <?php endforeach;?>               
          </ul>
          <a 
            class="button button--green" 
            href="<?php echo $picture_with_list_button_link;?>">
            <?php echo $picture_with_list_button_text;?>
          </a>    
        </div>
       <?php endif;?>
    <?php endwhile;?>
  <?php endif;?>     
</section>