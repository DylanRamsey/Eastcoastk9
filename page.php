<?php get_header(); ?>

<?php if( have_rows('content_designer') ):?>
  <?php while(have_rows('content_designer')): the_row();?>
    <?php if (get_row_layout() == 'home_banner'):?>
      <?php get_template_part('components/home', 'banner');?>
    <?php endif;?>
    <?php if (get_row_layout() == 'page_heading'):?>
      <?php get_template_part('components/interior', 'heading');?>
    <?php endif;?>         
    <?php if (get_row_layout() == 'service_cards'):?>
      <?php get_template_part('components/service', 'cards');?>
    <?php endif;?>
    <?php if (get_row_layout() == 'service_row'):?>
      <?php get_template_part('components/service', 'row');?>
    <?php endif;?>        
    <?php if (get_row_layout() == 'introduction'):?>
      <?php get_template_part('components/introduction');?>
    <?php endif;?>
    <?php if (get_row_layout() == 'testimonials'):?>
      <?php get_template_part('components/testimonials');?>
    <?php endif;?>
    <?php if (get_row_layout() == 'picture_with_list'):?>
      <?php get_template_part('components/picture', 'list');?>
    <?php endif;?>
    <?php if (get_row_layout() == 'full_width_list'):?>
      <?php get_template_part('components/full', 'list');?>
    <?php endif;?>
    <?php if (get_row_layout() == 'simple_pricing_banner'):?>
      <?php get_template_part('components/simple', 'pricing');?>
    <?php endif;?>
    <?php if (get_row_layout() == 'advanced_pricing'):?>
      <?php get_template_part('components/advanced', 'pricing');?>
    <?php endif;?>
    <?php if (get_row_layout() == 'photo_cards'):?>
      <?php get_template_part('components/photo', 'gallery');?>
    <?php endif;?>
    <?php if (get_row_layout() == 'contact_form_and_data'):?>
      <?php get_template_part('components/contact', 'info');?>
    <?php endif;?>    
    <?php if (get_row_layout() == 'contact_form'):?>
      <?php get_template_part('components/contact', 'form');?>
    <?php endif;?>
  <?php endwhile;?>
<?php endif;?>
<?php get_footer(); ?>