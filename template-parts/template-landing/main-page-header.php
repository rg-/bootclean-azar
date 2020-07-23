<?php
/*

	$args passed

	Used like:

		$args['acf_field'] = the array containing the ACF field group holing this template fields
	
		So: $acf_field = $args['acf_field'];

*/

$acf_field = $args['acf_field'];  
?>

<?php if(!empty($acf_field['azar_page_header_gallery'])){
	$items = $acf_field['azar_page_header_gallery'];
	?> 
<div class="landing-header page-header bg-white">

	<?php
	$slick = array(
		'dots' => false,
		'arrows' => false,
	);
	$slick = json_encode($slick);
	$slick_heights = array(
		'xs' => array(
			'default' => '100wh',
			'max' => '426px',
			'min' => '426px'
		), 
	);
	$slick_heights = json_encode($slick_heights);
	?>
	
	<div class="theme-slick-slider" data-slick='<?php echo $slick; ?>' data-breakpoint-heightX='<?php echo $slick_heights; ?>'>
		<?php foreach($items as $k=>$v){
			?>
		<div class="item"> 
				<?php
				$full = wp_get_attachment_image_src( $v['ID'], 'full', false );
				$medium = wp_get_attachment_image_src( $v['ID'], 'wpbc_grayscale_image', false );
				?>
				<div class="embed-responsive embed-responsive-custom-header">
					<div class="embed-responsive-item">
						<?php azar_get_image_item(array(
								'attachment_id' => $v['ID'], 
							)); ?>
					</div>
				</div>
		</div>
		<?php } ?>

	</div>

</div>
<?php } ?>