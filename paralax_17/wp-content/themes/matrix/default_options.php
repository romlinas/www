<?php
function matrix_theme_options()
{	
	$banner_img = get_template_directory_uri() . '/images/banner.jpg';
    $matrix_theme_options = array(
        //General Settings
        '_frontpage' => 'on',
		'enable_demo' => 1,
        'upload_custom_logo' => '',
        'logo_height' => 70,
        'logo_width' => 150,
        'matrix_custom_css' => '',
        /* Layout */
        'site_layout' => 'wide',
        'logo_layout' => 'left',
        'footer_layout' => 3,
        'post_layout' => 'rightsidebar',
        'headersticky' => 0,
        'color_scheme' => 'red',
        //Slide
        'home_slider_enabled' => 1,
		'home_slider_posts' => '',
        // service
        'home_service_enable' => 1,
        'home_service_title' => __('Our Services', 'matrix'),
        'home_service_description' => __('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
			veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'matrix'),
        'home_service_column' => 3,
        'service_title_1' => __("Creative Ideas", 'matrix'),
        'service_icon_1' => "fa fa-rocket",
        'service_text_1' => __("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.", 'matrix'),

        'service_title_2' => __("Records", 'matrix'),
        'service_icon_2' => "fa fa-database",
        'service_text_2' => __("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.", 'matrix'),

        'service_title_3' => __("WordPress", 'matrix'),
        'service_icon_3' => "fa fa-wordpress",
        'service_text_3' => __("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.", 'matrix'),

        'service_title_4' => __('Fully Responsive', 'matrix'),
        'service_icon_4' => "fa fa-mobile",
        'service_text_4' => __('There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in', 'matrix'),

        //portfolio
        'home_portfolio_enable' => 1,
        'portfolio_four_column' => 1,
		'portfolio_shortcode'=>'',
        // call out area settings
        'home_callout_enable' => 1,
        'callout_bg_image' => $banner_img,
        'home_callout_description' => __('MATRIX Theme IS READY FOR BUSINESS, AGENCY OR CREATIVE PORTFOLIOS', 'matrix'),
        'anim_texts' => __('MODERN,CLEAN,AWESOME,GREAT,COOL', 'matrix'),
        'home_callout_btn_1' => __('Check Out Features', 'matrix'),
        'home_callout_btn_2' => __('Purchase This Now', 'matrix'),
        'home_callout_btn1_link' => '#',
        'home_callout_btn2_link' => '#',
        'home_callout_btn1_icon' => 'fa fa-cloud-download',
        'home_callout_btn2_icon' => 'fa fa-shopping-cart',
        // Home Blog Settings
        'home_blog_enable' => 'on',
        'home_blog_title' => __('Our Latest Blog Post' , 'matrix'),
        'home_blog_description' => __('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.', 'matrix'),

        /** Social media links **/
        'social_media_header' => 'on',
        'social_media_footer' => 'on',
        'header_shocial_media_bar' => 'on',
        'contact_info_header' => 'on',
        'social_twitter_link' => 'http://twitter.com/',
        'social_facebook_link' => 'http://facebook.com',
        'social_google_plus_link' => 'http://www.google.com',
        'social_linkedin_link' => 'http://liknkedin.com/',
        'social_dribble_link' => 'http://dribble.com/',
        'social_instagram_link' => 'http://instagram.com/',
        'contact_address' => __('1-A-16, Lorem Ipsum, India', 'matrix'),
        'contact_email' => 'webhuntinfotech@gmail.com',
        'contact_phone' => '+99999999',
        /** footer customization **/
        'copyright_text_footer' => 'on',
        'footer_copyright_text' => __('Theme Developed By ', 'matrix'),
        'created_by_matrix_text' => __('WebHunt Infotech', 'matrix'),
        'created_by_link' => 'http://www.webhuntinfotech.com/',
    );
    return wp_parse_args(get_option('matrix_theme_options', array()), $matrix_theme_options);
}

?>