<?php
if (!defined('ABSPATH')) exit;

/* Template Name: Mainpage */

get_header();

//Hero
$hero_cnt = get_field('hero_cnt');
$hero_background_desktop = get_field('hero_background_desktop');
$hero_background_mobile = get_field('hero_background_mobile');
$hero_widget = get_field('hero_widget');

//Main About us

?>

<!-- Main hero -->
<?php get_template_part('template-parts/main-hero'); ?>

<!-- Main products & categories -->
<?php get_template_part('template-parts/main-categories'); ?>

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