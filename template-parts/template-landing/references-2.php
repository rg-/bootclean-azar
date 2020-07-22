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