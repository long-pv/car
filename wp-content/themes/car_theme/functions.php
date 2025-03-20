<?php

/**
 * car_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package car_theme
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function car_theme_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on car_theme, use a find and replace
		* to change 'car_theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('car_theme', get_template_directory() . '/languages');

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'car_theme'),
			'menu-footer' => esc_html__('Menu Footer', 'car_theme'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'car_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'car_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function car_theme_content_width()
{
	$GLOBALS['content_width'] = apply_filters('car_theme_content_width', 640);
}
add_action('after_setup_theme', 'car_theme_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function car_theme_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'car_theme'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'car_theme'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'car_theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function car_theme_scripts()
{
	wp_enqueue_style('car_theme-style', get_stylesheet_uri(), array(), _S_VERSION);

	// bootstrap js
	wp_enqueue_script('car_theme-script-bootstrap_bundle', get_template_directory_uri() . '/assets/inc/bootstrap/bootstrap.bundle.min.js', array('jquery'), _S_VERSION, true);

	// matchHeight
	wp_enqueue_script('car_theme-script-matchHeight', get_template_directory_uri() . '/assets/inc/matchHeight/jquery.matchHeight.js', array('jquery'), _S_VERSION, true);

	// scroll smooth hash id element
	wp_enqueue_script('basetheme-script-scroll_smooth', get_template_directory_uri() . '/assets/js/scroll_smooth.js', array('jquery'), _S_VERSION, true);

	// wow - effect
	wp_enqueue_style('basetheme-style-wow', get_template_directory_uri() . '/assets/inc/wow/wow.css', array(), _S_VERSION);
	wp_enqueue_script('basetheme-script-wow', get_template_directory_uri() . '/assets/inc/wow/wow.js', array('jquery'), _S_VERSION, true);
	// end

	// slick
	wp_enqueue_style('car_theme-style-slick-theme', get_template_directory_uri() . '/assets/inc/slick/slick-theme.css', array(), _S_VERSION);
	wp_enqueue_style('car_theme-style-slick', get_template_directory_uri() . '/assets/inc/slick/slick.css', array(), _S_VERSION);
	wp_enqueue_script('car_theme-script-slick', get_template_directory_uri() . '/assets/inc/slick/slick.min.js', array('jquery'), _S_VERSION, true);

	//add custom main css/js
	$main_css_file_path = get_template_directory() . '/assets/css/main.css';
	$longpv_js_file_path = get_template_directory() . '/assets/js/longpv.js';
	$vucoder_js_file_path = get_template_directory() . '/assets/js/vucoder.js';
	$ver_main_css = file_exists($main_css_file_path) ? filemtime($main_css_file_path) : '1.0.0';
	$ver_longpv_js = file_exists($longpv_js_file_path) ? filemtime($longpv_js_file_path) : '1.0.0';
	$ver_vucoder_js = file_exists($vucoder_js_file_path) ? filemtime($vucoder_js_file_path) : '1.0.0';
	wp_enqueue_style('dev_theme-style-main', get_template_directory_uri() . '/assets/css/main.css', array(), $ver_main_css);
	wp_enqueue_script('dev_theme-script-longpv', get_template_directory_uri() . '/assets/js/longpv.js', array('jquery'), $ver_longpv_js, true);
	wp_enqueue_script('dev_theme-script-vucoder', get_template_directory_uri() . '/assets/js/vucoder.js', array('jquery'), $ver_vucoder_js, true);

	// ajax admin
	wp_localize_script('dev_theme-script-main', 'custom_ajax', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'car_theme_scripts');

// Setup theme setting page
if (function_exists('acf_add_options_page')) {
	$name_option = 'Theme Settings';
	acf_add_options_page(
		array(
			'page_title' => $name_option,
			'menu_title' => $name_option,
			'menu_slug' => 'theme-settings',
			'capability' => 'edit_posts',
			'redirect' => false,
			'position' => 80
		)
	);
}

// include file
require get_template_directory() . '/inc/auto_active_plugin.php';
require get_template_directory() . '/inc/turn_off_wp_ver.php';
require get_template_directory() . '/inc/cpt_custom.php';
require get_template_directory() . '/inc/breadcrumbs.php';
require get_template_directory() . '/inc/write_log.php';
require get_template_directory() . '/inc/func_longpv.php';
require get_template_directory() . '/inc/func_vucoder.php';
