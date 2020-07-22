<?php
	/*
		
		$args passed
	
	*/

	if(empty($args)) return;

	$acf_field = $args['acf_field']; 
?>

<div class="container gpy-2 inview-me-fadeUp" style="transition-delay:1s;">

	<div class="row">

		<div class="col-12">

			<div class="row row-no-gutters align-items-end azar-composition-slider-mini">

				<div class="col w-20 px-1 even">
					<?php 
					$slick = array(
						'dots' => false, 'arrows' => false, 'speed' => 500, 'autoplay' => true, 'autoplaySpeed' => 3200,
					);
					$slick = json_encode($slick);

					if(!empty($acf_field['references_gallery_1'])){
					$references_gallery_1 = $acf_field['references_gallery_1'];

					?>
						<div class="theme-slick-slider" data-slick='<?php echo $slick; ?>'>
							<?php foreach ($references_gallery_1 as $key => $value) {   
								?>
								<div class="item">
									<?php azar_get_lazyimage(array(
										'lazy-src' => $value['url'],
										'src' => !empty($value['sizes']['wpbc_grayscale_image']) ? $value['sizes']['wpbc_grayscale_image'] : $value['sizes']['medium']
									)); ?>
								</div>
							<?php } ?>
						</div>
					<?php } ?>

				</div>

				<div class="col w-20 px-1 odd">
					<?php 
					$slick = array(
						'dots' => false, 'arrows' => false, 'speed' => 500, 'autoplay' => true, 'autoplaySpeed' => 3700,
					);
					$slick = json_encode($slick);

					if(!empty($acf_field['references_gallery_2'])){
					$references_gallery_2 = $acf_field['references_gallery_2'];
					?>
						<div class="theme-slick-slider" data-slick='<?php echo $slick; ?>'>
							<?php foreach ($references_gallery_2 as $key => $value) { ?>
								<div class="item">
									<?php azar_get_lazyimage(array(
										'lazy-src' => $value['url'],
										'src' => !empty($value['sizes']['wpbc_grayscale_image']) ? $value['sizes']['wpbc_grayscale_image'] : $value['sizes']['medium']
									)); ?>
								</div>
							<?php } ?>
						</div>
					<?php } ?>

				</div>

				<div class="col w-20 px-1 even">
					<?php 
					$slick = array(
						'dots' => false, 'arrows' => false, 'speed' => 500, 'autoplay' => true, 'autoplaySpeed' => 5100,
					);
					$slick = json_encode($slick);
					if(!empty($acf_field['references_gallery_3'])){
					$references_gallery_3 = $acf_field['references_gallery_3'];
					?>
						<div class="theme-slick-slider" data-slick='<?php echo $slick; ?>'>
							<?php foreach ($references_gallery_3 as $key => $value) { ?>
								<div class="item">
									<?php azar_get_lazyimage(array(
										'lazy-src' => $value['url'],
										'src' => !empty($value['sizes']['wpbc_grayscale_image']) ? $value['sizes']['wpbc_grayscale_image'] : $value['sizes']['medium']
									)); ?>
								</div>
							<?php } ?>
						</div>
					<?php } ?>

				</div>

				<div class="col w-40 px-1">
					<?php 
					$slick = array(
						'vertical' => true,
						'dots' => false, 'arrows' => false, 'speed' => 500, 'autoplay' => true, 'autoplaySpeed' => 5200,
					);
					$slick = json_encode($slick);
					if(!empty($acf_field['references_gallery_4'])){
					$references_gallery_4 = $acf_field['references_gallery_4'];
					?>
						<div class="theme-slick-slider" data-slick='<?php echo $slick; ?>'>
							<?php foreach ($references_gallery_4 as $key => $value) { ?>
								<div class="item">
									<?php azar_get_lazyimage(array(
										'lazy-src' => $value['url'],
										'src' => !empty($value['sizes']['wpbc_grayscale_image']) ? $value['sizes']['wpbc_grayscale_image'] : $value['sizes']['medium']
									)); ?>
								</div>
							<?php } ?>
						</div>
					<?php } ?>
					
				</div>

			</div>

		</div>

	</div>

</div>