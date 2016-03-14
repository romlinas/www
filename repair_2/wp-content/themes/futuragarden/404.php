<?php get_header(); ?>


	<div id="content" class="narrowcolumn">

		<h2>Ошибка 404 &ndash; Не найдено</h2>
	<div class="post">
	<p><strong>К сожалению, по вашему запросу ничего не найдено.</strong></p>
	Как вариант, вы можете посмотреть по ссылкам, приведенным ниже или воспользоваться формой поиска.
<ul>
<li><h2>Поиск</h2>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	  </li>
<li><h2>Рубрики</h2>
				<ul>
				<?php wp_list_cats('sort_column=name&hide_empty=0&optioncount=0&hierarchical=1'); ?>
				</ul>
	  </li>
			<li><h2>Недавно</h2>
				<ul>
				<?php get_archives('postbypost','10','html'); ?>  
				</ul>
			</li>
			
	  </ul>

	</div>
	
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>