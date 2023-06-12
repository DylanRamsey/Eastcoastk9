<section class="site-body simple-pricing">
  <?php
    $simple_pricing_style = get_sub_field('simple_pricing_style');          
    $simple_pricing_heading = get_sub_field('simple_pricing_heading');
    $simple_pricing_text = get_sub_field('simple_pricing_text');          
  ?>
  <?php if ($simple_pricing_style == 'Brown') {
    $pricing_disclaimer_color = 'pricing-disclaimer--brown';
  }
  ?>
  <?php if ($simple_pricing_style == 'Green') {
    $pricing_disclaimer_color = 'pricing-disclaimer--green';
  }
  ?>              
    <h2 class="heading heading--center heading--brown">
      <?php echo $simple_pricing_heading;?>
    </h2>
    <div class="pricing-disclaimer <?php echo $pricing_disclaimer_color;?>">
      <h5>
        <?php echo $simple_pricing_text;?>
      </h5>
    </div>
</section>