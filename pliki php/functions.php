<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
define('SITE_NAMESPACE', 'Site\\');

spl_autoload_register(function ($class) {
    $baseDirectory = __DIR__ . '/site/';

    $namespacePrefixLength = strlen(SITE_NAMESPACE);

    if (strncmp(SITE_NAMESPACE, $class, $namespacePrefixLength) !== 0) {
        return;
    }

    $relativeClassName = substr($class, $namespacePrefixLength);

    $classFilename = $baseDirectory . str_replace('\\', '/', $relativeClassName) . '.php';

    if (file_exists($classFilename)) {
        require $classFilename;
    }
});


define('IMAGES', get_template_directory_uri() . '/images/');


/**
 * WP Bootstrap Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_Starter
 */

if (!function_exists('wp_bootstrap_starter_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function wp_bootstrap_starter_setup()
    {
        /*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WP Bootstrap Starter, use a find and replace
	 * to change 'wp-bootstrap-starter' to the name of your theme in all the template files.
	 */
        load_theme_textdomain('wp-bootstrap-starter', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
        add_theme_support('title-tag');

        /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary', 'wp-bootstrap-starter'),
            'superw' => esc_html__('superw', 'wp-bootstrap-starter'),
            'role-wolo' => esc_html__('role-wolo', 'wp-bootstrap-starter'),
            'pomagam' => esc_html__('pomagam', 'wp-bootstrap-starter'),
        ));

        /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
        add_theme_support('html5', array(
            'comment-form',
            'comment-list',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('wp_bootstrap_starter_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        function wp_boostrap_starter_add_editor_styles()
        {
            add_editor_style('custom-editor-style.css');
        }
        add_action('admin_init', 'wp_boostrap_starter_add_editor_styles');
    }
endif;
add_action('after_setup_theme', 'wp_bootstrap_starter_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_starter_content_width()
{
    $GLOBALS['content_width'] = apply_filters('wp_bootstrap_starter_content_width', 1170);
}
add_action('after_setup_theme', 'wp_bootstrap_starter_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_starter_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'wp-bootstrap-starter'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Footer 1', 'wp-bootstrap-starter'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
        'before_widget' => '<div id="%1$s" class="bottom-nav-menu widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="bottom-nav-menu__title mb-2 mb-lg-3 font-weight-bold">',
        'after_title'   => '</h5>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Footer 2', 'wp-bootstrap-starter'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
        'before_widget' => '<div id="%1$s" class="bottom-nav-menu widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="bottom-nav-menu__title mb-2 mb-lg-3 font-weight-bold">',
        'after_title'   => '</h5>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Footer 3', 'wp-bootstrap-starter'),
        'id'            => 'footer-3',
        'description'   => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
        'before_widget' => '<div id="%1$s" class="bottom-nav-menu widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="bottom-nav-menu__title mb-2 mb-lg-3 font-weight-bold">',
        'after_title'   => '</h5>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Footer 4', 'wp-bootstrap-starter'),
        'id'            => 'footer-4',
        'description'   => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
        'before_widget' => '<div id="%1$s" class="bottom-nav-menu newsletter widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="bottom-nav-menu__title font-weight-bold">',
        'after_title'   => '</h5>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Footer 5', 'wp-bootstrap-starter'),
        'id'            => 'footer-5',
        'description'   => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
        'before_widget' => '<div id="%1$s" class="bottom-nav-menu bottom-custom widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="bottom-nav-menu__title font-weight-bold">',
        'after_title'   => '</h5>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Footer 6', 'wp-bootstrap-starter'),
        'id'            => 'footer-6',
        'description'   => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
        'before_widget' => '<div id="%1$s" class="bottom-nav-menu bottom-custom widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="bottom-nav-menu__title font-weight-bold">',
        'after_title'   => '</h5>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Footer 7', 'wp-bootstrap-starter'),
        'id'            => 'footer-7',
        'description'   => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
        'before_widget' => '<div id="%1$s" class="bottom-nav-menu bottom-custom widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="bottom-nav-menu__title font-weight-bold">',
        'after_title'   => '</h5>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Footer 8', 'wp-bootstrap-starter'),
        'id'            => 'footer-8',
        'description'   => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
        'before_widget' => '<div id="%1$s" class="bottom-footer bottom-custom widget %2$s">',
        'after_widget'  => '</div>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Footer 9', 'wp-bootstrap-starter'),
        'id'            => 'footer-9',
        'description'   => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
        'before_widget' => '<div id="%1$s" class="bottom-footer bottom-custom widget %2$s">',
        'after_widget'  => '</div>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Layer campaign', 'wp-bootstrap-starter'),
        'id'            => 'layer-campaign',
        'description'   => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
        'before_widget' => '',
        'after_widget'  => '',
    ));
}
add_action('widgets_init', 'wp_bootstrap_starter_widgets_init');




