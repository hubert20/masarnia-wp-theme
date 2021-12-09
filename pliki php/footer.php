<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
<?php if (!is_page_template('blank-page.php') && !is_page_template('blank-page-with-container.php') && !is_page_template('templates/page-gala.php') && !is_page_template('templates/page-raport-o-biedzie-2019.php')) : ?>
    <footer class="site-footer" role="contentinfo">
        <?php get_template_part('footer-widget'); ?>
    </footer>
<?php endif; ?>

<?php wp_footer(); ?>
</body>

</html>