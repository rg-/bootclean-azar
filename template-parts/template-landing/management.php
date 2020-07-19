<?php 
	$acf_field = $args['acf_field']; 
	$base = $args['id'];
?>
<div class="container gpb-6">

	<div class="row gmb-1">
		<div class="col-12">
			<h2 class="section-title inview-me-fadeUp-title"><?php echo $acf_field['title']; ?></h2>
		</div>
	</div>
	<?php 
		WPBC_get_template_part('template-landing/parts/compound-slider', $args);  
	?>

</div>