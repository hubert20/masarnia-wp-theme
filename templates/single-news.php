<?php
if (!defined('ABSPATH')) exit;

get_header();

get_template_part('template-parts/header-image');

?>

<main id="main" class="[- single single-aktualnosci single-paczka-news -]" role="main">
    <div class="container">
        <h1 class="[- single-title -]"><strong><?php the_title(); ?>  dupaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</strong></h1>
        <?php
        while (have_posts()) : the_post();
            the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter'));
        endwhile;
        ?>
    </div>
</main><!-- #main -->


<?php get_footer(); ?>