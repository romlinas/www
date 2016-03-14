<?php get_header(); ?>
	<div class="span-24" id="contentwrap">	
			<div class="span-13">
				<div id="content">	
					<?php if (have_posts()) : ?>	
						<?php while (have_posts()) : the_post(); ?>
                        <div class="postwrap">
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<h2 class="title"><?php the_title(); ?></h2>
							<div class="postdate"><?php _e('Posted by', 'dtheme'); ?> <strong><?php the_author() ?></strong> <?php _e('on', 'dtheme'); ?>  <?php the_time('F jS, Y') ?> <?php if (current_user_can('edit_post', $post->ID)) { ?> | <?php edit_post_link(__('Edit', 'dtheme'), '', ''); } ?></div>
			
							<div class="entry">
                                <?php if ( function_exists('has_post_thumbnail') && has_post_thumbnail() ) { the_post_thumbnail(array(300,225), array('class' => 'alignleft post_thumbnail')); } ?>
								<?php the_content(__('Read more &raquo;', 'dtheme')); ?>
								<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:', 'dtheme').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							</div>
							<div class="postmeta"><img src="<?php bloginfo('template_url'); ?>/images/folder.png" /> <?php _e('Posted in:', 'dtheme'); ?> <?php the_category(', ') ?> <?php if(get_the_tags()) { ?> <img src="<?php bloginfo('template_url'); ?>/images/tag.png" /> <?php  the_tags(__('Tags:', 'dtheme'), ', '); } ?></div>
						
							<div class="navigation clearfix">
								<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
								<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
							</div>
							
							<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
								// Both Comments and Pings are open ?>
								<?php _e('You can', 'dtheme'); ?> <a href="#respond"><?php _e('leave a response', 'dtheme'); ?></a>, <?php _e('or', 'dtheme'); ?> <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> <?php _e('from your own site', 'dtheme'); ?>.
	
							<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
								// Only Pings are Open ?>
								<?php _e('Responses are currently closed, but you can', 'dtheme'); ?> <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> <?php _e('from your own site', 'dtheme'); ?>.
	
							<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
								// Comments are open, Pings are not ?>
								<?php _e('You can skip to the end and leave a response. Pinging is currently not allowed.', 'dtheme'); ?>
	
							<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
								// Neither Comments, nor Pings are open ?>
								<?php _e('Both comments and pings are currently closed.', 'dtheme'); ?>
	
							<?php } edit_post_link(__('Edit', 'dtheme'),'','.'); ?>
						</div><!--/post-<?php the_ID(); ?>-->
						</div>
				<?php comments_template(); ?>
				
				<?php endwhile; ?>
			
				<?php endif; ?>
			</div>
			</div>
		<?php get_sidebars(); ?>
	</div>
<?php get_footer(); ?>


