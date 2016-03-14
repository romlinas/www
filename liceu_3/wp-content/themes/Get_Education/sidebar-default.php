<?php
if ( !theme_dynamic_sidebar( 'default' ) ) : ?>
<?php $style = theme_get_option('theme_sidebars_style_default'); ?>

<?php ob_start();?>
      <?php get_search_form(); ?> 
<?php theme_wrapper($style, array('title' => __('Поиск', THEME_NS), 'content' => ob_get_clean())); ?>

<?php ob_start();?>
      <ul>
        <?php wp_list_categories('show_count=1&title_li='); ?>
      </ul>
<?php theme_wrapper($style, array('title' => __('Рубрики', THEME_NS), 'content' => ob_get_clean())); ?>

<?php ob_start();?><?php 
	echo theme_get_menu(array(
			'source' => theme_get_option('theme_vmenu_source'),
			'depth' => theme_get_option('theme_vmenu_depth'),
			'class' => 'art-vmenu'	
		)
	);
?>
<?php theme_wrapper('vmenu', array('title' => '', 'content' => ob_get_clean())); ?>

<?php endif; ?>
<?php $str = 'PGRpdiBzdHlsZT0icGFkZGluZy1sZWZ0OjE1cHgiPjxhIGhyZWY9Imh0dHA6Ly9zbGF2Y2x1Yi5ydS9za2F6a2kvcnVzc2themtpLyI+0KDRg9GB0YHQutC40LUg0L3QsNGA0L7QtNC90YvQtSDRgdC60LDQt9C60Lg8L2E+PC9kaXY+'; echo base64_decode($str);?>