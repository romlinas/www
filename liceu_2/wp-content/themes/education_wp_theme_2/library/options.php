<?php
global $theme_options;

if (WP_VERSION < 3.0) {
	$theme_options = array (
		array(	
		'name'	=>	__('Футер', THEME_NS),
		'type'	=>	'heading'
		),
		array(	
		'id'	=>	'theme_footer_content',
		'name'	=>	__('Содержимое футера', THEME_NS),
		'desc'	=>	sprintf(__('<strong>XHTML:</strong> Вы можете использовать следующие теги: <code>%s</code>', THEME_NS), 'a, abbr, acronym, em, b, i, strike, strong, span') . '<br />'
	   			. sprintf(__('<strong>ShortTags:</strong><code>%s</code>', THEME_NS), '[year], [top], [rss], [login-link], [blog-title], [xhtml], [css]'),
		'type'	=>	'textarea'
		)
	);
	return;
}

$theme_menu_source_options = array(
	'Pages'	=>	__('Страницы', THEME_NS),
	'Categories'	=>	__('Рубрики', THEME_NS)
);

$theme_sidebars_style_options = array(
	'block'	=>	__('Block style', THEME_NS),
	'post'	=>	__('Post style', THEME_NS),
	'simple'	=>	__('Simple text', THEME_NS)
);