/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_starter_scripts()
{
    // load bootstrap & AItheme styles css
    global $ver_num; // define global variable for the version number
    $ver_num = mt_rand(); // on each call/load of the style the $ver_num will get different value
    wp_enqueue_style('wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/dist/css/theme.min.css', array(), $ver_num, 'all');
    wp_enqueue_style('aos-css', get_template_directory_uri() . '/vendor/aos.css', array(), '', 'all');
    //wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/css/theme.min.css?1234124' );
    // Load fonts pippe &

    wp_enqueue_script('jquery');

    // load bootstrap js
    wp_enqueue_script('wp-bootstrap-starter-themejs', get_template_directory_uri() . '/dist/js/scripts.min.js', array(), $ver_num, true);
    wp_enqueue_script('sticky-polyfill', get_template_directory_uri() . '/vendor/stickyfill.min.js', array('jquery'), '', false);
    wp_enqueue_script('aos-js', get_template_directory_uri() . '/vendor/aos.js', array('jquery'), '', false);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    // Page komu-pomagamy
    if (is_page_template('templates/page-komu-pomagamy.php')) {
        wp_enqueue_script('swiper-js', get_template_directory_uri() . '/vendor/swiper.min.js', array('jquery'), '', true);
        wp_enqueue_script('komu-pomagamy-js', get_template_directory_uri() . '/dist/js/page/komu-pomagamy.min.js', array(), '', true);

        wp_enqueue_style('swiper-css', get_template_directory_uri() . '/vendor/swiper.min.css', array('wp-bootstrap-starter-bootstrap-css'), '', 'all');
    }

    // Page raport-o-samotnosci
    if (is_page_template('templates/page-raport-o-samotnosci-2020.php') || is_page_template('templates/page-raport-o-samotnosci-2021.php')) {
        wp_enqueue_script('swiper-js', get_template_directory_uri() . '/vendor/swiper.min.js', array('jquery'), '', true);
        wp_enqueue_script('raport-o-samotnosci-js', get_template_directory_uri() . '/dist/js/page/raport-o-samotnosci.min.js', array(), '', true);
        wp_enqueue_style('swiper-css', get_template_directory_uri() . '/vendor/swiper.min.css', array('wp-bootstrap-starter-bootstrap-css'), '', 'all');
    }

    // Page paczka-news
    if (is_page_template('templates/page-paczka-news.php')) {
        wp_enqueue_script('paczka-news-js', get_template_directory_uri() . '/dist/js/page/paczka-news.min.js', array(), '', true);
    }

    // Page wspieraja-nas
    if (is_page_template('templates/page-wspieraja-nas.php')) {
        wp_enqueue_script('wspieraja-nas-js', get_template_directory_uri() . '/dist/js/page/wspieraja-nas.min.js', array(), '', true);
    }

    // Page jedenprocent
    if (is_page_template('templates/page-jedenprocent.php')) {
        wp_enqueue_script('jedenprocent-js', get_template_directory_uri() . '/dist/js/page/jedenprocent.min.js', array(), '', true);
    }

    // Page jedenprocent & PiTax 
    if (is_page_template('templates/page-jedenprocent-rozlicz-pit.php')) {
        wp_enqueue_script('jedenprocent-js', get_template_directory_uri() . '/dist/js/page/jedenprocent.min.js', array(), '', true);
    }

    // Page jedenprocent dziękujemy za przekazanie
    if (is_page_template('templates/page-jedenprocent-dziekujemy.php')) {
        //wp_enqueue_script('jedenprocent-dziekujemy-js', get_template_directory_uri() . '/dist/js/page/jedenprocent-dziekujemy.min.js', array(), '', true);
        //wp_enqueue_style('starestyle-dziekujemy', get_template_directory_uri() . '/vendor/stare-strony/jedenprocent-dziekujemy.css', array(), '', 'all');
    }

    // Page superw-faq
    if (is_page_template('templates/page-superw-faq.php')) {
        wp_enqueue_script('superw-faq-js', get_template_directory_uri() . '/dist/js/page/superw-faq.min.js', array(), '', true);
    }

    // Page jedenprocent-listing
    if (is_page_template('templates/page-jedenprocent-listing.php')) {
        wp_enqueue_script('jedenprocent-listing-js', get_template_directory_uri() . '/dist/js/page/jedenprocent-listing.min.js', array(), '', true);
    }

    // Page superw-listing
    if (is_page_template('templates/page-superw-listing.php')) {
        wp_enqueue_script('superw-listing-js', get_template_directory_uri() . '/dist/js/page/superw-listing.min.js', array(), '', true);
    }

    // Page superw-main & superw-role
    if (is_page_template('templates/page-superw-main.php') || is_page_template('templates/page-superw-role.php')) {
        wp_enqueue_script('swiper-js', get_template_directory_uri() . '/vendor/swiper.min.js', array('jquery'), '', true);
        wp_enqueue_script('superw-main-js', get_template_directory_uri() . '/dist/js/page/superw-main.min.js', array(), '', true);
        wp_enqueue_style('swiper-css', get_template_directory_uri() . '/vendor/swiper.min.css', array('wp-bootstrap-starter-bootstrap-css'), '', 'all');
    }

    // Page Poradnik darczyńcy
    if (is_page_template('templates/page-poradnik-darczyncy.php')) {
        wp_enqueue_script('poradnik-darczyncy-js', get_template_directory_uri() . '/dist/js/page/poradnik-darczyncy.min.js', array(), '', true);
    }

    // Page raport-o-biedzie-2019
    if (is_page_template('templates/page-raport-o-biedzie-2019.php')) {
        wp_enqueue_script('waypoints', get_template_directory_uri() . '/vendor/noframework.waypoints.min.js', array('jquery'), '', false);
        wp_enqueue_script('scroll-out', get_template_directory_uri() . '/vendor/scroll-out.min.js', array('jquery'), '', false);
        wp_enqueue_script('scrollMagic-plugin-TweenMax', get_template_directory_uri() . '/vendor/TweenMax.min.js', array('jquery'), '', false);
        wp_enqueue_script('scrollMagic-plugin-ScrollToPlugin', get_template_directory_uri() . '/vendor/ScrollToPlugin.min.js', array('jquery'), '', false);
        wp_enqueue_script('scrollMagic', get_template_directory_uri() . '/vendor/ScrollMagic.min.js', array('jquery'), '', false);
        wp_enqueue_script('scrollMagic-plugin-gsap', get_template_directory_uri() . '/vendor/animation.gsap.min.js', array('jquery'), '', false);
        wp_enqueue_script('scrollMagic-plugin-addIndicators', get_template_directory_uri() . '/vendor/debug.addIndicators.min.js', array('jquery'), '', false);
        wp_enqueue_script('raport-o-biedzie-2019-js', get_template_directory_uri() . '/dist/js/page/raport-o-biedzie-2019.min.js', array(), $ver_num, true);
    }

    // Page paczka-na-swieta
    if (is_page_template('templates/page-paczka-na-swieta.php')) {
        wp_enqueue_script('slick-script', get_template_directory_uri() . '/vendor/slick.min.js', array('jquery'), '', false);
        wp_enqueue_script('paczka-na-swieta-js', get_template_directory_uri() . '/dist/js/page/paczka-na-swieta.min.js', array(), '', true);
    }

    // Biedronka
    if (is_page_template('templates/page-biedronka.php')) {
        wp_enqueue_script('swiper-js', get_template_directory_uri() . '/vendor/swiper.min.js', array('jquery'), '', true);
        wp_enqueue_style('swiper-css', get_template_directory_uri() . '/vendor/swiper.min.css', array('wp-bootstrap-starter-bootstrap-css'), '', 'all');
    }

    // Page partnerzy-dla-paczki
    if (is_page_template('templates/page-partnerzy-dla-paczki.php')) {
        wp_enqueue_script('partnerzy-dla-paczki', get_template_directory_uri() . '/dist/js/page/partnerzy-dla-paczki.min.js', array(), '', true);
    }

    // Page bohaterska-wyobraznia
    if (is_page_template('templates/page-bohaterska-wyobraznia.php')) {
        wp_enqueue_script('bohaterska-wyobraznia-js', get_template_directory_uri() . '/dist/js/page/bohaterska-wyobraznia.min.js', array(), '', true);
    }

    // Page pomagam bo
    if (is_page_template('templates/page-pomagam-bo.php') || in_category('9875')) {
        wp_enqueue_script('pomagam-bo-js', get_template_directory_uri() . '/dist/js/page/pomagam-bo.min.js', array(), '', true);
    }

    // Page wyniki-2019
    if (is_page_template('templates/page-wyniki-2019.php')) {
        wp_enqueue_script('wyniki-2019-js', get_template_directory_uri() . '/dist/js/page/wyniki-2019.min.js', array(), $ver_num, true);
    }
}
add_action('wp_enqueue_scripts', 'wp_bootstrap_starter_scripts');



