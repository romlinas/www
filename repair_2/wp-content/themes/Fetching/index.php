<?php get_header(); ?>
		<div class="span-24" id="contentwrap">
			<div class="span-13">
				<div id="content">	
                <?php if(is_home()) { include (TEMPLATEPATH . '/featured.php'); } ?>		
					<?php if (have_posts()) : ?>	
						<?php while (have_posts()) : the_post(); ?>
						<div class="postwrap">
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'dtheme'),the_title()) ?>"><?php the_title(); ?></a></h2>
							<div class="postdate"><?php _e('Posted by', 'dtheme'); ?> <strong><?php the_author() ?></strong> <?php _e('on', 'dtheme'); ?>  <?php the_time('F jS, Y') ?> <?php if (current_user_can('edit_post', $post->ID)) { ?> | <?php edit_post_link(__('Edit', 'dtheme'), '', ''); } ?></div>
							<div class="entry">
                                <?php if ( function_exists('has_post_thumbnail') && has_post_thumbnail() ) { the_post_thumbnail(array(200,160), array('class' => 'alignleft post_thumbnail')); } ?>
								<?php the_content(''); ?>
								<div class="readmorecontent">
									<a class="readmore" href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'dtheme'),the_title()) ?>"><?php _e('Read More &raquo;', 'dtheme'); ?></a>
								</div>
							</div>
							
						</div><!--/post-<?php the_ID(); ?>-->
						</div>
				<?php endwhile; ?>
				<div class="navigation">
					<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
					<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'dtheme')) ?></div>
					<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'dtheme')) ?></div>
					<?php } ?>
				</div>
				<?php else : ?>
					<h2 class="center"><?php _e('Not Found', 'dtheme'); ?></h2>
					<p class="center"><?php _e('Sorry, no posts matched your criteria.', 'dtheme'); ?></p>
					<?php get_search_form(); ?>
			
				<?php endif; ?>
				</div>
			</div>
		
		<?php get_sidebars(); ?>
	</div>
<?php get_footer(); ?>
