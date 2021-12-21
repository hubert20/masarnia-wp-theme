<?php
if (!defined('ABSPATH')) exit;

/* Template Name: Mainpage */

get_header();

?>

<!-- Main hero -->
<?php get_template_part('template-parts/main-hero'); ?>

<!-- Main products & categories -->
<?php get_template_part('template-parts/main-products'); ?>

<!-- Main news -->
<?php get_template_part('template-parts/main-news'); ?>

<!-- Main about -->
<?php get_template_part('template-parts/main-about'); ?>


<!-- Last -->

<?php
while (have_posts()) : the_post();
    the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter'));
endwhile;
?>


<?php get_footer(); ?>