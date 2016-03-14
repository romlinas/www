<div id="left_content">
<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Bitte diese Seite nicht direkt aufrufen. Danke!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p>Auch die Kommentare sind durch das Passwort gesch&uuml;tzt.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>

<!-- ab hier kannst du gestalten ich habe das html gelassen, damit du den ueberblick hast -->

<?php if ($comments) : ?>
	<h2 id="comments"><?php comments_number('Keine Reaktion', 'Eine Reaktion', '% Reaktionen' );?> zu &#8220;<?php the_title(); ?>&#8221;</h3>

<!--ein kommentar beginnt-->
	<ol class="commentlist">

	<?php foreach ($comments as $comment) : ?>

		<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>"> 
			<cite><?php comment_author_link() ?></cite>
			<?php if ($comment->comment_approved == '0') : ?>
			<br /><br /><strong>Achtung: Der Kommentar mu&szlig; erst noch freigegeben werden.</strong>
			<?php endif; ?>
			<br />

			<small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title="#comment-<?php comment_ID() ?>">Am <?php comment_date('j. F Y') ?> um <?php comment_time('H:i') ?> Uhr</a> <?php edit_comment_link('Bearbeiten','<strong>&#124;</strong>',''); ?></small>

			<?php comment_text() ?>

		</li>

	<?php 
		/* Changes every other comment to a different class */ 
		$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : ''; 
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>
<!--kommentar ist aus, jetzt die anzeigen wenn keine kommentare da sind oder erlaubt sind-->

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
		
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Kommentarfunktion ist deaktiviert</p>
		
	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<!--formular fuer kommentar schreiben beginnt-->
<h3 id="respond">Einen Kommentar schreiben</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>du mu&szlig;t <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">angemeldet</a> sein, um kommentieren zu k&ouml;nnen.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Angemeldet als: <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="von diesem Account abmelden">Abmelden &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small>Name <?php if ($req) echo "(erforderlich)"; ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small>eMail <?php if ($req) echo "(erforderlich)"; ?> (wird nicht ver&ouml;ffentlicht)</small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>Webseite</small></label></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

<p><textarea name="comment" id="comment" cols="50%" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="senden" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>

<!--das ist wichtig spam plugins nehmen das um sich hier einzuklinken-->
<?php do_action('comment_form', $post->ID); ?>

</form>
<!--sollte dies geloescht werden faellt dir nur der himmel auf den kopf nicht mehr und nicht weniger-->
<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>

</div>