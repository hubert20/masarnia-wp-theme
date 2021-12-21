<section class="main-products" style="background-color: green; height: 400px;">
    <div class="container">
        <h2>Nasze produkty</h2>
        <?php
        $args = array('parent' => 18);
        $cats = get_categories($args);
        ?>
        <div id="products-navigation" class="products-navigation">
            <ul class="cat-list nav nav-tabs">
                <li class="nav-item"><a class="nav-link prod-list__item active" href="#" id="show-all-main-products">Wszystkie produkty</a></li>
                <?php foreach ($cats as $cat) : ?>
                    <li class="nav-item">
                        <a class="nav-link prod-list__item prod-main-list" href="#" data-category-type="<?= $cat->slug; ?>">
                            <?= $cat->name; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div id="products-list" class="row">
            <?php
            foreach ($cats as $cat) :
                $this_category = get_category($cat);
                $args = array(
                    'category__in' => array($cat->term_id),
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'order_by' => 'date',
                    'order' => 'desc'
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) : ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <div class="col-md-6 col-lg-4 mb-2 products-list__item" data-category-type="<?= $cat->slug; ?>">
                            <div class="box-main-products__item p-5" style="border: 2px solid #fff;">
                                <figure class="box-main-products__img">
                                    <?php if (has_post_thumbnail($post->ID)) : ?>
                                        <?php
                                        $imgID  = get_post_thumbnail_id($post->ID);
                                        $image  = wp_get_attachment_image_src($imgID, 'large', false, '');
                                        $imgAlt = get_post_meta($imgID, '_wp_attachment_image_alt', true);
                                        ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="d-block">
                                            <img src="<?php echo $image[0]; ?>" alt="<?php echo $imgAlt; ?>" class="img-fluid">
                                        </a>
                                    <?php endif; ?>
                                </figure>
                                <div class="box-main-products__item-title">
                                    <h5 class="box-main-products__title-news my-3 my-lg-4">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="text-blue">
                                            <strong><?php echo wp_trim_words(get_the_title(), 15, ' [...]'); ?></strong>
                                        </a>
                                    </h5>
                                </div>
                                <div class="box-main-products__action box-main-products__action--alt circle-arrow">
                                    <i class="ico ico-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
            <?php else :
                    echo 'Brak produktów ' . $cat->name;
                endif;
            endforeach;
            ?>
        </div>
    </div>
</section>


<script>
    jQuery('#products-navigation a.prod-main-list').on('click', function(e) {
        e.preventDefault();
        var cat = jQuery(this).data('categoryType');
        jQuery('.products-navigation a').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('#products-list .products-list__item').hide();
        jQuery('#products-list .products-list__item[data-category-type="' + cat + '"]').show();
    });
    jQuery('#show-all-main-products').on('click', function(e) {
        e.preventDefault();
        jQuery('#products-list .products-list__item').show();
    });
</script>