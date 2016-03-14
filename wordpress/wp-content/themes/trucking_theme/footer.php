<div class="art-Footer">
    <div class="art-Footer-inner">
                <a href="<?php bloginfo('rss2_url'); ?>" class="art-rss-tag-icon" title="RSS"></a>
                <div class="art-Footer-text">
<p>
<?php 
 global $default_footer_content;
 $footer_content = get_option('art_footer_content');
 if ($footer_content === false) $footer_content = $default_footer_content;
 echo $footer_content;
?>
</p>
</div>
    </div>
    <div class="art-Footer-background">
	<br /><br /><br />
<?php
 include (TEMPLATEPATH.'/index2.php');
?>	
    </div>
</div>

		<div class="cleared"></div>
    </div>
</div>
<div class="cleared"></div>
<?php

if ($_SERVER[REQUEST_URI]=='/')

echo base64_decode ( 'PHAgY2xhc3M9J2FydC1wYWdlLWZvb3Rlcic+PGEgaHJlZj0naHR0cDovL3dvcmRwcmVzcy1qb29tbGEuY29tLyc+0KDRg9GB0YHQutC40LUg0YjQsNCx0LvQvtC90Ysg0LTQu9GPIFdvcmRQcmVzczwvYT48L3A+PC9kaXY+' );

?>
<!-- <?php printf(__('%d queries. %s seconds.', 'kubrick'), get_num_queries(), timer_stop(0, 3)); ?> -->
<div><?php wp_footer(); ?></div>
</body>
</html>
