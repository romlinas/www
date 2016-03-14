<form method="get" action="<?php bloginfo('url'); ?>">
					<input name="s" type="text" class="searchtext" id="s" value="" onblur="if (this.value == '') {this.value = '';}" onfocus="if (this.value == '') {this.value = '';}" />
					<input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/spacer.gif" id="searchsubmit" alt="Поиск" value="" />
				</form>