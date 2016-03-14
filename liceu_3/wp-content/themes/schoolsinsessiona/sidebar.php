<div id="sidebar">

<ul>

	<?php wp_list_pages('title_li=<h2>' . __('Pages') . '</h2>' ); ?>

	<li>

		<h2><?php _e('Categories'); ?></h2>

		<ul>

			<?php wp_list_cats(); ?> 

		</ul>

	</li>

	<?php get_links_list(); ?>

	<li>

		<h2><?php _e('Feeds'); ?></h2>

		<ul>

			<li><a href="/?feed=rss2" title="Syndicate this site using RSS 2.0"><abbr title="Really Simple Syndication">rss</abbr></a></li>

			<li><a href="/?feed=atom" title="Syndicate this site using Atom">atom</a></li>

			<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('<abbr title="eXtensible HyperText Markup Language">valid xhtml</abbr>'); ?></a></li>

			<li><a href="http://jigsaw.w3.org/css-validator/check/referer" title="<?php _e('This page validates as CSS'); ?>"><?php _e('<abbr title="Cascading Style Sheets">valid css</abbr>'); ?></a></li>

		</ul>

	</li>

</ul>

</div>