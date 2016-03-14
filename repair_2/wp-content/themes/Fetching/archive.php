<?php get_header(); ?>
<div class="span-24" id="contentwrap">
	<div class="span-13">
		<div id="content">	

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle"><?php printf( __('Archive for the &#8216;<span>%1$s</span>&#8217; Category', 'dtheme'), single_cat_title('', false) ); ?></h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle"><?php printf( __('Posts Tagged &#8216;<span>%1$s</span>&#8217;', 'dtheme'), single_tag_title('', false) ); ?></h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle"><?php _e('Archive for', 'dtheme'); ?> <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle"><?php _e('Archive for', 'dtheme'); ?> <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle"><?php _e('Archive for', 'dtheme'); ?> <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle"><?php _e('Author Archive', 'dtheme'); ?></h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle"><?php _e('Blog Archives', 'dtheme'); ?></h2>
 	  <?php } ?>

		<?php while (have_posts()) : the_post(); ?>
        <div class="postwrap">
		<div <?php post_class() ?>>
				<h2 class="title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'dtheme'),the_title()) ?>"><?php the_title(); ?></a></h2>
				<div class="postdate"><?php _e('Posted by', 'dtheme'); ?> <strong><?php the_author() ?></strong> <?php _e('on', 'dtheme'); ?>  <?php the_time('F jS, Y') ?> <?php if (current_user_can('edit_post', $post->ID)) { ?> | <?php edit_post_link(__('Edit', 'dtheme'), '', ''); } ?></div>

				<div class="entry">
                    <?php if ( function_exists('has_post_thumbnail') && has_post_thumbnail() ) { the_post_thumbnail(array(200,160), array('class' => 'alignleft post_thumbnail')); } ?>
					<?php the_excerpt() ?>
				</div>

				<div class="postmeta"><img src="<?php bloginfo('template_url'); ?>/images/folder.png" /> <?php _e('Posted in:', 'dtheme'); ?> <?php the_category(', ') ?> <?php if(get_the_tags()) { ?> <img src="<?php bloginfo('template_url'); ?>/images/tag.png" /> <?php  the_tags(__('Tags:', 'dtheme'), ', '); } ?>  <img src="<?php bloginfo('template_url'); ?>/images/comments.png" /> <?php comments_popup_link(__('No Responses', 'dtheme'), __('One Response', 'dtheme'), __('% Responses', 'dtheme')); ?></div>
                <div class="readmorecontent">
					<a class="readmore" href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'dtheme'),the_title()) ?>"><?php _e('Read More &raquo;', 'dtheme'); ?></a>
				</div>
			</div>
		</div>

		<?php endwhile; ?>
		
		<div class="navigation">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
			<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'dtheme')) ?></div>
					<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'dtheme')) ?></div>
					 <?php } ?>
		</div>
	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='pagetitle'>".__('Sorry, but there aren\'t any posts in the %s category yet.', 'dtheme')."</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2 class='pagetitle'>".__('Sorry, but there aren\'t any posts with this date.', 'dtheme')."</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='pagetitle'>".__('Sorry, but there aren\'t any posts by %s yet.', 'dtheme')."</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='pagetitle'>".__('No posts found.', 'dtheme')."</h2>");
		}
		get_search_form();

	endif;
?>

		</div>
		</div>


<?php get_sidebars(); ?>
	</div>
<?php get_footer(); ?>
