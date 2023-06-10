<section class="photo-gallery">
<?php if( have_rows('content_designer') ): ?>
    <?php while( have_rows('content_designer') ): the_row(); ?>
      <?php if (get_row_layout() == 'photo_cards'): 
        $photo_card_group = get_sub_field('photo_card_group');
        $img_counter = 1;
      ?>  
        <!-- Photo Group 1 -->
        <?php foreach($photo_card_group as $single_photo_card_group): ?>
          <div class="photo-gallery__group">
            <h4 class="heading heading__photo-gallery heading--brown">
              <?php echo $single_photo_card_group['photo_card_group_heading'];?>   
            </h4>

            <!-- Photo One -->
            <?php foreach($single_photo_card_group['photo_cards'] as $single_photo_card):?>               
              
              
              <a data-fslightbox 
                href="<?php echo $single_photo_card['photo_card'];?>"
                class="photo-gallery__photo photo-gallery__photo--<?php echo $img_counter; ?> "
              >
                <img 
                  src="<?php echo $single_photo_card['photo_card'];?> " 
                  alt="<?php echo $single_photo_card['photo_card_alt_text'];?>">
              </a>
              <?php $img_counter++;?>   
              <?php if ($img_counter > 6):
                $img_counter = 1;
              ?> 
              <?php endif;?>          
            <?php endforeach;?> 
          </div>
        <?php endforeach;?> 
      <?php endif;?>
    <?php endwhile;?>
  <?php endif;?>    
</section>