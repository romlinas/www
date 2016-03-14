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

		<h2 class="center">Error 404 - Not Found</h2>

	</div>

<?php get_sidebar(); ?>
    <div class="clear"></div>
</div>
<?php get_footer(); ?>