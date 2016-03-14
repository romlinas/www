<?php
/**
 * gallery taxonomy archive
 */
get_header();
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>
<!-- start column2nd -->
    <div id="column2nd">
	<div id="column2nd-inside">
    	<!-- start gallery -->
        <div class="gallery">
         
        	<h2 class="page-title"><?php echo apply_filters( 'the_title', $term->name ); ?></h2>
            <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

        	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <ul>
            	<li><a href="<?php echo $image[0]; ?>" title="<?php the_title(); ?>" rel="gallery"><?php the_post_thumbnail('galleries-thumb', $thumb_attrs); ?> </a></li>
            </ul>
            <?php endwhile; ?>
            <?php endif; ?>
        	<div class="clear"></div>
        </div>
        <!-- end gallery -->
        <!-- pagination -->
        <?php if (function_exists("pagination")) {
			pagination($additional_loop->max_num_pages);
			} ?>
        <!-- pagination -->
        <div class="clear"></div>
	</div>
    </div>
    <!-- end column2nd -->
</div>
<!-- end box -->

<?php get_footer(); ?>