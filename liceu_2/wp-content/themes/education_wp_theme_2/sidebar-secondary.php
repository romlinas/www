<?php if ( !theme_dynamic_sidebar( 'secondary' ) ) : ?>
<?php $style = theme_get_option('theme_sidebars_style_secondary'); ?>

<?php ob_start();?>
      <ul>
        <?php wp_list_categories('show_count=1&title_li='); ?>
      </ul>
<?php theme_wrapper($style, array('title' => __('Рубрики', THEME_NS), 'content' => ob_get_clean())); ?>


<?php endif; ?>