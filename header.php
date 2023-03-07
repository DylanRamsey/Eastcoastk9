<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="main.js"></script>
  <script src="fslightbox.js"></script>
  <?php
  wp_head();
  ?>
</head>

<body>
  <section class="wrapper">
    <nav class="site-header">
      <div class="header-contact">
        <!--
        <img src="/wp-content/themes/eastcoastk9/assets/svgs/instagram-logo.svg" alt="Instagram Logo">
        <img src="/wp-content/themes/eastcoastk9/assets/svgs/facebook-logo.svg" alt="Facebook Logo">
        -->
        <div class="header-contact__phone">
          <a href="tel:941-374-7161">
            <img class="header-contact__phone-icon" src="/wp-content/themes/eastcoastk9/assets/svgs/phone-icon.svg" alt="Phone Icon">
            <p class="hover-underline-animation">941-374-7161</p>
          </a>
        </div>          
        <div class="header-contact__email">
        <a href="mailto: EastCoastK9LLC@gmail.com">
            <img class="header-contact__envelope" src="/wp-content/themes/eastcoastk9/assets/svgs/envelope.svg" alt="Envelope Icon">
            <p class="hover-underline-animation">EastCoastK9LLC@gmail.com</p>
        </a>
        </div>
      </div>      
      <div class="site-header__wrapper">
        <a href="/">
          <img class="site-header__logo" src="/wp-content/uploads/eck9-kogo.webp" alt="East Coast K9 Logo">
        </a>
          <div class="site-header__navigation-links">
            <?php 
              wp_nav_menu(
                array(
                  'menu' => 'primary',
                  'theme_location' => 'primary',
                  'items_wrap' => '<ul id="" class="site-header__navigation-links">%3$s</ul>',
                )
              );
            ?>
          </div>
      </div>
      <nav class="mobile-navigation">
        <div class="mobile-navigation__logo-toggle container">
          <div class="navigation-burger">
            <div class="nav-icon4">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
        <?php 
          wp_nav_menu(
            array(
              'menu' => 'primary',
              'container' => '',
              'theme_location' => 'primary',
              'items_wrap' => '<ul class="mobile-navigation__links">%3$s</ul>'
            )
          );
        ?>
      </nav>      
    </nav>
