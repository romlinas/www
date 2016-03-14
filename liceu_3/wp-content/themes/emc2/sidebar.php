
<!-- begin sidebar -->

<div id='sidebar'>
<div class='menu-right'>
<div class='menu-upper'></div>

<ul>
	<?php wp_list_pages('title_li=<h4>Menu</h4>'); ?>
</ul>


<?php
global $comment;

if ( $comments = $wpdb->get_results("SELECT comment_author, comment_author_url, comment_ID, comment_post_ID FROM $wpdb->comments WHERE comment_approved='1' ORDER BY comment_date_gmt
DESC LIMIT 10") ) :
?>

<h4 class='coltitle'><?php _e('Recent Comments'); ?></h4>
<ul>
<li>
<ul>
<?php
foreach ($comments as $comment) {
  echo '<li>' . sprintf('%s <span style="text-transform: lowercase;">on </span>%s', get_comment_author_link(), '<a href="'. get_permalink($comment->comment_post_ID) . '#comment-' . $comment->comment_ID . '">' . get_the_title($comment->comment_post_ID) . '</a>');
  echo '</li>';
}

?>
</ul>
</li>
</ul>
<?php endif; ?>


  


<h4><?php _e('Categories'); ?></h4>
<ul>
 <li id="categories">
	<ul>
	<?php wp_list_cats(); ?>
	</ul>
 </li>


 <li id="archives"><h4><?php _e('Archives'); ?></h4>

 	<ul>
	 <?php wp_get_archives('type=monthly'); ?>
 	</ul>
 </li>


</ul>

<ul>
 <li id="meta"><h4><?php _e('Meta'); ?></h4>

 	<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
		<li><a href="http://www.wpthemescreator.com/" title="Wordpress Themes">Wordpress Themes</a>, <a href="http://www.seosue.com/www/ineedfile.com">ineedfile.com</a></li>
		<?php wp_meta(); ?>
	</ul>
 </li>
</ul>

<ul>
 <li id="syndication"><h4><?php _e('Syndication'); ?></h4>

 	<ul>
		<li><a href="feed:<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">Entries RSS</abbr>'); ?></a></li>
		<li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
	</ul>
 </li>
</ul>


<div class='menu-bottom'></div>
</div>
</div>


<!-- end sidebar -->
