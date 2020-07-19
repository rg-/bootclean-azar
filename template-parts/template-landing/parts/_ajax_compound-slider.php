
<?php   
	$base = 'architectural-design';
?>

<div class="container" data-inview-meX="ajax-load" data-ajax-loadX="<?php echo admin_url( 'admin-ajax.php' ); ?>?action=get_template&name=template-landing/ajax/<?php echo $base; ?>" data-ajax-target="#<?php echo $base; ?>-ajax" data-ajax-load-icon="#<?php echo $base; ?>-ajax-icon">

	<div class="row gmb-1">
		<div class="col-12 text-right">
			<h2 class="section-title"><?php echo $acf_field['title']; ?></h2>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<div id="<?php echo $base; ?>-ajax" class="ajax-load-holder">
				<?php
				WPBC_get_template_part('template-landing/ajax/'.$base);
				?>
				<!--
				<div class="ajax-load-icon" id="<?php echo $base; ?>-ajax-icon">
					<div class="azar-compound-embeds embed-responsive embed-responsive-16by9">
						<div class="embed-responsive-item d-flex align-items-center justify-content-center">
							<svg class="circular" height="80" width="80">
							  <circle class="path" cx="40" cy="40" r="30" fill="none" stroke-width="2" stroke="#000" stroke-miterlimit="30" />
							</svg>
						</div>
					</div>
				</div>
				-->
			</div>
		</div>
	</div>

</div>