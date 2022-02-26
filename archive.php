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
?>

<div class="page-header-top page-header-top-<?php echo $name_cat; ?> mb-3 mb-lg-5 d-flex flex-column align-items-center justify-content-center">
    <h1 class="page-header-top__title text-white text-center">
        <?php the_archive_title(); ?>
    </h1>
</div>

<main id="main" class="[- products-boxes mb-4 mb-lg-5 -]" role="main">
    <div class="container">
        <div id="products-boxes" class="row">
            <?php
            while (have_posts()) : the_post(); ?>
                <div class="col-sm-12 col-lg-4 mb-2 products-list__item">
                    <div class="products-boxes__item" style="position: relative;overflow: hidden;">
                        <figure class="products-boxes__img">
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
                        <h3 class="products-boxes__title my-3 my-lg-4 mea-culpa-font playfair-title-3 text-brown-brand">
                            <strong><?php the_title(); ?></strong>
                        </h3>
                        <!-- product desc slide content -->
                        <div class="product__content slide-up-content p-3 p-lg-4">
                            <div class="slide-up-content__content">
                                <h3 class="products-boxes__title mb-3 mb-lg-4 mea-culpa-font playfair-title-3">
                                   <?php the_title(); ?>
                                </h3>
                                <div class="overflow-auto"><?php the_content(); ?></div>
                            </div>
                            <span class="slide-up-content__close close-content">
                                <span class="close-button"></span>
                                <span class="close-label">
                                    zamknij
                                </span>
                            </span>
                        </div>
                        <!-- Product button see more -->
                        <footer class="product__footer product__see-more">
                            <span class="see-more-content color-black">
                                Dowiedz się więcej
                                <i class="icon icon-caret-down color-red"></i>
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



<style>
    .products-boxes .product__content {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background-color: #774702;
        color: #fff;
        padding: 35px 25px 15px;
        position: absolute;
        top: 100%;
        bottom: 0;
        left: 0;
        right: 0;
        transition: .3s ease-in-out;
        /*border-radius: 20px;*/
    }

    .products-boxes .product__content.active {
        top: 0;
    }
</style>

<script>
    jQuery('.see-more-content').on('click', function() {
        jQuery(this).parent().prev().addClass('active');
    });

    jQuery('.close-content').on('click', function() {
        jQuery(this).prev().parent().removeClass('active');
    });
</script>