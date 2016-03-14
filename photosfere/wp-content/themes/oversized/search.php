<<?php get_header(); ?>
<!-- start column2nd -->
    <div id="column2nd">
	<div id="column2nd-inside">
	<h3 class="result-heading"><?php _e('Search results for'); ?> <?php printf(__('\'%s\''), $s) ?></h3>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    	<!-- post -->
        <div class="post listing">
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <span class="meta"><?php _e('Опубликовано'); ?> <?php the_time('F j, Y'); ?> <?php _e('в'); ?> <?php the_category(', ') ?></a></span>
		<?php if ( has_post_thumbnail()) { ?>
                	<div class="thumb"><?php the_post_thumbnail('post-thumb'); ?></div>
		<?php } ?>
                <span class="more"><a href="<?php the_permalink(); ?>" title="<?php _e('Подробнее'); ?>"><?php _e('Подробнее'); ?></a></span>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <!-- post -->
        <!-- pagination -->
        
            <?php if (function_exists("pagination")) {
			pagination($additional_loop->max_num_pages);
			} ?>
      
        <!-- pagination -->
	</div>
    </div>
    <!-- end column2nd -->
</div>
<!-- end box -->

<?php get_footer(); ?>
    	<h3 class="result-heading"></h3>
    	<!-- post1 -->
        <div class="post listing">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <span class="meta"><?php _e('Опубликовано'); ?> <?php the_time('F j, Y'); ?> <?php _e('в'); ?> <?php the_category(', ') ?></a></span>
            <div class="entry">
                <div class="imgb1"><?php the_post_thumbnail('post-thumb'); ?></div>
                <span class="more"><a href="<?php the_permalink(); ?>" title=<?php _e('Подробнее'); ?>><?php _e('Подробнее'); ?></a></span>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
        <!-- post1 -->
        
        <!-- pagination -->
        <div class="pagination">
            <?php if (function_exists("pagination")) {
			pagination($additional_loop->max_num_pages);
			} ?>
        </div>
        <!-- pagination -->
    </div>
    <!-- end column2nd -->
</div>
<!-- end box -->
<?php get_footer(); ?>