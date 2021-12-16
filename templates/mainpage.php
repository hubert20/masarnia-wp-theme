<?php
if (!defined('ABSPATH')) exit;

/* Template Name: Mainpage */

get_header();

?>

<!-- Main hero -->
<?php get_template_part('template-parts/main-hero'); ?>

<!-- Main products -->
<?php get_template_part('template-parts/main-products'); ?>

<!-- Main news -->
<?php get_template_part('template-parts/main-news'); ?>

<!-- Main about -->
<?php get_template_part('template-parts/main-about'); ?>


<?php get_footer(); ?>