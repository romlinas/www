<!--include header.php-->
<?php get_header(); ?>
<!--archive.php-->
<div id="body_background">
	<div id="main_container">
		<div id="left_content">
	               <!--loop startet-->

		<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>				
		<!--html ist noetig, bei allen folgenden Zeilen auch-->
 <h2>Archiv der Kategorie <?php single_cat_title(); ?></h2>
		
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2>Tagesarchiv f&uuml;r den <?php the_time('j. F Y'); ?></h2>
		
	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2>Monatsarchiv f&uuml;r <?php the_time('F Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2>Jahresarchiv f&uuml;r <?php the_time('Y'); ?></h2>
				
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2>Autoren Archiv</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2>Blog Archiv</h2>
<!--loop hat mal Pause daher das folgende nicht loeschen-->
		<?php } ?>


		<!--navi beginnt-->
<?php next_posts_link('&laquo; Vorherige Eintr&auml;ge') ?>
<?php previous_posts_link('N&auml;chste Eintr&auml;ge &raquo;') ?>
		
              <!--loop geht weiter und holt jetzt einzelne Posts-->
		<?php while (have_posts()) : the_post(); ?>

		<!--beginn eines posts-->
                                  <!--post Titel als Link-->
				<div class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" id="post-<?php the_ID(); ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></div>
                                 <!--Zeitpunkt des Speicherns-->
				<div class="datum"><?php the_time('l,') ?> den <?php the_time('j. F Y') ?></div>
				
				<!--zeigt nur den Auszug--keine Bilder -->
					<div class="content"><?php the_excerpt() ?></div>
				
		<!--sogenannte meta Daten:in welcher Kategorie, wieviele Kommentare und Edit link zum Bearbeiten-->
				<div class="meta">Kategorie <?php the_category(', ') ?> | <?php comments_popup_link('0 Kommentar &#187;', '1 Kommentar &#187;', '% Kommentare &#187;'); ?> <?php edit_post_link('Bearbeiten','<strong>|</strong> ',''); ?></div>

			<!--ein Post endet hier-->
	
		<?php endwhile; ?>

		<!--navi beginnt-->
<?php next_posts_link('&laquo; Vorherige Eintr&auml;ge') ?>
<?php previous_posts_link('N&auml;chste Eintr&auml;ge &raquo;') ?>

<!--loop geht weiter-->
	
	<?php else : ?>

		<h2>Nichts gefunden.</h2>
               <!--holt sich das Suchfeld-->
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

         <!--loop endet jetzt wirklich-->
	<?php endif; ?>
		
	

		</div>
<!--include sidebar-->
		<div id="right_content">
<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<!--include footer-->
<div id="footer">
<?php get_footer(); ?>
</div>