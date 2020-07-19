<?php

	$acf_field = $args['acf_field'];  

?>

<div class="container">

	<div class="row">

		<div class="col-md-6">
			<div class="gpr-lg-5">
					
				<h2 class="section-title gmt-md-2 gmb-2 gmb-md-3 inview-me-fadeUp-title"><?php echo $acf_field['title']; ?></h2>
				
				<div><?php echo $acf_field['content']; ?></div>

				<p><?php WPBC_template_landing__section_next($args['next']); ?></p>

			</div>
		</div>

		<div class="col-md-6 gmt-1 gmt-md-0 gmb-3 gmb-md-0">

			<div class="azar-3-compound-images inview-me-fadeUp">
				<div class="i-1">
					<div class="c">

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
				<div class="i-2">
					<div class="c">
						
						<?php 
						$slick = array(
							'dots' => false,
							'arrows' => false, 
							'speed' => 500,
							'autoplay' => true,
							'autoplaySpeed' => 5800,
						);
						$slick = json_encode($slick);
						?>
						<div class="theme-slick-slider" data-slick='<?php echo $slick; ?>'>
							<div class="item">
								<img src="[WPBC_get_attachment_image_src id=41]" alt="" />
							</div>
							<div class="item">
								<img src="[WPBC_get_attachment_image_src id=41]" alt="" />
							</div>
							<div class="item">
								<img src="[WPBC_get_attachment_image_src id=41]" alt="" />
							</div>
						</div>

					</div>
				</div>
				<div class="i-3">
					<div class="c">
						
						<?php 
						$slick = array(
							'dots' => false,
							'arrows' => false, 
							'speed' => 500,
							'autoplay' => true,
							'autoplaySpeed' => 6200,
						);
						$slick = json_encode($slick);
						?>
						<div class="theme-slick-slider" data-slick='<?php echo $slick; ?>'>
							<div class="item">
								<img src="[WPBC_get_attachment_image_src id=42]" alt="" />
							</div>
							<div class="item">
								<img src="[WPBC_get_attachment_image_src id=42]" alt="" />
							</div>
							<div class="item">
								<img src="[WPBC_get_attachment_image_src id=42]" alt="" />
							</div>
						</div>

					</div>
				</div>
				 

			</div>

		</div>

	</div>

</div>