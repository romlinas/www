<?php if(is_page_template ( 'template-home.php' )): ?>



<?php wp_footer(); ?>


<?php if ( get_option('photography_google_analytics') <> "" ) { echo stripslashes(get_option('photography_google_analytics')); } ?>



<?php else: ?>






</style>


<script type="text/javascript">


jQuery(document).ready(function(){


	jQuery(".gallery a").colorbox({ rel:'gallery', maxHeight: '<?php echo get_option( 'photography_cb_height' ); ?>', maxWidth: '<?php echo get_option( 'photography_cb_width' ); ?>'});


});


</script>






<?php wp_footer(); ?>


<?php if ( get_option('photography_google_analytics') <> "" ) { echo stripslashes(get_option('photography_google_analytics')); } ?>


<?php endif; ?>


