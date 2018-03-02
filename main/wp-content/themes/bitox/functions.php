<?php
/**
 * theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme
 */

if ( ! function_exists( 'theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function theme_setup() {
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

  /*
   * Image sizes
   */
  add_image_size( 'carousel-testimonials-avatar', 130, 130, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'theme' ),
    'social' => esc_html__( 'Social', 'theme' ),
    'footer' => esc_html__( 'Footer', 'theme' ),
    'footer-2' => esc_html__( 'Footer 2', 'theme' ),
    'footer-3' => esc_html__( 'Footer 3', 'theme' ),
    'footer-4' => esc_html__( 'Footer 4', 'theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

  add_theme_support( 'custom-logo' );
}
endif;
add_action( 'after_setup_theme', 'theme_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function theme_scripts() {
	// Styles
	//wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
  wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:300,400,500,700' );
  wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/dist/vendor/slick-carousel/slick/slick.css' );
	wp_enqueue_style( 'theme-main-style', get_template_directory_uri() . '/assets/dist/main.css' );
	wp_enqueue_style( 'theme-custom-style', get_template_directory_uri() . '/assets/css/custom.css' );
  // Scripts
  wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/dist/vendor/slick-carousel/slick/slick.js', array('jquery'), false, true );
	wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/scripts/main.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

/**
 * Register taxonomies for Page post-type (category, etc)
 */
function register_taxonomies_for_pages() {
  register_taxonomy_for_object_type( 'category', 'page' );
}
add_action( 'init', 'register_taxonomies_for_pages' );

/**
 * Clear WP HEAD
 */
require get_template_directory() . '/include/helpers.php';

/**
 * Clear WP HEAD
 */
require get_template_directory() . '/include/clear-wp-head.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/include/customizer.php';

/**
 * Create custom post types.
 */
require get_template_directory() . '/include/custom-post-type.php';

/**
 * Theme settings
 * One page with custom fields for all theme features (Carousels, etc).
 */
require get_template_directory() . '/include/theme-settings.php';
