        <div class="post" id="post-<?php the_ID(); ?>">

            <div class="post-header">
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <div class="posted">Posted by <?php the_author() ?>, <?php the_time('F jS, Y') ?></div>
            </div>
            <div class="cats"><?php the_category(', ') ?></div>

            <div class="entry">
            <?php if (is_home() || is_single()) {
                    the_content('Read more');
            } elseif (is_archive() || is_search()) {
                    the_excerpt();
            }
            ?>
            <?php link_pages('<div class="page-link">Pages: ', '</div>', 'number'); ?>
            </div>

            <?php if (is_single()) { ?>
            <p class="postmetadata alt">
                This entry was posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
                and is filed under <?php the_category(', ') ?>.
                Follow the comments through the  <?php comments_rss_link('RSS 2.0'); ?> feed.

                <?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
                // Both Comments and Pings are open ?>
                You can post a  <a href="#respond">comment</a>, or leave a <a href="<?php trackback_url(true); ?>" rel="trackback">trackback</a>.

                <?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
                // Only Pings are Open ?>
                Comments are closed, leave a <a href="<?php trackback_url(true); ?> " rel="trackback">trackback</a> from your site.

                <?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
                // Comments are open, Pings are not ?>
                You can post a  <a href="#respond">comment</a>. Trackbacking is not allowed.

                <?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
                // Neither Comments, nor Pings are open ?>
                Both comments and trackback are closed.

                <?php } edit_post_link('Edit this entry.','',''); ?>
            </p>
            <?php } else { ?>
            <div class="postmetadata">
                <?php edit_post_link('Edit','',' | '); ?>

                <?php if(!is_single()){comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;');} else { ?>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php comments_number('No Responses', 'One Response', '% Responses' );?></a>
                <?php } ?>
            </div>
            <?php } ?>
        </div>