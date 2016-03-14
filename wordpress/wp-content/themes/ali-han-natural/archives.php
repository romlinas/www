<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

  <div id="main_content">

    <h2>Архив по месяцам:</h2>
    <ul class="archives">
      <?php wp_get_archives('type=monthly'); ?>
    </ul>

    <h2>Архив по рубрикам:</h2>
    <ul class="archives">
       <?php wp_list_categories(); ?>
    </ul>

  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
