<?php
    new Themater_FeaturedPosts();
    
    class Themater_FeaturedPosts
    {
        var $theme;
        var $status = false;
        var $url;
        
        var $defaults = array(
            'enabled_in' => array('homepage'),
            'hook' => 'content_before',
            'hook_priority' => '1',
            'label' => '',
            'image_sizes' => '',
            'source' => 'custom',
            'category_num' => '5',
            'excerpt_length' => '32',
            'readmore' => 'Далее &raquo;',
            'effect' => 'fade',
            'timeout' => '4000',
            'delay' => '0',
            'speed' => '1000', 
            'speedIn' => '',
            'speedOut' => '',
            'default_moreoptions' => array('thumbnail','post_title', 'post_excerpt', 'pager', 'next_prev', 'sync','pause', 'pauseOnPagerHover'),
            'enabled_positions' => array('homepage'=>'Главная страница', 'static'=>'Статичная страница (Когда статичная страница установлена в качестве главной посредством страницы настроек "wp-admin / Параметры / Чтение")', 'categories' => 'Страницы рубрик', 'tags' => 'Страницы меток', 'archives' => 'Страницы архивов', 'single' => 'Страницы записей', 'pages' => 'Страницы', 'searches'=>'Страницы результатов поиска'),
            'custom_default_slides' => array(
                '1' => array('link' => '#', 'title' => 'Это популярная запись №1', 'content' => 'Вы можете полностью настроить прикрепленные слайды на странице настроек темы. Вы также можете легко скрыть слайдер на определенных страницах вашего сайта, таких, как рубрики, метки, архивы и т.д.'), 
                '2' => array('link' => '#', 'title' => 'Это популярная запись №2', 'content' => 'Вы можете полностью настроить прикрепленные слайды на странице настроек темы. Вы также можете легко скрыть слайдер на определенных страницах вашего сайта, таких, как рубрики, метки, архивы и т.д.'), 
                '3' => array('link' => '#', 'title' => 'Это популярная запись №3', 'content' => 'Вы можете полностью настроить прикрепленные слайды на странице настроек темы. Вы также можете легко скрыть слайдер на определенных страницах вашего сайта, таких, как рубрики, метки, архивы и т.д.'), 
                '4' => array('link' => '#', 'title' => 'Это популярная запись №4', 'content' => 'Вы можете полностью настроить прикрепленные слайды на странице настроек темы. Вы также можете легко скрыть слайдер на определенных страницах вашего сайта, таких, как рубрики, метки, архивы и т.д.'), 
                '5' => array('link' => '#', 'title' => 'Это популярная запись №5', 'content' => 'Вы можете полностью настроить прикрепленные слайды на странице настроек темы. Вы также можете легко скрыть слайдер на определенных страницах вашего сайта, таких, как рубрики, метки, архивы и т.д.')
            )
        );
        
        var $moreoptions =  array(
            'thumbnail' => 'Показывать миниатюры',
            'post_title' => 'Показывать заговки записей',
            'post_excerpt' => 'Показывать цитаты записей',
            'pager' => 'Показывать постраничный навигатор / Номера страниц',
            'next_prev' => 'Показывать кнопки Следующий / Предыдущий',
            'sync' => 'In/Out переходы должны происходить одновременно',
            'pause' => 'Пауза при наведениии',
            'pauseOnPagerHover' => 'Пауза при наведении на ссылку',
            'continuous' => 'Начинать следующий переход сразу после завершения текущего (будут перекрывать друг друга временными настройками: задержка, скорость и т.д.)'
        );
        
        var $effects = array(
            'none' => 'Без эффекта', 
            'fade' => 'Fade', 
            'fadeZoom' => 'Fade Zoom', 
            'blindX' => 'Blind X',
            'blindY' => 'Blind Y',
            'blindZ' => 'Blind Z',
            'cover' => 'Cover',
            'uncover' => 'Uncover',
            'curtainX' => 'Curtain X',
            'curtainY' => 'Curtain Y',
            'growX' => 'Grow X',
            'growY' => 'Grow Y',
            'scrollUp' => 'Scroll Up',
            'scrollDown' => 'Scroll Down',
            'scrollLeft' => 'Scroll Left',
            'scrollRight' => 'Scroll Right',
            'scrollHorz' => 'Scroll Horizontal',
            'scrollVert' => 'Scroll Vertical',
            'slideX' => 'Slide X',
            'slideY' => 'Slide Y',
            'turnDown' => 'Turn Down',
            'turnLeft' => 'Turn Left',
            'turnRight' => 'Turn Right',
            'wipe' => 'Wipe',
            'zoom' => 'Zoom'
        );
        
        function Themater_FeaturedPosts()
        {
            global $theme;
            $this->theme = $theme;
            $this->url = THEMATER_INCLUDES_URL . '/featuredposts';
            
            if(is_array($this->theme->options['plugins_options']['featuredposts']) ) {
                $this->defaults = array_merge($this->defaults, $this->theme->options['plugins_options']['featuredposts']);
            }
            
            $this->theme->add_hook('head', array(&$this, 'featuredposts_head'));
            $this->theme->add_hook($this->defaults['hook'], array(&$this, 'display_featuredposts'), $this->defaults['hook_priority']);
  
            if($this->theme->is_admin_user()) {
                $this->themater_options();
            }
        }
        
        function featuredposts_head()
        {
            if($this->enabled()) {
                echo  "\n<!-- Featured Posts -->\n";
                echo '<script src="' . $this->url . '/scripts/jquery.cycle.all.js" type="text/javascript"></script>' . "\n";
                echo  "<!-- /jquery.cycle.all.js -->\n\n";
            }
        }
        
        function display_featuredposts()
        {
            if($this->enabled()) {
                
                $featuredposts_moreoptions = $this->theme->get_option('featuredposts_moreoptions');

                $cycle_js = "jQuery(document).ready(function() {\n\t";
                $cycle_js .= "jQuery('.fp-slides').cycle({\n\t\t";
                $cycle_js .= "fx: '" . $this->theme->get_option('featuredposts_effect') ."',\n\t\t";
                $cycle_js .= "timeout: " . $this->theme->get_option('featuredposts_timeout') .",\n\t\t";
                $cycle_js .= "delay: " . $this->theme->get_option('featuredposts_delay') .",\n\t\t";
                $cycle_js .= "speed: " . $this->theme->get_option('featuredposts_speed') .",\n\t\t";
                $cycle_js .= "next: '.fp-next',\n\t\t";
                $cycle_js .= "prev: '.fp-prev',\n\t\t";
                $cycle_js .= "pager: '.fp-pager',\n\t\t";
                
                if($this->theme->display('featuredposts_speedIn')) {
                    $cycle_js .= "speedIn: " . $this->theme->get_option('featuredposts_speedIn') .",\n\t\t";
                }
                
                if($this->theme->display('featuredposts_speedOut')) {
                    $cycle_js .= "speedOut: " . $this->theme->get_option('featuredposts_speedOut') .",\n\t\t";
                }
                
                $featuredposts_continuous = $this->theme->display('continuous', $featuredposts_moreoptions) ? '1' : '0';
                $cycle_js .= "continuous: $featuredposts_continuous,\n\t\t";
                
                $featuredposts_sync = $this->theme->display('sync', $featuredposts_moreoptions) ? '1' : '0';
                $cycle_js .= "sync: $featuredposts_sync,\n\t\t";
                
                $featuredposts_pause = $this->theme->display('pause', $featuredposts_moreoptions) ? '1' : '0';
                $cycle_js .= "pause: $featuredposts_pause,\n\t\t";
                
                $featuredposts_pauseOnPagerHover = $this->theme->display('pauseOnPagerHover', $featuredposts_moreoptions) ? '1' : '0';
                $cycle_js .= "pauseOnPagerHover: $featuredposts_pauseOnPagerHover,\n\t\t";
                
                
                
                $cycle_js .= "cleartype: true,\n\t\t";
                $cycle_js .= "cleartypeNoBg: true\n\t";
                $cycle_js .= "});\n });\n";
                
                $this->theme->custom_js($cycle_js);
                
                if(file_exists(THEMATER_INCLUDES_DIR . '/featuredposts/template.php') ) {
                    $featuredposts_source = $this->theme->get_option('featuredposts_source');
                    $featuredposts_moreoptions = $this->theme->get_option('featuredposts_moreoptions');
                    
                    $featuredposts_query = false;
                    $the_slider = false;
                    
                    if($featuredposts_source == 'custom') {
                        $the_slider = $this->theme->get_option('featuredposts_custom_slides');
                        unset($the_slider['the__id__']);
                    } else {
                        if($featuredposts_source == 'category') {
                            if($this->theme->display('featuredposts_source_category')) {
                                $featuredposts_query = 'posts_per_page=' . $this->theme->get_option('featuredposts_source_category_num') . '&cat=' . $this->theme->get_option('featuredposts_source_category');
                            } 
                        } elseif($featuredposts_source == 'posts') {
                            if($this->theme->display('featuredposts_source_posts')) {
                                $featuredposts_query = array('post__in'=> explode(',', trim($this->theme->get_option('featuredposts_source_posts'))), 'post_type'=>'post', 'posts_per_page' => '-1');
                            } 
                        } elseif($featuredposts_source == 'pages') {
                            if($this->theme->display('featuredposts_source_pages')) {
                                $featuredposts_query = array('post__in'=> explode(',', trim($this->theme->get_option('featuredposts_source_pages'))), 'post_type'=>'page', 'posts_per_page' => '-1');
                            } 
                        }
                        
                        if($featuredposts_query) {
                            $featuredposts_excerpt_length = $this->theme->get_option('featuredposts_excerpt_length');
                            query_posts($featuredposts_query);
                            if (have_posts()) : while (have_posts()) : the_post();
                                $featured_image_url = '';
                                if ( has_post_thumbnail()) {
                                   $get_large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
                                   $featured_image_url = $get_large_image_url[0];
                                 }
                                
                                $the_slider[] = array('img' => $featured_image_url, 'link' => get_permalink(), 'title' => get_the_title(), 'content' => $this->theme->shorten(get_the_excerpt(),$featuredposts_excerpt_length));
                            endwhile;
                            endif;
                            wp_reset_query();
                        }
                    }
                    require_once(THEMATER_INCLUDES_DIR . '/featuredposts/template.php');
                }
            }
        }
        
        function enabled()
        {
            if($this->status) {
                $is_enabled = $this->status == 'enabled' ? true : false;
                return $is_enabled;
            } else {
                $featuredposts_enabled = $this->theme->get_option('featuredposts_enabled');
                if(is_array($featuredposts_enabled)) {
                    if(
                        (is_home() && in_array('homepage', $featuredposts_enabled) ) 
                        || (is_front_page() && in_array('static', $featuredposts_enabled) ) 
                        || (is_category() && in_array('categories', $featuredposts_enabled) ) 
                        || (is_tag() && in_array('tags', $featuredposts_enabled) ) 
                        || (is_single() && in_array('single', $featuredposts_enabled) ) 
                        || (is_page() && in_array('pages', $featuredposts_enabled) ) 
                        || ((is_day() || is_month() || is_year()) && in_array('archives', $featuredposts_enabled) ) 
                        || (is_search() && in_array('searches', $featuredposts_enabled) ) 
                    ){
                        $this->status = 'enabled';
                        return true;
                    }
                } 
                $this->status = 'disabled';
                return false;
            }
        }

        function featuredposts_source()
        {
            $get_featuredposts_source = $this->theme->get_option('featuredposts_source');
            $featuredposts_sources = array('custom'=> 'Произв. слайды', 'category'=> 'Записи рубрик', 'posts' => 'Выбранные записи', 'pages' => 'Выбранные страницы');
            
            foreach($featuredposts_sources as $key=>$val) {
                $featuredposts_sources_selected = $get_featuredposts_source == $key ? 'checked="checked"' : '';
                ?>
                <div id="select_slide_source_<?php echo $key; ?>" class="tt_radio_button_container">
                    <input type="radio" name="featuredposts_source" value="<?php echo $key; ?>" <?php echo $featuredposts_sources_selected; ?> id="featuredposts_source_id_<?php echo $key; ?>" /> <a href="javascript:themater_featuredposts_source('<?php echo $key; ?>');" class="tt_radio_button"><?php echo $val; ?></a>
                </div>
                <?php
            }
            ?>
                <script type="text/javascript">
                    function themater_featuredposts_source(source)
                    {
                        $thematerjQ("#themater_featuredposts_custom").hide();
                        $thematerjQ("#select_slide_source_custom a").removeClass('tt_radio_button_current');
                        $thematerjQ("#select_slide_source_custom").find(":radio").removeAttr("checked");
                        
                        $thematerjQ("#themater_featuredposts_category").hide();
                        $thematerjQ("#select_slide_source_category a").removeClass('tt_radio_button_current');
                        $thematerjQ("#select_slide_source_category").find(":radio").removeAttr("checked");
                        
                        $thematerjQ("#themater_featuredposts_posts").hide();
                        $thematerjQ("#select_slide_source_posts a").removeClass('tt_radio_button_current');
                        $thematerjQ("#select_slide_source_posts").find(":radio").removeAttr("checked");
                        
                        $thematerjQ("#themater_featuredposts_pages").hide();
                        $thematerjQ("#select_slide_source_pages a").removeClass('tt_radio_button_current');
                        $thematerjQ("#select_slide_source_pages").find(":radio").removeAttr("checked");
                        
                        $thematerjQ("#themater_featuredposts_"+source+"").fadeIn();
                        $thematerjQ("#select_slide_source_"+source+" a").addClass('tt_radio_button_current');
                        $thematerjQ("#select_slide_source_"+source+"").find(":radio").attr("checked","checked");
                    }
                    jQuery(document).ready(function(){
                        themater_featuredposts_source('<?php echo $get_featuredposts_source; ?>');
                    });
                    
                </script>
            <?php
        }
        
        function featuredposts_custom_slides()
        {
            $get_featuredposts_custom_slides = $this->theme->get_option('featuredposts_custom_slides');
            ?>
            <script type="text/javascript">
                function featured_slider_new()
                {
                    var new_slide_id = 10000+Math.floor(Math.random()*100000);
                    var get_new_slide_container = $thematerjQ('#new_custom_slide_prototype').html();
                    
                    var new_slide_container = get_new_slide_container.replace(/the__id__/g, ''+new_slide_id+'');
                    
                    
                    $thematerjQ('#new_custom_slide').append(''+new_slide_container+'');
                }
                
                function featured_slider_delete(id)
                {
                    $thematerjQ('#featured_custom_slide_'+id+'').remove();
                }
                
            </script>
            <div style="margin-bottom: 20px;">
                <a class="button" href="#new_custom_slide_a" onclick="featured_slider_new();" >Добавить новый слайд</a>
            </div>
            
            <?php
            $no = 0;
            foreach ($get_featuredposts_custom_slides as $key=>$custom_slide ) {
                $no++;
                if(is_numeric($key)) {
                ?>
                    <div style="padding: 0 0 0 0; border-bottom: 1px solid #ddd; margin-bottom: 20px;" id="featured_custom_slide_<?php echo $key; ?>">
                        <div style="background: #efefef; padding: 5px; margin-bottom: 5px; font-weight: bold;">
                            Slide #<?php echo $no; ?> - <?php echo $custom_slide['title']; ?>
                            &nbsp; <a class="button" href="javascript:themater_showHide('featured_custom_slide_content_<?php echo $key; ?>');">Правка</a>
                            &nbsp; <a class="button tt-button-red" href="javascript:featured_slider_delete('<?php echo $key; ?>');">Удалить</a>
                        </div>
                        <div class="fp-form-element" id="featured_custom_slide_content_<?php echo $key; ?>" style="display: none;">
                             <table width="100%">
                                <tr>
                                    <td class="tt-inline-label" style="width: 15%;" valign="top">Картинка:</td>
                                    <td class="tt-inline-content" style="width: 85%;" valign="top"><input type="text" class="tt-text" name="featuredposts_custom_slides[<?php echo $key; ?>][img]" value="<?php echo $custom_slide['img']; ?>"  /></td>
                                </tr>
                                
                                <tr>
                                    <td class="tt-inline-label" style="width: 15%;" valign="top">URL ссылки:</td>
                                    <td class="tt-inline-content" style="width: 85%;" valign="top"><input type="text" class="tt-text" name="featuredposts_custom_slides[<?php echo $key; ?>][link]" value="<?php echo $custom_slide['link']; ?>"  /></td>
                                </tr>
                                
                                 <tr>
                                    <td class="tt-inline-label" style="width: 15%;" valign="top">Заголовок:</td>
                                    <td class="tt-inline-content" style="width: 85%;" valign="top"><input type="text" class="tt-text" name="featuredposts_custom_slides[<?php echo $key; ?>][title]" value="<?php echo $custom_slide['title']; ?>"  /></td>
                                </tr>
                                
                                <tr>
                                    <td class="tt-inline-label" style="width: 15%;" valign="top">Контент:</td>
                                    <td class="tt-inline-content" style="width: 85%;" valign="top"><textarea class="tt-textarea" name="featuredposts_custom_slides[<?php echo $key; ?>][content]" style="height: 100px;"><?php echo $custom_slide['content']; ?></textarea></td>
                                </tr>
                                
                             </table>
                        </div>
                    </div>
                <?php
                }
            }
            ?>
            <a name="new_custom_slide_a"></a>
            <div id="new_custom_slide">
                <div id="new_custom_slide_prototype" style="display: none;">
                
                    <div style="padding: 0 0 0 0; border-bottom: 1px solid #ddd; margin-bottom: 20px;" id="featured_custom_slide_the__id__">
                        <div style="background: #eee; padding: 5px; margin-bottom: 5px; font-weight: bold;">
                            <span style="color: green;">Новый слайд</span>
                            &nbsp; <a class="button" href="javascript: themater_showHide('featured_custom_slide_content_the__id__');">Правка</a>
                            &nbsp; <a class="button tt-button-red" href="javascript: featured_slider_delete('the__id__');">Удалить</a>
                        </div>
                        
                        <div class="fp-form-element" id="featured_custom_slide_content_the__id__">
                             <table width="100%">
                                <tr>
                                    <td class="tt-inline-label" style="width: 15%;" valign="top">Картинка:</td>
                                    <td class="tt-inline-content" style="width: 85%;" valign="top"><input type="text" class="tt-text" name="featuredposts_custom_slides[the__id__][img]" value=""  /></td>
                                </tr>
                                
                                 <tr>
                                    <td class="tt-inline-label" style="width: 15%;" valign="top">URL ссылки:</td>
                                    <td class="tt-inline-content" style="width: 85%;" valign="top"><input type="text" class="tt-text" name="featuredposts_custom_slidesthe__id__][link]" value=""  /></td>
                                </tr>
                                
                                <tr>
                                    <td class="tt-inline-label" style="width: 15%;" valign="top">Заголовок:</td>
                                    <td class="tt-inline-content" style="width: 85%;" valign="top"><input type="text" class="tt-text" name="featuredposts_custom_slidesthe__id__][title]" value=""  /></td>
                                </tr>
                                
                                <tr>
                                    <td class="tt-inline-label" style="width: 15%;" valign="top">Контент:</td>
                                    <td class="tt-inline-content" style="width: 85%;" valign="top"><textarea class="tt-textarea" name="featuredposts_custom_slides[the__id__][content]" style="height: 100px;"></textarea></td>
                                </tr>
                                
                             </table>
                        </div>
                    </div>
                    
                </div>
            </div>
            <?php
        }
        
        
        function themater_options()
        {
             $this->theme->admin_option(array('Прикреп. записи', 15), 
                'Прикреп. записи', 'featuredposts_enabled', 
                'checkboxes', $this->defaults['enabled_in'], 
                array('options' => $this->defaults['enabled_positions'], 'help'=> 'Разрешить прикрепленные записи для:', 'display'=>'extended-top')
            );
            
        
            $image_sizes = $this->defaults['image_sizes'] ? '<br>Рекомендуемые размеры изображения <strong>' . $this->defaults['image_sizes'] . '</strong>' : '';
            $this->theme->admin_option('Прикреп. записи', 
                'Картинки прикрепленных записей', 'featuredposts_images', 
                'content','<i>Изображения для "Рубрики записей", "Выбранные записи" и "Выбранные страницы" должны быть добавлены с помощью ссылки "Задать миниатюру", расположенной под списком рубрик на странице добавления / правки записи. ' . $image_sizes . '</i>'
            );
            
            $this->theme->admin_option('Прикреп. записи', 
                'Источник прикрепленных записей', 'featuredposts_source', 
                'callback', $this->defaults['source'], 
                array('callback' => array(&$this, 'featuredposts_source'))
            );
            
            $this->theme->admin_option('Прикреп. записи', 
                'CSS прикрепленных записей', 'featuredposts_source_css', 
                'raw', '<style type="text/css"><!-- .featured_slide_source { padding: 4px; } .featured_slide_source_selected {padding: 3px; border: 1px solid #118d11; background: #daf8dc; } --></style>', 
                array('display'=>'clean')
            );
            
            $this->theme->admin_option('Прикреп. записи', 
                'Featured Posts Custom Wrap', 'featuredposts_source_custom_wrap', 
                'raw', '<div id="themater_featuredposts_custom">', 
                array('display'=>'clean')
            );
           
           $featuredposts_custom_slides_raw =  $this->defaults['custom_default_slides'];
           
           if(is_array($featuredposts_custom_slides_raw)) {
                foreach ($featuredposts_custom_slides_raw as $custom_slide_key => $custom_slide_val) {
                    $featuredposts_custom_slides[] = array('img' => get_template_directory_uri() . '/images/default-slides/' . $custom_slide_key . '.jpg', 'link' =>   $custom_slide_val['link'], 'title' => $custom_slide_val['title'], 'content' => $custom_slide_val['content']);
                }
           }
           
            $this->theme->admin_option('Прикреп. записи', 
                'Произвольные слайды', 'featuredposts_custom_slides', 
                'callback', $featuredposts_custom_slides, 
                array('callback' => array(&$this, 'featuredposts_custom_slides'), 'display' => 'clean')
            );
            
            $this->theme->admin_option('Прикреп. записи', 
                'Featured Posts Custom Wrap End', 'featuredposts_source_custom_end_wrap', 
                'raw', '</div>', 
                array('display'=>'clean')
            );
            
            
            $this->theme->admin_option('Прикреп. записи', 
                'Featured Posts Category Wrap', 'featuredposts_source_category_wrap', 
                'raw', '<div id="themater_featuredposts_category">', 
                array('display'=>'clean')
            );
            
            $this->theme->admin_option('Прикреп. записи', 
                'Количество прикрепленных записей', 'featuredposts_source_category_num', 
                'text', $this->defaults['category_num'], 
                array('help'=>'Количество записей, которые вы хотите показать в слайдшоу.', 'display'=>'inline', 'style'=>'width: 60px;')
            );
            
            $this->theme->admin_option('Прикреп. записи', 
                'Рубрика прикрепленных записей', 'featuredposts_source_category', 
                'select', '', 
                array('options'=>$this->theme->get_categories_array(true, array(''=>'Выбрать рубрику')), 'help'=>'Записи из выбранных рубрик будут образовывать содержимое слайдера. В рубриках должно быть, как минимум по 2 записи.', 'display'=>'inline')
            );
            
            $this->theme->admin_option('Прикреп. записи', 
                'Featured Posts Category Wrap End', 'featuredposts_source_category_end_wrap', 
                'raw', '</div>', 
                array('display'=>'clean')
            );
            
            $this->theme->admin_option('Прикреп. записи', 
                'Featured Selected Posts Wrap', 'featuredposts_source_posts_wrap', 
                'raw', '<div id="themater_featuredposts_posts">', 
                array('display'=>'clean')
            );
            
            $this->theme->admin_option('Прикреп. записи', 
                'Идентификаторы записей', 'featuredposts_source_posts', 
                'text', '', 
                array('help'=>'Разделяя запятыми, впишите идентификаторы отдельных записей. <br />Необходимо добавить идентификаторы, как минимум 2 записей.', 'display'=>'inline')
            );
            
            $this->theme->admin_option('Прикреп. записи', 
                'Featured Selected Posts Wrap End', 'featuredposts_source_posts_wrap_end', 
                'raw', '</div>', 
                array('display'=>'clean')
            );
            
            
            $this->theme->admin_option('Прикреп. записи', 
                'Featured Selected Pages Wrap', 'featuredposts_source_pages_wrap', 
                'raw', '<div id="themater_featuredposts_pages">', 
                array('display'=>'clean')
            );
            
            $this->theme->admin_option('Прикреп. записи', 
                'Идентификаторы страниц', 'featuredposts_source_pages', 
                'text', '', 
                array('help'=>'Разделяя запятыми, впишите идентификаторы отдельных страниц. <br />Необходимо добавить идентификаторы, как минимум 2 страниц.', 'display'=>'inline')
            );
            
            $this->theme->admin_option('Прикреп. записи', 
                'Featured Selected Pages Wrap End', 'featuredposts_source_pages_wrap_end', 
                'raw', '</div>', 
                array('display'=>'clean')
            );
            
             $this->theme->admin_option('Прикреп. записи', 
                'Эффект слайдера', 'featuredposts_effect', 
                'select', $this->defaults['effect'], 
                array('options'=> $this->effects)
            );
            
             $this->theme->admin_option('Прикреп. записи', 
                'Дополнительные настройки', 'featuredposts_misc_options_info', 
                'content', ''
            );
            
             $this->theme->admin_option('Прикреп. записи', 
                'Иные настройки слайдшоу', 'featuredposts_moreoptions', 
                'checkboxes', $this->defaults['default_moreoptions'], 
                array('display'=>'clean', 'options'=> $this->moreoptions)
            );
            
            $this->theme->admin_option('Прикреп. записи', 
                'Текст "Read more"', 'featuredposts_readmore', 
                'text', $this->defaults['readmore'], 
                array('help'=> 'Оставьте поле пустым, если хотите его скрыть',  'display'=>'inline')
            );
            
            $this->theme->admin_option('Прикреп. записи', 
                'Длина цитаты записи', 'featuredposts_excerpt_length', 
                'text', $this->defaults['excerpt_length'], 
                array('suffix'=> 'слов(а)', 'style'=>'width: 80px;', 'display'=>'inline')
            );
            
            $this->theme->admin_option('Прикреп. записи', 
                'Задержка перелистывания', 'featuredposts_timeout', 
                'text', $this->defaults['timeout'], 
                array('suffix'=> ' мс.', 'style'=>'width: 80px;', 'display'=>'inline', 'help' => 'Пауза в миллисекундах между показами слайдов (впишите 0 для отлючения автопромотки)')
            );
            
            $this->theme->admin_option('Прикреп. записи', 
                'Задержка слайдов', 'featuredposts_delay', 
                'text', $this->defaults['delay'], 
                array('suffix'=> ' мс.', 'style'=>'width: 80px;', 'display'=>'inline', 'help'=>'Дополнительная задержка (в миллисекундах) для первого перехода (подсказка: может быть отрицательным)')
            );
            
            $this->theme->admin_option('Прикреп. записи', 
                'Скорость слайдов', 'featuredposts_speed', 
                'text', $this->defaults['speed'], 
                array('suffix'=> ' мс.', 'style'=>'width: 80px;', 'display'=>'inline', 'help'=>'Скорость перехода (любое действительное значение скорости FX)')
            );
            
            $this->theme->admin_option('Прикреп. записи', 
                'Скорость промотки слайдов (In)', 'featuredposts_speedIn', 
                'text', $this->defaults['speedIn'], 
                array('suffix'=> ' мс.', 'style'=>'width: 80px;', 'display'=>'inline', 'help'=>'скорость перехода \'in\'')
            );
            
            $this->theme->admin_option('Прикреп. записи', 
                'Скорость промотки слайдов (Out)', 'featuredposts_speedOut', 
                'text', $this->defaults['speedOut'], 
                array('suffix'=> ' мс.', 'style'=>'width: 80px;', 'display'=>'inline', 'help'=>'скорость перехода \'out\'')
            );
        }
    }
?>