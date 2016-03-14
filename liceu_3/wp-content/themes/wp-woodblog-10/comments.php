<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				
				<p><?php _e("This post is password protected. Enter the password to view comments."); ?><p>
				
				<?php
				return;
            }
        }
		$oddcomment = '2';
?>

<div id="comments">

<?php if ($comments) : ?>

	<?php foreach ($comments as $comment) : ?>

		<?php if (function_exists('gravatar')) { ?>
		<div class="comment-gravatar">
			<a href="http://www.gravatar.com/" title="<?php _e('Gravatar'); ?>">
				<img src="<?php gravatar("X", 48, get_bloginfo('template_url')."/images/default_gravatar.gif"); ?>" class="gravatar" alt="&nbsp;" />
			</a>
		</div>
		<?php } ?>

				<div class="box<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
					<p><strong><?php comment_author_link() ?></strong> says:</p>
					<p class="date"><?php comment_date('F j, Y') ?> <?php comment_time() ?><?php edit_comment_link(__("Edit"), ' &#183; ', ''); ?></p>
<?php comment_text() ?></div>	



		<?php 
			if ('2' == $oddcomment) $oddcomment = '';
			else $oddcomment = '2';
		?>

	<?php endforeach; /* end for each comment */ ?>
	
				
<?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post-> comment_status) : ?> 
		<?php /* No comments yet */ ?>
		
	<?php else : // comments are closed ?>
		<?php /* Comments are closed */ ?>
		<p><?php _e('Comments are closed.'); ?></p>
		
	<?php endif; ?>
	
<?php endif; ?>

<?php if ('open' == $post-> comment_status) : ?>

	<h3 id="comm"><?php _e('Leave a Comment'); ?></h3>
	
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	
		<p><?php _e('You must be'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>"><?php _e('logged in'); ?></a> <?php _e('to post a comment.'); ?></p>
	
	<?php else : ?>
	
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		
		<?php if ( $user_ID ) : ?>
		
			<p style="margin-left: 18px;"><?php _e('Logged in as'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php" class="blue"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>" class="blue"><?php _e('Logout'); ?> &raquo;</a></p>

		<?php else : ?>
	

				<p><span>Name:*</span>
				<input type="text" style="margin-left: 20px;" name="author" class="name" value="<?php echo $comment_author; ?>" tabindex="1" /><br class="clear"/></p>
			
			
			
				<p><span>Email:*</span>
				<input type="text" style="margin-left: 20px;" name="email" class="name" value="<?php echo $comment_author_email; ?>" tabindex="2" /><br class="clear"/></p>
			
			
			<p>
				<span><?php _e('Website:'); ?></span>
				<input type="text" style="margin-left: 17px;" name="url" class="name" value="<?php echo $comment_author_url; ?>" tabindex="3" /><br class="clear"/>
			</p>

		<?php endif; ?>

			
			<p>
				<span><?php _e('Comment:'); ?></span>
				<textarea name="comment" style="margin-left: 5px;" rows="5" cols="40" tabindex="4"></textarea><br class="clear"/>
	
			</p>

			<p>
				<input name="submit" type="submit" id="subcomment" tabindex="5" value="Submit" />
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			</p>
	
		<?php do_action('comment_form', $post->ID); ?>
	
		</form>

	<?php endif; // If registration required and not logged in ?>


<?php endif; // if you delete this the sky will fall on your head ?>
</div>