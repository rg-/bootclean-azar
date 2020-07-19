<?php

	$label = !empty($args['label']) ? $args['label'] : '';
	$year = !empty($args['year']) ? $args['year'] : '';
	$img_1 = $args['attachments'][0]['attachment_id'];
	$img_2 = $args['attachments'][1]['attachment_id'];
	$img_3 = $args['attachments'][2]['attachment_id'];
	$img_4 = $args['attachments'][3]['attachment_id'];

	$col_1 = 'order-1';
	$col_2 = 'order-2';
	$arrows = 1;
	if(!empty($args['reversed'])){
		$arrows = 2;
		$col_1 = 'order-2';
		$col_2 = 'order-1';
	}

	if(!empty($args['test'])){
		$reversed = '<span class="bg-info py-1 px-2 text-white"><small>NORMAL</small></span>';
		if(!empty($args['reversed'])){
			$reversed = '<span class="bg-info py-1 px-2 text-white"><small>INVERTED</small></span>';
		}
		echo "<h2><span class='bg-primary py-1 px-2 text-white'>+</span><span class='bg-danger py-1 px-2 text-white text-uppercase'>compound-layout-4b</span>$reversed</h2>";
	} 

?>
<div class="azar-compound-embeds embed-responsive embed-responsive-16by9">
	<div class="embed-responsive-item ">

		<div class="row row-no-gutters h-100">

			<div class="col-12">
				
				<div class="row row-no-gutters">

					<div class="col-8 <?php echo $col_1; ?>">

						<div class="embed-responsive embed-responsive-custom-2">
							<div class="embed-responsive-item ">
								<?php if($arrows == 1) azar_get_slick_prev('bl'); ?>
								<span class="azar-slide-description"><?php echo $label;?></span>
								<span class="azar-slide-year"><?php echo $year;?></span>
								<?php azar_get_image_item(array( 'attachment_id' => $img_1 )); ?>
								<?php if(!empty($args['test'])){ echo "<span class='test-sizes'>IMG_1: 806x423px</span>";}?>
							</div>
						</div>

					</div>

					<div class="col-4 <?php echo $col_2; ?>">
						<?php if($arrows == 2) azar_get_slick_prev('bl'); ?>
						<?php azar_get_image_item(array( 'attachment_id' => $img_2 )); ?>
						<?php if(!empty($args['test'])){ echo "<span class='test-sizes'>IMG_2: 402x423px</span>";}?>
					</div>

				</div>

			</div>

			<div class="col-12">
				
				<div class="row row-no-gutters">

					<div class="col-8 <?php echo $col_1; ?>">

						<div class="embed-responsive embed-responsive-custom-small-2">
							<div class="embed-responsive-item ">
								<?php azar_get_image_item(array( 'attachment_id' => $img_3 )); ?>
								<?php if(!empty($args['test'])){ echo "<span class='test-sizes'>IMG_3: 806x257px</span>";}?>
							</div>
						</div>
						<?php if($arrows == 2) azar_get_slick_next('br'); ?>
					</div>

					<div class="col-4 <?php echo $col_2; ?>">
						<?php azar_get_image_item(array( 'attachment_id' => $img_4 )); ?>
						<?php if(!empty($args['test'])){ echo "<span class='test-sizes'>IMG_4: 402x257px</span>";}?>
						<?php if($arrows == 1) azar_get_slick_next('br'); ?>
					</div>

				</div>

			</div> 

		</div>

	</div>
</div>