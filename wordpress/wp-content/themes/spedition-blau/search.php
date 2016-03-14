<!--include header.php-->
<?php get_header(); ?>
<!--search.php-->
	<!--loop startet-->
<div id="main_container">
	<div id="left_content">
	<?php if (have_posts()) : ?>

		<!--ueberschrift-->
                        Suchergebnisse:
		
		<!--navi beginnt-->
<?php next_posts_link('&laquo; Vorherige Eintr&auml;ge') ?>
<?php previous_posts_link('N&auml;chste Eintr&auml;ge &raquo;') ?>
                  
                 <!--loop geht weiter und holt sich die ergebnisse-->

		<?php while (have_posts()) : the_post(); ?>
				<!--ein post beginnt-->
			          <!--post titel als link-->
				<a href="<?php the_permalink() ?>" id="post-<?php the_ID(); ?>" rel="bookmark" title=" <?php the_title(); ?>"><?php the_title(); ?></a>
				<!--das datum-->
                             <?php the_time('l, j. F Y') ?>
				
				<!--nur der auszug eines artikels keine bilder-->
					<?php the_excerpt() ?>
				
                               <!--post metadaten kategorie anzahl der kommentare und link zu den kommentaren editieren-->
				Kategorie <?php the_category(', ') ?> <strong>|</strong> <?php comments_popup_link('0 Kommentare &#187;', '1 Kommentar &#187;', '% Kommentare &#187;'); ?> <?php edit_post_link('Bearbeiten','<strong>|</strong>',''); ?>
			
	<!--ein post ist zu ende-->
		<?php endwhile; ?>

		<!--navi beginnt-->
<?php next_posts_link('&laquo; Vorherige Eintr&auml;ge') ?>
<?php previous_posts_link('N&auml;chste Eintr&auml;ge &raquo;') ?>
                  
             <!--loop geht weiter-->
	
	<?php else : ?>

		Nicht gefunden
                   <!--holt sich das suchfeld-->
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

           <!--loop endet hier-->
	<?php endif; ?>
		
	
	</div>
	<div id="right_content">
		<?php get_sidebar(); ?>
	</div>
</div>
<div id="footer">
<?php get_footer(); ?>
</div>