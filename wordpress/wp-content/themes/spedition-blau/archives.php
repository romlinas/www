<?php
/*
Template Name: Archiv
*/
?>

<!--include header.php-->
<?php get_header(); ?>
<!--archives.php-->

<!--holt sich das Suchfeld-->

<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<h2>Archiv nach Monaten:</h2>
<!--hier werden die Archive nach Monaten aufgelistet, immer zwischen li und /li-->
  <ul>
    <?php wp_get_archives('type=monthly'); ?>
  </ul>

<h2>Archiv nach Kategorien:</h2>
<!--hier werden die Archive nach Kategorienamen aufgelistet, immer zwischen li und /li-->
  <ul>
     <?php wp_list_categories(); ?>
  </ul>




<!--include footer-->
<?php get_footer(); ?>
