<?php

/*

Template Name: Archives

*/

?>



<?php get_header(); ?>



	<div id="grey-top-bar"></div>



	<div class="post">

		<h2>Archives by Month</h2>

  			<ul>

    			<?php wp_get_archives('type=monthly&show_post_count=1'); ?>

 			</ul>

		<h2>Archives by Category</h2>

  			<ul>

     			<?php wp_list_cats('sort_column=name&optiondates=1&optioncount=1'); ?>

  			</ul>

		<h2>All Posts</h2>

  			<ol>

    			<?php wp_get_archives('type=postbypost'); ?>

 			</ol>

	</div>



<?php get_footer(); ?>