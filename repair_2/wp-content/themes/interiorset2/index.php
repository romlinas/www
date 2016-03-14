<?php get_header(); ?>


<div id="content">
  <?php  include (TEMPLATEPATH . '/topads.php'); ?>
  <?php $my_query = new WP_Query('showposts=1'); ?>
  <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
  <div class="top_post" id="post-<?php the_ID(); ?>">
    <div class="post_title">
      <h2> <a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка: <?php the_title_attribute(); ?>">
        <?php the_title(); ?>
        </a>
        <div class="headline_date">
          <?php the_time('d-m-Y') ?>
        </div>
      </h2>
    </div>
	
    <div class="top_entry">
      <?php the_excerpt(''); ?>
    </div>
    <div class="post_bottom">
      <div class="post_cat">Рубрика:
        <?php the_category(', ') ?>
      </div>
	  <div class="meta_comments"> 
	  <a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка: <?php the_title_attribute(); ?>">
        далее...
        </a>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php rewind_posts(); ?>
  <?php query_posts('showposts=10&offset=1'); ?>
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <div class="mag_posts" id="post-<?php the_ID(); ?>">
    <div class="top_mag_posts">
      <div class="bottom_mag_posts">
        <h2>
          <?php the_category(', ') ?>
        </h2>
        <div class="mag_posts_entry">
          <div class="top_mag_titles"> <a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка: <?php the_title_attribute(); ?>">
            <?php the_title(); ?>
            </a> </div>
          <?php the_excerpt(); ?>
        </div>
        <div class="mag_posts_meta">
          <div class="meta_date">
            <?php the_time('d-m-Y') ?>
          </div>
          <div class="read_more"> <a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка: <?php the_title_attribute(); ?>">далее...</a></div>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>
  <div class="clear"></div>
  <div id="recent_data">
    <div id="recent_data_top">
      <div id="recent_data_bottom">
        <div class="recent_data_container">
          <h3>Новое на сайте</h3>
          <ul>
            <?php $mynew_query = new WP_Query('showposts=5'); ?>
            <?php while ($mynew_query->have_posts()) : $mynew_query->the_post(); ?>
            <li><a href="<?php the_permalink() ?>"><span>
              <?php the_time('d-m-Y') ?>
              </span>
              <?php the_title(); ?>
              </a></li>
            <?php endwhile; ?>
            <?php rewind_posts(); ?>
          </ul>
        </div>
        <div class="recent_data_container">
          <h3>Свежие комментарии</h3>
          <ul>
            <?php
					$sql = "SELECT * FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID = $wpdb->posts.ID) WHERE comment_approved = '1' AND comment_type = '' ORDER BY comment_date DESC LIMIT 0 , 5";
					$comments = $wpdb->get_results($sql);
					foreach ($comments as $comment) {
						$data = "<span>" . $comment->comment_author . ":</span>" . substr($comment->comment_content,0,35);
						echo "<li><a href=\"" . get_permalink($comment->comment_post_ID) . "\">" . $data . "...</a></li>\n";   
					}
					?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_sidebar(); ?>
<?php include (TEMPLATEPATH . '/rightads.php'); ?>
<div class="clear"></div>
<?php get_footer(); ?>
