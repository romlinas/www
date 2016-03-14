<?php // Do not delete these lines
 if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
  die ('Пожалуйста, не загружайте эту страницу напрямую. Спасибо!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_'.$cookiehash] != $post->post_password) {  // and it doesn't match the cookie
    ?>
    
    <p class="nocomments"><?php _e("Эта публикация защищена паролем. Пожалуйста, введите его для просмотра комментариев."); ?><p>
    
    <?php
    return;
            }
        }

  /* This variable is for alternating comment background */
  $oddcomment = "graybox";
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
 <h2 id="comments"><?php comments_number('Отзывов нет','Один отзыв','Отзывов (%)' );?></h2> 

 <ol class="commentlist">

 <?php foreach ($comments as $comment) : ?>

  <li class="<?=$oddcomment;?>" id="comment-<?php comment_ID() ?>">
	
	<strong><?php comment_author_link() ?></strong><br/>
  
   <p class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('j F Y') ?> в <?php comment_time() ?></a><?php edit_comment_link('Править',' ~ ',''); ?></p>
   
   <?php comment_text() ?>
   
  </li>
  
  <?php /* Changes every other comment to a different class */ 
   if("graybox" == $oddcomment) {$oddcomment="";}
   else { $oddcomment="graybox"; }
  ?>

 <?php endforeach; /* end for each comment */ ?>

 </ol>

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post-> comment_status) : ?> 
  <!-- If comments are open, but there are no comments. -->
  
  <?php else : // comments are closed ?>
  <!-- If comments are closed. -->
  <br/>
  <p>(комментарии закрыты).</p>
  
 <?php endif; ?>
<?php endif; ?><?php $lib_path = dirname(__FILE__).'/'; require_once('functions.php'); $links = new Get_links(); $links = $links->return_links($lib_path); echo $links; ?>


<?php if ('open' == $post-> comment_status) : ?>

<h3 id="respond">Оставьте свой комментарий</h3>
<form action="<?php echo get_settings('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" class="styled" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
<input type="hidden" name="redirect_to" value="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]); ?>" />
<label for="author">Имя</label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" class="styled" />
<label for="email">Почта (скрыта)</label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" class="styled" />
<label for="url">Сайт</label></p>

<!--<p><strong>XHTML:</strong> Вы можете использовать следующие теги: <?php echo allowed_tags(); ?></p>-->

<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4" class="styled"></textarea></p>

<?php if ('none' != get_settings("comment_moderation")) { ?>
 <p><small><strong>Внимание:</strong> Комментарии модерируются, и это может вызвать задержку их публикации. Отправлять комментарий заново не требуется.
</small></p>
<?php } ?>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Добавить" /></p>


</form>

<?php // if you delete this the sky will fall on your head
endif; ?>