function wp_bootstrap_starter_password_form()
{
    global $post;
    $label = 'pwbox-' . (empty($post->ID) ? rand() : $post->ID);
    $o = '<form action="' . esc_url(site_url('wp-login.php?action=postpass', 'login_post')) . '" method="post">
    <div class="d-block mb-3">' . __("To view this protected post, enter the password below:", "wp-bootstrap-starter") . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __("Password:", "wp-bootstrap-starter") . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__("Submit", "wp-bootstrap-starter") . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter('the_password_form', 'wp_bootstrap_starter_password_form');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load plugin compatibility file.
 */
require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';

/**
 * Load custom WordPress nav walker.
 */
if (!class_exists('wp_bootstrap_navwalker')) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}


// Gets post cat slug and looks for single-[cat slug].php and applies it
add_filter('single_template', function ($the_template) {
    foreach ((array) get_the_category() as $cat) {
        if (file_exists(TEMPLATEPATH . "/templates/single-{$cat->slug}.php"))
            return TEMPLATEPATH . "/templates/single-{$cat->slug}.php";
    }
});

// EXCERPT/ ZAJAWKA LENGTH

function mytheme_custom_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'mytheme_custom_excerpt_length', 999);

// Orhpans & acf
function acf_orphans($value, $post_id, $field)
{
    if (class_exists('iworks_orphan')) {
        $orphan = new \iworks_orphan();
        $value = $orphan->replace($value);
    }
    return $value;
}
add_filter('acf/format_value/type=textarea', 'acf_orphans', 10, 3);
add_filter('acf/format_value/type=wysiwyg', 'acf_orphans', 10, 3);

// IF IS PAGE CHILD TREE
function is_tree($pid)
{      // $pid = The ID of the page we're looking for pages underneath
    global $post;         // load details about this page
    if (is_page() && ($post->post_parent == $pid || is_page($pid)))
        return true;   // we're at the page or at a sub page
    else
        return false;  // we're elsewhere
};

add_filter('show_admin_bar', '__return_false');


// Support blog images
// First we'll add support for featured images
add_theme_support('post-thumbnails');

// Then we'll add our 2 custom images
add_image_size('simple-width', 830, 450, true);

// And then we'll add the custom size that spans the width of the blog to the Gutenberg image dropdown
add_filter('image_size_names_choose', 'wpmudev_custom_image_sizes');

function wpmudev_custom_image_sizes($sizes)
{
    return array_merge($sizes, array(
        'blog-width' => __('Simple width'),
    ));
}

add_filter('body_class', 'add_category_to_single');
function add_category_to_single($classes)
{
    if (is_single()) {
        global $post;
        foreach ((get_the_category($post->ID)) as $category) {
            // add category slug to the $classes array
            $classes[] = 'cat-' . $category->category_nicename;
        }
    }
    // return the $classes array
    return $classes;
}
