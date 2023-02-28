<?php /* Template Name: spa */ ?>
<?php get_header(); ?>
<div class="site-body">
  <?php include dirname(dirname(__FILE__))."/components/interior-heading-group.php" ?>
  <?php include dirname(dirname(__FILE__))."/components/picture-with-list-reversed.php" ?>
</div>
<section class="services">
  <?php include dirname(dirname(__FILE__))."/components/service-row.php" ?>
</section>
<div class="site-body">
  <?php include dirname(dirname(__FILE__))."/components/advanced-pricing.php" ?>

  
  <?php include dirname(dirname(__FILE__))."/components/contact-form.php" ?>
</div>
<?php get_footer(); ?>