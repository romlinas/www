<?php get_header(); ?>

  <div id="main_content">

    <?php if (have_posts()) : ?>

    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    <?php /* If this is a category archive */ if (is_category()) { ?>
    <h3 class="pagetitle"><?php single_cat_title(); ?></h3>
    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
    <h3 class="pagetitle"><?php single_tag_title(); ?></h3>
    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    <h3 class="pagetitle">Архив за <?php the_time('F jS, Y'); ?></h3>
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <h3 class="pagetitle">Архив за <?php the_time('F, Y'); ?></h3>
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <h3 class="pagetitle">Архив за <?php the_time('Y'); ?></h3>
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
    <h3 class="pagetitle">Архив автора</h3>
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    <h3 class="pagetitle">Архив сайта</h3>
    <?php } ?>


    <div class="navigation">
      <div class="alignleft"><?php next_posts_link('&laquo; Предыдущая страница') ?></div>
      <div class="alignright"><?php previous_posts_link('Следующая страница &raquo;') ?></div>
    </div>

    <?php while (have_posts()) : the_post(); ?>
    <div class="article">
        <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <p class="byline">Автор: <?php the_author() ?>, <?php the_time('d M Y') ?> </p>

        <div class="entry clearfix">
          <?php the_content() ?>
        </div>

        <ul class="article_footer">
          <?php the_tags('<li>Метки: ', ', ', '', '</li>'); ?>
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
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>

  <?php endif; ?>

  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
