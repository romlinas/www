<?php get_header(); ?>
<!-- start column2nd -->
    <div id="column2nd">
	<div id="column2nd-inside">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    	<!-- start post -->
        <div class="post">
            <h2 class="page-title"><?php the_title(); ?></h2>
            <!-- entry -->
            <div class="entry">
		<?php if ( has_post_thumbnail()) { ?>
                	<div class="thumb"><?php the_post_thumbnail('post-thumb'); ?></div>
		<?php } ?>
                <?php the_content(); ?>
            </div>
            <!-- entry -->
        </div>
        <!-- end post -->
	<?php endwhile; ?>
        <?php endif; ?>
	</div>
    </div>
    <!-- end column2nd -->
</div>
<!-- end box -->
<?php get_footer(); ?>