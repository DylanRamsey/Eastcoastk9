<section class="simple-pricing">
  <h2 class="heading heading--center heading--brown">
    <?php
      $simple_pricing_heading = get_field("simple_pricing_heading");
      if($simple_pricing_heading) {
        echo $simple_pricing_heading;
      }
    ?>
  </h2>
  <div class="pricing-disclaimer pricing-disclaimer--green">
    <h5>
      <?php
        $simple_pricing_text = get_field("simple_pricing_text");
        if($simple_pricing_text) {
          echo $simple_pricing_text;
        }
      ?>
    </h5>
  </div>
</section>