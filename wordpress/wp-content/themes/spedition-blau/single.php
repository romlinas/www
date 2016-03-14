<!--include header.php-->
<?php get_header(); ?>
<!--single.php-->

	<!--loop beginnt-->
	<div id="body_background">
	<div id="main_container">
		<div id="left_content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<!--navi beginnt link zum vorherigen und naechsten post-->
			<?php previous_post_link('&laquo; %link') ?>
			<?php next_post_link('%link &raquo;') ?>
		
	
		<!--post titel als link-->
			<div class="post_title"><a href="<?php echo get_permalink() ?>" rel="bookmark" id="post-<?php the_ID(); ?>" title=" <?php the_title(); ?>"><?php the_title(); ?></a></div>
	
			<!--holt sich den inhalt -->
				<div class="content"><?php the_content(''); ?></div>

	<!--zeigt links zu seiten an, wenn du mehrere hast-->
				<?php wp_link_pages(array('before' => '<p><strong>Seiten:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	      				
				<!--meatadaten zum beitrag zeit, um uhr, kategorie, hinweise dass man kommentare per rss feed verfolgen kann  und alle einstellungen fuer die kommentare trackback pings-->
						<div class="meta">Der Beitrag wurde
						
						am <?php the_time('l,') ?> den <?php the_time('j. F Y') ?> um <?php the_time('H:i') ?> Uhr ver&ouml;ffentlicht
						und wurde unter <?php the_category(', ') ?> abgelegt.
						du kannst die Kommentare zu diesen Eintrag durch den <?php comments_rss_link('RSS 2.0'); ?> Feed verfolgen.
						
						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// komentare und pings erlaubt ?>
							du kannst einen <a href="#respond">Kommentar schreiben</a>, oder einen <a href="<?php trackback_url(true); ?>" rel="trackback">Trackback</a> auf deiner Seite einrichten.
						
						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// nur pings erlaubt ?>
							Kommentare sind derzeit geschlossen, aber du kannst dennoch einen <a href="<?php trackback_url(true); ?> " rel="trackback">Trackback</a> auf deiner Seite einrichten.
						
						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// kommentare erlaubt pings nicht ?>
							du kannst zum Ende springen und einen Kommentar hinterlassen. Pingen ist im Augenblick nicht erlaubt.
			
						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// weder kommentare noch pings erlaubt ?>
							Kommentare und Pings sind derzeit nicht erlaubt.			
						
						<?php } edit_post_link('Beitrag bearbeiten.','<strong>|</strong> ',''); ?></div>
						
					
<!--holt sich das  kommentar template also die comments.php-->

	<?php comments_template(); ?>
<!--nicht loeschen-->
	<?php endwhile; else: ?>

		leider es gibt keine Beitr&auml;ge
<!--loop endet hier-->
<?php endif; ?>

	
	</div>
<!--include sidebar-->
	<div id="right_content">
<?php get_sidebar(); ?>
</div>
<!--include footer-->
	<div id="footer">
<?php get_footer(); ?>
	</div>
</div>
</div>