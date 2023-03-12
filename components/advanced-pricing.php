<?php 
/* 
This isn't great. Email me if there's a free alternative to ACF with repeating fields and I'll use it on my next project
Also it should be sorta broken, but it looks like it's not. Maybe ACF is fixing it for me. Maybe ACF is actually awesome. IDK but I'll see to fix.
*/ ?>

<section class="advanced-pricing">
  <h2 class="heading heading--brown heading--center">Pricing</h2>
  <h6 class="heading heading--brown heading--center">Please Select your dog's size for pricing</h6>
  <div class="tabs">
    <div class="tab-group"role="tablist" aria-labelledby="tablist-1">
      <button class="tab-group__link" id="tab-1" type="button" role="tab" aria-selected="true" aria-controls="tabpanel-1">
        <span class="focus">Small Short Coat</span>
      </button>
      <button class="tab-group__link" id="tab-2" type="button" role="tab" aria-selected="false" aria-controls="tabpanel-2" tabindex="-1">
        <span class="focus">Small Long Coat</span>
      </button>
      <button class="tab-group__link" id="tab-3" type="button" role="tab" aria-selected="false" aria-controls="tabpanel-3" tabindex="-1">
        <span class="focus">Medium Short Coat</span>
      </button>
      <button class="tab-group__link" id="tab-4" type="button" role="tab" aria-selected="false" aria-controls="tabpanel-4" tabindex="-1">
        <span class="focus">Medium Long Coat</span>
      </button>
      <button class="tab-group__link" id="tab-5" type="button" role="tab" aria-selected="false" aria-controls="tabpanel-5" tabindex="-1">
        <span class="focus">Large Short Coat</span>
      </button>
      <button class="tab-group__link" id="tab-6" type="button" role="tab" aria-selected="false" aria-controls="tabpanel-6" tabindex="-1">
        <span class="focus">Large Long Coat</span>
      </button>
      <button class="tab-group__link" id="tab-7" type="button" role="tab" aria-selected="false" aria-controls="tabpanel-7" tabindex="-1">
        <span class="focus">XL Short Coat</span>
      </button>
      <button class="tab-group__link" id="tab-8" type="button" role="tab" aria-selected="false" aria-controls="tabpanel-8" tabindex="-1">
        <span>XL Long Coat</span>
      </button>    
    </div>
    <div id="tabpanel-1" role="tabpanel" aria-labelledby="tab-1">
      <div class="tab-content">
        <div class="tab-content__card tab-content__card--standard">
          <div class="pricing-heading">
            <h5>Standard Bath</h5>
            <h3>
              <?php
                $service_price = get_field("small_short_coat");
                if($service_price) {
                    echo $service_price['service_price'];
                }
              ?>
            </h3>
          </div>
          <ul class="paw-print-list">
            <li>
              <?php
                $small_short_coat = get_field("small_short_coat");
                if($small_short_coat) {
                    echo $small_short_coat['service_1'];
                }
              ?>
            </li>
            <li>
              <?php
                $small_short_coat = get_field("small_short_coat");
                if($small_short_coat) {
                    echo $small_short_coat['service_2'];
                }
              ?>              
            </li>
            <li>
              <?php
                $small_short_coat = get_field("small_short_coat");
                if($small_short_coat) {
                    echo $small_short_coat['service_3'];
                }
              ?>    
            </li>
            <li>
              <?php
                $small_short_coat = get_field("small_short_coat");
                if($small_short_coat) {
                    echo $small_short_coat['service_4'];
                }
              ?>    
            </li>
          </ul>
          <a class="button button--green" href="/spa#form">
            Sign up now      
          </a>      
        </div>
        <div class="tab-content__card tab-content__card--deluxe">
          <div class="pricing-heading">
            <h5>Deluxe Bath</h5>
            <h3>
              <?php
                $service_price = get_field("small_short_coat");
                if($service_price) {
                    echo $service_price['deluxe_price'];
                }
              ?>              
            </h3>
          </div>
          <ul class="paw-print-list">
            <li>
              <?php
                $small_short_coat = get_field("small_short_coat");
                if($small_short_coat) {
                    echo $small_short_coat['deluxe_service_1'];
                }
              ?>                 
            </li>
            <li>
              <?php
                $small_short_coat = get_field("small_short_coat");
                if($small_short_coat) {
                    echo $small_short_coat['deluxe_service_2'];
                }
              ?>                
            </li>
            <li>
              <?php
                $small_short_coat = get_field("small_short_coat");
                if($small_short_coat) {
                    echo $small_short_coat['deluxe_service_3'];
                }
              ?>                
            </li>
            <li>
              <?php
                $small_short_coat = get_field("small_short_coat");
                if($small_short_coat) {
                    echo $small_short_coat['deluxe_service_4'];
                }
              ?>               
            </li>
          </ul>
          <a class="button button--brown" href="/spa#form">
            Sign up now      
          </a>              
        </div>
      </div>
    </div>
    <div id="tabpanel-2" role="tabpanel" aria-labelledby="tab-2" class="is-hidden">
      <div class="tab-content">
        <div class="tab-content__card tab-content__card--standard">
          <div class="pricing-heading">
            <h5>Standard Bath</h5>
            <h3>
              <?php
                $service_price = get_field("small_long_coat");
                if($service_price) {
                    echo $service_price['service_price'];
                }
              ?>              
            </h3>
          </div>
          <ul class="paw-print-list">
            <li>
              <?php
                $service_price = get_field("small_long_coat");
                if($service_price) {
                    echo $service_price['service_1'];
                }
              ?>           
            </li>
            <li>
              <?php
                $service_price = get_field("small_long_coat");
                if($service_price) {
                    echo $service_price['service_2'];
                }
              ?>
            </li>
            <li>
              <?php
                $service_price = get_field("small_long_coat");
                if($service_price) {
                    echo $service_price['service_3'];
                }
              ?>              
            </li>
            <li>
              <?php
                $service_price = get_field("small_long_coat");
                if($service_price) {
                    echo $service_price['service_4'];
                }
              ?>                
            </li>
          </ul>
          <a class="button button--green" href="/spa#form">
            Sign up now      
          </a>      
        </div>
        <div class="tab-content__card tab-content__card--deluxe">
          <div class="pricing-heading">
            <h5>Deluxe Bath</h5>
            <h3>
              <?php
                $service_price = get_field("small_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_price'];
                }
              ?>                 
            </h3>
          </div>
          <ul class="paw-print-list">
            <li>
              <?php
                $service_price = get_field("small_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_1'];
                }
              ?>                 
            </li>
            <li>
              <?php
                $service_price = get_field("small_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_2'];
                }
              ?>                  
            </li>
            <li>
              <?php
                $service_price = get_field("small_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_3'];
                }
              ?>                 
            </li>
            <li>
              <?php
                $service_price = get_field("small_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_4'];
                }
              ?>                     
            </li>
          </ul>
          <a class="button button--brown" href="/spa#form">
            Sign up now      
          </a>              
        </div>
      </div>
    </div>
    <div id="tabpanel-3" role="tabpanel" aria-labelledby="tab-3" class="is-hidden">
      <div class="tab-content">
        <div class="tab-content__card tab-content__card--standard">
          <div class="pricing-heading">
            <h5>Standard Bath</h5>
            <h3>
              <?php
                $service_price = get_field("medium_short_coat");
                if($service_price) {
                    echo $service_price['service_price'];
                }
              ?>                   
            </h3>
          </div>
          <ul class="paw-print-list">
            <li>
              <?php
                $service_price = get_field("medium_short_coat");
                if($service_price) {
                    echo $service_price['service_1'];
                }
              ?>                 
            </li>
            <li>
              <?php
                $service_price = get_field("medium_short_coat");
                if($service_price) {
                    echo $service_price['service_2'];
                }
              ?>                  
            </li>
            <li>
              <?php
                $service_price = get_field("medium_short_coat");
                if($service_price) {
                    echo $service_price['service_3'];
                }
              ?>                  
            </li>
            <li>
              <?php
                $service_price = get_field("medium_short_coat");
                if($service_price) {
                    echo $service_price['service_4'];
                }
              ?>                  
            </li>
          </ul>
          <a class="button button--green" href="/spa#form">
            Sign up now      
          </a>      
        </div>
        <div class="tab-content__card tab-content__card--deluxe">
          <div class="pricing-heading">
            <h5>Deluxe Bath</h5>
            <h3>
              <?php
                $service_price = get_field("medium_short_coat");
                if($service_price) {
                    echo $service_price['deluxe_price'];
                }
              ?>                   
            </h3>
          </div>
          <ul class="paw-print-list">
            <li>
              <?php
                $service_price = get_field("medium_short_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_1'];
                }
              ?>
            </li>
            <li>
              <?php
                $service_price = get_field("medium_short_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_2'];
                }
              ?>              
            </li>
            <li>
              <?php
                $service_price = get_field("medium_short_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_3'];
                }
              ?>              
            </li>
            <li>
              <?php
                $service_price = get_field("medium_short_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_4'];
                }
              ?>              
            </li>
          </ul>
          <a class="button button--brown" href="/spa#form">
            Sign up now      
          </a>              
        </div>
      </div>
    </div>
    <div id="tabpanel-4" role="tabpanel" aria-labelledby="tab-4" class="is-hidden">
      <div class="tab-content">
        <div class="tab-content__card tab-content__card--standard">
          <div class="pricing-heading">
            <h5>Standard Bath</h5>
            <h3>
              <?php
                $service_price = get_field("medium_long_coat");
                if($service_price) {
                    echo $service_price['service_price'];
                }
              ?>
            </h3>
          </div>
          <ul class="paw-print-list">
            <li>
              <?php
                $service_price = get_field("medium_long_coat");
                if($service_price) {
                    echo $service_price['service_1'];
                }
              ?>              
            </li>
            <li>
              <?php
                $service_price = get_field("medium_long_coat");
                if($service_price) {
                    echo $service_price['service_2'];
                }
              ?>                  
            </li>
            <li>
              <?php
                $service_price = get_field("medium_long_coat");
                if($service_price) {
                    echo $service_price['service_3'];
                }
              ?>                  
            </li>
            <li>
              <?php
                $service_price = get_field("medium_long_coat");
                if($service_price) {
                    echo $service_price['service_4'];
                }
              ?>                  
            </li>
          </ul>
          <a class="button button--green" href="/spa#form">
            Sign up now      
          </a>      
        </div>
        <div class="tab-content__card tab-content__card--deluxe">
          <div class="pricing-heading">
            <h5>Deluxe Bath</h5>
            <h3>
              <?php
                $service_price = get_field("medium_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_price'];
                }
              ?>                 
            </h3>
          </div>
          <ul class="paw-print-list">
            <li>
              <?php
                $service_price = get_field("medium_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_1'];
                }
              ?>               
            </li>
            <li>
              <?php
                $service_price = get_field("medium_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_2'];
                }
              ?>              
            </li>
            <li>
              <?php
                $service_price = get_field("medium_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_3'];
                }
              ?>              
            </li>
            <li>
              <?php
                $service_price = get_field("medium_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_4'];
                }
              ?>              
            </li>
          </ul>
          <a class="button button--brown" href="/spa#form">
            Sign up now      
          </a>              
        </div>
      </div>
    </div>
    <div id="tabpanel-5" role="tabpanel" aria-labelledby="tab-5" class="is-hidden">
      <div class="tab-content">
        <div class="tab-content__card tab-content__card--standard">
          <div class="pricing-heading">
            <h5>Standard Bath</h5>
            <h3>
              <?php
                $service_price = get_field("large_short_coat");
                if($service_price) {
                    echo $service_price['service_price'];
                }
              ?>              
            </h3>
          </div>
          <ul class="paw-print-list">
            <li>
              <?php
                $service_price = get_field("large_short_coat");
                if($service_price) {
                    echo $service_price['service_1'];
                }
              ?>                 
            </li>
            <li>
              <?php
                $service_price = get_field("large_short_coat");
                if($service_price) {
                    echo $service_price['service_2'];
                }
              ?>                  
            </li>
            <li>
              <?php
                $service_price = get_field("large_short_coat");
                if($service_price) {
                    echo $service_price['service_3'];
                }
              ?>                  
            </li>
            <li>
              <?php
                $service_price = get_field("large_short_coat");
                if($service_price) {
                    echo $service_price['service_4'];
                }
              ?>                  
            </li>
          </ul>
          <a class="button button--green" href="/spa#form">
            Sign up now      
          </a>      
        </div>
        <div class="tab-content__card tab-content__card--deluxe">
          <div class="pricing-heading">
            <h5>Deluxe Bath</h5>
            <h3>
              <?php
                $service_price = get_field("large_short_coat");
                if($service_price) {
                    echo $service_price['deluxe_price'];
                }
              ?>                
            </h3>
          </div>
          <ul class="paw-print-list">
            <li>
              <?php
                $service_price = get_field("large_short_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_1'];
                }
              ?>                 
            </li>
            <li>
              <?php
                $service_price = get_field("large_short_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_2'];
                }
              ?>               
            </li>
            <li>
              <?php
                $service_price = get_field("large_short_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_3'];
                }
              ?>                 
            </li>
            <li>
              <?php
                $service_price = get_field("large_short_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_4'];
                }
              ?>                 
            </li>
          </ul>
          <a class="button button--brown" href="/spa#form">
            Sign up now      
          </a>              
        </div>
      </div>
    </div>
    <div id="tabpanel-6" role="tabpanel" aria-labelledby="tab-6" class="is-hidden">
      <div class="tab-content">
        <div class="tab-content__card tab-content__card--standard">
          <div class="pricing-heading">
            <h5>Standard Bath</h5>
            <h3>
              <?php
                $service_price = get_field("large_long_coat");
                if($service_price) {
                    echo $service_price['service_price'];
                }
              ?>                        
            </h3>
          </div>
          <ul class="paw-print-list">
            <li>
              <?php
                $service_price = get_field("large_long_coat");
                if($service_price) {
                    echo $service_price['service_1'];
                }
              ?>                 
            </li>
            <li>
              <?php
                $service_price = get_field("large_long_coat");
                if($service_price) {
                    echo $service_price['service_2'];
                }
              ?>                
            </li>
            <li>
              <?php
                $service_price = get_field("large_long_coat");
                if($service_price) {
                    echo $service_price['service_3'];
                }
              ?>                
            </li>
            <li>
              <?php
                $service_price = get_field("large_long_coat");
                if($service_price) {
                    echo $service_price['service_4'];
                }
              ?>                
            </li>
          </ul>
          <a class="button button--green" href="/spa#form">
            Sign up now      
          </a>      
        </div>
        <div class="tab-content__card tab-content__card--deluxe">
          <div class="pricing-heading">
            <h5>Deluxe Bath</h5>
            <h3>
              <?php
                $service_price = get_field("large_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_price'];
                }
              ?>                 
            </h3>
          </div>
          <ul class="paw-print-list">
            <li>
              <?php
                $service_price = get_field("large_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_1'];
                }
              ?>                 
            </li>
            <li>
              <?php
                $service_price = get_field("large_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_2'];
                }
              ?>                 
            </li>
            <li>
              <?php
                $service_price = get_field("large_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_3'];
                }
              ?>                 
            </li>
            <li>
              <?php
                $service_price = get_field("large_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_4'];
                }
              ?>                 
            </li>
          </ul>
          <a class="button button--brown" href="/spa#form">
            Sign up now      
          </a>              
        </div>
      </div>
    </div>
    <div id="tabpanel-7" role="tabpanel" aria-labelledby="tab-7" class="is-hidden">
      <div class="tab-content">
        <div class="tab-content__card tab-content__card--standard">
          <div class="pricing-heading">
            <h5>Standard Bath</h5>
            <h3>
              <?php
                $service_price = get_field("xl_short_coat");
                if($service_price) {
                    echo $service_price['service_price'];
                }
              ?>                  
            </h3>
          </div>
          <ul class="paw-print-list">
            <li>
              <?php
                $service_price = get_field("xl_short_coat");
                if($service_price) {
                    echo $service_price['service_1'];
                }
              ?>                  
            </li>
            <li>
              <?php
                $service_price = get_field("xl_short_coat");
                if($service_price) {
                    echo $service_price['service_2'];
                }
              ?>                
            </li>
            <li>
              <?php
                $service_price = get_field("xl_short_coat");
                if($service_price) {
                    echo $service_price['service_3'];
                }
              ?>                
            </li>
            <li>
              <?php
                $service_price = get_field("xl_short_coat");
                if($service_price) {
                    echo $service_price['service_4'];
                }
              ?>                
            </li>
          </ul>
          <a class="button button--green" href="/spa#form">
            Sign up now      
          </a>      
        </div>
        <div class="tab-content__card tab-content__card--deluxe">
          <div class="pricing-heading">
            <h5>Deluxe Bath</h5>
            <h3>
              <?php
                $service_price = get_field("xl_short_coat");
                if($service_price) {
                    echo $service_price['deluxe_price'];
                }
              ?>               
            </h3>
          </div>
          <ul class="paw-print-list">
            <li>
              <?php
                $service_price = get_field("xl_short_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_1'];
                }
              ?>                  
            </li>
            <li>
              <?php
                $service_price = get_field("xl_short_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_2'];
                }
              ?>                  
            </li>
            <li>
              <?php
                $service_price = get_field("xl_short_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_3'];
                }
              ?>    
            </li>
            <li>
              <?php
                $service_price = get_field("xl_short_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_4'];
                }
              ?>                
            </li>
          </ul>
          <a class="button button--brown" href="/spa#form">
            Sign up now      
          </a>              
        </div>
      </div>
    </div>
    <div id="tabpanel-8" role="tabpanel" aria-labelledby="tab-8" class="is-hidden">
      <div class="tab-content">
        <div class="tab-content__card tab-content__card--standard">
          <div class="pricing-heading">
            <h5>Standard Bath</h5>
            <h3>
              <?php
                $service_price = get_field("xl_long_coat");
                if($service_price) {
                    echo $service_price['service_price'];
                }
              ?>                
            </h3>
          </div>
          <ul class="paw-print-list">
            <li>
              <?php
                $service_price = get_field("xl_long_coat");
                if($service_price) {
                    echo $service_price['service_1'];
                }
              ?>                  
            </li>
            <li>
              <?php
                $service_price = get_field("xl_long_coat");
                if($service_price) {
                    echo $service_price['service_2'];
                }
              ?>                   
            </li>
            <li>
              <?php
                $service_price = get_field("xl_long_coat");
                if($service_price) {
                    echo $service_price['service_3'];
                }
              ?>                   
            </li>
            <li>
              <?php
                $service_price = get_field("xl_long_coat");
                if($service_price) {
                    echo $service_price['service_4'];
                }
              ?>                   
            </li>
          </ul>
          <a class="button button--green" href="/spa#form">
            Sign up now      
          </a>      
        </div>
        <div class="tab-content__card tab-content__card--deluxe">
          <div class="pricing-heading">
            <h5>Deluxe Bath</h5>
            <h3>
              <?php
                $service_price = get_field("xl_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_price'];
                }
              ?>              
            </h3>
          </div>
          <ul class="paw-print-list">
            <li>
              <?php
                $service_price = get_field("xl_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_1'];
                }
              ?>              
            </li>
            <li>
              <?php
                $service_price = get_field("xl_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_2'];
                }
              ?>              
            </li>
            <li>
              <?php
                $service_price = get_field("xl_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_3'];
                }
              ?>              
            </li>
            <li>
              <?php
                $service_price = get_field("xl_long_coat");
                if($service_price) {
                    echo $service_price['deluxe_service_4'];
                }
              ?>
            </li>
          </ul>
          <a class="button button--brown" href="/spa#form">
            Sign up now      
          </a>              
        </div>
      </div>
    </div>      
  </div>
</section>