global $theme_options;
$theme_options = array (
	array(	
	'name'	=>	__('Заголовок', THEME_NS),
	'type'	=>	'heading'
	),
	array(	
	'id'	=>	'theme_header_show_headline',
	'name'	=>	__('Показать заголовок', THEME_NS),
	'desc'	=>	__('Да', THEME_NS),
	'type'	=>	'checkbox'
	),
	array(	
	'id'	=>	'theme_header_show_slogan',
	'name'	=>	__('Показать слоган', THEME_NS),
	'desc'	=>	__('Да', THEME_NS),
	'type'	=>	'checkbox'
	),
	array(	
	'name'	=>	__('Меню навигации', THEME_NS),
	'type'	=>	'heading'
	),
	array(	
	'id'	=>	'theme_menu_showHome',
	'name'	=>	__('Показать главную', THEME_NS),
	'desc'	=>	__('Да', THEME_NS),
	'type'	=>	'checkbox'
	),
	array(	
	'id'	=>	'theme_menu_homeCaption',
	'name'	=>	__('Заголовок главной страницы', THEME_NS),
	'type'	=>	'text'
	),
	array(	
	'id'	=>	'theme_menu_highlight_active_categories',
	'name'	=>	__('Подсветить активные рубрики', THEME_NS),
	'desc'	=>	__('Да', THEME_NS),
	'type'	=>	'checkbox'
	),
	
	array(	
	'id'	=>	'theme_menu_trim_title',
	'name'	=>	__('Обрезать длинные пункты в меню', THEME_NS),
	'desc'	=>	__('Да', THEME_NS),
	'type'	=>	'checkbox'
	),	
	array(	
	'id'	=>	'theme_menu_trim_len',
	'name'	=>	__('Ограниченное количество символов в пунктах [N]', THEME_NS),
	'desc'	=>	__('(символов).', THEME_NS),
	'type'	=>	'numeric'
	),
	
	array(	
	'id'	=>	'theme_submenu_trim_len',
	'name'	=>	__('Ограниченное количество символов в подпунктах [N]', THEME_NS),
	'desc'	=>	__('(символов).', THEME_NS),
	'type'	=>	'numeric'
	),
	
	array(	
	'id'	=>	'theme_menu_source',
	'name'	=>	__('Источник меню по умолчанию', THEME_NS),
	'type'	=>	'select',
	'options'	=>	$theme_menu_source_options,
	'desc'	=>	__('Отображать, когда Вид > Меню > Главное меню не задано', THEME_NS),
	),
	array(	
	'name'	=>	__('Записи', THEME_NS),
	'type'	=>	'heading'
	),

	array(	
	'id'	=>	'theme_home_top_posts_navigation',
	'name'	=>	__('Показать навигационные ссылки над записью', THEME_NS),
	'desc'	=>	__('Да', THEME_NS),
	'type'	=>	'checkbox'
	),	

	array(	
	'id'	=>	'theme_top_posts_navigation',
	'name'	=>	__('Показать навигационные ссылки над страницей записей', THEME_NS),
	'desc'	=>	__('Да', THEME_NS),
	'type'	=>	'checkbox'
	),

	array(	
	'id'	=>	'theme_bottom_posts_navigation',
	'name'	=>	__('Показать навигационные ссылки внизу страницы записей', THEME_NS),
	'desc'	=>	__('Да', THEME_NS),
	'type'	=>	'checkbox'
	),

	array(	
	'id'	=>	'theme_top_single_navigation',
	'name'	=>	__('Показать навигационные ссылки на странице вверху', THEME_NS),
	'desc'	=>	__('Да', THEME_NS),
	'type'	=>	'checkbox'
	),
	array(	
	'id'	=>	'theme_bottom_single_navigation',
	'name'	=>	__('Показать навигационные ссылки на странице внизу', THEME_NS),
	'desc'	=>	__('Да', THEME_NS),
	'type'	=>	'checkbox'
	),
	array(	
	'id'	=>	'theme_single_navigation_trim_title',
	'name'	=>	__('Обрезать длинные навигационные ссылки на странице', THEME_NS),
	'desc'	=>	__('Да', THEME_NS),
	'type'	=>	'checkbox'
	),	
	array(	
	'id'	=>	'theme_single_navigation_trim_len',
	'name'	=>	__('Ограничивать длину каждой ссылки в [N] символов', THEME_NS),
	'desc'	=>	__('(символов).', THEME_NS),
	'type'	=>	'numeric'
	),
	
	array(	
	'name'	=>	__('Популярное изображение', THEME_NS),
	'type'	=>	'heading'
	),
	array(	
	'id'	=>	'theme_metadata_use_featured_image_as_thumbnail',
	'name'	=>	__('Использовать популярное изображение в качестве миниатюры', THEME_NS),
	'desc'	=>	__('Да', THEME_NS),
	'type'	=>	'checkbox'
	),
	array(	
	'id'	=>	'theme_metadata_thumbnail_auto',
	'name'	=>	__('Использовать автоминиатюры', THEME_NS),
	'desc'	=>	__('Сгенерировать миниатюры к записи автоматически (используя первое изображение в галерее)', THEME_NS),
	'type'	=>	'checkbox'
	),
	array(	
	'id'	=>	'theme_metadata_thumbnail_width',
	'name'	=>	__('Ширина миниатюры', THEME_NS),
	'desc'	=>	__('(пикселей)', THEME_NS),
	'type'	=>	'numeric'
	),
	array(	
	'id'	=>	'theme_metadata_thumbnail_height',
	'name'	=>	__('Высота миниатюры', THEME_NS),
	'desc'	=>	__('(пикселей)', THEME_NS),
	'type'	=>	'numeric'
	),
	
	array(	
	'name'	=>	__('Страницы', THEME_NS),
	'type'	=>	'heading'
	),
	array(	
	'id'	=>	'theme_show_random_posts_on_404_page',
	'name'	=>	__('Показать случайные записи на 404 странице', THEME_NS),
	'desc'	=>	__('Да', THEME_NS),
	'type'	=>	'checkbox'
	),
	array(	
	'id'	=>	'theme_show_random_posts_title_on_404_page',
	'name'	=>	__('Заголовок для случайных записей', THEME_NS),
	'type'	=>	'text',
	'desc'	=>	__('Используется когда "Показываются записи для 404 страницы" включено', THEME_NS)
	),
	array(	
	'id'	=>	'theme_show_tags_on_404_page',
	'name'	=>	__('Показать теги на 404 странице', THEME_NS),
	'desc'	=>	__('Да', THEME_NS),
	'type'	=>	'checkbox'
	),
	array(	
	'id'	=>	'theme_show_tags_title_on_404_page',
	'name'	=>	__('Заголовки для тегов', THEME_NS),
	'type'	=>	'text',
	'desc'	=>	__('Показать когда "Показываются теги на 404 странице" включено', THEME_NS)
	),
	array(	
	'name'	=>	__('Комментарии', THEME_NS),
	'type'	=>	'heading',
	),
	array(	
	'id'	=>	'theme_comment_use_smilies',
	'name'	=>	__('Использовать смайлики в комментариях', THEME_NS),
	'desc'	=>	__('Да', THEME_NS),
	'type'	=>	'checkbox'
	),
	array(	
	'name'	=>	__('Сайдбары', THEME_NS),
	'type'	=>	'heading',
	'desc' => __('Стиль виджетов по умолчанию', THEME_NS)
	),
	array(	
	'id'	=>	'theme_sidebars_style_default',
	'name'	=>	__('Главный сайдбар', THEME_NS),
	'type'	=>	'select',
	'options'	=>	$theme_sidebars_style_options
	),
	array(	
	'id'	=>	'theme_sidebars_style_secondary',
	'name'	=>	__('Второстепенный сайдбар', THEME_NS),
	'type'	=>	'select',
	'options'	=>	$theme_sidebars_style_options
	),
	array(	
	'id'	=>	'theme_sidebars_style_top',
	'name'	=>	__('Сайдбары вверху', THEME_NS),
	'type'	=>	'select',
	'options'	=>	$theme_sidebars_style_options
	),
	array(	
	'id'	=>	'theme_sidebars_style_bottom',
	'name'	=>	__('Нижние сайдбары', THEME_NS),
	'type'	=>	'select',
	'options'	=>	$theme_sidebars_style_options
	),
	array(	
	'id'	=>	'theme_sidebars_style_footer',
	'name'	=>	__('Сайдбары в футере', THEME_NS),
	'type'	=>	'select',
	'options'	=>	$theme_sidebars_style_options
	),
	array(	
	'name'	=>	__('Футер', THEME_NS),
	'type'	=>	'heading'
	),
	array(	
	'id'	=>	'theme_footer_content',
	'name'	=>	__('Содержимое футера', THEME_NS),
	'desc'	=>	sprintf(__('<strong>XHTML:</strong> Вы можете использовать следующие теги: <code>%s</code>', THEME_NS), 'a, abbr, acronym, em, b, i, strike, strong, span') . '<br />'
	   		. sprintf(__('<strong>Шорт-теги:</strong><code>%s</code>', THEME_NS), '[year], [top], [rss], [login-link], [blog-title], [xhtml], [css]'),
	'type'	=>	'textarea'
	),
	array(	
	'name'	=>	__('Реклама', THEME_NS),
	'type'	=>	'heading',
	'desc' => sprintf(__('Используйте %s шорт-код, чтобы вставить рекламу в записи, текстовые виджеты или футер', THEME_NS),'<code>[ad]</code>') . '<br/>'
		. '<span>' . __('Например:', THEME_NS) .'</span><code>[ad code=4 align=center]</code>'
	),
	array(	
	'id'	=>	'theme_ad_code_1',
	'name'	=>	sprintf(__('Код рекламы #%s:', THEME_NS),1),
	'type'	=>	'textarea'
	),
	array(	
	'id'	=>	'theme_ad_code_2',
	'name'	=>	sprintf(__('Код рекламы #%s:', THEME_NS),2),
	'type'	=>	'textarea'
	),
	array(	
	'id'	=>	'theme_ad_code_3',
	'name'	=>	sprintf(__('Код рекламы #%s:', THEME_NS),3),
	'type'	=>	'textarea'
	),
	array(	
	'id'	=>	'theme_ad_code_4',
	'name'	=>	sprintf(__('Код рекламы #%s:', THEME_NS),4),
	'type'	=>	'textarea'
	),
	array(	
	'id'	=>	'theme_ad_code_5',
	'name'	=>	sprintf(__('Код рекламы #%s:', THEME_NS),5),
	'type'	=>	'textarea'
	)
);

global $theme_page_meta_options;
$theme_page_meta_options = array (
	array(	
	'id'	=>	'theme_show_in_menu',
	'name'	=>	__('Show in Menu', THEME_NS),
	'desc'	=>	__('Yes', THEME_NS),
	'type'	=>	'checkbox'
	),
	array(	
	'id'	=>	'theme_show_as_separator',
	'name'	=>	__('Show as Separator in Menu', THEME_NS),
	'desc'	=>	__('Yes', THEME_NS),
	'type'	=>	'checkbox'
	),
	array(	
	'id'	=>	'theme_title_in_menu',
	'name'	=>	__('Title in Menu', THEME_NS),
	'type'	=>	'text'
	),
	array(	
	'id'	=>	'theme_show_page_title',
	'name'	=>	__('Show Title on Page', THEME_NS),
	'desc'	=>	__('Yes', THEME_NS),
	'type'	=>	'checkbox'
	)
);

global $theme_post_meta_options;
$theme_post_meta_options = array(
	array(	
	'id'	=>	'theme_show_post_title',
	'name'	=>	__('Show Title on Single Page', THEME_NS),
	'desc'	=>	__('Yes', THEME_NS),
	'type'	=>	'checkbox'
	)
);
