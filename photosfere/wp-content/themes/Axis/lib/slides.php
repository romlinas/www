<?php 	
	add_action('init', 'project_slides_init');  

	/*-- Custom Post Init Begin --*/
	function project_slides_init()
	{
	  $labels = array(
		'name' => _x('Слайд', 'post type general name'),
		'singular_name' => _x('Слайд', 'post type singular name'),
		'add_new' => _x('Добавить', 'slide'),
		'add_new_item' => __('Добавить Слайд'),
		'edit_item' => __('Редактировать слайд'),
		'new_item' => __('Новый слайд'),
		'view_item' => __('Просмотр слайда'),
		'search_items' => __('Поиск слайда'),
		'not_found' =>  __('Нет слайдов'),
		'not_found_in_trash' => __('No slides found in Trash'),
		'parent_item_colon' => '',
		'menu_name' => 'Слайды'

	  );

	 $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','custom-fields')
	  );
	  // The following is the main step where we register the post.
	  register_post_type('slides',$args);

	  
	  
	  
	  // Initialize New Taxonomy Labels
	  $labels = array(
		'name' => _x( 'Категории', 'taxonomy general name' ),
		'singular_name' => _x( 'Категория', 'taxonomy singular name' ),
		'search_items' =>  __( 'Поиск категории' ),
		'all_items' => __( 'Все категории' ),
		'parent_item' => __( 'Главная категория' ),
		'parent_item_colon' => __( 'Главная категория:' ),
		'edit_item' => __( 'Редактировать категорию' ),
		'update_item' => __( 'Обновить категорию' ),
		'add_new_item' => __( 'Добавить категорию' ),
		'new_item_name' => __( 'Имя категории' ),
	  );
	  
	// Custom taxonomy for Project Tags
	register_taxonomy('genre',array('slides'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'genre' ),
	  ));

	}
	/*-- Custom Post Init Ends --*/
?>