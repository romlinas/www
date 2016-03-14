<?php if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

if ( post_password_required() ) { ?>
    <p class="no-comments"><?php echo __('This post is password protected. Enter the password to view comments.', 'flatio'); ?></p>
<?php return;
} ?>

<?php if ( have_comments() ) : ?>

    <div class="comments-container">
        <div class="title"><h4 class="h4"><?php comments_number(__('No Comments', 'flatio'), __('One Comment', 'flatio'), '% '.__('Comments', 'flatio'));?></h4></div>

        <ol class="commentlist">
            <?php wp_list_comments( array( 'callback' => 'flatio_comment' ) ); ?>
        </ol>

        <div class="pagination">
            <?php paginate_comments_links(); ?>
        </div>
    </div>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'flatio' ); ?></p>
	<?php endif; ?>
	
	
<?php else : ?>

    <?php if ( comments_open() ) : ?>
        <!-- If comments are open, but there are no comments. -->

     <?php else : // comments are closed ?>
        <!-- If comments are closed. -->
        <p class="no-comments"><?php echo __('Comments Disabled.', 'flatio'); ?></p>

    <?php endif; ?>

<?php endif; ?>

<?php if ( comments_open() ) : ?>

    <?php
    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );

    $args = array(
        'title_reply' => __( 'Leave a Comment' ,'flatio'),
        'title_reply_to' =>  __( 'Leave a Comment to %s'  ,'flatio'),
        'cancel_reply_link' => __( 'Cancel Comment'  ,'flatio'),
        'label_submit' => __( 'Submit Comment'  ,'flatio'),
        'comment_field' => '
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <i class="fa fa-edit"></i>
                        <textarea name="comment" id="comment" cols="39" rows="4" tabindex="4" class="form-control" ' . $aria_req . ' placeholder="Comment ..."></textarea>
                    </div>
                </div>
            </div>',
        'must_log_in' => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ,'flatio' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
        
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        'fields' => apply_filters( 'comment_form_default_fields',
            array(
                'author' => '
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <i class="fa fa-user"></i>
                                <input type="text" name="author" id="author" class="form-control" ' . $aria_req . ' value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="Name (required)" size="22" tabindex="1" aria-required="true">
                            </div>
                        </div>',
                'email' => '
                        <div class="col-sm-4">
                            <div class="form-group">
                                <i class="fa fa-envelope"></i>
                                <input type="text" name="email" id="email" class="form-control" ' . $aria_req . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" placeholder="Email (required)" size="22" tabindex="2" aria-required="true">
                            </div>
                        </div>',
                'url' => '
                        <div class="col-sm-4">
                            <div class="form-group">
                                <i class="fa fa-globe"></i>
                                <input type="text" name="url" id="url" class="form-control value=" "="" placeholder="Website" size="22" tabindex="3">
                            </div>
                        </div>
                    </div>'
            )
        )
    );
    comment_form($args); ?>

<?php endif; ?>
