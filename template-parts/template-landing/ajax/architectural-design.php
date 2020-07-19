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
?>
<div id="slider-design" class="theme-slick-slider" data-slick='<?php echo $slick; ?>'>

	<div class="item">
		<?php
        WPBC_get_template_part($template_folder.'/compound-layout-4a', array( 
          'slider_id' => '#slider-design',
          'label'=>'Posada Ayana, José Ignacio',
          'year'=>'2019',
          'attachments'=>array(
            array('attachment_id' => 44),
            array('attachment_id' => 45),
            array('attachment_id' => 46),
            array('attachment_id' => 47),
          )
        ));
      ?>	
	</div>

	<div class="item">
		<?php
        WPBC_get_template_part($template_folder.'/compound-layout-4b', array( 
          'label'=>'Posada Ayana, José Ignacio',
          'year'=>'2019',
          'attachments'=>array(
            array('attachment_id' => 44),
            array('attachment_id' => 45),
            array('attachment_id' => 46),
            array('attachment_id' => 47),
          )
        ));
      ?>
	</div>

	<div class="item">
		<?php
        WPBC_get_template_part($template_folder.'/compound-layout-3', array( 
          'label'=>'Posada Ayana, José Ignacio',
          'year'=>'2019',
          'attachments'=>array(
            array('attachment_id' => 44),
            array('attachment_id' => 45),
            array('attachment_id' => 46), 
          )
        ));
      ?>
	</div>

</div>