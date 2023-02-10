<?php /* Template Name: Training */ ?>
<?php get_header(); ?>
<div class="site-body">
  <?php include dirname(dirname(__FILE__))."/components/interior-heading-group.php" ?>
  <?php include dirname(dirname(__FILE__))."/components/picture-with-list.php" ?>
  <?php include dirname(dirname(__FILE__))."/components/full-width-list.php" ?>
</div>
<section class="services">
  <?php include dirname(dirname(__FILE__))."/components/service-row.php" ?>
</section>
<div class="site-body">
  <?php include dirname(dirname(__FILE__))."/components/simple-pricing-brown.php" ?>
  <?php include dirname(dirname(__FILE__))."/components/home-form.php" ?>
</div>
<!-- This is closing section tag from php get_header() function -->
</section>
<?php get_footer(); ?>