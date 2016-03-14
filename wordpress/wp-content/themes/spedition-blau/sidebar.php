		<h2>Suchen</h2>
			<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
				<input type="text" style="width:130px" name="s" id="s" value="<?php echo wp_specialchars($s, 1); ?>">&nbsp;<a  onclick="document.getElementById('searchform').submit();" class="searchbutton"  style="cursor:hand">Los!</a>
			</form>

		<h2>Kategorien</h2>
				<ul>
					<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
				</ul>
		<h2>Archiv</h2>
				<ul>
					<?php wp_get_archives('type=monthly&format=custom&before=<li class="li2">&after</li>'); ?>
				</ul>
				<?php
 $link_cats = $wpdb->get_results("SELECT cat_id, cat_name FROM wp_categories");
 foreach ($link_cats as $link_cat) {
 ?>
		<h2><?php echo $link_cat->cat_name; ?></h2>
  				 <ul>
   					<?php get_links($link_cat->cat_id, '<li class="li3">', '</li>', '<br />', FALSE, 'id', TRUE, 
TRUE, -1, TRUE); ?>
   				</ul>
   			<?php } ?>
		<h2>Meta</h2>
				<ul>
	<?php wp_register('<li  class="li2">', '</li>'); ?>
	<li><?php wp_loginout(); ?></li>
	<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
	<li><a href="http://www.ongate.eu"><abbr title="XHTML Friends Network">Ongate</abbr><abbr title="XHTML Friends Network">.eu</abbr></a></li>
	<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a>, <a href="http://www.seosue.com/www/dailymotion.com">dailymotion.com Tones</a></li>
	<?php wp_meta(); ?>
				</ul>