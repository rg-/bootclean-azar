<?php
	/*
		
		$args passed
	
	*/

	if(empty($args)) return;

	$acf_field = $args['acf_field']; 
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

	// _print_code($acf_field);
	// client_comments

if(!empty($acf_field['client_comments'])){
	$client_comments = $acf_field['client_comments'];
	$count = 0;
	$max = count($client_comments); 
?>
<div class="theme-slick-slider references-slider inview-me-fadeUp" data-slick='<?php echo $slick; ?>'>
	<?php foreach($client_comments as $key => $value){
		$item_class = '';
		if($count==0){ 
			$item_class = 'first';
		}
		if( ( $count + 1 ) == ( $max ) ){ 
			$item_class = 'last';
		}
		?>
		<div class="item <?php echo $item_class; ?>">
			<div class="container">
				<div class="row">
					<div class="col-10"> 
						<span class="quote-lead">“”</span>
						<p class="font-italic"><?php echo $value['client_quote']; ?></p>
						<p><?php echo $value['client_cite']; ?></p>
					</div>
					<div class="col-2">
						<?php azar_get_slick_prev('bl'); ?><br>
						<?php azar_get_slick_next('br'); ?>
					</div>
				</div>
			</div>
		</div>
	<?php
	$count ++;
	 }?>
</div>
<?php } ?>

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
							<?php foreach ($references_gallery_1 as $key => $value) { ?>
								<div class="item">
								<img src="[WPBC_get_attachment_image_src id=<?php echo $value['id'];?>]" alt="" /> 
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
								<img src="[WPBC_get_attachment_image_src id=<?php echo $value['id'];?>]" alt="" /> 
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
								<img src="[WPBC_get_attachment_image_src id=<?php echo $value['id'];?>]" alt="" /> 
							</div>
							<?php } ?>
						</div>
					<?php } ?>

				</div>

				<div class="col w-40 px-1 even">
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
								<img src="[WPBC_get_attachment_image_src id=<?php echo $value['id'];?>]" alt="" /> 
							</div>
							<?php } ?>
						</div>
					<?php } ?>
					
				</div>

			</div>

		</div>

	</div>

</div>