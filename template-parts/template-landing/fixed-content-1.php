<?php 
	/*
		
		$args passed
	
	*/

	if(empty($args)) return;

	$acf_field = $args['acf_field'];

	// _print_code($acf_field);
	// fixed_content_1_background 

	$slick = array(
		'dots' => false,
		'arrows' => false, 
		'infinite' => false,
		'speed' => 500,
		'autoplay' => false,
		'autoplaySpeed' => 5200,
	);
	$slick = json_encode($slick);

	$template_folder = 'template-landing/parts'; 

	if(empty($acf_field['fixed_content_1_background'])) return;

	$fixed_content_1_background = $acf_field['fixed_content_1_background'];
?>
<div>
	<div id="fixed-content-1-ajax" class="ajax-load-holder">
		
		<div class="w-100">

			<div class="d-flex h-100 w-100">

				<div class="col w-auto pl-0 bg-secondary" data-get="container-diference" data-diference-apply="padding-right">
					
					<div class="theme-slick-slider" data-slick='<?php echo $slick; ?>'>
						<?php foreach($fixed_content_1_background as $key=>$value){ ?>

							<div class="item">
								<div class="embed-responsive embed-responsive-16by9">
									<div class="embed-responsive-item ">
										<?php azar_get_image_item(array(
											'attachment_id' => $value['id'], 
										)); ?>
									</div>
								</div>
							</div>

						<?php } ?>
					</div>

				</div>

			</div>

		</div>

		<?php
		// WPBC_get_template_part('template-landing/ajax/fixed-content-1');
		?>
	</div>
</div>