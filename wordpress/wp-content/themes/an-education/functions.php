<?php
if ( function_exists('register_sidebar') )
    register_sidebars(2, array(
		'before_widget' => '<li>', // Removes <li>
		'after_widget' => '</li>', // Removes </li>
		'before_title' => '<h2 class="heading">', // Replaces <h2>
		'after_title' => '</h2>', // Replaces </h2>
	));
function widget_mytheme_search() {
?>
<li><h2>Search</h2>
    <form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div>
        <input type="text" value="Keyword" name="s" id="s" onfocus="if (this.value != '') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Keyword';}"/>
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
    </form>
</li>
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_mytheme_search');
?>