<?php get_header(); ?>
<div id="wrapper">
	<div id="content">
    <div class="head">
        <img src="<?php echo bloginfo('template_url');?>/images/header.jpg" alt="" />
    </div>
    <div class="head-b">
        <img src="<?php echo bloginfo('template_url');?>/images/header-b.jpg" alt="" />
    </div>
    <?php include (TEMPLATEPATH . '/468x60.php'); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- Top navi
        <div id="nav-above" class="navigation">
            <div class="nav-previous"><?php previous_post_link('<span class="meta-nav">&laquo;</span> %link') ?></div>
            <div class="nav-next"><?php next_post_link('%link <span class="meta-nav">&raquo;</span>') ?></div>
        </div>
        -->
        
        <?php include (TEMPLATEPATH . '/loop.php'); ?>
    <div class="commentos"><?php comments_template(); ?></div>

    <?php endwhile; else: ?>
	
    <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

    </div>
	
<?php get_sidebar(); ?>
    <div class="clear"></div>
</div>

<?php get_footer(); ?>
