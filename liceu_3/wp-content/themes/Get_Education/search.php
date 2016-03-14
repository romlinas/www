<?php get_header(); ?>
<div class="art-content-layout">
    <div class="art-content-layout-row">
        <div class="art-layout-cell art-content">
			<?php get_sidebar('top'); ?>
			<?php 
				if(have_posts()) {
				
					theme_post_wrapper(
			  			array('content' => '<h4 class="box-title">' . sprintf( __( 'Результаты поиска по запросу: %s', THEME_NS ), 
			  				'<span>' . get_search_query() . '</span>' ) . '</h4>' 
			  			)
			  		);
				
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
				
			    
					theme_post_wrapper(
						array(
								'title' =>__('Ничего не найдено', THEME_NS),
								'content' => '<p class="center">' .  __('Извините, но по Вашему запросу ничего не было найдено. Пожалуйста, попробуйте еще раз.', THEME_NS) . '</p>'
											.  "\n" . theme_get_search()
						)
					);
					 
				} 
		    ?>
			<?php get_sidebar('bottom'); ?>
          <div class="cleared"></div>
        </div>
        <div class="art-layout-cell art-sidebar1">
          <?php get_sidebar('default'); ?>
          <div class="cleared"></div>
        </div>
    </div>
</div>
<div class="cleared"></div>
<?php get_footer(); ?>