<?php

/* 
	This will run if no Theme Settings or custom used. 
	Use it if no Theme Settings used, and to set defaults
*/
add_filter('wpbc/filter/layout/locations', function($locations){ 
	// $locations['page']['id'] = 'a1';
	return $locations;  
}, 20, 1 );


/* 
	This will run at the last, last, last 
*/
add_filter('wpbc/filter/layout/location', function($layout, $template, $using_theme_settings, $using_page_settings){
	if($template == 'page'){
		//$layout = 'a2-ml';
	}
	return $layout;
},10,4);
/* 
	And same thing for the container type
*/
add_filter('wpbc/filter/layout/container_type', function($container_type, $template, $using_theme_settings, $using_page_settings){
	if($template == 'page'){
		//$container_type = 'fixed-left';
	}
	return $container_type;
},10,4);


add_action('wpbc/layout/start', function(){?><?php
}, 40 );

add_filter('wpbc/filter/layout/start/defaults', function($args){  
	$args['main_content']['wrap']['class'] = '';
	return $args;
}); 

add_filter('WPBC_post_header_title_class', function($title_class){ 
	/*
	default
	$title_class = 'entry-title';
	*/
	$title_class .= ' gmb-2';
	return $title_class;  
}, 20, 1 ); 

add_filter('wpbc/body/data', 'custom_body_data',10,1 ); 

function custom_body_data($out){
	global $post;
	$out .= ' data-loader-delay="3000" data-inview-me-offset="0" ';
	
	return $out;
}
/*
add_action('wpbc/layout/body/end', function(){
	$footer_background = WPBC_get_theme_settings('footer_background'); 
?>
<div class="fixed-element-background">
	<div id="footer-bg" class="fixed-element-background-element is_hidden image-cover h-100" style="background-image: url(<?php echo $footer_background['url']; ?>);"></div>
</div>
<?php
},29);
*/
add_filter('wpbc/filter/layout/go-up', function($goup){

	// '<a href="#" class="btn btn-light"><i class="fa fa-angle-up"></i></a>'
	$goup = '<a href="#" class="btn btn-light"><svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="147.939px" height="119.931px" viewBox="0 0 147.939 119.931" enable-background="new 0 0 147.939 119.931"
	 xml:space="preserve">
<polygon fill="#222221" points="64.59,119.931 67.311,117 8.033,61.965 147.939,61.965 147.939,57.965 8.033,57.965 67.311,2.931 
	64.59,0 0,59.965 "/>
</svg></a>';
	return $goup; 
},10,1);