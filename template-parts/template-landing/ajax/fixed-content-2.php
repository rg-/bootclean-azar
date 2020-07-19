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

$template_folder = 'template-landing/parts';

$img_1 = 50;

?>

<div class="w-100">

	<div class="d-flex h-100 w-100 bg-secondary">

		<div class="col-10 pr-0 bg-secondary" data-get="container-diference" data-diference-apply="padding-left">
			
			<div class="theme-slick-slider" data-slick='<?php echo $slick; ?>'>

				<div class="item">
					<div class="embed-responsive embed-responsive-16by9">
						<div class="embed-responsive-item ">
							<?php azar_get_image_item(array(
								'attachment_id' => $img_1, 
							)); ?>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="embed-responsive embed-responsive-16by9">
						<div class="embed-responsive-item ">
							<?php azar_get_image_item(array(
								'attachment_id' => $img_1, 
							)); ?>
						</div>
					</div>
				</div>

			</div>

		</div>

		<div class="azar-fixed-slider-mini col-3 pl-0" data-get="container-diference" data-diference-apply="padding-right">
			<?php 
				$slick = array(
					'dots' => false,
					'arrows' => false, 
					'speed' => 500,
					'autoplay' => true,
					'autoplaySpeed' => 5200,
				);
				$slick = json_encode($slick);
				?>
				<div class="theme-slick-slider" data-slick='<?php echo $slick; ?>'>
					<div class="item">
						<img src="[WPBC_get_attachment_image_src id=40]" alt="" />
					</div>
					<div class="item">
						<img src="[WPBC_get_attachment_image_src id=40]" alt="" />
					</div>
					<div class="item">
						<img src="[WPBC_get_attachment_image_src id=40]" alt="" />
					</div>
				</div>
		</div>

	</div>

</div>