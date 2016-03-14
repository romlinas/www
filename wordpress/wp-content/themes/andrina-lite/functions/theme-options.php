<?php

add_action('init', 'inkthemes_options');
if (!function_exists('inkthemes_options')) {

    function inkthemes_options() {
        // VARIABLES
        $themename = function_exists( 'wp_get_theme' ) ? wp_get_theme() : get_current_theme();
        $themename = $themename['Name'];
        $shortname = "of";
        // Populate OptionsFramework option in array for use in theme
        global $of_options;
        $of_options = inkthemes_get_option('of_options');
        //Front page on/off
        $file_rename = array("on" => "On", "off" => "Off");
        // Background Defaults
        $background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll');
        //Stylesheet Reader
        $alt_stylesheets = array("green" => "green", "black" => "black", "blue" => "blue", "grass" => "grass", "orange" => "orange", "purple" => "purple", "red" => "red", "yellow" => "yellow");
        // Pull all the categories into an array
        $options_categories = array();
        $options_categories_obj = get_categories();
        foreach ($options_categories_obj as $category) {
            $options_categories[$category->cat_ID] = $category->cat_name;
        }

        // Pull all the pages into an array
        $options_pages = array();
        $options_pages_obj = get_pages('sort_column=post_parent,menu_order');
        $options_pages[''] = 'Select a page:';
        foreach ($options_pages_obj as $page) {
            $options_pages[$page->ID] = $page->post_title;
        }

        // If using image radio buttons, define a directory path
        $imagepath = get_stylesheet_directory_uri() . '/images/';

        $options = array(
            /* ---------------------------------------------------------------------------- */
            /* General Setting */
            /* ---------------------------------------------------------------------------- */
            array("name" => "General Settings",
                "type" => "heading"),
            array("name" => "Custom Logo",
                "desc" => "Загрузите свой логотип, оптимальный размер: 221px на 84px",
                "id" => "inkthemes_logo",
                "type" => "upload"),
            array("name" => "Custom Favicon",
                "desc" => "Загрузите иконку для сайта, нужный размер: 16px x 16px.",
                "id" => "inkthemes_favicon",
                "type" => "upload"),
            array("name" => "Tracking Code",
                "desc" => "Вставьте Google Analytics или Яндекс Метрику",
                "id" => "inkthemes_analytics",
                "std" => "",
                "type" => "textarea"),
            /* ---------------------------------------------------------------------------- */
            /* Homepage Feature Area */
            /* ---------------------------------------------------------------------------- */
            array("name" => "Homepage Settings",
                "type" => "heading"),
            //Homepage Main Heading 
            array("name" => "Top Feature Image",
                "desc" => "Загрузите свою катринку для шапки сайта, нужный размер: 950px wide and 460px height.",
                "id" => "inkthemes_slideimage1",
                "std" => "",
                "type" => "upload"),
            array("name" => "Top Feature Heading",
                "desc" => "Введите текст заголовка который располагается на шапке.",
                "id" => "inkthemes_slider_heading1",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Top Feature Description",
                "desc" => "Введите нужное описание под заголовком в шапке",
                "id" => "inkthemes_slider_des1",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Главный заголовок",
                "type" => "saperate",
                "class" => "saperator"),
            array("name" => "Homepage Main Heading",
                "desc" => "Введите основной заголовок, который располагается под шапкой",
                "id" => "inkthemes_main_head",
                "std" => "",
                "type" => "textarea"),
            //Feature Section
            array("name" => "Картинки работ на главной",
                "type" => "saperate",
                "class" => "saperator"),
            //First Feature Image
            array("name" => "First Feature Image",
                "desc" => "Загрузите нужную первую картинку, необходимый размер: 202px x 134px.",
                "id" => "inkthemes_feature_img1",
                "std" => "",
                "type" => "upload"),
            //Second Feature Image
            array("name" => "Second Feature Image",
                "desc" => "Загрузите вторую нужную картинку, необходимый размер: 202px x 134px.",
                "id" => "inkthemes_feature_img2",
                "std" => "",
                "type" => "upload"),
            //Third Feature Image
            array("name" => "Third Feature Image",
                "desc" => "Загрузите третью нужную картинку, необходимый размер: 202px x 134px.",
                "id" => "inkthemes_feature_img3",
                "std" => "",
                "type" => "upload"),
            //Fourth Feature Image
            array("name" => "Fourth Feature Image",
                "desc" => "Загрузите четвертую нужную картинку, необходимый размер: 202px x 134px.",
                "id" => "inkthemes_feature_img4",
                "std" => "",
                "type" => "upload"),
            array("name" => "Описания и ссылки на работы на главной странице",
                "type" => "saperate",
                "class" => "saperator"),
            //First Feature Section
            array("name" => "First Feature Heading",
                "desc" => "Введите текст заголовка для первой работы.",
                "id" => "inkthemes_f_head1",
                "std" => "",
                "type" => "textarea"),
            array("name" => "First Feature Description",
                "desc" => "Введите текст описания для первой работы.",
                "id" => "inkthemes_f_des1",
                "std" => "",
                "type" => "textarea"),
            array("name" => "First Feature Link URL",
                "desc" => "Введите URL адрес для первой работы.",
                "id" => "inkthemes_link1",
                "std" => "",
                "type" => "text"),
            //Second Feature Section
            array("name" => "Second Feature Heading",
                "desc" => "Введите текст заголовка для второй работы",
                "id" => "inkthemes_f_head2",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Second Feature Description",
                "desc" => "Введите текст описания для второй работы",
                "id" => "inkthemes_f_des2",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Second Feature Link URL",
                "desc" => "Введите URL адрес для второй работы",
                "id" => "inkthemes_link2",
                "std" => "",
                "type" => "text"),
            //Thrid Feature Section
            array("name" => "Third Feature Heading",
                "desc" => "Введите текст заголовка для третей работы",
                "id" => "inkthemes_f_head3",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Third Feature Description",
                "desc" => "Введите текст описания для третей работы",
                "id" => "inkthemes_f_des3",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Third Feature Link URL",
                "desc" => "Введите URL адрес для третей работы",
                "id" => "inkthemes_link3",
                "std" => "",
                "type" => "text"),
            //Fourth Feature Section
            array("name" => "Fourth Feature Heading",
                "desc" => "Введите текст заголовка для четвертой работы.",
                "id" => "inkthemes_f_head4",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Fourth Feature Description",
                "desc" => "Введите текст описания для четвертой работы.",
                "id" => "inkthemes_f_des4",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Fourth Feature Link URL",
                "desc" => "Введите URL адрес для четвертой работы.",
                "id" => "inkthemes_link4",
                "std" => "",
                "type" => "text"),
            //Homepage two cols
            array("name" => "Главная страница заголовки столбцов",
                "type" => "saperate",
                "class" => "saperator"),
            //Left Column heading
            array("name" => "Left Column Heading",
                "desc" => "Введите текст заголовка для левого столбца.",
                "id" => "inkthemes_left_head",
                "std" => "",
                "type" => "textarea"),
            //Right Column heading
            array("name" => "Right Column Heading",
                "desc" => "Введите текст заголовка для правого столбца.",
                "id" => "inkthemes_right_head",
                "std" => "",
                "type" => "textarea"),
            //Right Column description
            array("name" => "Right Column Description",
                "desc" => "Введите текст описания для правой части. Вы можете разместить HTML код в этом разделе",
                "id" => "inkthemes_right_des",
                "std" => "",
                "type" => "textarea"),
            //Contact Area
            array("name" => "Контактные данные",
                "type" => "saperate",
                "class" => "saperator"),
            array("name" => "Contact Number",
                "desc" => "Введите ваш номер телефона.",
                "id" => "inkthemes_contact_no",
                "std" => "",
                "type" => "text"),
            array("name" => "Email Address",
                "desc" => "Введите ваш Email адрес.",
                "id" => "inkthemes_email_add",
                "std" => "",
                "type" => "text"),
            array("name" => "Date",
                "desc" => "Введите время работы.",
                "id" => "inkthemes_date",
                "std" => "",
                "type" => "text"),
            /* ---------------------------------------------------------------------------- */
            /* Styling Setting */
            /* ---------------------------------------------------------------------------- */
            array("name" => "Styling Options",
                "type" => "heading"),
            array("name" => "Custom CSS",
                "desc" => "Quickly add some CSS to your theme by adding it to this block.",
                "id" => "inkthemes_customcss",
                "std" => "",
                "type" => "textarea"));
        inkthemes_update_option('of_template', $options);
        inkthemes_update_option('of_themename', $themename);
        inkthemes_update_option('of_shortname', $shortname);
    }

}
?>
