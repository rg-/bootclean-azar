<?php

/*

	Template Landing custom child settings

*/ 


add_filter('wpbc/filter/layout/main-navbar/defaults', 'wpbc_child_main_navbar_template_landing',10,1);
function wpbc_child_main_navbar_template_landing($args){
	if(is_page_template('_template_landing_builder.php')){
		$args['affix'] = true; 
		$args['affix_defaults']['simulate'] = false;
	}
	return $args;
}

/*

	Add new section, needs template-parts/template-landing/section-1.php file

*/

add_filter('wpbc/filter/template-landing/build_sections', function($build_sections){

	$section_class = 'gpt-2 gpt-md-4';

	$build_sections[] = array(
			'id' => 'studio',
			'attrs'=>'data-inview-me="detect"',
			'class' => 'template-landing--studio bg-white '.$section_class,
			'acf' => array(
				'group_id' => 'studio',
				'label' => __('Studio','bootclean'),
				'sub_fields' => array(),
			),
		);

	$build_sections[] = array(
			'id' => 'architectural-design',
			'attrs'=>'data-inview-me="detect"',
			'class' => 'template-landing--architectural-design bg-white '.$section_class,
			'acf' => array(
				'group_id' => 'architectural-design',
				'label' => __('Architectural Design','bootclean'),
				'sub_fields' => array(),
			),
		);

	$build_sections[] = array(
			'id' => 'fixed-content-1',
			'attrs'=>'data-inview-me="detect"',
			'class' => 'template-landing--fixed-content-1 ',
			'acf' => array(
				'group_id' => 'fixed-content-1',
				'label' => __('Fixed Content 1','bootclean'),
				'sub_fields' => array(),
			),
		);

	$build_sections[] = array(
			'id' => 'references',
			'attrs'=>'data-inview-me="detect"',
			'class' => 'template-landing--references bg-white '.$section_class,
			'acf' => array(
				'group_id' => 'references',
				'label' => __('References','bootclean'),
				'sub_fields' => array(),
			),
		);

	$build_sections[] = array(
			'id' => 'mud-houses',
			'attrs'=>'data-inview-me="detect"',
			'class' => 'template-landing--mud-houses bg-white '.$section_class,
			'acf' => array(
				'group_id' => 'mud-houses',
				'label' => __('Mud Houses','bootclean'),
				'sub_fields' => array(),
			),
		);

	$build_sections[] = array(
			'id' => 'management',
			'attrs'=>'data-inview-me="detect"',
			'class' => 'template-landing--management bg-white '.$section_class,
			'acf' => array(
				'group_id' => 'management',
				'label' => __('Management','bootclean'),
				'sub_fields' => array(),
			),
		); 

	$build_sections[] = array(
			'id' => 'fixed-content-2',
			'attrs'=>'data-inview-me="detect"',
			'class' => 'template-landing--fixed-content-2 bg-white',
			'acf' => array(
				'group_id' => 'fixed-content-2',
				'label' => __('Fixed Content 2','bootclean'),
				'sub_fields' => array(),
			),
		);

	return $build_sections;
},10,1);

/*
	
	Add fields into existing sectinons by group_id.

*/

add_filter('wpbc/filter/template-landing/sub_fields/?group=page_header', function($sub_fields){
	$sub_fields[] = array(
		'key' => 'field_azar_page_header_gallery',
		'label' => 'Background image/s',
		'name' => 'azar_page_header_gallery',
		'type' => 'gallery',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'min' => '',
		'max' => '',
		'insert' => 'append',
		'library' => 'all',
		'min_width' => '',
		'min_height' => '',
		'min_size' => '',
		'max_width' => '',
		'max_height' => '',
		'max_size' => '',
		'mime_types' => '',
	);
	return $sub_fields;
},10,1);

add_filter('wpbc/filter/template-landing/sub_fields/?group=studio', function($sub_fields){
	$sub_fields[] = WPBC_acf_make_text_field(
		array(
			'name'=> 'title',
			'label'=>'Title',
			'class'=>'acf-input-title',
		)
	);
	$sub_fields[] = WPBC_acf_make_wysiwyg_field(
		array(
			'name'=> 'content',
			'label'=>'Content', 
		)
	);
	return $sub_fields;
},10,1);

add_filter('wpbc/filter/template-landing/sub_fields/?group=architectural-design', function($sub_fields){
	$sub_fields[] = WPBC_acf_make_text_field(
		array(
			'name'=> 'title',
			'label'=>'Title',
			'class'=>'acf-input-title',
		)
	); 
	return $sub_fields;
},10,1);

add_filter('wpbc/filter/template-landing/sub_fields/?group=mud-houses', function($sub_fields){
	$sub_fields[] = WPBC_acf_make_text_field(
		array(
			'name'=> 'title',
			'label'=>'Title',
			'class'=>'acf-input-title',
		)
	); 
	return $sub_fields;
},10,1);

add_filter('wpbc/filter/template-landing/sub_fields/?group=management', function($sub_fields){
	$sub_fields[] = WPBC_acf_make_text_field(
		array(
			'name'=> 'title',
			'label'=>'Title',
			'class'=>'acf-input-title',
		)
	); 
	return $sub_fields;
},10,1);

add_filter('wpbc/filter/template-landing/sub_fields/?group=references', function($sub_fields){
	$sub_fields[] = WPBC_acf_make_text_field(
		array(
			'name'=> 'title',
			'label'=>'Title',
			'class'=>'acf-input-title',
		)
	); 
	return $sub_fields;
},10,1);



add_action('wpbc/layout/body/end', function(){
?>
<div class="fixed-element-background">
	<div id="footer-bg" class="fixed-element-background-element is_hidden image-cover h-100" style="background-image: url(<?php echo do_shortcode('[WPBC_get_attachment_image_src id="51"]'); ?>);"></div>
</div>
<?php
},29);