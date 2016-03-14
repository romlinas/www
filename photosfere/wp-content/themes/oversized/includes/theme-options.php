<?php

function photography_options(){

// VARIABLES

$themename = "photography-wp";

$manualurl = 'http://www.wordpress.org/';

$shortname = "photography";

$GLOBALS['template_path'] = get_bloginfo('template_directory');



//Access the WordPress Categories via an Array

$photography_categories = array();  

$photography_categories_obj = get_categories('hide_empty=0');



foreach ($photography_categories_obj as $photography_cat) {



    $photography_categories[$photography_cat->cat_ID] = $photography_cat->cat_name;}



$categories_tmp = array_unshift($photography_categories, "Select a category:");    



//Access the WordPress Pages via an Array



$photography_pages = array();

$photography_pages_obj = get_pages('sort_column=post_parent,menu_order');    



foreach ($photography_pages_obj as $photography_page) {



    $photography_pages[$photography_page->ID] = $photography_page->post_name; }

$photography_pages_tmp = array_unshift($photography_pages, "Select a page:");       



//Stylesheets Reader

$alt_stylesheet_path = TEMPLATEPATH . '/styles/';

$alt_stylesheets = array();



if ( is_dir($alt_stylesheet_path) ) {



    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 



        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {



            if(stristr($alt_stylesheet_file, ".css") !== false) {



              $alt_stylesheets[] = $alt_stylesheet_file;



            }

        }    

    }



}





//More Options



$all_uploads_path = get_bloginfo('home') . '/wp-content/uploads/';

$all_uploads = get_option('photography_uploads');

$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");



// THIS IS THE DIFFERENT FIELDS



$options = array();   



$options[] = array( "name" => "Общие параметры",



                    "type" => "heading");




$options[] = array( "name" => "Логотип сайта",



					"desc" => "Загрузить логотип, или укажите его (http://yoursite.com/logo.png)",

					"id" => $shortname."_logo",

					"std" => "",

					"type" => "upload");   







$options[] = array( "name" => "Custom Favicon",

					"desc" => "Upload a 16px x 16px Png/Gif image that will represent your wephotographyte's favicon.",

					"id" => $shortname."_custom_favicon",

					"std" => "",

					"type" => "upload"); 



$options[] = array( "name" => "Код статистики",

					"desc" => "Вставте код Google Analytics или Яндекс метрики",

					"id" => $shortname."_google_analytics",

					"std" => "",

					"type" => "textarea");        



$options[] = array( "name" => "RSS URL",

					"desc" => "Enter your preferred RSS URL. (Feedburner or other)",

					"id" => $shortname."_feedburner_url",

					"std" => "",

					"type" => "text");



$options[] = array( "name" => "Custom CSS",

                    			"desc" => "Quickly add some CSS to your theme by adding it to this block.",

					"id" => $shortname."_custom_css",

					"std" => "",

					"type" => "textarea");



$options[] = array( "name" => "Extra Scripts for header",

					"desc" => "You can add extra scripts in here to add at the head section'",

					"id" => $shortname."_exscripts",

					"type" => "textarea");   





$options[] = array( "name" => "Параметры слайд-шоу",

				 	"type" => "heading"); 





$options[] = array( "name" => "Выберите эффект перехода",

					"desc" => "Choose a effect for changing slides.",

					"id" => $shortname."_slideshow_effect",

					"options" => array('1', '2', '3', '4', '5', '6' ),

					"std" => "random",

					"type" => "select");



$options[] = array(  



	"name" => "Слайд-шоу время паузы",



	"desc" => "Укажите время паузы в миллисекундах. По умолчанию 7000.",



	"id" => $shortname."_slideshow_pausetime",



	"std" => "",



	"type" => "text");



$options[] = array( "name" => "Опции Lightbox",

				 	"type" => "heading"); 





$options[] = array( "name" => "Choose maximum Height of the Lightbox Images",

					"desc" => "Choose maximum Height of the Lightbox Images. Default is 600",

					"id" => $shortname."_cb_height",

					"std" => "600",

					"type" => "text");



$options[] = array( "name" => "Choose maximum Width of the Lightbox Images",

					"desc" => "Choose maximum Width of the Lightbox Images. Default is 800",

					"id" => $shortname."_cb_width",

					"std" => "800",

					"type" => "text");










update_option('photography_template',$options);      



update_option('photography_themename',$themename);   



update_option('photography_shortname',$shortname);



update_option('photography_manual',$manualurl);



// photography Metabox Options



/*



$photography_metaboxes = array(



		"image" => array (



		"name"		=> "image",



		"default" 	=> "",



			"label" 	=> "Image",



			"type" 		=> "upload",



			"desc"      => "Enter the URL for image to be used by the Dynamic Image resizer."



		)



    );



update_option('photography_custom_template',$photography_metaboxes);      



*/



/*



function photography_update_options(){



        $options = get_option('photography_template',$options);  





        foreach ($options as $option){



            update_option($option['id'],$option['std']);



        }   

}



function photography_add_options(){



        $options = get_option('photography_template',$options);  



        foreach ($options as $option){



            update_option($option['id'],$option['std']);



        }   



}





//add_action('switch_theme', 'photography_update_options'); 



if(get_option('template') == 'photographyframework'){       



    photography_add_options();





} // end function 





*/





}





add_action('init','photography_options');  





?>