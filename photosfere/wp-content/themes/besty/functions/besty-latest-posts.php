<?php 
add_action( 'widgets_init', 'besty_latest_post_widget' );
function besty_latest_post_widget() {
	register_widget( 'besty_latest_post_widget' );
}
class besty_latest_post_widget extends WP_Widget {
	function besty_latest_post_widget() {
		$besty_widget_ops = array( 'classname' => 'latest_post', 'description' => __('Виджет последних записей.', 'besty') );
		
		$besty_control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'latest-post-widget' );
		
		$this->WP_Widget( 'latest-post-widget', __('Последние записи', 'besty'), $besty_widget_ops, $besty_control_ops );
	}
	
	function widget( $besty_args, $instance ) {
		extract( $besty_args );
		//Our variables from the widget settings.
		$besty_title = apply_filters('widget_title', $instance['title'] );
		$besty_show_info = isset( $instance['show_info'] ) ? $instance['show_info'] : false;
		
		$besty_title = apply_filters( 'widget_title', $instance['title'] );
		if( $instance['number'] <= 0)
		$besty_number = 4 ;
		else
		$besty_number = $instance['number'];
		
		// before and after widget arguments are defined by themes
		echo $besty_args['before_widget'];
				
		if ( ! empty( $besty_title ) ){
			echo $besty_args['before_title'] . $besty_title . $besty_args['after_title'];
		}
		// Display the widget title 
		
		?>
        <ul class="latest-posts">
          <?php
		  	$besty_args = array(
				'posts_per_page'   => $besty_number,
				'orderby'          => 'post_date',
				'order'            => 'DESC',
				'post_type'        => 'post',
				'post_status'      => 'publish'
			);
			$besty_single_post = new WP_Query( $besty_args );
			
			while ( $besty_single_post->have_posts() ) {
				$besty_single_post->the_post();
			?>
			<li>
            <?php 
			$besty_feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
			if($besty_feat_image!="")
				echo'<div class="latest-posts-img"><a href="'.esc_url( get_permalink() ).'" title="'.get_the_title().'"> <img src="'.esc_url($besty_feat_image).'" alet="'.get_the_title().'" /></a></div>';
			else			
				echo'<div class="latest-posts-img"><a href="'.esc_url( get_permalink() ).'" title="'.get_the_title().'"> <img src="'.get_template_directory_uri().'/images/no-image-sidebar.png" alt="'.get_the_title().'" /> </a></div>';
				
				$besty_year = get_the_time( 'Y');
				$besty_month = get_the_time( 'm');
				$besty_day = get_the_time( 'd');
			?>
            <div class="latest-posts-link">
            	<a class="titel" href="<?php echo esc_url( get_permalink() ); ?>" title="<?php _e(get_the_title(),'besty'); ?>"><?php the_title(); ?></a> <a href="<?php echo esc_url( get_day_link( $besty_year, $besty_month, $besty_day )); ?>"><?php echo get_the_date('j M, Y'); ?></a>
                
            </div>
          </li>
          <?php  } 
		  wp_reset_query();
		  ?>
        </ul>
<?php 
			echo $after_widget;
	}
	//Update the widget 
	 
	function update( $new_instance, $old_instance ) {
		$besty_instance = $old_instance;
		//Strip tags from title and name to remove HTML 
		$besty_instance['title'] = sanitize_text_field(strip_tags( $new_instance['title'] ));
		$besty_instance['number'] = intval(strip_tags( $new_instance['number'] ));
		$besty_instance['show_info'] = $new_instance['show_info'];
		return $besty_instance;
	}
	
	function form( $instance ) {
		//Set up some default widget settings.
		
		if ( isset( $instance[ 'title' ] ) ) {
			$besty_title = $instance[ 'title' ];
		}
		else {
			$besty_title = __( 'Последнее', 'besty' );
		}
		if ( isset( $instance[ 'number' ] ) ) {
			$besty_number = $instance[ 'number' ];
		}
		else
		{
			$besty_number = 5;
		}
		?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php echo 'Title'; ?>
  <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $besty_title ); ?>" class="widefat"  /></label>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e('Количество записей','besty'); echo " : "; ?>
  <input type="text" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" value="<?php echo esc_attr( $besty_number ); ?>" size="1"  /></label>
</p>
<?php
	}
}
?>
