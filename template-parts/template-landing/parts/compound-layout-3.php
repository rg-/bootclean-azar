<?php

	$label = !empty($args['label']) ? $args['label'] : '';
	$year = !empty($args['year']) ? $args['year'] : '';
	$img_1 = $args['attachments'][0]['attachment_id'];
	$img_2 = $args['attachments'][1]['attachment_id'];
	$img_3 = $args['attachments'][2]['attachment_id']; 

	$col_1 = 'order-1';
	$col_2 = 'order-2';
	$description_class = 'tr';
	$year_class = 'br';
	$arrows = 1;
	if(!empty($args['reversed'])){
		$arrows = 2;
		$description_class = 'tl';
		$year_class = 'bl';
		$col_1 = 'order-2';
		$col_2 = 'order-1';
	}

	if(!empty($args['test'])){
		$reversed = '<span class="bg-info py-1 px-2 text-white"><small>NORMAL</small></span>';
		if(!empty($args['reversed'])){
			$reversed = '<span class="bg-info py-1 px-2 text-white"><small>INVERTED</small></span>';
		}
		echo "<h2><span class='bg-primary py-1 px-2 text-white'>+</span><span class='bg-danger py-1 px-2 text-white text-uppercase'>compound-layout-3</span>$reversed</h2>";
	} 

?>
<div class="azar-compound-embeds embed-responsive embed-responsive-16by9">
	<div class="embed-responsive-item ">

		<div class="row row-no-gutters h-100">

			<div class="col-6 h-100 <?php echo $col_1; ?>">
				<?php if($arrows == 1 && !$args['hide_prev']) azar_get_slick_prev('bl'); ?>
				<?php if($arrows == 2 && !$args['hide_next']) azar_get_slick_next('br'); ?>
				
				<span class="azar-slide-description <?php echo $description_class; ?>"><?php echo $label;?></span>
				<span class="azar-slide-year <?php echo $year_class; ?>"><?php echo $year;?></span>

				<?php azar_get_image_item(array( 'attachment_id' => $img_1 )); ?>
				
				<?php if(!empty($args['test'])){ echo "<span class='test-sizes'>IMG_1: 604x680px</span>";}?>
			</div>

			<div class="col-6 <?php echo $col_2; ?>">
				
				<div class="h-50 position-relative">
					<?php if($arrows == 2 && !$args['hide_prev']) azar_get_slick_prev('bl'); ?>
					<?php if($arrows == 1 && !$args['hide_next']) azar_get_slick_next('br'); ?>
					<?php azar_get_image_item(array( 'attachment_id' => $img_2 )); ?>
					<?php if(!empty($args['test'])){ echo "<span class='test-sizes'>IMG_2: 604x340px</span>";}?>
				</div>

				<div class="h-50 position-relative">
					<?php azar_get_image_item(array( 'attachment_id' => $img_3 )); ?>
					<?php if(!empty($args['test'])){ echo "<span class='test-sizes'>IMG_3: 604x340px</span>";}?>
				</div>

			</div> 

		</div>

	</div>
</div>