<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

/* Template Name: Masarnia news / Aktualnosci */

get_header();

$header_image = get_field('top_header_image');
$top_header_title = get_field('top_header_title');
$top_header_icon = get_field('top_header_icon');
$body_background = get_field('tlo');
?>

<div class="page-header-top d-flex flex-column align-items-center justify-content-center" style="background-image: url('<?php echo $header_image; ?>')">
    <h1 class="page-header-top__title standard-title-3 mb-0 text-center mt-5 title-custom-page">
        <?php echo $top_header_title; ?>
    </h1>
    <div class="sc-title d-flex justify-content-center">
        <div class="sc-title__line">
            <img width="50" height="50" src="<?php echo $top_header_icon['url']; ?>" class="img-fluid mx-auto" alt="<?php echo $top_header_icon['alt']; ?>">
        </div>
    </div>
</div>
<main id="main" class="page-news py-4 py-lg-5" role="main" style="background-image: url('<?php echo $body_background; ?>')">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array('category_name' => 'news', 'post_type' => 'post', 'posts_per_page' => 9, 'paged' => $paged);
    $wp_query = new WP_Query($args);
    ?>
    <div class="container">
        <div class="row justify-items-center">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-5 col-lg-4 mb-3 mb-lg-4 d-flex flex-column">
                    <div class="main-news__item flex-grow-1 d-flex flex-column">
                        <?php if (has_post_thumbnail($post->ID)) : ?>
                            <?php
                            $imgID  = get_post_thumbnail_id($post->ID);
                            $image  = wp_get_attachment_image_src($imgID, 'blog-width', false, '');
                            $imgAlt = get_post_meta($imgID, '_wp_attachment_image_alt', true);
                            ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="d-block bg-white">
                                <img src="<?php echo $image[0]; ?>" alt="<?php echo $imgAlt; ?>" class="img-fluid main-news__img">
                            </a>
                        <?php endif; ?>
                        <div class="main-news__item-cnt p-3 p-lg-4 bg-white d-flex flex-column flex-grow-1">
                            <?php if ('post' === get_post_type()) : ?>
                                <span class="main-news__item-date px-2 py-1 text-white bg-dark fw-light oswald-font"><?php echo get_the_date(); ?></span>
                            <?php endif; ?>
                            <p class="main-news__item-title oswald-font text-dark lh-12 text-decoration-none fw-bold standard-title-7 lh-12 flex-grow-1">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="text-dark text-decoration-none">
                                    <?php echo wp_trim_words(get_the_title(), 10, ' [...]'); ?>
                                </a>
                            </p>
                            <p class="mb-0 fw-bold"><a href="<?php the_permalink(); ?>" class="text-brown-brand text-decoration-none" title="<?php the_title(); ?>">Czytam <i class="fa fa-angle-right"></i></a></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <div class="container">
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                'total'        => $wp_query->max_num_pages,
                'current'      => max(1, get_query_var('paged')),
                'format'       => '?paged=%#%',
                'show_all'     => false,
                'type'         => 'plain',
                'end_size'     => 2,
                'mid_size'     => 1,
                'prev_next'    => true,
                'prev_text'    => sprintf('<i></i> %1$s', __('< Nowsze', 'text-domain')),
                'next_text'    => sprintf('%1$s <i></i>', __('Starsze >', 'text-domain')),
                'add_args'     => false,
                'add_fragment' => '',
            ));
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>