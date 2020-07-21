<?php
	
	/*
		
		$args passed
	
	*/

	if(empty($args)) return;

	$acf_field = $args['acf_field'];  
	// _print_code($acf_field);

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

			<div class="azar-3-compound-images">
				<?php 
					$slick = array(
						'dots' => false,
						'arrows' => false, 
						'speed' => 500,
						'autoplay' => true, 
					);
				?>
				<div class="i-1 inview-me-fadeUp">
					<div class="c">
						<?php 
						$slick['autoplaySpeed'] = 5200;
						$slick_1 = json_encode($slick); 
						if(!empty($acf_field['gallery_1'])){
						?>
						<div class="theme-slick-slider" data-slick='<?php echo $slick_1; ?>'>
							<?php foreach($acf_field['gallery_1'] as $item ){
								$img = $item['url'];
								$sizes = $item['sizes'];
								$img_medium = $sizes['medium'];
								$img_gray = $sizes['wpbc_grayscale_image'];
								?>
								<div class="item">
									<img src="<?php echo $img; ?>" alt="" />
								</div>
							<?php } ?>
						</div>
						<?php } ?> 
					</div><!-- .c -->
				</div>
				<div class="i-2 inview-me-fadeUp">
					<div class="c">
						<?php 
						$slick['autoplaySpeed'] = 5800;
						$slick_2 = json_encode($slick); 
						if(!empty($acf_field['gallery_2'])){
						?>
						<div class="theme-slick-slider" data-slick='<?php echo $slick_2; ?>'>
							<?php foreach($acf_field['gallery_2'] as $item ){
								$img = $item['url'];
								$sizes = $item['sizes'];
								$img_medium = $sizes['medium'];
								$img_gray = $sizes['wpbc_grayscale_image'];
								?>
								<div class="item">
									<img src="<?php echo $img; ?>" alt="" />
								</div>
							<?php } ?>
						</div>
						<?php } ?> 
					</div><!-- .c -->
				</div>
				<div class="i-3 inview-me-fadeUp">
					<div class="c">
						<?php 
						$slick['autoplaySpeed'] = 6200;
						$slick_3 = json_encode($slick); 
						if(!empty($acf_field['gallery_3'])){
						?>
						<div class="theme-slick-slider" data-slick='<?php echo $slick_3; ?>'>
							<?php foreach($acf_field['gallery_3'] as $item ){
								$img = $item['url'];
								$sizes = $item['sizes'];
								$img_medium = $sizes['medium'];
								$img_gray = $sizes['wpbc_grayscale_image'];
								?>
								<div class="item">
									<img src="<?php echo $img; ?>" alt="" />
								</div>
							<?php } ?>
						</div>
						<?php } ?> 
					</div><!-- .c -->
				</div>
				 

			</div>

		</div>

	</div>

</div>