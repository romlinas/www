<?php get_header(); ?>

  <div id="main_content">
  
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
    <div class="article" id="post-<?php the_ID(); ?>">
      
    <h2><?php the_title(); ?></h2>
    
      <div class="entry clearfix">
        
        <?php the_content('<p>Читать полностью &raquo;</p>'); ?>

        <?php wp_link_pages(array('before' => '<p><strong>Страницы:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

      </div>
    </div>
    <?php endwhile; endif; ?>
    
    <?php edit_post_link('Править', '<p>', '</p>'); ?>

  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>