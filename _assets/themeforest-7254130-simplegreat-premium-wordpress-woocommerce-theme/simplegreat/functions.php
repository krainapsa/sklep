<?php
/**
 * SimpleGreat functions
 *
 * @package SimpleGreat
 */

/*
 *	@@@ iPanel Path Constant @@@
*/
define( 'IPANEL_PATH' , get_template_directory() . '/iPanel/' ); 


/*
 *	@@@ iPanel URI Constant @@@
*/
define( 'IPANEL_URI' , get_template_directory_uri() . '/iPanel/' );


/*
 *	@@@ Usage Constant @@@
*/
define( 'IPANEL_PLUGIN_USAGE' , false );


/*
 *	@@@ Include iPanel Main File @@@
*/
include_once IPANEL_PATH . 'iPanel.php';

global $theme_options;
$theme_options = unserialize( base64_decode( get_option('SIMPLEGREAT_PANEL') ) );


if (!isset($content_width))
	$content_width = 640; /* pixels */

if (!function_exists('simplegreat_setup')) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function simplegreat_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on SimpleGreat, use a find and replace
	 * to change 'simplegreat' to the name of your theme in all the template files
	 */
	load_theme_textdomain('simplegreat', get_template_directory() . '/languages');

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support('automatic-feed-links');

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support('post-thumbnails');

	/**
	 * Enable support for Logo
	 */
	add_theme_support( 'custom-header', array(
	    'default-image' =>  get_template_directory_uri() . '/img/logo.png',
            'width'         => 433,
            'flex-width'    => true,
            'flex-height'   => false,
            'header-text'   => false,
	));

	/**
	 *	Woocommerce support
	 */
	add_theme_support( 'woocommerce' );
	
	/**
	 * Enable custom background support
	 */
	add_theme_support( 'custom-background' );
	/**
	 * Theme resize image.
	 */
	add_image_size( 'blog-thumb', 743, 400, true);

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
            'primary' => __('Categories Menu', 'simplegreat'),
            'top' => __('Top Menu', 'simplegreat'),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support('post-formats', array('aside', 'image', 'gallery', 'video', 'audio', 'quote', 'link', 'status', 'chat'));
}
endif;
add_action('after_setup_theme', 'simplegreat_setup');

/**
 * 	Remove admin bar from frontend to not break slider layout
 **/
/*function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');
*/
/**
 * Enqueue scripts and styles
 */
function simplegreat_scripts() {
	global $theme_options;

	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'bootstrap' );

	wp_register_style('stylesheet', get_stylesheet_uri(), array(), '1.0', 'all');
	wp_enqueue_style( 'stylesheet' );

	wp_register_style('responsive', get_template_directory_uri() . '/responsive.css', '1.0', 'all');
	wp_enqueue_style( 'responsive' );

	if(isset($theme_options['enable_theme_animations']) && $theme_options['enable_theme_animations']) {
		wp_register_style('animations', get_template_directory_uri() . '/css/animations.css');
		wp_enqueue_style( 'animations' );
	}

	wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
	wp_register_style('flexslider', get_template_directory_uri() . '/css/flexslider.css');
	wp_register_style('bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css');
	
	wp_enqueue_style( 'font-awesome' );
	wp_enqueue_style( 'flexslider' );
	wp_enqueue_style( 'bxslider' );
	
	wp_register_script('simplegreat-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.1.1', true);
	wp_register_script('simplegreat-easing', get_template_directory_uri() . '/js/easing.js', array(), '1.3', true);
	wp_register_script('simplegreat-flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), '1.0', true);
	wp_register_script('simplegreat-bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array(), '1.0', true);
	wp_register_script('simplegreat-template', get_template_directory_uri() . '/js/template.js', array(), '1.0', true);
	wp_register_script('simplegreat-twitter', get_template_directory_uri() . '/js/twitter/jquery.tweet.min.js', array(), '1.0', true);
	wp_register_script('simplegreat-parallax', get_template_directory_uri() . '/js/jquery.parallax.js', array(), '1.1.3', true);
	wp_register_script('simplegreat-skrollr', get_template_directory_uri() . '/js/skrollr.min.js', array(), '0.5.14', true);
	
	wp_enqueue_script('simplegreat-script', get_template_directory_uri() . '/js/template.js', array('jquery', 'simplegreat-bootstrap', 'simplegreat-easing', 'simplegreat-flexslider', 'simplegreat-bxslider', 'simplegreat-twitter', 'simplegreat-parallax', 'simplegreat-skrollr'), '1.0', true);
	
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'simplegreat_scripts');

function simplegreat_html5_shim() {
    global $is_IE;
    if ( $is_IE ) {
        echo '<!--[if lt IE 9]>';
        echo '<script src="' . get_template_directory_uri() . '/js/html5shiv.js" type="text/javascript"></script>';
        echo '<![endif]-->';
    }
}
add_action( 'wp_head', 'simplegreat_html5_shim' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/theme-tags.php';

/**
 * Load theme functions.
 */
require get_template_directory() . '/inc/theme-functions.php';

/**
 * Load theme metaboxes.
 */
require get_template_directory() . '/inc/theme-metaboxes.php';
