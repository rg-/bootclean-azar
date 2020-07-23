<?php 
	$acf_field = $args['acf_field']; 
	$base = $args['id'];

	$slick = array(
		'dots' => false,
		'arrows' => false,
	  'infinite' => false,
		'speed' => 500,
		'autoplay' => false,
		'autoplaySpeed' => 7200,
	);
	$slick = json_encode($slick);
	$template_folder = 'template-landing/parts';
?>
<div class="row inview-me-fadeUp">
	<div class="col-12 px-0 px-md-1">
		<div id="<?php echo $base; ?>-ajax" class="ajax-load-holder">
			<?php
			$compound_slider = $acf_field['compound_slider'];
			if(!empty($compound_slider)){
				$count = 0;
				$max = count($compound_slider); 
				?>
				<div id="slider-design-<?php echo $base; ?>" class="theme-slick-slider inview-me-slick" data-slick='<?php echo $slick; ?>'>
					<?php

					foreach ($compound_slider as $key => $value) {
						
						$layout = $value['acf_fc_layout'];

						$reversed = false;

						if($layout=='compound-layout-1'){
							$attachments = array(
								array('attachment_id' => $value['compound_layout_1']['id']),
							);
							$label = $value['compound_layout_1_label'];
							$year = $value['compound_layout_1_year'];
						}

						if($layout=='compound-layout-2'){
							$attachments = array(
								array('attachment_id' => $value['compound_layout_2_image_1']['id']),
								array('attachment_id' => $value['compound_layout_2_image_2']['id']),
							);
							$label = $value['compound_layout_2_label'];
							$year = $value['compound_layout_2_year'];
						}

						if($layout=='compound-layout-3'){
							$attachments = array(
								array('attachment_id' => $value['compound_layout_3_image_1']['id']),
								array('attachment_id' => $value['compound_layout_3_image_2']['id']),
								array('attachment_id' => $value['compound_layout_3_image_3']['id']),
							);
							$label = $value['compound_layout_3_label'];
							$year = $value['compound_layout_3_year'];
							$reversed = $value['compound_layout_3_inverted'];
						}

						if($layout=='compound-layout-4a'){
							$attachments = array(
								array('attachment_id' => $value['compound_layout_4a_image_1']['id']),
								array('attachment_id' => $value['compound_layout_4a_image_2']['id']),
								array('attachment_id' => $value['compound_layout_4a_image_3']['id']),
								array('attachment_id' => $value['compound_layout_4a_image_4']['id']),
							);
							$label = $value['compound_layout_4a_label'];
							$year = $value['compound_layout_4a_year'];
							$reversed = $value['compound_layout_4a_inverted'];
						}

						if($layout=='compound-layout-4b'){
							$attachments = array(
								array('attachment_id' => $value['compound_layout_4b_image_1']['id']),
								array('attachment_id' => $value['compound_layout_4b_image_2']['id']),
								array('attachment_id' => $value['compound_layout_4b_image_3']['id']),
								array('attachment_id' => $value['compound_layout_4b_image_4']['id']),
							);
							$label = $value['compound_layout_4b_label'];
							$year = $value['compound_layout_4b_year'];
							$reversed = $value['compound_layout_4b_inverted'];
						}

						$item_class = '';
						$hide_prev = false;
						$hide_next = false;
						if($count==0){
							//$hide_prev = true;
							$item_class = 'first';
						}
						if( ( $count + 1 ) == ( $max ) ){
							//$hide_next = true;
							$item_class = 'last';
						}

						if($max==1){
							$item_class = 'first last';
						}
						?>
						<div class="item <?php echo $item_class; ?>" data-layout="<?php echo $layout; ?>" data-count="<?php echo $count; ?>" data-current="<?php echo ( $count + 1 ); ?>" data-max="<?php echo $max; ?>">
							<?php
								
								
								$part_args = array(
									'reversed' => $reversed,
									'count' => $count,
				        	'hide_prev' => $hide_prev,
				        	'hide_next' => $hide_next,
				          'label'=> $label,
				          'year'=> $year,
				          'attachments'=> $attachments
				        );

								// _print_code($part_args);

				        WPBC_get_template_part($template_folder.'/'.$layout, $part_args);
				      ?>	
						</div>
						<?php
						$count ++;
					}
					?>
				</div>
				<?php
			}
			// WPBC_get_template_part('template-landing/ajax/'.$base);
			?>
		</div>
	</div>
</div>