<?php

/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header();

$name = get_the_archive_title();
$name_cat = strtolower(preg_replace('/-+/', '-', preg_replace('/[^\wáéíóú]/', '-', $name)));

if (in_category('wedzonki')) {
    $body_background = get_field('tlo', 1108);
    $top_header_image = get_field('top_header_image', 1108);
    $top_header_icon = get_field('top_header_icon', 1108);
} else if (in_category('szynki')) {
    $body_background = get_field('tlo', 1083);
    $top_header_image = get_field('top_header_image', 1083);
    $top_header_icon = get_field('top_header_icon', 1083);
} else if (in_category('suche-i-podsuszane')) {
    $body_background = get_field('tlo', 1075);
    $top_header_image = get_field('top_header_image', 1075);
    $top_header_icon = get_field('top_header_icon', 1075);
} else if (in_category('pasztety')) {
    $body_background = get_field('tlo', 1046);
    $top_header_image = get_field('top_header_image', 1046);
    $top_header_icon = get_field('top_header_icon', 1046);
} else if (in_category('kielbasy-grube')) {
    $body_background = get_field('tlo', 1088);
    $top_header_image = get_field('top_header_image', 1088);
    $top_header_icon = get_field('top_header_icon', 1088);
} else if (in_category('kielbasy-cienkie')) {
    $body_background = get_field('tlo', 1085);
    $top_header_image = get_field('top_header_image', 1085);
    $top_header_icon = get_field('top_header_icon', 1085);
} else if (in_category('garmazerka')) {
    $body_background = get_field('tlo', 1099);
    $top_header_image = get_field('top_header_image', 1099);
    $top_header_icon = get_field('top_header_icon', 1099);
} else {
    $body_background = get_field('tlo');
}
?>

<div class="page-header-top page-header-top-<?php echo $name_cat; ?> d-flex flex-column align-items-center justify-content-center" style="background-image: url('<?php echo $top_header_image; ?>');">
    <h1 class="page-header-top__title text-white text-center standard-title-3 mb-0">
        <span class="mea-culpa-font"><?php the_archive_title(); ?></span>
        <br><span class="oswald-font text-brown-brand fw-bold">STAROPOLSKA MASARNIA</span>
    </h1>
    <div class="sc-title d-flex justify-content-center mb-3 mb-lg-4">
        <div class="sc-title__line">
            <img width="50" height="50" src="<?php echo $top_header_icon['url']; ?>" class="img-fluid mx-auto" alt="<?php echo $top_header_icon['alt']; ?>">
        </div>
    </div>
</div>

<main id="main" class="products-boxes py-4 py-lg-5" role="main" style="background-image: url('<?php echo $body_background; ?>');">
    <div class="container">
        <div id="products-boxes" class="row">
            <?php
            while (have_posts()) : the_post(); ?>
                <div class="col-sm-12 col-lg-4 mb-3 mb-lg-4">
                    <div class="products-boxes__item">
                        <figure class="products-boxes__img mb-3">
                            <?php if (has_post_thumbnail($post->ID)) : ?>
                                <?php
                                $imgID  = get_post_thumbnail_id($post->ID);
                                $image  = wp_get_attachment_image_src($imgID, 'large', false, '');
                                $imgAlt = get_post_meta($imgID, '_wp_attachment_image_alt', true);
                                ?>
                                <img src="<?php echo $image[0]; ?>" alt="<?php echo $imgAlt; ?>" class="img-fluid" style="border: 1px solid rgba(119, 71, 2, .2);">
                            <?php else : ?>
                                <img src="<?php bloginfo('template_directory'); ?>/images/produkty-masarnia-staropolska.jpg" class="img-fluid" style="border: 1px solid rgba(119, 71, 2, .2);">
                            <?php endif; ?>
                        </figure>
                        <!-- Product title -->
                        <h3 class="products-boxes__title mb-3 oswald-font standard-title-6">
                            <strong><?php the_title(); ?></strong>
                        </h3>
                        <!-- product desc slide content -->
                        <div class="product__content slide-up-content p-3 p-lg-4">
                            <div class="slide-up-content__content">
                                <h3 class="products-boxes__title mb-3 oswald-font standard-title-6">
                                    <strong><?php the_title(); ?></strong>
                                </h3>
                                <div class="products-boxes__desc overflow-auto fw-light"><?php the_content(); ?></div>
                            </div>
                            <span class="slide-up-content__close close-content d-flex d-lg-none justify-content-center flex-column align-items-center" title="Zamknij">
                                <span class="close-button"></span>
                            </span>
                        </div>
                        <!-- Product button see more -->
                        <footer class="product__footer product__see-more">
                            <span class="see-more-content btn btn-sm no-border-radius bg-white">
                                Dowiedz się więcej <i class="fa fa-angle-right"></i>
                            </span>
                        </footer>
                    </div>
                </div>
            <?php endwhile;
            ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>

<script>
    jQuery('.see-more-content').on('click', function() {
        jQuery(this).parent().prev().addClass('active');
    });

    jQuery('.close-content').on('click', function() {
        jQuery(this).prev().parent().removeClass('active');
    });
</script>