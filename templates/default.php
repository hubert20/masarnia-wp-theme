<?php
if (!defined('ABSPATH')) exit;

/* Template Name: Default */

get_header();

?>


<?php
while (have_posts()) : the_post();
    the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter'));
endwhile;
?>


<?php get_footer(); ?>