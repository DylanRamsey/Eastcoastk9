<?php /* Template Name: Training */ ?>
<?php get_header(); ?>
<?php
    $interior_page_heading = get_field("interior_page_heading");
    if($interior_page_heading) {
        echo $interior_page_heading;
    }
?>
<?php get_footer(); ?>