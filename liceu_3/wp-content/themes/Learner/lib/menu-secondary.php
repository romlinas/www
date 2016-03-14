<?php

    /**
     * Secondary Menu Admin Options
     */
     
    $this->admin_option(array('Secondary Menu', 22), 
        'Secondary Menu', 'menu_secondary_info', 
        'content', 'Пожалуйста, используйте <a href="nav-menus.php"><strong>панель Меню</strong></a>, чтобы управлять и организовывать элементы <strong>Secondary Menu</strong>.<br />В Secondary Menu отобразится список рубрик, если меню не было выбрано на панели Меню. <a href="http://codex.wordpress.org/Appearance_Menus_Screen" target="_blank">Подробнее об этом.</a>'
    );
    
    $this->admin_option('Secondary Menu', 
        'Включить Secondary Menu?', 'menu_secondary', 
        'checkbox', $this->options['menus']['menu-secondary']['active'], 
        array('display'=>'inline')
    );
    
    $this->admin_option('Secondary Menu',
        'Мобильный заголовок', 'menu_secondary_mobile_title', 
        'text', 'Navigation', 
        array('help'=>'Заголовок Secondary Menu, который будет отображаться в мобильном / адаптивном режиме.', 'display'=>'inline')
    );
    
     $this->admin_option('Secondary Menu', 
        'Настройки выпадения / раскрытия', 'menu_secondary_drop_down', 
        'content', ''
    );
    
    $this->admin_option('Secondary Menu', 
        'Глубина', 'menu_secondary_depth', 
        'text', $this->options['menus']['menu-secondary']['depth'], 
        array('help'=>'Уровень вложенности выпадающего меню. 0 = неограниченный.', 'display'=>'inline', 'style'=>'width: 80px;')
    );
    
    $this->admin_option('Secondary Menu', 
        'Эффект', 'menu_secondary_effect', 
        'select', $this->options['menus']['menu-secondary']['effect'],
        array('help'=>'Эффект выпадения пунктов.', 'display'=>'inline', 'options'=>array('standart' => 'Стандарт (без эффектов)', 'slide' => 'Проскальзывание вниз', 'fade' => 'Исчезновение', 'fade_slide_right' => 'Исчезновение & Проскальзывание вправо', 'fade_slide_left' => 'Исчезновение & Проскальзывание влево'))
    );
    
    $this->admin_option('Secondary Menu', 
        'Скорость', 'menu_secondary_speed', 
        'text', $this->options['menus']['menu-secondary']['speed'], 
        array('help'=>'Скорость анимации выпадающего меню.', 'display'=>'inline', 'style'=>'width: 80px;', 'suffix'=> ' <em>миллисекунд(ы)</em>')
    );
    
    $this->admin_option('Secondary Menu', 
        'Задержка', 'menu_secondary_delay', 
        'text', $this->options['menus']['menu-secondary']['delay'], 
        array('help'=>'Задержка в миллисекундах, когда мышь может оставаться вне подменю без закрытия последнего.', 'display'=>'inline', 'style'=>'width: 80px;', 'suffix'=> ' <em>миллисекунд(ы)</em>')
    );
    
    $this->admin_option('Secondary Menu', 
        'Стрелки', 'menu_secondary_arrows', 
        'checkbox', $this->options['menus']['menu-secondary']['arrows'], 
        array('help'=>'Показывать стрелки-индикаторы наличия подменю.', 'display'=>'inline')
    );
    
     $this->admin_option('Secondary Menu', 
        'Тени подменю', 'menu_secondary_shadows', 
        'checkbox', $this->options['menus']['menu-secondary']['shadows'], 
        array('help'=>'Показывать тени подменю.', 'display'=>'inline')
    );
    
    
    /**
     * Display Secondary Menu
     */
     
    if($this->display('menu_secondary')) {
        
        // Register
        register_nav_menu('secondary',  'Secondary Menu');
        
        // Display Hook
        $this->add_hook($this->options['menus']['menu-secondary']['hook'], 'themater_menu_secondary_display');
        
        function themater_menu_secondary_scripts() {
            wp_enqueue_script( 'hoverIntent', THEMATER_URL . '/js/hoverIntent.js', array('jquery') );
            wp_enqueue_script( 'superfish', THEMATER_URL . '/js/superfish.js', array('jquery') );
            wp_enqueue_script( 'mobilemenu', THEMATER_URL . '/js/jquery.mobilemenu.js', array('jquery') );
        }
        add_action('wp_enqueue_scripts', 'themater_menu_secondary_scripts'); 
        
        $this->custom_js(themater_menu_secondary_js());
    }
    
    /**
     * Secondary Menu Functions
     */
    
    function themater_menu_secondary_display()
    {
        global $theme;
        ?>
			<?php wp_nav_menu( 'depth=' . $theme->get_option('menu_secondary_depth') . '&theme_location=' . $theme->options['menus']['menu-secondary']['theme_location'] . '&container_class=' . $theme->options['menus']['menu-secondary']['wrap_class'] . '&menu_class=' . $theme->options['menus']['menu-secondary']['menu_class'] . '&fallback_cb=' . $theme->options['menus']['menu-secondary']['fallback'] . ''); ?>
              <!--.secondary menu--> 	
        <?php
    }
    
    function themater_menu_secondary_default()
    {
        global $theme;
        ?>
        <div class="<?php echo $theme->options['menus']['menu-secondary']['wrap_class']; ?>">
			<ul class="<?php echo $theme->options['menus']['menu-secondary']['menu_class']; ?>">
				<?php wp_list_categories('depth=' .  $theme->get_option('menu_secondary_depth') . '&hide_empty=0&orderby=name&show_count=0&use_desc_for_title=1&title_li='); ?>
			</ul>
		</div>
        <?php
    }
    
    function themater_menu_secondary_js()
    {
        global $theme;

        $return = '';
        
            $menu_secondary_arrows = $theme->display('menu_secondary_arrows') ? 'true' : 'false';
            $menu_secondary_shadows = $theme->display('menu_secondary_shadows') ? 'true' : 'false';
            $menu_secondary_delay = $theme->display('menu_secondary_delay') ? $theme->get_option('menu_secondary_delay') : '800';
            $menu_secondary_speed = $theme->display('menu_secondary_speed') ? $theme->get_option('menu_secondary_speed') : '200';
            
            switch ($theme->get_option('menu_secondary_effect')) {
                case 'standart' :
                $menu_secondary_effect = "animation: {width:'show'},\n";
                break;
                
                case 'slide' :
                $menu_secondary_effect = "animation: {height:'show'},\n";
                break;
                
                case 'fade' :
                $menu_secondary_effect = "animation: {opacity:'show'},\n";
                break;
                
                case 'fade_slide_right' :
                $menu_secondary_effect = "onBeforeShow: function(){ this.css('marginLeft','20px'); },\n animation: {'marginLeft':'0px',opacity:'show'},\n";
                break;
                
                case 'fade_slide_left' :
                $menu_secondary_effect = "onBeforeShow: function(){ this.css('marginLeft','-20px'); },\n animation: {'marginLeft':'0px',opacity:'show'},\n";
                break;
                
                default:
                $menu_secondary_effect = "animation: {opacity:'show'},\n";
            }
            
            $return .= "jQuery(function(){ \n\tjQuery('ul." . $theme->options['menus']['menu-secondary']['superfish_class'] . "').superfish({ \n\t";
            $return .= $menu_secondary_effect;
            $return .= "autoArrows:  $menu_secondary_arrows,
                dropShadows: $menu_secondary_shadows, 
                speed: $menu_secondary_speed,
                delay: $menu_secondary_delay
                });
            });\n";
            
            $return .= "jQuery('.menu-secondary-container').mobileMenu({
                defaultText: '" . $theme->get_option('menu_secondary_mobile_title') . "',
                className: 'menu-secondary-responsive',
                containerClass: 'menu-secondary-responsive-container',
                subMenuDash: '&ndash;'
            });\n";
   
        return $return;
    }
?>