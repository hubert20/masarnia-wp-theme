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


<!-- Main offer boxes -->
<section class="main-offer-boxes py-4 py-lg-5">
    <div class="container">
        <h2>Sprawdź produkty Staropolska Masarnia</h2>
    </div>
</section>




<?php get_footer(); ?>