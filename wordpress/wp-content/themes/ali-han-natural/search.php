<?php get_header(); ?>

  <div id="main_content">

  <?php if (have_posts()) : ?>

    <h3 class="pagetitle">Результаты поиска</h3>

    <div class="navigation">
      <div class="alignleft"><?php next_posts_link('&laquo; Предыдущая страница') ?></div>
      <div class="alignright"><?php previous_posts_link('Следующая страница &raquo;') ?></div>
    </div>


    <?php while (have_posts()) : the_post(); ?>

      <div class="article">
        <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Не найдено: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        
        <p class="byline">Автор: <?php the_author() ?>, <?php the_time('d M Y') ?> </p>

        <ul class="article_footer">
          <?php the_tags('<li>Метки: ', ', ', '', '</li>'); ?>
          <li>Рубрика: <?php the_category(', ') ?></li>
          <?php edit_post_link('Править', '<li>', '</li>'); ?>
          <li class="last"><?php comments_popup_link('Отзывов нет', '1 отзыв', 'Отзывов (%)'); ?></li>
        </ul>
      </div>

    <?php endwhile; ?>

    <div class="navigation">
      <div class="alignleft"><?php next_posts_link('&laquo; Предыдущая страница') ?></div>
      <div class="alignright"><?php previous_posts_link('Следующая страница &raquo;') ?></div>
    </div>

  <?php else : ?>

    <h2 class="center">Ничего не найдено. Попробуете по другому запросу?</h2>
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>

  <?php endif; ?>

  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>