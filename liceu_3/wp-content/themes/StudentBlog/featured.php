<?php
if(get_theme_option('featured_posts') != '') {
?>
<script type="text/javascript">
/*	function startGallery() {
		var myGallery = new gallery($('myGallery'), {
			timed: true,
			delay: 6000,
			slideInfoZoneOpacity: 0.8,
			showCarousel: false 
		});
	}
	window.addEvent('domready', startGallery);*/
</script>
	<div class="featured-post-slider clearfix">
    
    <div class="featured-post-slides-container clearfix">
        
        <div class="featured-post-slides">		
            	<?php
				$featured_posts_category = get_theme_option('featured_posts_category');
				
				if($featured_posts_category != '' && $featured_posts_category != '0') {
					global $post;

					 $featured_posts = get_posts("numberposts=5&&category=$featured_posts_category");
					 $i = 0;
					 foreach($featured_posts as $post) {
					 	setup_postdata($post);
                        if ( version_compare( $wp_version, '2.9', '>=' ) ) {
                            $slide_image_full = get_the_post_thumbnail($post->ID,'large', array('class' => 'full'));
                            $slide_image_thumbnail = get_the_post_thumbnail($post->ID,'large', array('class' => 'thumbnail'));
                        } else {
                            $get_slide_image = get_post_meta($post->ID, 'featured', true);
                            $slide_image_full = "<img src=\"$get_slide_image\" class=\"full\" alt=\"\" />";
                            $slide_image_thumbnail = "<img src=\"$get_slide_image\" class=\"thumbnail\" alt=\"\" />";
                        }
					 	
					  ?>
			         <div class="featured-post-slides-items">
                        <div class="featured-post-thumbnail">
                 			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="open">	<?php echo  $slide_image_full; ?>
						</a> 
						</div>                       
                         <div class="featured-post-content-wrap">
        						<div class="featured-post-content">
                                   	<h3 class="featured-post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt(); ?>
							<?php //echo  $slide_image_thumbnail; ?>
						</div>
                        </div>
                        </div>
					 <?php }
				} else {
					for($i = 1; $i <=5; $i++) {
						?>
			         <div class="featured-post-slides-items">
                        <div class="featured-post-thumbnail">
                        	<a title="This is default featured slide 5 title" href="#">		<img src="<?php bloginfo('template_directory'); ?>/jdgallery/slides/<?php echo $i; ?>.jpg" class="thumbnail" alt="" /> </a>
					</div>
                    <div class="featured-post-content-wrap">
        						<div class="featured-post-content">
                                <h3 class="featured-post-title"><a href="#">Это заголовок закрепленной записи <?php echo $i; ?></a></h3>
								<p>В админке WordPress на странице настроек темы вы можете настроить отображение данных постов. Не пытайтесь редактировать код слайдера вручную - см. админку!</p>
							</div>
                            </div>
                            
                            </div>
						<?php
					}
				}
				
				?>
			
		</div>
        
        
             <div class="featured-post-prev-next-wrap">
                <div class="featured-post-prev-next">
                    <a href="#featured-post-next" class="featured-post-next"></a>
                    <a href="#featured-post-prev" class="featured-post-prev"></a>
                </div>
            </div>
     
     <div class="featured-post-nav">
                <span class="featured-post-pager">&nbsp;</span>
            </div>  
        
	</div>
</div>
<script>
$j=jQuery.noConflict();
$j(document).ready(function(){
	jQuery('.featured-post-slides').cycle({
		fx: 'scrollHorz',
		timeout: 4000,
		delay: 0,
		speed: 400,
		next: '.featured-post-next',
		prev: '.featured-post-prev',
		pager: '.featured-post-pager',
		continuous: 0,
		sync: 1,
		pause: 1,
		pauseOnPagerHover: 1,
		cleartype: true,
		cleartypeNoBg: true
	});
 });
</script>

<?php } ?>