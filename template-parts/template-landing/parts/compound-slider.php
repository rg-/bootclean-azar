<?php 
	$acf_field = $args['acf_field']; 
	$base = $args['id'];
?>
<div class="row inview-me-fadeUp">
	<div class="col-12">
		<div id="<?php echo $base; ?>-ajax" class="ajax-load-holder">
			<?php
			WPBC_get_template_part('template-landing/ajax/'.$base);
			?>
		</div>
	</div>
</div>