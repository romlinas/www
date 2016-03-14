<div class="art-layout-cell art-sidebar2">      
<?php if (!art_sidebar(2)): ?>
<div class="art-block">
    <div class="art-block-tl"></div>
    <div class="art-block-tr"></div>
    <div class="art-block-bl"></div>
    <div class="art-block-br"></div>
    <div class="art-block-tc"></div>
    <div class="art-block-bc"></div>
    <div class="art-block-cl"></div>
    <div class="art-block-cr"></div>
    <div class="art-block-cc"></div>
    <div class="art-block-body">
<div class="art-blockheader">
    <div class="l"></div>
    <div class="r"></div>
     <div class="t"><?php _e('Search', 'kubrick'); ?></div>
</div>
<div class="art-blockcontent">
    <div class="art-blockcontent-body">
<!-- block-content -->
<form method="get" name="searchform" action="<?php bloginfo('url'); ?>/">
<input type="text" value="<?php the_search_query(); ?>" name="s" style="width: 95%;" />
<span class="art-button-wrapper">
	<span class="l"> </span>
	<span class="r"> </span>
	<input class="art-button" type="submit" name="search" value="<?php _e('Search', 'kubrick'); ?>" />
</span>
</form>
<!-- /block-content -->

		<div class="cleared"></div>
    </div>
</div>

		<div class="cleared"></div>
    </div>
</div>
<div class="art-block">
    <div class="art-block-tl"></div>
    <div class="art-block-tr"></div>
    <div class="art-block-bl"></div>
    <div class="art-block-br"></div>
    <div class="art-block-tc"></div>
    <div class="art-block-bc"></div>
    <div class="art-block-cl"></div>
    <div class="art-block-cr"></div>
    <div class="art-block-cc"></div>
    <div class="art-block-body">
<div class="art-blockheader">
    <div class="l"></div>
    <div class="r"></div>
     <div class="t"><?php _e('Categories', 'kubrick'); ?></div>
</div>
<div class="art-blockcontent">
    <div class="art-blockcontent-body">
<!-- block-content -->
<ul>
  <?php wp_list_categories('show_count=1&title_li='); ?>
</ul>
<!-- /block-content -->

		<div class="cleared"></div>
    </div>
</div>

		<div class="cleared"></div>
    </div>
</div>
<div class="art-block">
    <div class="art-block-tl"></div>
    <div class="art-block-tr"></div>
    <div class="art-block-bl"></div>
    <div class="art-block-br"></div>
    <div class="art-block-tc"></div>
    <div class="art-block-bc"></div>
    <div class="art-block-cl"></div>
    <div class="art-block-cr"></div>
    <div class="art-block-cc"></div>
    <div class="art-block-body">
<div class="art-blockheader">
    <div class="l"></div>
    <div class="r"></div>
     <div class="t"><?php _e('Bookmarks', 'kubrick'); ?></div>
</div>
<div class="art-blockcontent">
    <div class="art-blockcontent-body">
<!-- block-content -->
<ul>
      <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
      </ul>
<!-- /block-content -->

		<div class="cleared"></div>
    </div>
</div>

		<div class="cleared"></div>
    </div>
</div>

<?php endif ?>
</div>
