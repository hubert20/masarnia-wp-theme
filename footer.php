<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package masarnia-wp-theme
 */
?>

<footer class="site-footer" role="contentinfo">
    <?php get_template_part('footer-widget'); ?>
</footer>

<div id="cookie-warn" class="cookie-warn">
    <div class="cookie-warn__box">
        <span class="cookie-warn__left-side">
            Na stronie korzystamy z plików cookies, by dostosowywać jej zawartość do preferencji użytkownika oraz ją
            optymalizować. Używane są one również w celu tworzenia anonimowych statystyk pomagających zrozumieć, w jaki
            sposób
            użytkownik korzysta ze strony, z wyłączeniem jego personalnej identyfikacji.
            <a class="cookie-warn__more-info-link text-red" target="_blank" href="#">Szczegóły
                w polityce prywatności <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </span>
        <span class="cookie-warn__right-side">
            <a href="javascript:void(0);" id="close-cookie-warn" class="cookie-warn__close-cookie-info">OK</a>
        </span>
    </div>
</div>
<?php wp_footer(); ?>
</body>

</html>