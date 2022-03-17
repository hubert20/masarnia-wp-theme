<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

/* Template Name: Masarnia kontakt */

get_header();
$header_image = get_field('top_header_image');
$top_header_icon = get_field('top_header_icon');
$open_hours_cnt = get_field('open_hours_cnt');
?>

<div class="page-header-top d-flex flex-column align-items-center justify-content-center mb-3 mb-lg-5" style="background-image: url('<?php echo $header_image; ?>')">
    <h1 class="page-header-top__title standard-title-3 mb-0 text-center">
        <span class="mea-culpa-font text-white"><?php the_title(); ?></span>
        <br><span class="oswald-font text-brown-brand fw-bold">STAROPOLSKA MASARNIA</span>
    </h1>
    <div class="sc-title d-flex justify-content-center">
        <div class="sc-title__line">
            <img width="50" height="50" src="<?php echo $top_header_icon['url']; ?>" class="img-fluid mx-auto" alt="<?php echo $top_header_icon['alt']; ?>">
        </div>
    </div>
</div>
<main id="main" class="page-open-hours" role="main" style="background-image: url('<?php echo $body_background; ?>')">
    <div class="container">
        <?php
        while (have_posts()) : the_post();
            the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter'));
        endwhile;
        ?>
    </div>
    <!-- Google map -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2431.897628045427!2d19.475795317443847!3d52.44476919999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471b874aaafdd7c1%3A0x342f071661eecd2!2sStaropolska%20Masarnia%20Sp.%20z%20o.o.!5e0!3m2!1spl!2spl!4v1647470103366!5m2!1spl!2spl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</main>
<?php get_footer(); ?>