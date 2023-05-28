<section class="interior-page-heading interior-page-heading--brown">
  <?php if( have_rows('content_designer') ): ?>
    <?php while( have_rows('content_designer') ): the_row(); ?>
      <?php if (get_row_layout() == 'page_heading'):
        $main_heading = get_sub_field('main_heading');
        $sub_heading = get_sub_field('sub_heading');
      ?>
      <h2>
        <?php echo $main_heading;?>
      </h2>
      <h5>
        <?php echo $sub_heading;?>
      </h5>
      <?php endif;?>
    <?php endwhile;?>
  <?php endif;?>      
</section>