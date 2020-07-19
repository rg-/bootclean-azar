<?php

/*

	Filter main-navbar settings

*/

function _if_use_transparent_navbar(){
	if( is_front_page() && is_page_template('_template_landing_builder.php') ){
		return true;
	}
}	

add_filter('wpbc/filter/layout/main-navbar/defaults', 'wpbc_child_main_navbar_defaults',10,1);

function wpbc_child_main_navbar_defaults($args){
	
	$args['class'] = 'navbar navbar-expand-aside navbar-inversed collapse-right navbar-expand-lg'; 
	$args['nav_attrs'] = ' data-affix-removeclass="" data-affix-addclass="" ';
 
	$args['navbar_brand']['class'] = ''; 
 
	$logo = '[WPBC_get_stylesheet_directory_uri]/images/theme/azar-logo.svg';
	$logo_alt = '[WPBC_get_stylesheet_directory_uri]/images/theme/azar-logo-alt.svg';
	
	$args['navbar_brand']['title'] = '<img class="" width="132" src="'.$logo.'" alt="'.$args['navbar_brand']['title'].'" data-affix-addclass="d-none"/><img class="d-none" width="58" src="'.$logo_alt.'" alt="'.$args['navbar_brand']['title'].'" data-affix-removeclass="d-none"/>';

	/*
	580 > 132
	254 > 
	*/ 

	if( _if_use_transparent_navbar() ){
		$args['navbar_brand']['class'] .= ' scroll-to-top';
		$args['navbar_brand']['href'] = '#';
		$args['navbar_brand']['attrs'] = ' data-affix-removeclass="" data-affix-addclass="py-2" ';
		$args['container_class'] = 'container gpx-2 gpx-md-1 gpt-3 align-items-start';
		$args['container_attrs'] = ' data-affix-removeclass="gpt-3 align-items-start" data-affix-addclass="" ';
		
	}else{
		$args['navbar_brand']['class'] .= 'gpt-2 pb-3';
		$args['navbar_brand']['attrs'] = ' data-affix-removeclass="gpt-2 pb-3" data-affix-addclass="py-2" ';
		$args['class'] .= ' bg-primary ';
		$args['container_class'] = 'container gpx-2 gpx-md-1 align-items-center';
		$args['container_attrs'] = ' data-affix-removeclass="" data-affix-addclass="" ';
	}

	$args['navbar_toggler']['class'] = 'toggler-white toggler-open-primary p-2';
	$args['navbar_toggler']['type'] = 'animate';
	$args['navbar_toggler']['effect'] = 'close-arrow'; 
	//$args['navbar_toggler']['attrs'] = 'data-affix-addclass="toggler-white" data-affix-removeclass="toggler-white"'; 

	$args['wp_nav_menu']['container_class'] = 'collapse navbar-collapse flex-row-reverse mx-auto order-3';
	$args['wp_nav_menu']['menu_class'] = 'navbar-nav nav'; 
	$args['wp_nav_menu']['menu_id'] = 'test';



	$simulate_target = '#main-content';
	$affix = true;
	$simulate = true; 

	global $post;
	if(WPBC_if_has_page_header($post->ID)){
		$simulate = false; 
	}

	$args['affix'] = $affix;
	
	$args['affix_defaults']['simulate'] = $simulate;
	$args['affix_defaults']['simulate_target'] = $simulate_target;
	$args['affix_defaults']['breakpoint'] = 'xs';
	$args['affix_defaults']['scrollify'] = false;  
  $args['affix_defaults']['position'] = 'top'; 
  // $args['affix_defaults']['target'] = '#main-content-wrap';
	// $args['nav_attrs'] = ' data-affix-position="fixed-top" ';
	// $args['nav_attrs'] = ' data-affix-target="#main-content-wrap" '; 

	//$args['nav_attrs'] .= ' data-affix-show="scroll-up" ';
	
	// $args['nav_attrs'] = ' data-toggle="nav-affix" data-affix-position="top" data-affix-breakpoint="xs" data-affix-target="#main-content-wrap" data-affix-simulate="false" data-affix-scrollify="true" data-affix-showXX="scroll-up" data-affix-addclassXX="bg-white" data-affix-removeclassXX="bg-transparent" ';
	 
	//$args['wp_nav_menu']['before_menu'] = '[WPBC_get_template name="parts/something"]'; 

	/* wp_nav_menu */
	//$args['wp_nav_menu'] = ''; // use this to replace wp_nav_menu with "collapse-custom" one
	//$args['wp_nav_menu_custom'] = '[WPBC_get_template name="parts/wp_nav_menu_custom"]';
	//$args['navbar_toggler']['data_toggle'] = 'data-toggle="collapse-custom"';
	//$args['navbar_toggler']['target'] = 'collapse-custom';

	return $args;
}

