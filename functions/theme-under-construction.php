<?php

/*

	bc-options--admin-under-construction-html
	bc-options--admin-under-construction-style
	bc-options--admin-under-construction-script

*/

add_filter('WPBC_set_default_option__'.'bc-options--admin-under-construction-html',function($option, $k){
	$option['std'] = '<table><tr><td><img src="' . CHILD_THEME_URI.'/images/theme/azar-logo.svg' . '" alt="Nico Laprida" width="150" style="height:auto;"/></td></tr></table>';
	return $option;
}, 10, 2);
add_filter('WPBC_set_default_option__'.'bc-options--admin-under-construction-style',function($option, $k){
	$option['std'] = 'html{height:100%;}body{background:#030303; padding:0; margin:0; height:100%;} table{width:100%; height:100%; padding:0;} table tr{height:100%;} table td{height:100%; vertical-align:middle; text-align:center; }';
	return $option;
}, 10, 2);