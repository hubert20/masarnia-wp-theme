<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<main id="main" class="page-404 pt-5" role="main">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-8 col-lg-5 mt-lg-5 text-center">
                <img src="/wp-content/uploads/2022/03/404-blad.png" alt="Error" class="img-fluid mb-4 mb-lg-5">
            </div>
        </div>
        <p class="text-center mb-3 mb-lg-5 text-center oswald-font standard-title-4 fw-bold">
            Przepraszamy za kłopot. <br> A korzystając z okazji chcemy Ci podziękować, że jesteś z nami.
        </p>
        <div class="text-center mb-3 mb-lg-4">
            <img src="/wp-content/uploads/2022/03/cat_meat.png" class="mx-auto img-fluid">
        </div>

        <div class="row justify-content-center pt-3">
            <div class="col-md-4 d-grid">
                <a href="/" title="Przejdź na www.staropolska-masarnia.pl" class="btn-brand-brown">Przejdź na www.staropolska-masarnia.pl <i class="fa fa-angle-right"></i></a>
            </div>
        </div>

    </div>
</main><!-- #main -->

<?php
get_footer();
