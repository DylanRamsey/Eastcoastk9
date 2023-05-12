<?php get_header(); ?>
<?php include "components/home-banner.php" ?>
<main class="site-body">
  <?php include "components/service-cards.php" ?>

  <!-- This is working below now, add rest of the fields, test repeat functionality, and then break out into the component file -->
  <?php if( have_rows('content_designer') ): ?>
    <?php while( have_rows('content_designer') ): the_row(); ?>

      <?php if (get_row_layout() == 'service_cards'):
        $serviceCards = get_sub_field( 'service_card' );
      ?>
        <?php foreach($serviceCards as $serviceCard):?>
          <h3>
            <?php echo $serviceCard['service_card_icon'];?>
          </h3>
        <?php endforeach;?>

      <?php endif;?>
        
    <?php endwhile;?>
  <?php endif;?>

  <?php include "components/introduction.php" ?>
  <?php include "components/testimonials.php" ?>
</main>
<section class="services">
  <?php include "components/service-row.php" ?>
  <?php include "components/service-row-reverse.php" ?>
  <?php include "components/second-service-row.php" ?>
</section>
<?php include "components/contact-form.php" ?>
<?php get_footer(); ?>