add_filter('wpbc/body/data', function ($out){
	global $post;
	$out .= ' data-scroll-time-1="800" ';
	
	return $out;
},10,1 ); 



/*
	Alter output html for menus
*/
function nav_replace_wpse_189788($item_output, $item) {  
	return $item_output; 
}
add_filter('walker_nav_menu_start_el','nav_replace_wpse_189788',10,2);


/*
	Disable main-navbar from templates
*/
add_filter('wpbc/filter/layout/main-navbar/defaults',function ($params){
	//$params['use_custom_template'] = 'none';
	return $params;
},10,1); 


/*
	Add items into menus
*/
// add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
function add_admin_link($items, $args){
    if( $args->theme_location == 'primary' ){
        $items .= '<li class="nav-item menu-item">'; 
    		$items .= 'something';
    		$items .= '</li>';
    }
    return $items;
}


/* 
	Disable dropdown markup on BootstrapNavWalker 
*/
// add_filter('nav_menu_use_dropdown',function(){ return false; });


add_filter( 'nav_menu_css_class', 'child_nav_menu_css_class', 10, 4);

function child_nav_menu_css_class($classes, $item, $args, $depth){
	if( $args->menu_id == 'test' ){
		 
	}
	if ( isset( $args->has_children ) && $args->has_children && 0 === $depth && $args->depth > 1 ) {
		$classes[] = 'dropdown-caret dropdown-menu-transparent dropdown-visible-md';
	}
	return $classes;
}

add_filter('nav_menu_link_attributes', 'child_nav_menu_link_attributes', 10, 4); 
function child_nav_menu_link_attributes($atts, $item, $args, $depth){ 
	$atts['data-scrollify-target'] = '#main-navbar';
	//$atts['class'] = $atts['class'].' scroll-to ';
	if ( isset( $args->has_children ) && $args->has_children && 0 === $depth && $args->depth > 1 ) {
		//$atts['data-target'] = '#dm'; 
		$atts['data-hover'] = 'dropdown';
		$atts['data-hover-respond'] = 'md'; // same as main-navbar collapse  

		if(!empty($item->classes)){
			$classes = $item->classes;
			if(in_array('scroll-to', $classes)){
				$atts['class'] .= ' scroll-to ';
			}
		}
		
		// $atts['class'] .= ' has-caret ';
		if($atts['href']){

		}
		unset($atts['aria-haspopup']);
		unset($atts['aria-expanded']);
		unset($atts['data-toggle']);
		unset($atts['data-target']);
		unset($atts['id']);
	}  

	$atts['title'] = '';
	return $atts;
} 

add_filter('walker_nav_menu_start_el','child_walker_nav_menu_start_el',10,4); 
function child_walker_nav_menu_start_el($item_output, $item, $depth, $args) {
	// $item->classes
	// $item->url .....
	// $args->has_children
	if ( isset( $args->has_children ) && $args->has_children && 0 === $depth && $args->depth > 1 ) {
		$url = ! empty( $item->url ) ? $item->url : '#';
		$item_output .= '<a href="'.$url.'" id="'.'menu-item-link-dropdown-' . $item->ID.'" data-toggle="dropdown" class="caret dropdown-toggle align-items-center nav-link" data-target="'.'#menu-item-dropdown-' . $item->ID.'" ><i class="fa fa-angle-down"></i></a>';
	}
	return $item_output;
}