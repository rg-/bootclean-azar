<?php 
	$acf_field = $args['acf_field']; 
	$base = $args['id'];
?>
<div class="container">

	<div class="row gmb-1">
		<div class="col-12">
			<h2 class="section-title inview-me-fadeUp-title"><?php echo $acf_field['title']; ?></h2>
		</div>
	</div>

</div>

<?php 
$slick = array(
	'dots' => false,
	'arrows' => false, 
	'infinite' => false,
	'speed' => 500,
	'autoplay' => false,
	'autoplaySpeed' => 5200,
);
$slick = json_encode($slick);
?>
<div class="theme-slick-slider references-slider inview-me-fadeUp" data-slick='<?php echo $slick; ?>'>

	<div class="item">
		<div class="container">
			<div class="row">
				<div class="col-10"> 
					<span class="quote-lead">“”</span>
					<p class="font-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p>Robert and Eddna Kafler - Posada Ayana - José Ignacio</p>
				</div>
				<div class="col-2">
					<?php azar_get_slick_prev('bl'); ?><br>
					<?php azar_get_slick_next('br'); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="item">
		<div class="container">
			<div class="row">
				<div class="col-10 font-italic"> 
					<span class="lquote-ead">“”</span>
					<p class="font-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p>Robert and Eddna Kafler - Posada Ayana - José Ignacio</p>
				</div>
				<div class="col-2">
					<?php azar_get_slick_prev('bl'); ?><br>
					<?php azar_get_slick_next('br'); ?>
				</div>
			</div>
		</div>
	</div>

</div>

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
					?>
					<div class="theme-slick-slider" data-slick='<?php echo $slick; ?>'>
						<div class="item">
							<img src="[WPBC_get_attachment_image_src id=52]" alt="" /> 
						</div>
						<div class="item">
							<img src="[WPBC_get_attachment_image_src id=53]" alt="" /> 
						</div>
						<div class="item">
							<img src="[WPBC_get_attachment_image_src id=55]" alt="" /> 
						</div>
					</div>
				</div>

				<div class="col w-20 px-1 odd">
					<?php 
					$slick = array(
						'dots' => false, 'arrows' => false, 'speed' => 500, 'autoplay' => true, 'autoplaySpeed' => 3700,
					);
					$slick = json_encode($slick);
					?>
					<div class="theme-slick-slider" data-slick='<?php echo $slick; ?>'>
						<div class="item">
							<img src="[WPBC_get_attachment_image_src id=53]" alt="" /> 
						</div>
						<div class="item">
							<img src="[WPBC_get_attachment_image_src id=55]" alt="" /> 
						</div>
						<div class="item">
							<img src="[WPBC_get_attachment_image_src id=52]" alt="" /> 
						</div>
					</div>
				</div>

				<div class="col w-20 px-1 even">
					<?php 
					$slick = array(
						'dots' => false, 'arrows' => false, 'speed' => 500, 'autoplay' => true, 'autoplaySpeed' => 5100,
					);
					$slick = json_encode($slick);
					?>
					<div class="theme-slick-slider" data-slick='<?php echo $slick; ?>'>
						<div class="item">
							<img src="[WPBC_get_attachment_image_src id=55]" alt="" /> 
						</div>
						<div class="item">
							<img src="[WPBC_get_attachment_image_src id=52]" alt="" /> 
						</div>
						<div class="item">
							<img src="[WPBC_get_attachment_image_src id=53]" alt="" /> 
						</div>
					</div>
				</div>

				<div class="col w-40 px-1 even">
					<?php 
					$slick = array(
						'vertical' => true,
						'dots' => false, 'arrows' => false, 'speed' => 500, 'autoplay' => true, 'autoplaySpeed' => 5200,
					);
					$slick = json_encode($slick);
					?>
					<div class="theme-slick-slider" data-slick='<?php echo $slick; ?>'>
						<div class="item">
							<img src="[WPBC_get_attachment_image_src id=54]" alt="" />
						</div>
						<div class="item">
							<img src="[WPBC_get_attachment_image_src id=54]" alt="" />
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>

</div>