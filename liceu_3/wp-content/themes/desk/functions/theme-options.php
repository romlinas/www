<?php

// Theme Options

$themename = "Тема Desk";
$shortname = "desk";

// Create theme options
global $options;
$options = array (

array( "name" => "Общие",
 "type" => "section"),

array( "type" => "open"),
array( "name" => "Размер шрифта в заголовке",
 "desc" => "Задайте размер заголовка в пикселях. Например, если нужен размер 55 пикселей, просто введите цифру 55. Эта опция полезна, если у вас длинный заголовок и вы хотите вместить его в одну строку. Оставьте поле пустым, если хотите использовать настройки по-умолчанию",
 "id" => $shortname."_headerfontsize",
 "type" => "text",
 "std" => ""),

 array( "name" => "Адрес RSS-ленты",
 "desc" => "Введите адрес ленты, который будет использоваться для иконки в верхнем меню. Если оставить поле пустым, будет использована стандартная лента wordpress RSS. Не забудьте добавить http://",
 "id" => $shortname."_feed_url",
 "type" => "text",
 "std" => ""),

array( "name" => "Отключить комментарии на странице",
 "desc" => "Вы можете отключить комментарии на статических страницах и оставить их только для хронологических записей",
 "id" => $shortname."_pagecommentdisable",
 "type" => "checkbox",
 "std" => ""),
 
 array( "name" => "Спрятать метки",
 "desc" => "Вы можете спрятать метки для записей, оставив только рубрики и комментарии (и ссылку редактирования, если вы залогинены как админ)",
 "id" => $shortname."_hidetags",
 "type" => "checkbox",
 "std" => ""),
 
  array( "name" => "Отключить RSS-иконку",
 "desc" => "Вы можете отключить отображение RSS-иконки в верхнем меню",
 "id" => $shortname."_hiderss",
 "type" => "checkbox",
 "std" => ""),



array( "name" => "Удалить дополнительные ленты",
 "desc" => "WordPress добавляет ленты для рубрик, меток и т.д. Поставив галочку вы можете удалить их и сделать все более упорядоченным.",
 "id" => $shortname."_cleanfeedurls",
 "type" => "checkbox",
 "std" => ""),
 
 array( "name" => "Дополнительные стили",
 "desc" => "Вы можете добавить свой код CSS здесь",
 "id" => $shortname."_custom_css",
 "type" => "textarea",
 "std" => ""),
 
array( "type" => "close"),


array( "name" => "Шапка и подвал",
 "type" => "section"),

array( "type" => "open"),
array( "name" => "Дополнительный код в шапке",
 "desc" => "Вы можете вставить дополнительный код в шапке, например, скрипты",
 "id" => $shortname."_header_code",
 "type" => "textarea",
 "std" => ""),

array( "name" => "Analytics/Код статистики",
 "desc" => "Вы можете вставить код Google Analytics или другого счетчика здесь. Он будет автоматически добавлен в нижнюю часть сайта.",
 "id" => $shortname."_analytics_code",
 "type" => "textarea",
 "std" => ""),
array( "type" => "close"),


);

function p2h_add_admin() {

    global $themename, $shortname, $options;

	if ( isset ( $_GET['page'] ) && ( $_GET['page'] == basename(__FILE__) ) ) {

		if ( isset ($_REQUEST['action']) && ( 'save' == $_REQUEST['action'] ) ){

			foreach ( $options as $value ) {
				if ( array_key_exists('id', $value) ) {
					if ( isset( $_REQUEST[ $value['id'] ] ) ) {
						update_option( $value['id'], $_REQUEST[ $value['id'] ]  );
					}
					else {
						delete_option( $value['id'] );
					}
				}
			}
		header("Location: admin.php?page=".basename(__FILE__)."&saved=true");
		}
		else if ( isset ($_REQUEST['action']) && ( 'reset' == $_REQUEST['action'] ) ) {
			foreach ($options as $value) {
				if ( array_key_exists('id', $value) ) {
					delete_option( $value['id'] );
				}
			}
		header("Location: admin.php?page=".basename(__FILE__)."&reset=true");
		}
	}

add_menu_page($themename, $themename, 'administrator', basename(__FILE__), 'p2h_admin');
add_submenu_page(basename(__FILE__), $themename . ' настройки', 'Настройки темы', 'administrator',  basename(__FILE__),'p2h_admin'); // Default
}

function p2h_add_init() {

$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("p2hCss", $file_dir."/functions/theme-options.css", false, "1.0", "all");
wp_enqueue_script("p2hScript", $file_dir."/functions/theme-options.js", false, "1.0");

}

function p2h_admin() {

    global $themename, $shortname, $options;
	$i=0;

	if ( isset ($_REQUEST['saved']) && ($_REQUEST['saved'] ) )echo '<div id="message" class="updated fade"><p><strong>'.$themename.' настройки сохранены.</strong></p></div>';
	if ( isset ($_REQUEST['reset']) && ($_REQUEST['reset'] ) ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' настройки сброшены.</strong></p></div>';

?>

<div class="wrap ">
<div class="options_wrap">
<h2 class="settings-title">Настройки <?php echo $themename; ?></h2>
<div>
<p>Если тема Desk оказалась для вас полезной, вы можете сделать небольшое пожертвование payal, чтобы помочь мне с дальнейшей разработкой и технической поддержкой. Спасибо!</p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="8SRQM2HRFH7JE">
<input type="image" src="https://www.paypal.com/en_GB/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>
<br />
</div>

<form method="post">

<?php foreach ($options as $value) {
switch ( $value['type'] ) {
case "section":
?>
	<div class="section_wrap">
	<h3 class="section_title"><?php echo $value['name']; ?></h3>
	<div class="section_body">

<?php
break;
case 'text':
?>

	<div class="options_input options_text">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'])  ); } else { echo $value['std']; } ?>" />
	</div>

<?php
break;
case 'textarea':
?>
	<div class="options_input options_textarea">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id']) ); } else { echo $value['std']; } ?></textarea>
	</div>

<?php
break;
case 'select':
?>
	<div class="options_input options_select">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
		<?php foreach ($value['options'] as $option) { ?>
				<option <?php if (get_option( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
		</select>
	</div>

<?php
break;
case "radio":
?>
	<div class="options_input options_select">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		  <?php foreach ($value['options'] as $key=>$option) {
			$radio_setting = get_option($value['id']);
			if($radio_setting != ''){
				if ($key == get_option($value['id']) ) {
					$checked = "checked=\"checked\"";
					} else {
						$checked = "";
					}
			}else{
				if($key == $value['std']){
					$checked = "checked=\"checked\"";
				}else{
					$checked = "";
				}
			}?>
			<input type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?> /><?php echo $option; ?><br />
			<?php } ?>
	</div>

<?php
break;
case "checkbox":
?>
	<div class="options_input options_checkbox">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
		<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
		<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	 </div>

<?php
break;
case "close":
$i++;
?>
<span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="Сохранить изменения" /></span>
</div><!--#section_body-->
</div><!--#section_wrap-->

<?php break;
}
}
?>

<input type="hidden" name="action" value="save" />
<span class="submit">
<input name="save" type="submit" value="Сохранить все изменения" />
</span>
</form>

<form method="post">
<span class="submit">
<input name="reset" type="submit" value="Сбросить все изменения" />
<input type="hidden" name="action" value="reset" />
</span>
</form>
<br/>
</div><!--#options-wrap-->

</div><!--#wrap-->
<?php
}
add_action('admin_init', 'p2h_add_init');
add_action('admin_menu' , 'p2h_add_admin');
?>