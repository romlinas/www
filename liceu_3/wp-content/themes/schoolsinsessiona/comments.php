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

		/* This variable is for alternating comment background, thanks Kubrick */

		$oddcomment = 'alt';

?>



<!-- You can start editing here. -->



<?php if ($comments) : ?>



	<div class="commentcount">

	<h2 class="commentheader"><?php comments_number(__('No Comments'), __('1 Comment'), __('% Comments')); ?><?php if ( comments_open() ) : ?> | <a href="#postcomment" title="<?php _e('Jump to the comments form'); ?>">&raquo;</a><?php endif; ?></h2>

	</div>



	<ol id="commentlist">

	<?php foreach ($comments as $comment) : ?>

		<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">



			<div class="comment-gravatar">

			<img src="/wp-content/themes/schoolsinsession/images/gravatar.jpg" alt="">

			</div>



			<div class="comment-content">

			<div class="comment-meta">

			<b><?php comment_author_link() ?></b> <?php _e('said'); ?> on <?php comment_date('F j, Y') ?> <a href="#comment-<?php comment_ID() ?>" title="<?php _e('Permanent link to this comment'); ?>"> at <?php comment_time() ?></a> <?php edit_comment_link(__("Edit"), '&#183; ', ''); ?>

			</div>

			<div class="comment-text"><?php comment_text() ?></div>

			</div>



			<br clear="all"/>



		</li>



		<?php 

			if ('alt' == $oddcomment) $oddcomment = '';

			else $oddcomment = 'alt';

		?>



	<?php endforeach; /* end for each comment */ ?>



	</ol>



			<br/>



	<div class="postnavigation"> 

	<?php comments_rss_link(__('<abbr title="Really Simple Syndication">RSS</abbr> feed')); ?><?php if ( pings_open() ) : ?> | <a href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack'); ?></a><?php endif; ?>

	</div>



<?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post-> comment_status) : ?> 

		<?php /* No comments yet */ ?>

	<?php else : // comments are closed ?>

		<?php /* Comments are closed */ ?>

		<div class="post">

		<p><?php _e('Comments are closed.'); ?></p>

		</div>

	<?php endif; ?>

<?php endif; ?>







<?php if ('open' == $post-> comment_status) : ?>

	<div class="commentcount"> 

	<h2 class="commentheader"><?php _e('Leave a Comment'); ?></h2>

	</div> 



	<div class="post"> 

	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>

	<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>



	<?php else : ?>



	<div class="post"> 

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">

		<?php if ( $user_ID ) : ?>

		<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">Logout &raquo;</a></p>

		<?php else : ?>

		<p>

		<input type="text" name="author" value="<?php echo $comment_author; ?>" size="30" tabindex="1" />

		<label for="author">Name <?php if ($req) _e('(required)'); ?></label>

		</p>

		<p>

		<input type="text" name="email" value="<?php echo $comment_author_email; ?>" size="30" tabindex="2" />

		<label for="email">E-mail (<?php if ($req) _e('required, '); ?>never displayed)</label>

		</p>

		<p>

		<input type="text" name="url" value="<?php echo $comment_author_url; ?>" size="30" tabindex="3" />

		<label for="url"><abbr title="Uniform Resource Identifier">URI</abbr></label>

		</p>

		<?php endif; ?>

<script type="text/javascript">

function grin(tag) {

	var myField;

	if (document.getElementById('content') && document.getElementById('content').type == 'textarea') {

		myField = document.getElementById('content');

	}

	else if (document.getElementById('comment') && document.getElementById('comment').type == 'textarea') {

		myField = document.getElementById('comment');

	}

	else {

		return false;

	}

	if (document.selection) {

		myField.focus();

		sel = document.selection.createRange();

		sel.text = tag;

		myField.focus();

	}

	else if (myField.selectionStart || myField.selectionStart == '0') {

		var startPos = myField.selectionStart;

		var endPos = myField.selectionEnd;

		var cursorPos = endPos;

		myField.value = myField.value.substring(0, startPos)

					  + tag

					  + myField.value.substring(endPos, myField.value.length);

		cursorPos += tag.length;

		myField.focus();

		myField.selectionStart = cursorPos;

		myField.selectionEnd = cursorPos;

	}

	else {

		myField.value += tag;

		myField.focus();

	}

}

</script>



<div id="smiliesdisplay">

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" onclick="grin(':mrgreen:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_neutral.gif" alt=":neutral:" onclick="grin(':neutral:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_twisted.gif" alt=":twisted:" onclick="grin(':twisted:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_eek.gif" alt=":shock:" onclick="grin(':shock:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_smile.gif" alt=":smile:" onclick="grin(':smile:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_confused.gif" alt=":???:" onclick="grin(':???:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_cool.gif" alt=":cool:" onclick="grin(':cool:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_evil.gif" alt=":evil:" onclick="grin(':evil:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_biggrin.gif" alt=":grin:" onclick="grin(':grin:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_redface.gif" alt=":oops:" onclick="grin(':oops:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_razz.gif" alt=":razz:" onclick="grin(':razz:');"/> 

  <br />

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_rolleyes.gif" alt=":roll:" onclick="grin(':roll:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_wink.gif" alt=":wink:" onclick="grin(':wink:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_cry.gif" alt=":cry:" onclick="grin(':cry:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_surprised.gif" alt=":eek:" onclick="grin(':eek:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_lol.gif" alt=":lol:" onclick="grin(':lol:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_mad.gif" alt=":mad:" onclick="grin(':mad:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_sad.gif" alt=":sad:" onclick="grin(':sad:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_arrow.gif" alt=":arrow:" onclick="grin(':arrow:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_idea.gif" alt=":idea:" onclick="grin(':idea:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_exclaim.gif" alt=":!:" onclick="grin(':!:');"/> 

  <img src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_question.gif" alt=":question:" onclick="grin(':question:');"/> 

</div>

	<p><textarea name="comment" id="comment" cols="70" rows="10" tabindex="4"></textarea></p>

	<p><small><strong>XHTML:</strong> Line-breaks are automatic. Available tags are <?php echo allowed_tags(); ?></small></p>

	<p>

	<input name="submit" type="submit" class="s" tabindex="5" value="Submit Comment" />

	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

	</p>



	<?php do_action('comment_form', $post->ID); ?>



	</form>

	</div>



	<?php endif; // If registration required and not logged in ?>



<?php endif; // if you delete this the sky will fall on your head ?>