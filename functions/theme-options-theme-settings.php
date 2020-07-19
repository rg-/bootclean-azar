<?php
/*

	Remove tabs and fields from Theme Settings Groups

	Defaults are:

			'fields-general',
			'fields-header',
			'fields-footer',
			'fields-typography',
			'fields-custom-code',

*/ 

add_filter('wpbc/filter/theme_settings/file_path', function($file_path, $key){
	if($key=='fields-header' || $key=='fields-typography')$file_path='';
	return $file_path;
},10,2);

/*

	Filter arguments for option page and default group

*/

add_filter('wpbc/filter/theme_settings/args',function($args){
	$args['options_page']['page_title'] = 'AZAR settings';
	$args['options_page']['menu_title'] = 'AZAR settings';
	$args['options_page']['icon_url'] = '';
	return $args;
},11,1);

/*

	Now, add fields into existing groups, for example for fields-general

	$fields are like, in fact same, the used on ACF fields.In fact, it´s for ACF fields of course !
	
	Has some differences, first you don´t need to use all arguments
	For no "name" fields, like tabs or accordions or messages, just use "key"
	For rest of fiels just use "name", since "key" will be generated

	"class" can be passed alone, without the need to use "wrapper=>array("class"=>"something")"

	See, bc/functions/WPBC_acf_make_fields.php

*/

add_filter('wpbc/filter/theme_settings/fields/general', 'WPBC_child_custom_theme_settings__general', 10, 1); 

function WPBC_child_custom_theme_settings__general($fields){ 

	$fields[] =  WPBC_acf_make_email_field(
		array( 
			'name' => 'general_email',
			'label' => _x('Email','bootclean'),  
		)
	); 

	$fields[] =  WPBC_acf_make_text_field(
		array( 
			'name' => 'general_instagram',
			'label' => _x('Instagram','bootclean'),
			'prepend' => '@',
		)
	); 

	return $fields;
}


add_filter('wpbc/filter/theme_settings/fields/footer', 'WPBC_child_custom_theme_settings__footer', 10, 1); 

function WPBC_child_custom_theme_settings__footer($fields){ 

	$fields[] =  WPBC_acf_make_image_field(
		array( 
			'name' => 'footer_background',
			'label' => _x('Background image','bootclean'),  
		)
	); 

	$fields[] =  WPBC_acf_make_post_object_wpcf7_field(
		array( 
			'name' => 'footer_form',
			'label' => _x('Contact form','bootclean'),  
		)
	);  

	return $fields;
}



/* TEST/DEBUG */

add_action('wpbc/layout/start', function(){ 
 	// $settings_fields = WPBC_get_theme_settings();
 	// _print_code($settings_fields);   
	// echo do_shortcode('[WPBC_get_theme_settings name="general_email"]'); 
}, 20 );