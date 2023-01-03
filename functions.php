<?php

function eck_register_styles(){
  wp_enqueue_style('eck-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all' );
  wp_enqueue_style('eck-swiper', get_template_directory_uri() . "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css", array(), '1.0', 'all' );
}

add_action('wp_enqueue_scripts', 'eck_register_styles');

function eck_register_scripts(){
  wp_enqueue_script('eck-swiper','https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), true);
  wp_enqueue_script('eck-scripts','/main.js', array(), true);
}
add_action('wp_enqueue_scripts', 'eck_register_scripts');

?>