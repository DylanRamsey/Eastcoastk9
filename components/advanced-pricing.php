
<section class="advanced-pricing">
<?php if( have_rows('content_designer') ): ?>
    <?php while( have_rows('content_designer') ): the_row(); ?>
      <?php if (get_row_layout() == 'advanced_pricing'):
        $advanced_pricing_heading = get_sub_field('advanced_pricing_heading');
        $advanced_pricing_sub_heading = get_sub_field('advanced_pricing_sub_heading');
        $advanced_pricing_disclaimer = get_sub_field('advanced_pricing_disclaimer');
        $pricing_group = get_sub_field('pricing_group');
        $tab_counter = 0;
        $group_counter = 0;
      ?>
        <h2 class="heading heading--brown heading--center">
          <?php echo $advanced_pricing_heading;?>
        </h2>
        <h6 class="heading heading--brown heading--center">
        <?php echo $advanced_pricing_sub_heading;?>
        </h6>
        <div class="tabs">
          <div class="tab-group" role="tablist" aria-labelledby="tablist-1">
            <?php foreach($pricing_group as $single_pricing_group):
              $tab_counter++;    
            ?>
              <button 
                class="tab-group__link" 
                id="tab-<?php echo $tab_counter; ?>" 
                type="button" 
                role="tab" 
                aria-selected="true" 
                aria-controls="tabpanel-<?php echo $tab_counter;?>"
              >
                <span class="focus">
                  <?php echo $single_pricing_group['group_name'];?>                  
                </span>
              </button>
            <?php endforeach;?> 
          </div>
          <?php foreach($pricing_group as $single_pricing_group): 
            $group_counter++; 
          ?>
            <div id="tabpanel-<?php echo $group_counter;?>" role="tabpanel" aria-labelledby="tab-<?php echo $tab_counter;?>">
              <div class="tab-content">
                
                  <div class="tab-content__card tab-content__card--standard">
                    <div class="pricing-heading">
                      <h5>Standard</h5>
                      <h3>
                        $<?php echo $single_pricing_group['standard_price'];?>  
                      </h3>
                    </div>
                    <p class="tab-content__disclaimer">Includes</p>
                    <ul class="paw-print-list">
                      <?php foreach($single_pricing_group['standard_features'] as $single_feature): ?>
                        <li>
                          <?php echo $single_feature['standard_feature'];?> 
                        </li>
                      <?php endforeach;?>
                    </ul>
                    <a class="button button--green" href="/spa#form">
                      Sign up now      
                    </a>      
                  </div>
                  <div class="tab-content__card tab-content__card--deluxe">
                    <div class="pricing-heading">
                      <h5>Deluxe</h5>
                      <h3>
                        $<?php echo $single_pricing_group['deluxe_price'];?>             
                      </h3>
                    </div>
                    <p class="tab-content__disclaimer">Includes everything in Standard plus</p>
                    <ul class="paw-print-list">
                      <?php foreach($single_pricing_group['deluxe_features'] as $single_feature): ?>
                        <li>
                          <?php echo $single_feature['deluxe_feature'];?> 
                        </li>   
                      <?php endforeach;?>
                    </ul>
                    <a class="button button--brown" href="/spa#form">
                      Sign up now      
                    </a>              
                  </div>
                
              </div>
            </div>
            <?php endforeach;?> 
          </div>            
        <p class="advanced-pricing__disclaimer">Prices shown are regular prices, prices are subject to adjust based on dog behavior and breed. Please feel free to contact us and tell us all about your dog for a closer estimate.</p>
      <?php endif;?>
    <?php endwhile;?>
  <?php endif;?>  
</section>