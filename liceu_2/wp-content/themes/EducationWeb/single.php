<?php get_header(); ?>
	<div class="outer" id="contentwrap">	
			<div class="postcont">
				<div id="content">	
					<?php if (have_posts()) : ?>	
						<?php while (have_posts()) : the_post(); ?>
<div class="postdate-single">Опубликовано <?php the_time('F j, Y') ?> <?php the_author() ?> </div>


						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<h2 class="title"><?php the_title(); ?></h2>
							
			<div class="postdate-single-2"><img src="<?php bloginfo('template_url'); ?>/images/folder.png" /> Рубрики <?php the_category(', ') ?> <?php if(get_the_tags()) { ?> <img src="<?php bloginfo('template_url'); ?>/images/tag.png" /> <?php  the_tags('Метки: ', ', '); } ?></div>
							<div class="entry">
<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(300,225), array("class" => "alignleft post_thumbnail")); } ?>
								<?php the_content('Read the rest of this entry &raquo;'); ?>
								<?php wp_link_pages(array('before' => '<p><strong>Страницы:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							</div>
							
						
							<div class="navigation clearfix">
								<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
								<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
							</div>
							
							<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
								// Both Comments and Pings are open ?>
								Вы можете <a href="#respond">оставить комментарий</a>, или <a href="<?php trackback_url(); ?>" rel="trackback"> ссылку</a> на Ваш сайт.
	
							<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
								// Only Pings are Open ?>
								Комментирование на данный момент запрещено, но Вы можете оставить <a href="<?php trackback_url(); ?> " rel="trackback">ссылку</a> на Ваш сайт.
	
							<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
								// Comments are open, Pings are not ?>
								Вы можете пропустить чтение записи и оставить комментарий. Размещение ссылок запрещено.
	
							<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
								// Neither Comments, nor Pings are open ?>
								Комментирование и размещение ссылок запрещено.
	
							<?php } edit_post_link('Правка','','.'); ?>
						</div><!--/post-<?php the_ID(); ?>-->
						
				<?php comments_template(); ?>
				
				<?php endwhile; ?>
			
				<?php endif; ?>
			</div>
			</div>
		<?php get_sidebars(); ?>
	</div>
<?php get_footer(); ?>


