<?php /* Template Name: contact */ ?>
<?php get_header(); ?>
<div class="site-body">
  <?php include dirname(dirname(__FILE__))."/components/interior-heading-group.php" ?>
  <section class="contact-information">
    <div class="contact-information__form">
      <?php include dirname(dirname(__FILE__))."/components/contact-form.php" ?>
    </div>
    <div class="contact-information__options">
      <div class="contact-information__options__contact">
        <img class="header-contact__phone-icon" src="/wp-content/themes/eastcoastk9/assets/svgs/phone-icon-green.svg" alt="Phone Icon">
        <a href="tel:941-587-7161"><p>941-587-7161</p></a>
      </div>
      <div class="contact-information__options__contact">
        <img class="header-contact__phone-icon" src="/wp-content/themes/eastcoastk9/assets/svgs/envelope-green.svg" alt="Email Icon">
        <a href="mailto:EastCoastK9LLC@gmail.com"><p>EastCoastK9LLC@gmail.com</p></a>
      </div>
      <div class="contact-information__options__contact">
        <img class="header-contact__phone-icon" src="/wp-content/themes/eastcoastk9/assets/svgs/check-green.svg" alt="check Icon">
        <p>By Appointment Only</p>
      </div>
      <div class="contact-information__options__contact">
      <img class="header-contact__phone-icon" src="/wp-content/themes/eastcoastk9/assets/svgs/calendar-green.svg" alt="calendar Icon">
        <p>
          M-W, Fri 6:30am - 6:00pm<br>
          Thursday 6:30am - 4:00pm
        </p>
      </div>
      <h5 class="heading heading--brown">
        Review Us!
      </h5>
      <div class="review-platforms">
        <a target="_blank" href="https://www.google.com/search?q=east%20coast%20k9&oq=east+coast+k9&aqs=chrome..69i57j0i512j0i22i30l3j69i60l3.3243j0j7&sourceid=chrome&ie=UTF-8&tbs=lf:1,lf_ui:14&tbm=lcl&sxsrf=AJOqlzX7k1gLGcYBpdliDRg5AGR3_dqlaA:1677616128437&rflfq=1&num=10&rldimm=6409906407561886700&lqi=Cg1lYXN0IGNvYXN0IGs5SLvntbX0roCACFolEAAQARACGAAYARgCIg1lYXN0IGNvYXN0IGs5KggIAhAAEAEQApIBC2RvZ190cmFpbmVyqgEjEAEaHxABIhtZi5Cv5ztLTCTuXrNPn_Ko6xr4S-Osr44oc9ngAQA&ved=2ahUKEwi8sp6Lh7n9AhUjSzABHVDPDD8QvS56BAgcEAE&sa=X&rlst=f#lrd=0x88dcad2d026c278d:0x58f48feaa239fbec,3,,,,&rlfi=hd:;si:6409906407561886700,l,Cg1lYXN0IGNvYXN0IGs5SLvntbX0roCACFolEAAQARACGAAYARgCIg1lYXN0IGNvYXN0IGs5KggIAhAAEAEQApIBC2RvZ190cmFpbmVyqgEjEAEaHxABIhtZi5Cv5ztLTCTuXrNPn_Ko6xr4S-Osr44oc9ngAQA;mv:[[27.080062277319026,-82.21297566294112],[27.07970232268097,-82.21337993705887]];tbs:lrf:!1m4!1u2!2m2!2m1!1e1!2m1!1e2!3sIAE,lf:1,lf_ui:14">
          <img src="/wp-content/uploads/google-logo.webp" alt="Google Logo">
        </a>
        <a target="_blank" href="https://www.facebook.com/Eastcoastk9llc/reviews/?ref=page_internal">
          <img src="/wp-content/uploads/facebook-logo.webp" alt="Facebook Logo">
        </a>
      </div>      
    </div>
  </section>
</div>
<?php get_footer(); ?>