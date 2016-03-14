<?php get_header(); ?>

  <div id="main_content">

  <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

      <div class="article" id="post-<?php the_ID(); ?>">
        
        <h2>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка: <?php the_title_attribute(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
        

        <div class="entry clearfix">
          <?php the_content('Читать полностью &raquo;'); ?>
        </div>
        
        <ul class="article_footer">
        <li><?php the_time('d M Y') ?></li>
		<?php the_tags('<li>Метки: ', ', ', '</li>', ''); ?>
<li>Рубрика: <?php the_category(', ') ?></li>
          <?php edit_post_link('Править', '<li>', '</li>'); ?>
          <li class="last"><?php comments_popup_link('Ваш отзыв', '1 отзыв', 'Отзывов (%)'); ?></li>
        </ul>
        
      </div>

    <?php endwhile; ?>

    <div class="navigation">
      <div class="alignleft"><?php next_posts_link('&laquo; Предыдущая страница') ?></div>
      <div class="alignright"><?php previous_posts_link('Следующая страница &raquo;') ?></div>
    </div>

  <?php else : ?>

    <h2 class="center">Не найдено</h2>
    <p class="center">К сожалению, по вашему запросу ничего не найдено.</p>
    <?php include (TEMPLATEPATH . "/searchform.php"); ?>

  <?php endif; ?>

  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
