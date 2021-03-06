<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

/* Template Name: About us */

get_header();

$header_image = get_field('top_header_image');
$top_header_icon = get_field('top_header_icon');
$about_us_cnt = get_field('about_us_cnt');
?>

<div class="page-header-top d-flex flex-column align-items-center justify-content-center" style="background-image: url('<?php echo $header_image; ?>')">
    <h1 class="page-header-top__title standard-title-3 mb-0 text-center title-custom-page">
        <span class="mea-culpa-font text-white"><?php the_title(); ?></span>
        <br><span class="oswald-font text-white fw-bold page-header-top__title-brand">STAROPOLSKA MASARNIA</span>
    </h1>
    <div class="sc-title d-flex justify-content-center">
        <div class="sc-title__line">
            <img width="50" height="50" src="<?php echo $top_header_icon['url']; ?>" class="img-fluid mx-auto" alt="<?php echo $top_header_icon['alt']; ?>">
        </div>
    </div>
</div>
<main id="main" class="page-open-hours py-4 py-lg-5" role="main">
    <div class="container">
        <?php echo $about_us_cnt; ?>

        <?php
        while (have_posts()) : the_post();
            the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter'));
        endwhile;
        ?>


    </div>
</main>

<?php get_footer(); ?>