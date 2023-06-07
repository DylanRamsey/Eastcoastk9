<?php /* Template Name: lodging */ ?>
<?php get_header(); ?>
<div class="site-body">
  <?php include dirname(dirname(__FILE__))."/components/interior-heading-group.php" ?>
  <?php include dirname(dirname(__FILE__))."/components/picture-with-list.php" ?>
</div>
<section class="services">
  <?php include dirname(dirname(__FILE__))."/components/service-row.php" ?>
</section>
<div class="site-body">
  <?php include dirname(dirname(__FILE__))."/components/simple-pricing.php" ?>
  <?php include dirname(dirname(__FILE__))."/components/contact-form.php" ?>
</div>
<!-- This is closing section tag from php get_header() function -->
</section>
<?php get_footer(); ?>