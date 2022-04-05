<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Enqueue scripts and styles.
 */
function wp_masarnia_scripts()
{
  // load bootstrap & AItheme styles css
  global $ver_num;
  $ver_num = mt_rand();
  wp_enqueue_style('wp-masarnia-css', get_template_directory_uri() . '/dist/style.css', array(), $ver_num, 'all');
  wp_enqueue_style('font-awesome-4', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), null);
  wp_enqueue_script('jquery');
  wp_enqueue_script('my_javascript_file', get_template_directory_uri() . '/dist/main.bundle.js', array('jquery'), $ver_num);

  // Page strefa-darczyncy
  if (is_page_template('templates/mainpage.php')) {
    wp_enqueue_script('firefly-js', get_template_directory_uri() . '/vendor/jquery.firefly-0.7.min.js', array('jquery'), '', true);
  }
}
add_action('wp_enqueue_scripts', 'wp_masarnia_scripts');

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

// bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
  private $current_item;
  private $dropdown_menu_alignment_values = [
    'dropdown-menu-start',
    'dropdown-menu-end',
    'dropdown-menu-sm-start',
    'dropdown-menu-sm-end',
    'dropdown-menu-md-start',
    'dropdown-menu-md-end',
    'dropdown-menu-lg-start',
    'dropdown-menu-lg-end',
    'dropdown-menu-xl-start',
    'dropdown-menu-xl-end',
    'dropdown-menu-xxl-start',
    'dropdown-menu-xxl-end'
  ];

  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $dropdown_menu_class[] = '';
    foreach ($this->current_item->classes as $class) {
      if (in_array($class, $this->dropdown_menu_alignment_values)) {
        $dropdown_menu_class[] = $class;
      }
    }
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ", $dropdown_menu_class)) . " depth_$depth\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $this->current_item = $item;

    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
    $classes[] = 'nav-item';
    $classes[] = 'nav-item-' . $item->ID;
    if ($depth && $args->walker->has_children) {
      $classes[] = 'dropdown-menu dropdown-menu-end';
    }

    $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
    $nav_link_class = ($depth > 0) ? 'dropdown-item ' : 'nav-link ';
    $attributes .= ($args->walker->has_children) ? ' class="' . $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="' . $nav_link_class . $active_class . '"';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}
// register a new menu
register_nav_menu('main-menu', 'Main menu');

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

add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false);
  }
  return $title;
});

// Ccrossorigin Font-awsome 4
function add_font_awesome_4_cdn_attributes($html, $handle)
{
  if ('font-awesome-4' === $handle) {
    return str_replace("media='all'", "media='all' integrity='sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=' crossorigin='anonymous'", $html);
  }
  return $html;
}
add_filter('style_loader_tag', 'add_font_awesome_4_cdn_attributes', 10, 2);

// Support posts images

// First we'll add support for featured images
add_theme_support('post-thumbnails');

// Then we'll add our 2 custom images
add_image_size('blog-width', 530, 350, true);
add_image_size('news-width', 450, 450, true);

// And then we'll add the custom size that spans the width of the blog to the Gutenberg image dropdown
add_filter('image_size_names_choose', 'wpmudev_custom_image_sizes');

function wpmudev_custom_image_sizes($sizes)
{
  return array_merge($sizes, array(
    'blog-width' => __('Blog Width'),
    'news-width' => __('News Width'),
  ));
}

// Gets post cat slug and looks for single-[cat slug].php and applies it
add_filter('single_template', function ($the_template) {
  foreach ((array) get_the_category() as $cat) {
    if (file_exists(TEMPLATEPATH . "/templates/single-{$cat->slug}.php"))
      return TEMPLATEPATH . "/templates/single-{$cat->slug}.php";
  }
});

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
