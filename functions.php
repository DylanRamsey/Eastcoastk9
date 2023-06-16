<?php

function eck_menus(){
  $locations = array(
    'primary' => "Primary Menu",
    'mobile' => "Mobile Menu"
  );

  register_nav_menus($locations);
}

add_action('init','eck_menus');

function eck_theme_support(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'eck_theme_support');

function eck_register_styles(){
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('eck-style', get_template_directory_uri() . "/style.css", array('eck-swiper'), $version, 'all' );
  wp_enqueue_style('eck-swiper', get_template_directory_uri() . "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css", array(), 'all' );
}

add_action('wp_enqueue_scripts', 'eck_register_styles');

function eck_register_scripts(){
  wp_enqueue_script('eck-swiper','https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), true);
  wp_enqueue_script('eck-light-box',get_template_directory_uri()."/assets/scripts/main.js", array(), '1.0' , true);
  wp_enqueue_script('eck-scripts',get_template_directory_uri()."/assets/scripts/fslightbox.js", array(), '1.0' , true);
}
add_action('wp_enqueue_scripts', 'eck_register_scripts');

?>