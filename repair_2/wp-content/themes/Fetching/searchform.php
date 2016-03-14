<?php $search_text = empty($_GET['s']) ? "Search" : get_search_query(); ?> 
<div id="search">
    <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/"> 
        <input type="text" value="<?php _e('Search', 'dtheme'); ?>" 
            name="s" id="s"  onblur="if (this.value == '')  {this.value = '<?php _e('Search', 'dtheme'); ?>';}"  
            onfocus="if (this.value == '<?php _e('Search', 'dtheme'); ?>') {this.value = '';}" />
        <input type="image" src="<?php bloginfo('template_url'); ?>/images/search.gif" style="border:0; vertical-align: top;" /> 
    </form>
</div>