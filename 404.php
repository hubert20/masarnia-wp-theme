<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<div class="empty-header-filler"></div>
<main id="main" class="page-404" role="main">
    <div class="container pt-5 pb-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="<?php echo IMAGES; ?>/errors/404.jpg" alt="Error" class="img-fluid mb-4">
            </div>
            <div class="col-lg-6">
                <h4 class="mb-4"><strong>Coś poszło nie tak.</strong></h4>
                <p class="mb-4">
                    Przepraszamy za kłopot. A korzystając z okazji chcemy Ci podziękować, że jesteś z nami.
                </p>

                <a href="/" class="btn btn-red btn-lg">Przejdź na szlachetnapaczka.pl ></a>
            </div>
        </div>
    </div>
</main><!-- #main -->

<?php
get_footer();
