<?php
$main_news_icon = get_field('main_news_icon');
$main_news_title = get_field('main_news_title');
?>

<section class="main-news py-4 py-lg-5">
    <div class="container">
        <h2 class="text-center standard-title-3 mb-0">
            <?php echo $main_news_title; ?>
        </h2>
        <div class="sc-title d-flex justify-content-center mb-3 mb-lg-4">
            <div class="sc-title__line">
                <img width="50" height="50" src="<?php echo $main_news_icon['url']; ?>" class="img-fluid mx-auto" alt="<?php echo $main_news_icon['alt']; ?>">
            </div>
        </div>
        <div class="row mb-lg-5">
            <?php
            $query = new WP_Query(array('category_name' => 'news', 'posts_per_page' => 3));
            if ($query->have_posts()) :
            ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-5 col-lg-4 mb-3 d-flex flex-column">
                        <div class="main-news__item flex-grow-1 d-flex flex-column">
                            <?php if (has_post_thumbnail($post->ID)) : ?>
                                <?php
                                $imgID  = get_post_thumbnail_id($post->ID);
                                $image  = wp_get_attachment_image_src($imgID, 'blog-width', false, '');
                                $imgAlt = get_post_meta($imgID, '_wp_attachment_image_alt', true);
                                ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="d-block">
                                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $imgAlt; ?>" class="img-fluid main-news__img">
                                </a>
                            <?php endif; ?>
                            <div class="main-news__item-cnt p-3 p-lg-4 bg-white d-flex flex-column flex-grow-1">
                                <?php if ('post' === get_post_type()) : ?>
                                    <span class="main-news__item-date px-2 py-1 text-white bg-dark fw-light oswald-font"><?php echo get_the_date(); ?></span>
                                <?php endif; ?>
                                <p class="main-news__item-title oswald-font text-dark lh-12 text-decoration-none fw-bold standard-title-7 lh-12 flex-grow-1">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="text-dark text-decoration-none">
                                        <?php echo wp_trim_words(get_the_title(), 15, ' [...]'); ?>
                                    </a>
                                </p>
                                <p class="mb-0 fw-bold"><a href="<?php the_permalink(); ?>" class="text-brown-brand text-decoration-none" title="<?php the_title(); ?>">Czytam <i class="fa fa-angle-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
                ?>
            <?php endif; ?>
        </div>
        <div class="row justify-content-center pt-3">
            <div class="col-md-3 d-grid">
                <a href="/aktualnosci/" title="Zobacz więcej akualności" class="btn-brand-brown">Zobacz więcej aktualności <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</section>