<?php

/*

	Deregister scripts

*/

wp_deregister_style('iconmoon');

/*

	Add inline head styles

*/

add_filter('WPBC_add_inline_style',function($css){
	/* On old days i use to put this on the project css file, but that will not work till the css is loaded. To prevent similar situations, just put inline styles on the most top of the <head> element, like this one here. */
	$css .= 'body.loading{overflow:hidden!important;}'; 
	$css .= '.no-touchevents ::-webkit-scrollbar { width: 10px; height: 10px; }';
	return $css;
},20,1);

/*

	Add custom js scripts on footer

*/

add_filter('WPBC_enqueue_scripts__footer_scripts', function($scripts){ 

	$scripts['custom'] = array(
		'src'=> CHILD_THEME_URI .'/js/custom.js',
		'dependence' => array('jquery')
	);

	return $scripts;
},10,1);



/*

	inview-me
	See custom.js


	$(window).on('bc_inited', function () {
  	$('[data-inview-me-custom]').inview_me();
  	$(window).trigger('resize');
 	});

	$('[data-inview-me="custom"]').on('bc.inview.on', function(e){
		  
	});
	$('[data-inview-me="custom"]').on('bc.inview.off', function(e){
		 
	});

*/

function make_inview_attrs($args=array()){ 
 
	extract(shortcode_atts(array( 
		'type' => 'fadeInUp', 
		'delay' => '0s'
	), $args)); 

	return 'data-inview-me-custom="'.$type.'" data-transition-delay="'.$delay.'"';

}
add_filter('WPBC_enqueue_scripts__head_styles', function($styles){
	$styles['inview-me'] = array( 
		'src' => 'addons/inview-me/inview-me.css'
	);
	return $styles;
},10,1);

add_filter('WPBC_enqueue_scripts__footer_scripts', function($scripts){  
	$scripts['inview-me'] = array(
		'src'=> CHILD_THEME_URI .'/addons/inview-me/inview-me.js',
		'dependence' => array('jquery')
	);  
	return $scripts;
},10,1);