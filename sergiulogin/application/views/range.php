<?php

$price_range[1] = '1000-10000';
$price_range[2] = '20000-100000';
$price_range[3] = '200000-1000000';


?>


<?='<a href=\''.($range == '1' ? site_url('mic') : ($range == '2' ? site_url('mediu') : ($range == '3' ? site_url('mare') : ''))).'\'>'?>
<div id="range">
	
	<div id="range-box">
		<div id="range-image"><img src='<?= site_url('/images/'.$range.'.png'); ?>'/></div> 
		<div id='range-price'><?= $price_range[$range]; ?></div> 
		<div id='range-text'><p><?= lang('range'.$range); ?></p></div>
		<?= !empty($apply) ? '<div id=\'aplica-acum\'><p>'.lang('aplica_acum').'</p></div>' : ''; ?>
	</div>
	
</div>
 <?= '</a>'; ?>


