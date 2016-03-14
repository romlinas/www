<?php get_header(); ?>

  <div id="main_content">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>
			<div class="entry clearfix">
				<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>
                <div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>

				<?php the_content('<p class="serif">Читать полностью &raquo;</p>'); ?>

				<div class="navigation">
					<div class="alignleft"><?php previous_image_link() ?></div>
					<div class="alignright"><?php next_image_link() ?></div>
				</div>
				<br class="clear" />

				<p class="postmetadata alt">
					<small>
						Опубликовано
                    <?php /* Иногда требует настройки.
							Чтобы загрузить плагины и инструкции следуйте по этой ссылке:
							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
              <?php the_time('d M Y') ?> в <?php the_time() ?>. Рубрика: <?php the_category(', ') ?>. Вы можете следить
за ответами к записи через <?php comments_rss_link('RSS'); ?>.<br /><?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
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

		<p>К сожалению, по вашему запросу ничего не найдено.</p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
