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
            <a class="cookie-warn__more-info-link text-red" target="_blank" href="https://www.wiosna.org.pl/main/pl/sec/252/article/3642.htm">Szczegóły
                w polityce prywatności <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </span>
        <span class="cookie-warn__right-side">
            <a href="javascript:void(0);" id="close-cookie-warn" class="cookie-warn__close-cookie-info">OK</a>
        </span>
    </div>
</div>


<style>
    .cookie-warn {
        box-sizing: border-box;
        z-index: 99999;
        overflow: hidden;
        color: #444;
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #fff;
        padding: 10px;
        display: none;
    }

    .cookie-warn__box {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .cookie-warn__left-side {
        font-size: 12px;
    }

    .cookie-warn__right-side {
        font-size: 14px;
    }

    .cookie-warn__close-cookie-info {
        background: #e21927;
        color: #fff;
        border: 0;
        padding: 6px 9px;
        border-radius: 3px;
        margin: 0 0 0 20px;
        text-decoration: none !important;
    }
</style>

<script>
    jQuery(document).ready(function($) {
        //Qookie
        var sName = "cookiesok";
        $("#close-cookie-warn").click(function() {
            var oExpire = new Date();
            oExpire.setTime((new Date()).getTime() + 3600000 * 24 * 365);
            document.cookie = sName + "=1;expires=" + oExpire;
            $("#cookie-warn").hide("slow");
        });

        var sStr = '; ' + document.cookie + ';';
        var nIndex = sStr.indexOf('; ' + escape(sName) + '=');
        if (nIndex === -1) {
            $("#cookie-warn").show();
        }
    });
</script>

<?php wp_footer(); ?>
</body>

</html>