<section class="main-products py-3 py-lg-5">
    <div class="container">
        <h2 class="text-center mb-3 mb-lg-5">Sprawdź produkty Masarnia-Staropolska</h2>
        <div id="main-categories" class="main-categories row">
            <?php
            $args = array('parent' => 18);
            $cats = get_categories($args);
            foreach ($cats as $cat) : ?>
                <?php
                $this_category = get_category($cat);
                $cat_link = get_category_link($cat->cat_ID);
                $args = array(
                    'category__in' => array($cat->term_id),
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'order_by' => 'date',
                    'order' => 'desc'
                );
                $my_query = new WP_Query($args);
                ?>
                <div class="col-sm-4 col-md-3 px-2">
                    <div class="main-categories__item">
                        <figure class="main-categories__item-img">
                            <a class="prod-list__item prod-main-list" href="<?= $cat_link; ?>" data-category-type="<?= $cat->slug; ?>" title="Produkty Masarnia-Staropolska - <?=$cat->name;?>">
                                <h3 class="text-center"><?= $cat->name; ?></h3>
                                <?php
                                if ($my_query->have_posts()) : ?>
                                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                        <?php if (has_post_thumbnail($post->ID)) : ?>
                                            <?php
                                            $imgID  = get_post_thumbnail_id($post->ID);
                                            $image  = wp_get_attachment_image_src($imgID, 'large', false, '');
                                            $imgAlt = get_post_meta($imgID, '_wp_attachment_image_alt', true);
                                            ?>
                                            <img src="<?php echo $image[0]; ?>" alt="<?php echo $imgAlt; ?>" class="img-fluid" style="border-radius: 20px;border: 1px solid rgba(119, 71, 2, .2);">
                                        <?php else : ?>
                                            <img src="<?php get_bloginfo('stylesheet_directory');  ?>/images/thumbnail-default.jpg" class="img-fluid">
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </a>
                        </figure>
                        <div class="main-categories__item-action">
                            <i class="ico ico-arrow-right"></i>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>