<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');

if (post_password_required()) { 
	theme_post_wrapper(array('content' => '<p class="nocomments">' . __('Эта запись защищена паролем. Для просмотра записей введите пароль.', THEME_NS) . '</p>'));
	return;
}

if (have_comments()){
	ob_start();
	printf( _n( '1 комментарий %2$s', '%1$s комментариев к записи %2$s', get_comments_number(), THEME_NS ), number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
	theme_post_wrapper(array('content'=>'<h4 id="comments">' .ob_get_clean() . '</h4>'));
	$prev_link = get_previous_comments_link(__('Следующие комментарии <span class="meta-nav">&rarr;</span>', THEME_NS));
	$next_link =  get_next_comments_link(__('<span class="meta-nav">&larr;</span> Предыдущие комментарии', THEME_NS));
	theme_page_navigation(array('prev_link' => $prev_link, 'next_link' => $next_link));
	echo '<ul id="comments-list">';
	wp_list_comments('type=all&callback=theme_comment');
	echo '</ul>';
	theme_page_navigation(array('prev_link' => $prev_link, 'next_link' => $next_link));
} elseif('open' != $post->comment_status && !is_page()) { 
	theme_post_wrapper(array('content' => '<p class="nocomments">' . __('Комментарии закрыты.', THEME_NS) .'</p>'));
}
if (function_exists('comment_form')){
	ob_start();
	$args = array();
	if(theme_get_option('theme_comment_use_smilies'))
	{
		function theme_comment_form_field_comment($form_field){
			theme_include_lib('smiley.php');
			return  theme_get_smilies_js() . '<p class="smilies">' . theme_get_smilies() . '</p>' . $form_field;
		}
		add_filter('comment_form_field_comment', 'theme_comment_form_field_comment');
	}
	comment_form();
	theme_post_wrapper(array('content' => str_replace(array(' id="respond"', 'type="submit"'), array('', 'class="art-button" type="submit"'), ob_get_clean()), 'id' => 'respond'));
	return;
}

if ('open' == $post->comment_status) {
	ob_start();
?>
<h3 id="comments-title"><?php comment_form_title( __('Оставить комментарий', THEME_NS), __('Оставить комментарий к записи %s', THEME_NS) ); ?></h3>
<div class="cancel-comment-reply"><small><?php cancel_comment_reply_link(); ?></small></div>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php printf(__('Вы должны быть <a href="%s">авторизованы</a>, чтобы оставить комментарий.', THEME_NS), get_option('siteurl') . '/wp-login.php?redirect_to=' . urlencode(get_permalink())); ?></p>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>
<p><?php printf( __( 'Вы вошли как <a href="%1$s">%2$s</a>. <a href="%3$s" title="Выйти из этого аккаунта">Выйти?</a>', THEME_NS), admin_url( 'profile.php' ), $user_identity, wp_logout_url(get_permalink())); ?></a></p>
<?php else : ?>
<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small><?php _e('Имя', THEME_NS); ?> <?php if ($req) _e("(обязательно)", THEME_NS); ?></small></label></p>
<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small><?php _e('Mail (не будет опубликовано)', THEME_NS); ?> <?php if ($req) _e("(обязательно)", THEME_NS); ?></small></label></p>
<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small><?php _e('Вебсайт', THEME_NS); ?></small></label></p>
<?php endif; ?>
<!--<p><small><?php printf( __( 'Вы можете использовать <abbr title="HyperText Markup Language">HTML</abbr> теги и аттрибуты: %s', THEME_NS), ' <code>' . allowed_tags() . '</code>' ) ?></small></p>-->
<p><textarea name="comment" id="comment" cols="40" rows="10" tabindex="4"></textarea></p>
<p>
	<span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span>
		<input class="art-button" type="submit" name="submit" tabindex="5" value="<?php _e('Отправить', THEME_NS); ?>" />
	</span>
	<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif;?>
<?php 
	theme_post_wrapper(array('content' => ob_get_clean(), 'id' => 'respond'));
}
