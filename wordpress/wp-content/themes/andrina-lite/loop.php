<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!--post Start-->
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'andrina-lite' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h1>
			<div class="post_content"><?php if (has_post_thumbnail()) { ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('post_thumbnail', array('class' => 'postimg')); ?>
                    </a>
                <?php } else { ?>
                    <a href="<?php the_permalink() ?>"><?php echo inkthemes_main_image(250, 170); ?></a>
                    <?php
                }
                ?>	
                <?php the_excerpt(); ?>
                <div class="clear"></div>
                <?php if (has_tag()) { ?>
                    <div class="tag">
                        <?php the_tags(__('Метки: ', ', ', '')); ?>
                    </div>
                <?php } ?>
                <ul class="post_meta">
                    <li class="post_date"><?php the_date(); ?></li>
                    <li class="post_category"><span>/&nbsp;&nbsp;<?php _e('Категория:','andrina-lite'); ?></span>&nbsp;<?php the_category(', '); ?></li>
                    <li class="posted_by"><span>/&nbsp;&nbsp;</span><?php _e('Автор:','andrina-lite'); ?>&nbsp;<?php the_author_posts_link(); ?></li>
                    <li class="postc_comment"><span>/&nbsp;&nbsp;</span>&nbsp;<?php comments_popup_link(__('Нет комментариев.','andrina-lite'), __('1 Комментарий.','andrina-lite'), __('% Комментарии.','andrina-lite')); ?></li>
                </ul>
                <a class="read_more" href="<?php the_permalink() ?>"><?php _e('Читать далее','andrina-lite'); ?></a> </div>
        </div>
        <!--post End-->
    <?php endwhile;
else: ?>
    <div class="post">
        <p>
            <?php _e('Sorry, no posts matched your criteria.', 'andrina-lite'); ?>
        </p>
    </div>
<?php endif; ?>
<!--End Loop-->