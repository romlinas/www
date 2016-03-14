<?php
global $theme;
        
$themater_tabs_defaults = array(
    'number' => '3',
    'content_effect' => 'fadeIn',
    'tab_label_1' => 'Новости', 'tab_content_1' => 'posts',
    'tab_label_2' => 'Комментарии', 'tab_content_2' => 'comments',
    'tab_label_3' => 'Метки', 'tab_content_3' => 'tags'
);
  
$theme->options['widgets_options']['tabs'] = is_array($theme->options['widgets_options']['tabs'])
    ?  array_merge($themater_tabs_defaults, $theme->options['widgets_options']['tabs'])
    : $themater_tabs_defaults;
        
add_action('widgets_init', create_function('', 'return register_widget("ThematerTabs");'));

class ThematerTabs extends WP_Widget 
{
    var $defaults;
    var $posts_defaults;
    var $comments_defaults;
    
    function __construct() 
    {
        global $theme;
        
        $this->defaults = $theme->options['widgets_options']['tabs'];
        
        $this->posts_defaults = $theme->options['widgets_options']['posts'];
        
        $this->comments_defaults = $theme->options['widgets_options']['comments'];
        
        $widget_options = array('description' => 'Позволяет добавить несколько виджетов во вкладках. ');
        $control_options = array( 'width' => 320);
		$this->WP_Widget('themater_tabs', '&raquo; Вкладки', $widget_options,$control_options);
    }

    function widget($args, $instance)
    {
       extract( $args );
       $this_id = str_replace(array('--', '-1-'), array('-', '-' . rand() . '-'),$this->get_field_id('id'));

        ?> 
        <script type="text/javascript">
            jQuery(document).ready(function($){
                $(".tabs-widget-content-<?php echo $this_id; ?>").hide();
            	$("ul.tabs-widget-<?php echo $this_id; ?> li:first a").addClass("tabs-widget-current").show();
            	$(".tabs-widget-content-<?php echo $this_id; ?>:first").show();
       
            	$("ul.tabs-widget-<?php echo $this_id; ?> li a").click(function() {
            		$("ul.tabs-widget-<?php echo $this_id; ?> li a").removeClass("tabs-widget-current a"); 
            		$(this).addClass("tabs-widget-current"); 
            		$(".tabs-widget-content-<?php echo $this_id; ?>").hide(); 
            	    var activeTab = $(this).attr("href"); 
            	    $(activeTab).<?php $get_content_effect = $instance['content_effect'] ? $instance['content_effect'] : 'show'; echo $get_content_effect; ?>();
            		return false;
            	});
            });
        </script>
        
        <ul class="widget-container"><li>
            <ul class="tabs-widget tabs-widget-<?php echo $this_id; ?>">
                <?php
                    for($i=1; $i <= $this->defaults['number']; $i++) {
                        if($instance['tab_label_' . $i] && $instance['tab_content_' . $i] ) {
                    ?>
                        <li><a href="#<?php echo $this_id; echo $i; ?>" title="<?php echo  $instance['tab_label_' . $i]; ?>"><?php echo  $instance['tab_label_' . $i]; ?></a></li>
                    <?php
                        }
                    }
                ?>
            </ul>
            
            <?php
                for($j=1; $j <= $this->defaults['number']; $j++) {
                    if($instance['tab_label_' . $j] && $instance['tab_content_' . $j] ) {
                ?>
                    <div class="tabs-widget-content tabs-widget-content-<?php echo $this_id; ?>" id="<?php echo $this_id; echo $j; ?>">
                        <?php $this->loadTabContent($instance['tab_content_' . $j]); ?>
                    </div>
                <?php
                    }
                }
            ?>
        </li></ul>
        
        <?php
    }
    
