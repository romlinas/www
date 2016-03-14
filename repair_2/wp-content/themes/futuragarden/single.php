<?php get_header(); ?>

	<div id="content" class="narrowcolumn">
				
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		
	
		<div class="post">
			<h2 id="post-<?php the_ID(); ?>"><a href="<?php echo get_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	
			<div class="entrytext">
				<?php the_content('<p class="serif">Читать полностью &raquo;</p>'); ?>
                                        <div class="spacer"></div>

<h2>Недавно</h2>
<ul>
<?php get_archives('postbypost','10','html'); ?>  
</ul>

				<?php link_pages('<p><strong>Страницы:</strong> ', '</p>', 'number'); ?>

<div class="navigation">
			<div class="alignleft"><?php previous_post('&laquo; %','','yes') ?></div>
			<div class="alignright"><?php next_post(' % &raquo;','','yes') ?></div>
		</div>


				<p class="postmetadata alt">
					<small>
						Опубликовано
                    <?php /* Иногда требует настройки.
							Чтобы загрузить плагины и инструкции следуйте по этой ссылке:
							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
                    <?php the_time('d M Y') ?> в
<?php the_time() ?>. В рубриках: <?php the_category(', ') ?>. Вы можете следить
за ответами к этой записи через <?php comments_rss_link('RSS 2.0'); ?>.
<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
Вы можете <a href="#respond">оставить отзыв</a> или <a href="<?php trackback_url(true); ?>" rel="trackback">трекбек</a> со своего сайта.
<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
Отзывы пока закрыты, но вы можете оставить <a href="<?php trackback_url(true); ?> " rel="trackback">трекбек</a> со
своего сайта.
<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
Вы можете оставить свой отзыв, пинг пока закрыт.
<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
Отзывы и пинг пока закрыты.
<?php } edit_post_link('Редактировать','',''); ?>

						
					</small>
				</p>
	
			</div>
		</div>
		
	<?php comments_template(); ?>
	
	<?php endwhile; else: ?>
	
		<p><?php _e('К сожалению, по вашему запросу ничего не найдено.'); ?></p>
	
<?php endif; ?>
	
	</div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>