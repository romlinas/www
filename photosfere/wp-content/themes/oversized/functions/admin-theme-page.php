<?php
function photographythemes_more_themes_setup() {

    add_menu_page("photographyThemes", "photographyThemes", 'edit_themes', 'more-photographythemes', 'photographythemes_more_themes_page', 'http://www.photographythemes.com/favicon.ico');

}

function photographythemes_more_themes_page(){

       //global $options, $themename, $manualurl;
        
        ?>
        <style>
        ul.themes {}
        ul.themes li.theme {border-bottom: 1px #ddd solid; padding: 20px 0;}
        ul.themes li.theme .image{float: left}
        ul.themes li.theme .image img{ width: 350px; }
        ul.themes li.theme .theme-info {margin-left: 370px; }
        ul.themes li.theme .theme-info h2.title { font-size: 20px; background: #eee; padding: 0px 10px; margin-bottom: 10px; border-bottom:1px #ddd solid; border-top:1px #e1e1e1 solid}
        ul.themes li.theme .theme-info h2.title a:link, 
        ul.themes li.theme .theme-info h2.title a:visited {  color: #555; text-decoration: none; font-style: normal;}
        
        ul.themes li.theme .theme-info .entry { width: 400px; padding-left: 5px;}
        ul.themes li.theme .theme-info .entry p{ font-size: 12px!important;  margin: 20px 10px 25px 10px; }
        ul.themes li.theme .theme-info ul {padding-left: 0px; color: #ccc; float:left; border-top:#eee 1px solid; padding-top: 10px; }
        ul.themes li.theme .theme-info ul li { list-style: disc; list-style-position:inside; padding-left:20px;}
        ul.themes li.theme .theme-info ul li a:link, 
        ul.themes li.theme .theme-info ul li a:visited { font-size: 12px!important; text-decoration: none;}
        ul.themes li.theme .theme-info ul li a:hover, 
        ul.themes li.theme .theme-info ul li a:active { text-decoration: underline ;}

        
        
        </style>
        <div class="wrap">
          <h2>More photographyThemes</h2>
          <div class="info">
          <a href="http://www.photographythemes.com/the-photographythemes-club/">Join the photographyThemes Club</a> / <a href="http://www.photographythemes.com/category/themes/">Online Themes Gallery</a> / <a href="http://showcase.photographythemes.com/">Theme Showcase</a>
          </div>
          
          
            <?php // Get RSS Feed(s)
            include_once(ABSPATH . WPINC . '/rss.php');
            $rss = fetch_rss('http://www.photographythemes.com/?feed=more_themes');
            $maxitems = 5000;
            $items = array_slice($rss->items, 0, $maxitems);
            ?>

            <ul class="themes">
            <?php if (empty($items)) echo '<li>No items</li>';
            else
            foreach ( $items as $item ) : ?>

            <li class="theme">
            <?php echo $item['description']; ?>
            </li>

            <?php endforeach; ?>
            </ul>
            
            </div>
         
         <?php

};

function photographythemes_more_themes_head() { 
         $style = $_REQUEST[style];
     if ($style != '') {
          ?> <link href="<?php bloginfo('template_directory'); ?>/styles/<?php echo $style; ?>.css" rel="stylesheet" type="text/css" /><?php 
     } else { 
          $stylesheet = get_option('photography_alt_stylesheet');
          if($stylesheet != ''){
               ?><link href="<?php bloginfo('template_directory'); ?>/styles/<?php echo $stylesheet; ?>" rel="stylesheet" type="text/css" /><?php         
          }
     }     
}


?>