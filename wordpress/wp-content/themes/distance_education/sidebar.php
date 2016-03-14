<!-- sidebar start -->
		<div id="sidebar">
        	<div id="rss"><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/spacer.gif" alt="RSS" /></a></div>
			<div id="welcome"><p><?php include(TEMPLATEPATH . '/welcome.php'); ?></p></div>
			<div id="sidebar_main" class="clearfix">
            <ul>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
                <li>
                    <h2>Рубрики</h2>
                    <ul>
                        <?php wp_list_cats('sort_column=name&optioncount=0&hierarchical=0'); ?>
                    </ul>
                </li>
                <li>
                    <h2>Архивы</h2>
                    <ul>
                        <?php wp_get_archives('type=monthly'); ?>
                    </ul>
                </li>
               
             <?php endif; ?>
			</ul>
			 </div>

		</div>
<!-- sidebar end -->
