<!--include header.php-->
<?php get_header(); ?>
<!--index.php-->

	<!--loop startet-->
<div id="body_background">
<div id="main_container">
	<div id="left_content">
		<?php if (have_posts()) : ?>
		<!--da dazwischen koennt man was reinschreiben -->

		<!--loop geht weiter-->
		
		<?php while (have_posts()) : the_post(); ?>
				<!--ein post beginnt-->
			
				<!--post titel als link-->
				<div class="post_title"><a id="post-<?php the_ID(); ?>" href="<?php the_permalink() ?>" rel="bookmark" title=" <?php the_title(); ?>"><?php the_title(); ?></a></div>
				<!--das datum-->
                      <div class="datum"><?php the_time('j. F Y') ?> erstellt von <?php the_author() ?></div>
				<!--postinhalt mit weiterlesen link-->
					<div class="content"><?php the_content('Den ganzen Beitrag lesen &#187;'); ?></div>
				
		
				<!--post metadaten kategorie anzahl der kommentare und link zu den kommentraen bearbeiten link-->
<div class="meta">Kategorie <?php the_category(', ') ?> | <?php comments_popup_link('0 Kommentare &#187;', '1 Kommentar &#187;', '% Kommentare &#187;'); ?> <?php edit_post_link('Bearbeiten',' | ',''); ?></div>
			
	<!--damit endet ein post-->
		<?php endwhile; ?>

		<!--navi beginnt-->
<?php next_posts_link('&laquo; Vorherige Eintr&auml;ge') ?>
<?php previous_posts_link('N&auml;chste Eintr&auml;ge &raquo;') ?>

<!--weiter geht der loop-->
		
	<?php else : ?>

		Nicht gefunden
		<!--holt sich das suchfeld-->
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

<!--loop endet hier-->
	<?php endif; ?>

	

<!--include sidebar-->
</div>
<div id="right_content">
	<?php get_sidebar(); ?>
</div>
</div>
</div>

<!--include footer-->
<div id="footer">
<?php get_footer(); ?>
</div>