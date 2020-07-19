<?php

/*

	Set custom login screen

*/

add_filter('WPBC_set_default_option__'.'bc-options--admin-login--enable',function($option, $k){
	$option['std'] = '1';
	return $option;
}, 10, 2);

add_filter('WPBC_set_default_option__'.'bc-options--admin-login--brand-logo',function($option, $k){ 
	$option['std'] = CHILD_THEME_URI.'/images/theme/azar-logo.png'; 
	return $option;
}, 10, 2);
add_filter('WPBC_set_default_option__'.'bc-options--admin-login--brand-logo-width',function($option, $k){
	$option['std'] = 150; 
	return $option;
}, 10, 2);
add_filter('WPBC_set_default_option__'.'bc-options--admin-login--brand-logo-height',function($option, $k){
	$option['std'] = ''; 
	return $option;
}, 10, 2);

add_filter('WPBC_set_default_option__'.'bc-options--admin-login--body-background',function($option, $k){
	$option['std']['color'] = '#030303';
	return $option;
}, 10, 2);


add_filter('WPBC_set_default_option__'.'bc-options--admin-login--custom-css',function($option, $k){
	$option['std'] = '.login label{ color:#f2f3f3; }';
	$option['std'] .= '.login h1 a{background-size:150px auto!important; width: 150px; height:92px;}';
	$option['std'] .= 'form{background:#030303!important; color:#f2f3f3; } form button{}';
	$option['std'] .= '.wp-core-ui .button-primary{ box-shadow:none; text-shadow:none; background:#f2f3f3; color:#000; border-color:#f2f3f3;  }';
	return $option;
}, 10, 2);


add_filter('WPBC_set_default_option__'.'bc-options--admin-login--body-text-color',function($option, $k){
	//$option['std'] = '#ffffff';
	return $option;
}, 10, 2);

add_filter('WPBC_set_default_option__'.'bc-options--admin-login--body-text-color-hover',function($option, $k){
	//$option['std'] = '#ffffff';
	return $option;
}, 10, 2); 