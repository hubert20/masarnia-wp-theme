<section class="main-news py-4 py-lg-5">
    <h2 class="text-center standard-title-3 mb-3 mb-lg-4">
        <span class="mea-culpa-font">Aktualności</span><br>
        <span class="oswald-font text-brown-brand fw-bold">STAROPOLSKA MASARNIA</span>
    </h2>
    <div class="<?php if ($news_after_campaign_visible) {
                    echo 'd-block';
                } else {
                    echo 'd-none';
                } ?>">
        <div class="row align-items-center mb-lg-5">
            <?php
            $query = new WP_Query(array('category_name' => 'aktualnosci', 'posts_per_page' => 3));
            if ($query->have_posts()) :
            ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-6 col-lg-4 order-1 order-lg-2 mb-5 mb-lg-0">
                        <div class="main-news__item">
                            <div class="main-news__item-cnt">
                                <?php if ('post' === get_post_type()) : ?>
                                    <span class="main-news__item-date px-3 py-1 text-white bg-red-light"><?php echo get_the_date(); ?></span>
                                <?php endif; ?>
                                <div class="p-3 p-lg-4 bg-white main-news__item-box flex-column">
                                    <p class="main-news__item-title-post">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="text-dark lh-12">
                                            <strong>
                                                <?php echo wp_trim_words(get_the_title(), 15, ' [...]'); ?>
                                            </strong>
                                        </a>
                                    </p>
                                    <p class="text-right mb-0"><a href="<?php the_permalink(); ?>" class="text-red-light" title="<?php the_title(); ?>">Czytam <i class="fa fa-angle-right"></i></a></p>
                                </div>
                            </div>
                            <?php if (has_post_thumbnail($post->ID)) : ?>
                                <?php
                                $imgID  = get_post_thumbnail_id($post->ID);
                                $image  = wp_get_attachment_image_src($imgID, 'large', false, '');
                                $imgAlt = get_post_meta($imgID, '_wp_attachment_image_alt', true);
                                ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="d-block">
                                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $imgAlt; ?>" class="img-fluid main-news__img">
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
                ?>
            <?php endif; ?>
        </div>
        <div class="row justify-content-center pt-3">
            <div class="col-md-4">
                <a href="/aktualnosci/" title="Więcej akualności" class="btn-red btn-radius-more btn-block btn-border-new">Więcej aktualności <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</section>