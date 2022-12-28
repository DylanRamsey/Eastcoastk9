<?php

function eck_register_styles(){
  wp_enqueue_style('eck-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all' );
}

add_action('wp_enqueue_scripts', 'eck_register_styles');

?>