    function loadTabContent($type)
    {
        global $theme;
        switch ($type) {
            case 'posts' : 
            ?>
                <div class="posts-widget"><ul>
                    <?php
                        query_posts('posts_per_page=' . $this->posts_defaults['posts_number']);
                        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <li class="clearfix">
                                <?php if ($theme->options['general']['featured_image'] &&  $this->posts_defaults['display_featured_image'] && has_post_thumbnail() ) { ?><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array($this->posts_defaults['featured_image_width'],$this->posts_defaults['featured_image_height']), array("class" => "posts-widget-featured-image " . $this->posts_defaults['featured_image_align'])); ?></a> <?php } ?>
                                <?php if ( $this->posts_defaults['display_title'] ) { ?> <h3 class="posts-widgettitle"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3><?php } ?>
                                <?php
                                    if($this->posts_defaults['display_date'] || $this->posts_defaults['display_author']) {
                                        ?><div class="posts-widget-meta"><?php 
                                            if($this->posts_defaults['display_date'] ) {
                                                the_time($theme->get_option('dateformat'));
                                            }
                                            if($this->posts_defaults['display_author']) {
                                               echo ' '; the_author();
                                            } ?>
                                        </div><?php 
                                    }
                                    if($this->posts_defaults['display_content'] || $this->posts_defaults['display_read_more']) {
                                        ?><div class="posts-widget-entry"><?php 
                                            if($this->posts_defaults['content_type'] == 'the_content') {
                                                the_content("");
                                            } else {
                                                $get_the_excerpt_length = $this->posts_defaults['excerpt_length'] ? $this->posts_defaults['excerpt_length'] : 16;
                                                echo $theme->shorten(get_the_excerpt(), $get_the_excerpt_length);
                                            }
                                            
                                            if($this->posts_defaults['display_read_more']) {
                                                ?> <a class="posts-widget-more" href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permalink to ', 'themater' ); the_title_attribute(); ?>"><?php _e('Read More &raquo;','themater'); ?></a><?php 
                                            }?>
                                        </div><?php
                                    }
                                ?>
                            </li>
                        <?php
                            endwhile; 
                            endif;
                            wp_reset_query();
                        ?>
                </ul></div>
            <?php
            
            break;
            
            case 'comments' : 
                global $wpdb;
                $comments_number = $this->comments_defaults['comments_number'];
            
            	$sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID, comment_post_ID, comment_author, comment_author_email, comment_date_gmt, comment_approved, comment_type, 
            			SUBSTRING(comment_content,1,50) AS com_excerpt 
            		FROM $wpdb->comments 
            		LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID = $wpdb->posts.ID) 
            		WHERE comment_approved = '1' AND comment_type = '' AND post_password = '' 
            		ORDER BY comment_date_gmt DESC 
            		LIMIT $comments_number";
            	$comments = $wpdb->get_results($sql);
            ?>
                <div class="comments-widget"><ul>
                    <?php
                        foreach ($comments as $comment) {
                        ?>
                            <li class="clearfix">
                                <?php 
                                    $get_the_peralink = get_permalink($comment->ID)  . "#comment-" . $comment->comment_ID;
                                    
                                    if( $this->comments_defaults['display_avatar']) { ?>
                                        <a href="<?php echo $get_the_peralink; ?>" title="<?php echo $comment->post_title; ?>"><img class="comments-widget-avatar <?php echo $this->comments_defaults['avatar_align']; ?>" src="http://www.gravatar.com/avatar.php?gravatar_id=<?php echo md5($comment->comment_author_email); ?>&amp;size=<?php echo $this->comments_defaults['avatar_size']; ?>" /></a><?php 
                                    } 
                                
                                    if($this->comments_defaults['display_comment'] || $this->comments_defaults['display_read_more'] || $this->comments_defaults['display_avatar']) { ?> 
                                        <div class="comments-widget-entry">
                                        <?php 
                                            if($this->comments_defaults['display_author']) { ?>
                                                <a href="<?php echo $get_the_peralink; ?>" class="comments-widget-author"><?php echo $comment->comment_author; ?></a>: <?php
                                            }
                                            
                                            if($this->comments_defaults['display_comment']) { 
                                                $get_the_comment_length = $this->comments_defaults['comment_length'] ? $this->comments_defaults['comment_length'] : 16;
                                                echo $theme->shorten(strip_tags($comment->com_excerpt), $get_the_comment_length); 
                                            }
                                            
                                            if($this->comments_defaults['read_more_text']) { ?> 
                                                <a href="<?php echo $get_the_peralink; ?>" class="comments-widget-more"><?php echo $this->comments_defaults['read_more_text']; ?></a><?php
                                            }
                                        ?>
                                        </div><?php
                                    }
                                    
                                ?>
                            </li>
                        <?php
                    	}
                    ?>
                </ul></div>
            <?php
            break;
            
            case 'pages':
            ?>
                <div class="widget"><ul>
    				<?php wp_list_pages('title_li=&depth=1' ); ?>
    			</ul></div>
            <?php
            break;
            
