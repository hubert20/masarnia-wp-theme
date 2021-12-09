<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="tBgiZRfvSDcp9Gyx8xkJfV-U2FF43aL1zZ6uWdpKQaI" />
    <meta name="facebook-domain-verification" content="vrzggwgsceo16fkoy9kcs9farvzk5m" />
    <meta name="ahrefs-site-verification" content="4d56b4fb3fa12f345d4ce8b69df86f58e2ca266f14bfea0e8a4d80e1c0ecf00a">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php if (!is_page_template('blank-page.php') && !is_page_template('blank-page-with-container.php') && !is_page_template('templates/page-jedenprocent.php') && !is_page_template('templates/page-jedenprocent-rozlicz-pit.php') && !is_page_template('templates/page-jedenprocent-rozliczenie.php') && !is_page_template('templates/page-jedenprocent-pit.php') && !is_page_template('templates/page-raport-o-biedzie-2019.php')) : ?>
        <header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
            <div class="container">
                <nav class="navbar navbar-expand-xl p-0">
                    <div class="navbar-brand d-xl-none">
                        <?php if (get_theme_mod('wp_bootstrap_starter_logo')) : ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                                <?php if (is_page('lider-w-akademii') || is_page('wolontariat-w-akademii')) : ?>
                                    <img src="https://www.szlachetnapaczka.pl/wp-content/uploads/2021/09/logo-ap.png" alt="Akademia Przyszłości" class="img-fluid wolo-logo-ap">
                                <?php else : ?>
                                    <img src="<?php echo esc_url(get_theme_mod('wp_bootstrap_starter_logo')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                                <?php endif; ?>
                            </a>
                        <?php else : ?>
                            <a class="site-title" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_url(bloginfo('name')); ?></a>
                        <?php endif; ?>
                    </div>

                    <?php if (is_page_template('templates/page-akademia-przyszlosci.php')) : ?>
                        <a class="btn-white-bg-red btn-sm d-block d-xl-none px-1 btn-radius-more" href="https://akademiaprzyszlosci.org.pl/wybieram-dziecko/?action=indeks&place=menutop" title="Wspieram Dziecko">Wspieram Dziecko <i class="fa fa-angle-right"></i></a>
                    <?php elseif (is_page('superw')) : ?>
                        <a class="btn-white-bg-red btn-sm d-block d-sm-block d-md-none d-lg-block d-xl-none btn-radius-more" href="https://www.szlachetnapaczka.pl/superw/zgloszenie/?action=superw&place=menu_mobile" title="Chcę się zgłosić">Chcę się zgłosić <i class="fa fa-angle-right"></i></a>
                    <?php elseif (is_page('lider-w-paczce')) : ?>
                        <a class="btn-white-bg-red btn-sm d-block d-sm-block d-md-none d-lg-block d-xl-none btn-radius-more" href="https://www.superw.pl/zostan-liderem-paczki/?action=superw&place=menu_mobile" title="Chcę się zgłosić" id="menu_liderSP">Chcę się zgłosić <i class="fa fa-angle-right"></i></a>
                    <?php elseif (is_page('lider-w-akademii')) : ?>
                        <a class="btn-white-bg-red btn-sm d-block d-sm-block d-md-none d-lg-block d-xl-none btn-radius-more" href="https://www.superw.pl/zostan-liderem-akademii/?action=superw&place=menu_mobile" title="Chcę się zgłosić" id="menu_liderAP">Chcę się zgłosić <i class="fa fa-angle-right"></i></a>
                    <?php elseif (is_page('wolontariat-w-paczce')) : ?>
                        <a class="btn-white-bg-red btn-sm d-block d-sm-block d-md-none d-lg-block d-xl-none btn-radius-more" href="https://www.superw.pl/zostan-wolontariuszem-paczki/?action=superw&place=menu_mobile" title="Chcę się zgłosić" id="menu_woloSP">Chcę się zgłosić <i class="fa fa-angle-right"></i></a>
                    <?php elseif (is_page('wolontariat-w-akademii')) : ?>
                        <a class="btn-white-bg-red btn-sm d-block d-sm-block d-md-none d-lg-block d-xl-none btn-radius-more" href="https://www.superw.pl/zostan-wolontariuszem-akademii/?action=superw&place=menu_mobile" title="Chcę się zgłosić" id="menu_woloAP">Chcę się zgłosić <i class="fa fa-angle-right"></i></a>
                    <?php elseif (is_page_template('templates/page-superw-listing.php')) : ?>
                        <a class="btn-white-bg-red btn-sm d-block d-sm-block d-md-none d-lg-block d-xl-none btn-radius-more" href="https://www.szlachetnapaczka.pl/superw/zgloszenie/?action=superw&place=menu_mobile" title="Chcę się zgłosić">Chcę się zgłosić <i class="fa fa-angle-right"></i></a>
                    <?php elseif (is_page_template('templates/page-superw-faq.php')) : ?>
                        <a class="btn-white-bg-red btn-sm d-block d-sm-block d-md-none d-lg-block d-xl-none btn-radius-more" href="https://www.szlachetnapaczka.pl/superw/zgloszenie/?action=superw&place=menu_mobile" title="Chcę się zgłosić">Chcę się zgłosić <i class="fa fa-angle-right"></i></a>
                    <?php elseif (is_page_template('templates/page-miasta.php')) : ?>
                        <a class="btn-white-bg-red btn-sm d-block d-sm-block d-md-none d-lg-block d-xl-none btn-radius-more" href="https://www.szlachetnapaczka.pl/superw/zgloszenie/?action=superw&place=menu_mobile" title="Chcę się zgłosić">Chcę się zgłosić <i class="fa fa-angle-right"></i></a>
                    <?php elseif (is_page_template('templates/page-pomagam-bo.php')) : ?>
                        <a class="small-mobile-btn btn-white-bg-red btn-sm d-block d-sm-block d-md-none d-lg-block d-xl-none" href="https://www.szlachetnapaczka.pl/superw/?action=superw&place=menu" title="Zgłaszam się">Zgłaszam się <i class="fa fa-angle-right"></i></a>
                    <?php elseif (is_page('kontakt') || is_page('raport-o-obojetnieniu')) : ?>
                        <a class="btn-white-bg-red btn-sm d-block d-xl-none btn-radius-more" href="https://www.szlachetnapaczka.pl/superw/zgloszenie/?action=superw&place=menu_mobile" title="Chcę się zgłosić">Chcę się zgłosić <i class="fa fa-angle-right"></i></a>
                    <?php elseif (is_page('zgloszenie')) : ?>
                    <?php else : ?>
                        <a class="small-mobile-btn btn-white-bg-red btn-sm d-block d-xl-none btn-radius-more" href="https://www.szlachetnapaczka.pl/wplacam/?action=wplata&place=menu-mobile" title="Wpłacam">Wpłacam <i class="fa fa-angle-right"></i></a>
                    <?php endif; ?>

                    <?php /*<a class="small-mobile-btn btn-white-bg-red btn-sm d-block d-xl-none" href="https://www.szlachetnapaczka.pl/jedenprocent/?action=jedenprocent&place=menu-mobile" title="Przyznaję 1%">Przyznaję 1% <i class="fa fa-angle-right"></i></a>*/ ?>

                    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php
                    if (is_tree(90726)) {
                        $menu = 'pomagam';
                    } elseif (is_tree(2967)) {
                        $menu = 'superw';
                    } elseif (in_category('artykuly-wolontariat')) {
                        $menu = 'superw';
                    } elseif (is_tree(7768)) {
                        $menu = 'role-wolo';
                    } elseif (in_category('9875')) {
                        $menu = 'pomagam';
                    } else {
                        $menu = 'primary';
                    }
                    ?>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => $menu,
                        'container' => 'div',
                        'container_id' => 'main-nav',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_id' => false,
                        'menu_class' => 'navbar-nav',
                        'depth' => 3,
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        'walker' => new wp_bootstrap_navwalker()
                    ));
                    ?>
                </nav>
            </div>
        </header><!-- #masthead -->
    <?php endif; ?>