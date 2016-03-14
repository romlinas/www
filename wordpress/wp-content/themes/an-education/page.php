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
        <div class="post" id="post-<?php the_ID(); ?>">
            <div class="post-header">
            <h2><?php the_title(); ?></h2>
            </div>
            <div class="entry">
                <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

                <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
            <?php edit_post_link('Edit this entry.', '<p>', '</p><br />'); ?>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </div>

<?php get_sidebar(); ?>
    <div class="clear"></div>
</div>
<?php get_footer(); ?>