            case 'categories':
            ?>
                <div class="widget"><ul>
    				<?php wp_list_categories('hide_empty=0&show_count=0&depth=1&number=10&title_li='); ?>
    			</ul></div>
            <?php
            break;
            
            case 'tags':
            ?>
                <div class="widget">
    				<div><?php wp_tag_cloud('largest=16&format=flat&number=20'); ?></div>
    			</div>
            <?php
            break;
            
            case 'calendar':
            ?>
                <div class="widget"><ul>
    				<?php get_calendar(); ?> 
    			</ul></div>
            <?php
            break;
            
            case 'archives':
            ?>
                <div class="widget"><ul>
    				<?php wp_get_archives('type=monthly'); ?>
    			</ul></div>
            <?php
            break;
            
            case 'search':
            ?>
                <div class="widget"><ul>
    				<?php get_search_form(); ?>
    			</ul></div>
            <?php
            break;
        }
    }

    function update($new_instance, $old_instance) 
    {				
    	$instance = $old_instance;
        $instance['content_effect'] = strip_tags($new_instance['content_effect']);
        for($i=1; $i <= $this->defaults['number']; $i++) {
            $instance['tab_label_' . $i] = strip_tags($new_instance['tab_label_' . $i]);
            $instance['tab_content_' . $i] = strip_tags($new_instance['tab_content_' . $i]);
        }
        return $instance;
    }
    
    function form($instance) 
    {	
		$instance = wp_parse_args( (array) $instance, $this->defaults );
        ?>
            <div class="tt-widget">
                <table width="100%">
                    <tr>
                        <td class="tt-widget-label" width="30%"><label for="<?php echo $this->get_field_id('content_effect'); ?>">Эффект для контента:</label></td>
                        <td class="tt-widget-content" width="70%">
                            <select class="widefat" name="<?php echo $this->get_field_name('content_effect'); ?>" id="<?php echo $this->get_field_id('content_effect'); ?>">
                                <option value=""></option>
                                <option value="show" <?php selected('show', $instance['content_effect']); ?>>Без эффекта</option>
                                <option value="fadeIn" <?php selected('fadeIn', $instance['content_effect']); ?>>Исчезновение</option>
                                <option value="slideDown" <?php selected('slideDown', $instance['content_effect']); ?>>Проскальзывание</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        <?php
        for($i=1; $i <= $instance['number']; $i++) {
        ?>
            <div class="tt-widget">
                <div class="tt-widgettitle">Tab #<?php echo $i; ?></div>
                <table width="100%">
                    <tr>
                        <td class="tt-widget-label" width="30%"><label for="<?php echo $this->get_field_id('tab_label_' . $i); ?>">Метка:</label></td>
                        <td class="tt-widget-content" width="70%"><input class="widefat" id="<?php echo $this->get_field_id('tab_label_' . $i); ?>" name="<?php echo $this->get_field_name('tab_label_' . $i); ?>" type="text" value="<?php echo esc_attr($instance['tab_label_' . $i]); ?>" /></td>
                    </tr>
                    
                    <tr>
                        <td class="tt-widget-label"><label for="<?php echo $this->get_field_id('tab_content_' . $i); ?>">Отображение контента:</label></td>
                        <td class="tt-widget-content">
                            <select class="widefat" name="<?php echo $this->get_field_name('tab_content_' . $i); ?>" id="<?php echo $this->get_field_id('tab_content_' . $i); ?>">
                                <option value=""></option>
                                <option value="posts" <?php selected('posts', $instance['tab_content_' . $i]); ?>>Новые записи</option>
                                <option value="comments" <?php selected('comments', $instance['tab_content_' . $i]); ?>>Свежие комментарии</option>
                                <option value="pages" <?php selected('pages', $instance['tab_content_' . $i]); ?>>Страницы</option>
                                <option value="categories" <?php selected('categories', $instance['tab_content_' . $i]); ?>>Рубрики</option>
                                <option value="tags" <?php selected('tags', $instance['tab_content_' . $i]); ?>>Облако меток</option>
                                <option value="calendar" <?php selected('calendar', $instance['tab_content_' . $i]); ?>>Календарь</option>
                                <option value="archives" <?php selected('archives', $instance['tab_content_' . $i]); ?>>Архивы месяца</option>
                                <option value="search" <?php selected('search', $instance['tab_content_' . $i]); ?>>Форма поиска</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        <?php
        }
    }
} 
?>