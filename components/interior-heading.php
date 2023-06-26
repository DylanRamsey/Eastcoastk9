<section class="site-body interior-page-heading interior-page-heading--brown">
  <?php
    $main_heading = get_sub_field('main_heading');
    $sub_heading = get_sub_field('sub_heading');
  ?>
  <h2 id="main-content">
    <?php echo $main_heading;?>
  </h2>
  <h5>
    <?php echo $sub_heading;?>
  </h5>
</section>