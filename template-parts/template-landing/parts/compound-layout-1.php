<?php

	$label = !empty($args['label']) ? $args['label'] : '';
	$year = !empty($args['year']) ? $args['year'] : '';
	$img_1 = $args['attachments'][0]['attachment_id']; 

	$col_1 = 'order-1';
	$col_2 = 'order-2';
	if(!empty($args['reversed'])){
		$col_1 = 'order-2';
		$col_2 = 'order-1';
	}

	if(!empty($args['test'])){
		$reversed = '<span class="bg-info py-1 px-2 text-white"><small>NORMAL</small></span>';
		if(!empty($args['reversed'])){
			$reversed = '<span class="bg-info py-1 px-2 text-white"><small>INVERTED</small></span>';
		}
		echo "<h2><span class='bg-primary py-1 px-2 text-white'>+</span><span class='bg-danger py-1 px-2 text-white text-uppercase'>compound-layout-1</span>$reversed</h2>";
	} 

?>
<div class="azar-compound-embeds embed-responsive embed-responsive-16by9">
	<div class="embed-responsive-item ">
		<?php azar_get_slick_prev('bl'); ?>
		<?php azar_get_slick_next('br'); ?>
		<?php azar_get_image_item(array( 'attachment_id' => $img_1 )); ?>
		<span class="azar-slide-description"><?php echo $label;?></span>
						<span class="azar-slide-year"><?php echo $year;?></span>
		<?php if(!empty($args['test'])){ echo "<span class='test-sizes'>IMG_1: 1212x680px</span>";}?>
	</div>
</div>