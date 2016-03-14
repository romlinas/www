  <div id="secondary_content">
    
<?php include (TEMPLATEPATH . '/searchform.php'); ?>

      <div id="secondary_nav">
            
        
        <ul>
          
          <?php   /* Widgetized sidebar, if you have the plugin installed. */
              if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
          
          <li>
            <h2>Архивы</h2>
            <ul>
              <?php wp_get_archives('type=monthly'); ?>
            </ul>
          </li>  
            <?php wp_list_categories('show_count=1&title_li=<h2>Рубрики</h2>'); ?>
          <?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
            <?php wp_list_bookmarks(); ?>
          <li>
            <h2>Meta</h2>
            <ul>
              <?php wp_register(); ?>
              <li><?php wp_loginout(); ?></li>            
              <li><a href="http://wordpress.org/" title="Разработано на WordPress">WordPress</a></li>
              <?php wp_meta(); ?>
            </ul>
          </li>
        </ul>
        <?php } ?>

        <?php endif; ?>
        
      </div>
      
  </div>

