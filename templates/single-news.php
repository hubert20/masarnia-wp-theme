<?php
if (!defined('ABSPATH')) exit;

get_header();

$top_header_image = get_field('top_header_image', 209);
$top_header_icon = get_field('top_header_icon', 209);

?>

<div class="page-header-top d-flex flex-column align-items-center justify-content-center" style="background-image: url('<?php echo $top_header_image; ?>');">
    <h2 class="page-header-top__title text-white text-center standard-title-3 mb-0 mt-5 title-custom-page">
        <span class="mea-culpa-font">Aktualności</span>
        <br><span class="oswald-font text-white fw-bold page-header-top__title-brand">STAROPOLSKA MASARNIA</span>
    </h2>
    <div class="sc-title d-flex justify-content-center mb-3 mb-lg-4">
        <div class="sc-title__line">
            <img width="50" height="50" src="<?php echo $top_header_icon['url']; ?>" class="img-fluid mx-auto" alt="<?php echo $top_header_icon['alt']; ?>">
        </div>
    </div>
</div>

<main id="main" class="single single-aktualnosci py-4 py-lg-5" role="main">
    <div class="container">
        <?php if ('post' === get_post_type()) : ?>
            <div class="text-center mb-3"><span class="px-2 py-1 text-white bg-dark fw-light oswald-font"><?php echo get_the_date(); ?></span></div>
        <?php endif; ?>
        <h1 class="mb-3 mb-lg-5 text-center oswald-font standard-title-4 fw-bold">
            <?php the_title(); ?>
        </h1>
        <?php
        while (have_posts()) : the_post();
            the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter'));
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>