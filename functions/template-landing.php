<?php


include('template-landing/functions.php');

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

	$comp_layouts_icon = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="24px" height="20px" viewBox="-1 -1 24 20" style="vertical-align:middle;" xml:space="preserve">
<g>
	<rect x="14.3" style="fill:#E97F02;" width="7.7" height="11.25"/>
</g>
<g>
	<rect x="15.3" y="12.25" style="fill:#E97F02;" width="7.7" height="6.75"/>
</g>
<g>
	<rect y="11.25" style="fill:#E97F02;" width="14.3" height="6.75"/>
</g>
<g>
	<rect x="-1" y="-1" style="fill:#FFFFFF;" width="14.3" height="11.25"/>
</g>
<g>
	<path d="M13.3,12.25V17H1v-4.75H13.3 M14.3,11.25H0V18h14.3V11.25L14.3,11.25z"/>
</g>
<g>
	<path d="M22,13.25V18h-5.7v-4.75H22 M23,12.25h-7.7V19H23V12.25L23,12.25z"/>
</g>
<g>
	<path d="M12.3,0v9.25H0V0H12.3 M13.3-1H-1v11.25h14.3V-1L13.3-1z"/>
</g>
<g>
	<path d="M21,1v9.25h-5.7V1H21 M22,0h-7.7v11.25H22V0L22,0z"/>
</g>
<g id="Layer_1_1_">
</g>
</svg>';

	$build_sections[] = array(
			'id' => 'architectural-design',
			'attrs'=>'data-inview-me="detect"',
			'class' => 'template-landing--architectural-design bg-white '.$section_class,
			'acf' => array(
				'group_id' => 'architectural-design',
				'label' => $comp_layouts_icon.' - '.__('Architectural Design','bootclean'),
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
				'label' => $comp_layouts_icon.' - '.__('Mud Houses','bootclean'),
				'sub_fields' => array(),
			),
		);

	$build_sections[] = array(
			'id' => 'management',
			'attrs'=>'data-inview-me="detect"',
			'class' => 'template-landing--management bg-white '.$section_class,
			'acf' => array(
				'group_id' => 'management',
				'label' => $comp_layouts_icon.' - '.__('Management','bootclean'),
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

	$sub_fields[] = WPBC_acf_make_gallery_advanced_field(
		array(
			'name'=> 'gallery_1',
			'label'=>'Image/s 1', 
			'instructions'=> '320x494 @x2', 
		)
	); 

	$sub_fields[] = WPBC_acf_make_gallery_advanced_field(
		array(
			'name'=> 'gallery_2',
			'label'=>'Image/s 2', 
			'instructions'=> '242x380 @x2', 
		)
	); 

	$sub_fields[] = WPBC_acf_make_gallery_advanced_field(
		array(
			'name'=> 'gallery_3',
			'label'=>'Image/s 3', 
			'instructions'=> '242x123 @x2', 
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
	
	$layouts = azar_layouts(); 
	$sub_fields[] = array(
		'key' => 'field_compound_slider',
		'label' => 'Compound Images Slider',
		'name' => 'compound_slider',
		'type' => 'flexible_content',
		'instructions' => azar_layouts_instructions(),
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'layouts' => $layouts,
		'button_label' => 'Agregar Slide',
		'min' => 0,
		'max' => 6,
	);

	return $sub_fields;
},10,1);

add_filter('wpbc/filter/template-landing/sub_fields/?group=fixed-content-1', function($sub_fields){
	$sub_fields[] = WPBC_acf_make_gallery_advanced_field(
		array(
			'name'=> 'fixed_content_1_background',
			'label'=>'Image/s Background', 
			'instructions'=> '1280x720 @x2', 
		)
	);  
	return $sub_fields;
},10,1);

add_filter('wpbc/filter/template-landing/sub_fields/?group=fixed-content-2', function($sub_fields){
	$sub_fields[] = WPBC_acf_make_gallery_advanced_field(
		array(
			'name'=> 'fixed_content_2_background',
			'label'=>'Image/s Background', 
			'instructions'=> '1280x720 @x2', 
		)
	);  
	$sub_fields[] = WPBC_acf_make_gallery_advanced_field(
		array(
			'name'=> 'fixed_content_2_aside',
			'label'=>'Image/s Aside', 
			'instructions'=> '262x404 @x2', 
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
	$layouts = azar_layouts(); 
	$sub_fields[] = array(
		'key' => 'field_compound_slider',
		'label' => 'Compound Images Slider',
		'name' => 'compound_slider',
		'type' => 'flexible_content',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'layouts' => $layouts,
		'button_label' => 'Agregar Slide',
		'min' => 0,
		'max' => 6,
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
	$layouts = azar_layouts(); 
	$sub_fields[] = array(
		'key' => 'field_compound_slider',
		'label' => 'Compound Images Slider',
		'name' => 'compound_slider',
		'type' => 'flexible_content',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'layouts' => $layouts,
		'button_label' => 'Agregar Slide',
		'min' => 0,
		'max' => 6,
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

	$client_comments_fields = array();
	$client_comments_fields[] = WPBC_acf_make_textarea_field(
		array(
			'name'=> 'client_quote',
			'label'=>'Quote',
			'class'=>'',
		)
	); 
	$client_comments_fields[] = WPBC_acf_make_text_field(
		array(
			'name'=> 'client_cite',
			'label'=>'Cite',
			'class'=>'',
		)
	); 

	$sub_fields[] = WPBC_acf_make_repeater_field(
		array(
			'name'=> 'client_comments',
			'label'=>'Client comments',
			'sub_fields' => $client_comments_fields,
			'button_label' => 'Add Client comment',
		)
	);

	$sub_fields[] = WPBC_acf_make_gallery_advanced_field(
		array(
			'name'=> 'references_gallery_1',
			'label'=>'Image/s 1', 
			'instructions'=> '235x413 @x2', 
		)
	);

	$sub_fields[] = WPBC_acf_make_gallery_advanced_field(
		array(
			'name'=> 'references_gallery_2',
			'label'=>'Image/s 2', 
			'instructions'=> '235x413 @x2', 
		)
	); 

	$sub_fields[] = WPBC_acf_make_gallery_advanced_field(
		array(
			'name'=> 'references_gallery_3',
			'label'=>'Image/s 3', 
			'instructions'=> '235x413 @x2', 
		)
	);

	$sub_fields[] = WPBC_acf_make_gallery_advanced_field(
		array(
			'name'=> 'references_gallery_4',
			'label'=>'Image/s 4', 
			'instructions'=> '477x220 @x2', 
		)
	);

	return $sub_fields;
},10,1);