<?php get_header(); ?>
<div class="art-content-layout">
    <div class="art-content-layout-row">
        <div class="art-layout-cell art-content">
			<?php get_sidebar('top'); ?>
			<?php 
				if (have_posts()){
				
					global $posts;
					$post = $posts[0];
					
					ob_start();
			
					if (is_category()) {
					
						echo '<h4>'. single_cat_title( '', false ) . '</h4>';
						echo category_description();
						
					} elseif( is_tag() ) {
					
						echo '<h4>'. single_tag_title('', false) . '</h4>';
						
					} elseif( is_day() ) {
					
						echo '<h4>'. sprintf(__('Архивы за день: <span>%s</span>', THEME_NS), get_the_date()) . '</h4>';
						
					} elseif( is_month() ) {
					
						echo '<h4>'. sprintf(__('Архивы за месяц: <span>%s</span>', THEME_NS), get_the_date('F Y')) . '</h4>';
						
					} elseif( is_year() ) {
					
						echo '<h4>'. sprintf(__('Архивы за год: <span>%s</span>', THEME_NS), get_the_date('Y')) . '</h4>';
						
					} elseif( is_author() ) {
					
						the_post();
						echo theme_get_avatar(array('id' => get_the_author_meta('user_email')));
						echo '<h4>'. get_the_author() . '</h4>';
						$desc = get_the_author_meta('description');
						if ($desc) echo '<div>' . $desc . '</div>';
						rewind_posts();
						
					} elseif( isset($_GET['paged']) && !empty($_GET['paged']) ) {
					
						 echo '<h4>'. __('Архивы блога', THEME_NS) . '</h4>';
						 
					}
					theme_post_wrapper(array('content' => ob_get_clean(), 'class' => 'breadcrumbs'));
					
					/* Display navigation to next/previous pages when applicable */
					if (theme_get_option('theme_top_posts_navigation')) {
						theme_page_navigation();
					}
					
					/* Start the Loop */ 
					while (have_posts()) {
						the_post();
						get_template_part('content', get_post_format());
					}
						
					/* Display navigation to next/previous pages when applicable */
					if (theme_get_option('theme_bottom_posts_navigation')) {
						theme_page_navigation();
					}
						
				} else {  
					  
					theme_404_content();
					
				} 
			?>
			<?php get_sidebar('bottom'); ?>
          <div class="cleared"></div>
        </div>
        <div class="art-layout-cell art-sidebar1">
          <?php get_sidebar('default'); ?>
          <div class="cleared"></div>
        </div>
        <div class="art-layout-cell art-sidebar2">
          <?php get_sidebar('secondary'); ?>
          <div class="cleared"></div>
        </div>
    </div>
</div>
<div class="cleared"></div>
<?php get_footer();