<footer class="footer">
  <div class="footer__wrapper">
    <a href="/">
      <img class="footer__logo" src="/wp-content/uploads/eck9-kogo.webp" alt="East Coast K9 Logo">
    </a>
    <div class="footer__text">
      <div class="footer__text__top">
      <?php 
        wp_nav_menu(
            array(
              'menu' => 'primary',
              'container' => '',
              'theme_location' => 'primary',
              'items_wrap' => '<ul class="footer__navigation">%3$s</ul>'
            )
          );    
        ?>    
        <div class="footer__contact">
          <p>941-374-7161</p>
          <p>EastCoastK9LLC@gmail.com</p>
          <p>By Appointment Only</p>
          <p>Mon-Wed, Fri 6:30am - 6pm</p>
          <p>Thursday 6:30am - 4pm</p>
        </div>
      </div>
      <div class="footer__text footer__text__bottom">
        <p>Located in North Port, Florida. Serving Fort Myers to Bradenton</p>
        <p>Copyright 2022 East Coast K9 LLC.This website does not use Cookies.</p>
        <p>Website design and development by <a href="https://dylanbradramsey.com/">Dylanbradramsey.com</a></p>
      </div>
    </div>
    <a href="https://stonecreekdachshunds.com/" target="_blank">
      <img class="footer__secondary-logo" src="/wp-content/uploads/stone-creek-logo.webp" alt="Stone Creek Dachshunds Logo">
    </a>
  </div>
</footer>
<?php wp_footer(); ?>