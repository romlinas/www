<li><h2><?php _e('Поиск'); ?></h2>
	<div id="search">
		<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input class="searchfield" type="text" name="s" id="s" value="" title="Введите запрос" />
			<input name="sbutt" type="submit" value="Искать!" alt="Искать!" class="searchsubmit" />
		</form>
	</div>
</li>