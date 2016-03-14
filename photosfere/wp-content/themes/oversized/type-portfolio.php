<?php/*Template Name: Portfolio*/?><?php get_header(); ?><!-- start column2nd -->    <div id="column2nd">	<div id="column2nd-inside">    	<!-- start gallery -->              <div class="gallery">            <h2 class="page-title"><?php echo _e('Портфолио'); ?></h2>		<?php query_posts( array( 'post_type' => 'photographs', 'posts_per_page' => 8, 'order' => 'DESC', 'paged' => get_query_var('paged') ) ); ?>            <ul>               <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>        	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>        	<li><a href="<?php echo $image[0]; ?>" title="<?php the_title(); ?>" rel="gallery"><?php the_post_thumbnail('galleries-thumb', $thumb_attrs); ?></a></li>            <?php endwhile; ?>            </ul>	    <div class="clear"></div>        </div>        <!-- end gallery -->	<?php if (function_exists("pagination")) {		pagination($additional_loop->max_num_pages);	} ?>			<?php else: ?>	<div class="entry">		<p>It seems there isn't anything here right now. Please check back later.</p>	<?php endif; ?>		<?php wp_reset_query(); ?>	</div>    </div>    <!-- end column2nd --></div><!-- end box --><?php get_footer(); ?>