	</div>

	<div id="footer">
		<div class="tagcloud_up"></div>
			<div class="tagcloud">
					<?php wp_tag_cloud('smallest=8&largest=20&number=80&orderby=name'); ?>
			</div>
		<div class="tagcloud_bottom"></div>
	
		<p><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> // <a href="http://wp-templates.ru/">WordPress шаблоны</a></p>
	</div>
	
	<?php wp_footer(); ?>
	
</div>

</body>

</html>