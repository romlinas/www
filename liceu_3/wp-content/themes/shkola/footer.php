    <div class="footer">
                <div class="footer-body">
                <?php get_sidebar('footer'); ?>
                    <a href="<?php bloginfo('rss2_url'); ?>" class='rss-tag-icon' title="<?php printf(__('%s RSS Feed', THEME_NS), get_bloginfo('name')); ?>"></a>
                            <div class="footer-text">
                                <?php  echo do_shortcode(theme_get_option('theme_footer_content')); ?>
                            </div>
                    <div class="cleared"></div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
    <p class="page-footer">Designed by <a href="http://vgrafike.ru/" target="_blank">мир фотошоп</a>.</p>
    <div class="cleared"></div>
</div>
</div>
    <div id="wp-footer">
	        <?php wp_footer(); ?>
	        <!-- <?php printf(__('%d queries. %s seconds.', THEME_NS), get_num_queries(), timer_stop(0, 3)); ?> -->
    </div>
</body>
</html>

