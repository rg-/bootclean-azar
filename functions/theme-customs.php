<?php


/*

	---------------------------------------------------------------

*/

/*
	
	New image size & grayscale

	wpbc_grayscale_image

	Uploader/media/sizes-> grayscale-images

*/

add_action('after_setup_theme','WPBC_after_setup_theme__wpbc_grayscale_image');
function WPBC_after_setup_theme__wpbc_grayscale_image() {
  add_image_size('wpbc_grayscale_image', 100, false, false);
} 
add_filter('wp_generate_attachment_metadata','WPBC_wp_generate_attachment_metadata__wpbc_grayscale_image');
function WPBC_wp_generate_attachment_metadata__wpbc_grayscale_image($meta) {
  $file = wp_upload_dir();
  $file = trailingslashit($file['path']).$meta['sizes']['wpbc_grayscale_image']['file'];
  list($orig_w, $orig_h, $orig_type) = @getimagesize($file);
  $image = wp_load_image($file);
  imagefilter($image, IMG_FILTER_GRAYSCALE);
  switch ($orig_type) {
    case IMAGETYPE_GIF:
        imagegif( $image, $file );
        break;
    case IMAGETYPE_PNG:
        imagepng( $image, $file );
        break;
    case IMAGETYPE_JPEG:
        imagejpeg( $image, $file );
        break;
  }
  return $meta;
}

/*

	---------------------------------------------------------------

*/

function azar_get_slick_next($class=''){
	echo '<button class="slick-custom-arrow slick-custom-next '.$class.'"><svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="147.939px" height="119.931px" viewBox="0 0 147.939 119.931" enable-background="new 0 0 147.939 119.931"
	 xml:space="preserve">
<polygon fill="#222221" points="83.35,0 80.629,2.931 139.906,57.965 0,57.965 0,61.965 139.906,61.965 80.629,117 83.35,119.931 
	147.939,59.965 "/>
</svg></button>';
}
function azar_get_slick_prev($class=''){
	echo '<button class="slick-custom-arrow slick-custom-prev '.$class.'"><svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="147.939px" height="119.931px" viewBox="0 0 147.939 119.931" enable-background="new 0 0 147.939 119.931"
	 xml:space="preserve">
<polygon fill="#222221" points="64.59,119.931 67.311,117 8.033,61.965 147.939,61.965 147.939,57.965 8.033,57.965 67.311,2.931 
	64.59,0 0,59.965 "/>
</svg></button>';
}

function azar_get_image_item($args){
	if(!empty($args)){
		
		$attachment_id = $args['attachment_id'];
		
		$img_hi = "[WPBC_get_attachment_image_src id='".$attachment_id."']";
		
		$img_low = "[WPBC_get_attachment_image_src id='".$attachment_id."' size='medium']";
		$img_low = "[WPBC_get_attachment_image_src id='".$attachment_id."' size='wpbc_grayscale_image']";
		//$img_low = "[WPBC_get_stylesheet_directory_uri]/px-trans.png";

		$border = 'border-item';
		
		if(!empty($args['no-border'])){
			$border = '';
		}

		echo '<div class="'.$border.' h-100"><div class="lazybackground-loading lazybackground-item image-cover h-100" style="background-image: url('.$img_low.');" data-lazybackground-src="'.$img_hi.'"></div></div>';

	}
}


/* Icon shortcodes */
add_shortcode ('icon_instagram', 'azar_get_icon' ); 
add_shortcode ('icon_envelope', 'azar_get_icon' ); 
add_shortcode ('icon_nomade', 'azar_get_icon' ); 
function azar_get_icon($atts, $content = null , $tag){
	$defs = array();  
  $args = array_merge($defs, $atts); 
  $out = ''; 
  $fill = !empty($args['color']) ? $args['color'] : '#030303';
  
  if( $tag == 'icon_instagram' ){
  	$uId = 'svg_'.uniqid();
  	$uId2 = 'svg_'.uniqid();
  	$out = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
<g>
	<defs>
		<rect id="'.$uId.'" x="0.092" width="39.817" height="40.001"/>
	</defs>
	<clipPath id="'.$uId2.'">
		<use xlink:href="#'.$uId.'"  overflow="visible"/>
	</clipPath>
	<path fill="'.$fill.'" clip-path="url(#'.$uId2.')" d="M28.387,0h-16.59C4.792,0,0.092,4.792,0.092,11.705v16.59c0,3.41,1.106,6.545,3.318,8.571
		c2.12,2.121,5.162,3.135,8.388,3.135h16.405c3.317,0,6.36-1.106,8.387-3.135c2.121-2.119,3.319-5.161,3.319-8.571V11.797
		c0-3.41-1.106-6.359-3.135-8.387C34.747,1.198,31.797,0,28.387,0 M36.313,28.388c0,2.396-0.737,4.516-2.211,5.898
		c-1.383,1.382-3.41,2.119-5.899,2.119H11.797c-2.396,0-4.332-0.737-5.899-2.119c-1.566-1.567-2.212-3.594-2.212-6.083v-16.59
		c0-2.396,0.738-4.517,2.12-5.899c1.383-1.382,3.41-2.12,5.899-2.12h16.589c2.489,0,4.517,0.737,6.084,2.212
		c1.382,1.567,2.119,3.411,2.119,5.899v16.59L36.313,28.388z"/>
	<path fill="'.$fill.'" clip-path="url(#'.$uId2.')" d="M30.692,6.82c-1.383,0-2.397,1.106-2.397,2.397c0,1.382,1.106,2.396,2.397,2.396
		c1.382,0,2.396-1.106,2.396-2.396C32.996,7.926,31.981,6.82,30.692,6.82"/>
	<path fill="'.$fill.'" clip-path="url(#'.$uId2.')" d="M19.908,9.678c-5.622,0-10.23,4.515-10.23,10.229c0,5.624,4.516,10.232,10.23,10.232
		c5.715,0,10.415-4.518,10.415-10.232S25.531,9.678,19.908,9.678 M19.908,26.637c-3.687,0-6.636-2.949-6.636-6.636
		s2.949-6.636,6.636-6.636s6.637,2.95,6.637,6.636S23.594,26.637,19.908,26.637"/>
</g>
</svg>';
  }

  if( $tag == 'icon_envelope' ){

  	$out = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
<path fill="'.$fill.'" d="M36.082,1.082H3.917C1.758,1.082,0,2.839,0,5v30.001c0,2.159,1.758,3.917,3.917,3.917h32.165
	c2.16,0,3.918-1.758,3.918-3.917V5C40,2.839,38.242,1.082,36.082,1.082z M2.887,6.924l16.167,14.012
	c0.263,0.228,0.598,0.353,0.946,0.353s0.684-0.125,0.945-0.353L37.113,6.924v28.077c0,0.567-0.463,1.03-1.031,1.03H3.917
	c-0.568,0-1.03-0.463-1.03-1.03V6.924z M20,17.935L3.886,3.969c0.011,0,0.021,0,0.031,0h32.165c0.012,0,0.021,0,0.033,0L20,17.935z"
	/>
</svg>';

  }

  if( $tag == 'icon_nomade' ){

  	$out = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
<g>
</g>
<g>
	<path fill="'.$fill.'" d="M32.791,28.396l-1.131-0.795c-0.17,0.23-0.352,0.455-0.535,0.676c-0.031,0.037-0.059,0.078-0.092,0.113
		c-0.051,0.063-0.107,0.118-0.16,0.178c-0.195,0.22-0.395,0.437-0.604,0.643l0.002,0.003c-3.183,3.197-7.832,4.831-12.607,3.957
		c-1.419-0.259-2.752-0.722-3.974-1.354l-1.927,1.68c2.338,1.357,5.041,2.164,7.935,2.229c5.108,0.112,9.716-2.106,12.829-5.677
		l5.479,2.033L32.791,28.396z"/>
	<path fill="'.$fill.'" d="M12.078,30.807c-0.523-0.363-1.021-0.759-1.49-1.185l-0.006,0.017c-3.469-3.188-5.283-8.018-4.323-12.97
		C6.5,15.43,6.857,14.284,7.313,13.23l-1.742-2c-1.243,2.259-1.978,4.839-2.039,7.595c-0.118,5.312,2.287,10.087,6.113,13.196
		L6.49,38.723l4.182-5.923l1.389-1.969L12.078,30.807z"/>
	<path fill="'.$fill.'" d="M28.451,7.602l-0.033,0.046c4.354,3.09,6.771,8.519,5.75,14.12c-0.277,1.514-0.785,2.922-1.48,4.205l1.535,1.764
		c1.447-2.393,2.312-5.182,2.377-8.178c0.115-5.167-2.158-9.824-5.803-12.938l2.082-5.292L28.451,7.602z"/>
	<path fill="'.$fill.'" d="M8.189,11.512c0.042-0.07,0.089-0.134,0.132-0.204c0.3-0.446,0.622-0.878,0.969-1.288l-0.048-0.019
		c3.163-3.977,8.201-5.708,13.521-4.737c1.436,0.264,2.782,0.734,4.014,1.376l1.84-1.603c-2.393-1.449-5.186-2.314-8.185-2.381
		C14.967,2.534,10.067,5.085,6.968,9.105l-4.935-1.94l6.149,4.342L8.189,11.512z"/>
	<path fill="'.$fill.'" d="M26.205,17.855l0.025-0.002c0.004,0,0.004,0,0.007,0.001l0.804,0.256c0.193,0.062,0.402-0.038,0.463-0.226
		c0.005-0.014,0.002-0.027,0.005-0.041l2.083-1.946c0.127-0.117,0.131-0.309,0.01-0.43c-0.119-0.123-0.319-0.124-0.447-0.008
		l-2.057,1.923l-0.979-0.313c-0.003-0.004-0.006,0-0.01-0.003l-2.064-0.66c-0.193-0.061-0.4,0.038-0.461,0.225
		c-0.011,0.032-0.011,0.064-0.013,0.096c-0.152-0.096-0.364-0.197-0.694-0.305c0.015-0.028,0.028-0.062,0.045-0.086
		c0.061-0.09,0.117-0.154,0.17-0.186c0.721-1.408,1.459-1.248,1.604-2.173c0.24-0.549-0.701-2.549,0.354-1.487
		c0.461,0.464,0.916-0.178,1.156-0.624c0.195,0.186,0.249,0.123,0.244,0.076c-0.077-0.175-0.001-0.454,0.013-0.502
		c0.351-0.278,0.174-0.19,0.425-0.333c0.046-0.027,0.058-0.082,0.06-0.139c0.016,0,0.039,0.006,0.047-0.003
		c0.019,0.031,0.036,0.033,0.092,0.034c-0.004-0.02,0.008-0.024,0.008-0.04c-0.019,0.004-0.012-0.02-0.032-0.017
		c0.004-0.062,0.078-0.104,0.084-0.16c0.067-0.008,0.054-0.259-0.013-0.288c0.026-0.004,0.021-0.03,0.056-0.038
		c-0.02-0.019,0.014-0.026,0.016-0.047c0.008,0.009,0.025,0.011,0.041,0.011c-0.01-0.035,0.021-0.035,0.041-0.067
		c-0.012,0.004-0.041,0.04-0.035-0.003c-0.021-0.001-0.037,0.005-0.045,0.019c-0.008-0.001-0.002-0.008,0.002-0.008
		c-0.002-0.012-0.023-0.006-0.025-0.016c0-0.009-0.004-0.025,0.008-0.026c-0.012-0.017-0.019,0.004-0.035-0.011
		c0.014-0.026-0.002-0.029-0.02-0.034c-0.002-0.016,0.014-0.014,0.01-0.034c-0.012-0.003-0.016,0.006-0.008,0.006
		c-0.007,0.02-0.027-0.017-0.021,0.02c-0.023,0.004-0.015-0.017-0.027-0.022c-0.024-0.012-0.005,0.023-0.022,0.019
		c0.008,0.014,0.037,0.008,0.049,0.019c0.004,0.02-0.02,0.011-0.023,0.023c-0.017,0.003,0.008-0.029-0.021-0.021
		c0.01,0.021,0.004,0.04-0.018,0.047c-0.006-0.024,0-0.113,0.031-0.121c-0.025,0.001-0.027-0.023-0.031-0.051
		c-0.016,0.002-0.018,0.009-0.01,0.02c-0.006-0.004-0.01-0.008-0.02-0.009c0.016-0.031-0.008-0.057,0.012-0.096
		c-0.031-0.005-0.006-0.049-0.021-0.077C27.029,9.99,27.027,10,27.018,9.973c0.002-0.006,0.008-0.007,0.008-0.014
		c0.006,0.002,0.004,0.009,0.006,0.015c0.023-0.011-0.016-0.02-0.004-0.041c0.02,0.014,0.02,0.006,0.043,0.016
		c-0.033,0.018-0.004,0.086,0.006,0.091c0,0.007-0.008,0.005-0.014,0.006c0.012,0.024,0.035,0.023,0.018,0.056
		c0.023-0.011,0.049-0.023,0.047-0.065c-0.051-0.029-0.01-0.073-0.051-0.092c0.027-0.013,0.025,0.014,0.049,0.029
		c0.027-0.006,0.023-0.05,0.033-0.08c-0.014,0.031-0.016-0.017-0.021,0.013c-0.023-0.008,0-0.015-0.012-0.027
		c-0.025,0.005-0.027-0.007-0.039,0.017c-0.025-0.019,0.006-0.02,0.004-0.048c-0.012,0.012-0.023-0.001-0.02-0.022
		c0.029-0.017,0.005-0.006,0.025-0.039c-0.031-0.006-0.019,0.02-0.044,0.003c-0.008-0.008-0.03-0.036-0.012-0.042
		c0.002-0.006-0.004-0.007-0.006-0.007c-0.009,0-0.009-0.004-0.009-0.008c-0.016,0.005-0.021,0.034-0.012,0.048
		c-0.008,0-0.041-0.025-0.049,0.003c-0.006-0.002-0.006-0.007-0.014-0.008c0.01-0.026,0.041-0.051,0.051-0.078
		c-0.013,0.011-0.014,0.017-0.033,0.033c-0.004-0.017-0.004-0.054-0.016-0.077c-0.018,0.019-0.047,0.027-0.049,0.064
		c-0.006,0-0.014,0-0.021-0.002c0.035-0.032-0.002-0.106,0.037-0.107c-0.012-0.01-0.002-0.036-0.023-0.035
		c0.002-0.009,0.014-0.006,0.021-0.006c-0.01-0.024-0.039-0.029-0.039-0.059c-0.016-0.001-0.033-0.002-0.049-0.003
		c-0.002,0.016-0.016,0.019-0.01,0.041c-0.023-0.017-0.002-0.028,0.004-0.049c-0.033,0.014-0.057,0.035-0.076,0.064
		c-0.012-0.041,0.004-0.065-0.008-0.104c-0.028-0.008-0.028-0.011-0.055-0.031c-0.035,0.067-0.062,0.087-0.056,0.147
		c-0.006,0-0.014-0.001-0.021-0.001c0.019-0.034-0.008-0.057,0.021-0.075c0.001-0.015-0.021-0.009-0.021-0.022
		c-0.002-0.006,0.004-0.006,0.007-0.006c-0.005-0.015-0.021,0.02-0.035,0.019c0.004-0.017-0.032-0.068-0.054-0.06
		c0.027-0.062,0.132-0.113,0.136-0.196c0.026,0.031,0.048-0.05,0.067-0.072c-0.015-0.006-0.006-0.045-0.022-0.07
		c-0.049-0.011-0.071-0.006-0.088,0.033c-0.024-0.014-0.024,0.004-0.043,0.013c-0.017-0.02,0.028-0.047,0.055-0.058
		c0.025-0.07,0.029-0.093,0.045-0.163c-0.024,0.016-0.036,0.016-0.045,0.038c-0.036-0.052-0.067,0.041-0.129,0.032
		c-0.041,0.093-0.187,0.066-0.267,0.098c-0.012-0.017,0.009-0.015-0.012-0.021c-0.01,0.004-0.016,0.014-0.016,0.026
		c-0.039-0.045-0.127,0.023-0.158-0.005c-0.029,0.011-0.045,0.039-0.088,0.035c-0.015,0.024-0.031,0.041-0.033,0.062
		c-0.012-0.014-0.017-0.003-0.035-0.003c0.004-0.051,0.002-0.11,0.054-0.135c0.022,0.027,0.063,0.001,0.106,0.008
		c0.006-0.015,0.023-0.018,0.023-0.039C26.055,8.995,26.047,9,26.021,9.009c0-0.023-0.016-0.055,0.006-0.062
		c0.039,0.048,0.105-0.015,0.119-0.046c-0.002-0.022-0.015-0.008-0.021,0.006c-0.013-0.022,0.002-0.04-0.024-0.051
		c0.012-0.01,0.043-0.002,0.045-0.024c0.033,0.031,0.067,0.004,0.088-0.035c0.021,0.007,0.008,0.019,0.006,0.035
		c0.035-0.017,0.045-0.023,0.055-0.072c-0.027-0.004-0.049,0.025-0.102,0.014c-0.004,0.014,0.004,0.018,0.006,0.027
		c-0.018-0.006-0.072-0.012-0.078-0.013C26.1,8.76,26.133,8.754,26.113,8.72c-0.014,0.024-0.016,0.011-0.047,0.018
		c0.01,0.009,0.026,0.01,0.037,0.022C26.1,8.769,26.09,8.765,26.082,8.766c0.006-0.017-0.033-0.01-0.033-0.037
		c-0.015,0.016-0.013,0.004-0.029,0.012c0.002,0.052-0.037,0.057-0.063,0.078c0.028,0.064-0.144,0.055-0.205,0.075
		c-0.009,0.003-0.017,0.025-0.022,0.026c-0.006,0-0.015-0.023-0.021-0.022c-0.017,0.003-0.054,0.03-0.08,0.028
		c0.002,0.049-0.137,0.061-0.166,0.022c-0.013,0.014-0.037,0.014-0.063,0.01c0.004,0.023-0.013,0.025-0.032,0.024
		c0-0.001-0.001-0.001-0.001-0.002c0,0.001,0,0.001-0.001,0.003c-0.018,0-0.038-0.002-0.048,0.01
		c-0.031-0.106-0.229,0.004-0.277-0.095c-0.045,0.022-0.09-0.006-0.119-0.029c-0.029,0.014-0.04,0.004-0.063-0.012
		c-0.002,0.008-0.004,0.011-0.01,0.013c0.037,0.04,0.037,0.04,0.059,0.08c-0.059,0.034-0.155,0.021-0.229,0.004
		c0.011-0.003,0.003-0.025,0.017-0.026c0.002-0.019-0.028-0.015-0.049-0.017c-0.004,0.015,0.035,0.04-0.002,0.04
		c0.039,0.018,0.053,0.071,0.121,0.093c0,0.011-0.009,0.012-0.009,0.025c-0.047,0.015-0.084-0.036-0.121-0.027
		c0.009,0.021,0.007,0.051,0.039,0.051c-0.01,0.033,0.066,0.089,0.027,0.126c-0.041-0.038-0.063-0.026-0.086-0.081
		c-0.005,0.007-0.005,0.025-0.021,0.04c-0.01,0.001-0.012-0.007-0.012-0.016c-0.061,0.061-0.176-0.046-0.217,0.061
		c0.031-0.005,0.035,0.012,0.039,0.029c-0.027-0.004-0.029,0.023-0.064,0.01c-0.021,0.013,0.002,0.058-0.004,0.056
		c0.01,0.006,0.029-0.006,0.043-0.004c0.01,0.002,0.012,0.029,0.016,0.001c0.016,0.033,0.027,0.032,0.027,0.077
		c-0.006,0-0.002-0.009-0.004-0.014c-0.037,0.005-0.057,0.03-0.084,0.05c0.016,0.013,0.029,0.023,0.033,0.044
		c-0.003,0.015-0.01-0.011-0.021,0.005c-0.004,0.002-0.002-0.05-0.014-0.015c-0.004-0.002-0.006-0.008-0.014-0.008
		c0-0.015,0.004-0.025,0.016-0.026c0-0.009-0.014-0.009-0.014-0.002c-0.014-0.002,0.012-0.015-0.004-0.027
		c0.013,0.001,0.013,0.009,0.026,0.008c-0.004-0.006-0.008-0.011-0.006-0.021c-0.045-0.005-0.058,0.046-0.071,0.016
		c-0.002,0.015,0.004,0.022,0.02,0.022c0,0.012-0.01,0.013-0.01,0.027c-0.049-0.013-0.125-0.066-0.172-0.062
		c0.018,0.061,0.053,0.031,0.057,0.094c-0.027-0.016-0.047,0.057-0.074,0.036c-0.021,0.053,0.031,0.062,0.021,0.099
		c0.016-0.002,0.039-0.012,0.043,0.009c0.016-0.011,0.021-0.013,0.043-0.003c-0.002-0.006-0.008-0.008-0.006-0.016
		c0.006,0.004,0.012,0.001,0.014-0.005c-0.004,0.025,0.035,0.005,0.057,0.018c0,0.035-0.057,0.008-0.055,0.045
		c-0.012-0.004-0.004-0.027-0.025-0.022c-0.006,0.021,0.004,0.025,0.004,0.042c0.016-0.021,0.033,0.001,0.064-0.009
		c-0.032,0.022,0.018,0.018-0.018,0.047c-0.006-0.028-0.024-0.007-0.021-0.036c-0.021-0.002-0.026,0.009-0.017,0.02
		c-0.006-0.014-0.03-0.011-0.041-0.023c-0.01,0.004-0.014,0.013-0.016,0.027c-0.027-0.018-0.021,0.011-0.051,0.009
		c0.008-0.009,0.02-0.012,0.031-0.019c0-0.027-0.023,0.005-0.029-0.016c-0.014,0.027-0.025,0.027-0.049,0.011
		c-0.021-0.013,0.018,0.011,0.018,0.021c-0.012,0.004-0.033,0.006-0.049,0.011c0.002,0.004,0.006,0.011,0.004,0.021
		c-0.018-0.004-0.037-0.012-0.061-0.025c-0.024,0.01,0.008,0.035-0.012,0.041c0.029,0.013,0.029,0.012,0.055,0.03
		c0-0.015,0.017-0.014,0.025-0.024c0,0.005,0,0.034,0.024,0.015c0,0.012-0.006,0.017-0.015,0.02
		c0.011,0.005,0.027-0.003,0.052-0.011c-0.028,0.024-0.019,0.035-0.054,0.024c-0.004,0.012,0.007,0.013,0.007,0.021
		c-0.007,0-0.013-0.001-0.021-0.001c-0.017-0.004,0.008-0.009-0.009-0.021c-0.012,0.009-0.017,0.006-0.012-0.015
		c-0.019,0-0.005,0.039-0.029,0.032c0.006,0.012-0.005,0.016-0.008,0.024c-0.004,0.002-0.006,0.005-0.01,0.007
		c-0.005-0.008-0.006-0.019-0.022-0.019c0.018-0.009-0.006-0.018,0.01-0.02c-0.01-0.003-0.041-0.015-0.049-0.018
		c-0.014,0.007-0.008,0.036-0.018,0.048c0.028-0.039,0.024,0.028,0.038,0.019c-0.012,0.001-0.024,0.003-0.035,0.002
		c-0.017,0.028-0.03,0.023-0.06,0.023c0.004,0.007,0.004,0.011,0.002,0.017c0.051,0.014,0.051,0.013,0.092,0.035
		c-0.029,0.06-0.115,0.098-0.188,0.125c0.006-0.009-0.012-0.023,0-0.03c-0.012-0.016-0.033,0.003-0.051,0.012
		c0.002,0.015,0.051,0.015,0.02,0.036c0.043-0.008,0.086,0.03,0.154,0.011c0.008,0.01,0,0.018,0.008,0.028
		c-0.031,0.036-0.088,0.013-0.115,0.039c0.019,0.014,0.035,0.04,0.062,0.021c0.01,0.034,0.106,0.04,0.095,0.092
		c-0.054-0.009-0.066,0.012-0.119-0.022c0.004,0.01,0.014,0.023,0.01,0.043c-0.01,0.007-0.016,0.001-0.019-0.005
		c-0.017,0.083-0.173,0.054-0.147,0.167c0.023-0.021,0.039-0.01,0.051,0.003c-0.025,0.012-0.014,0.034-0.049,0.042
		c-0.012,0.025,0.035,0.047,0.027,0.048c0.012,0.003,0.021-0.018,0.034-0.025c0.009-0.002,0.026,0.017,0.013-0.008
		c0.033,0.022,0.041,0.015,0.069,0.05c-0.006,0.004-0.01-0.005-0.014-0.009c-0.029,0.025-0.029,0.056-0.039,0.086
		c0.013,0.003,0.023,0.008,0.035,0.014c-0.002,0.006-0.004,0.012-0.005,0.018c-0.007-0.007-0.023-0.031-0.016,0
		c-0.006,0.001-0.01-0.003-0.016,0c-0.01-0.011-0.01-0.023,0-0.03c-0.006-0.007-0.018,0.001-0.014,0.006
		c-0.015,0.005,0-0.021-0.021-0.02c0.009-0.008,0.015-0.001,0.026-0.008c-0.004-0.003-0.012-0.006-0.018-0.014
		c-0.039,0.019-0.021,0.069-0.051,0.05c0.008,0.015,0.016,0.018,0.029,0.01c0.008,0.009,0,0.015,0.008,0.025
		c-0.049,0.019-0.143,0.014-0.18,0.044c0.051,0.04,0.063-0.005,0.102,0.047c-0.031,0.001-0.006,0.071-0.041,0.07
		c0.014,0.054,0.061,0.034,0.074,0.07c0.012-0.011,0.025-0.033,0.039-0.015c0.006-0.012,0.016-0.016,0.026-0.02
		c-0.006,0.034-0.013,0.07-0.018,0.097c-0.008-0.001-0.013,0.014-0.024,0.003c0.002,0.029-0.006,0.035-0.037,0.035
		c-0.023,0,0.021,0,0.029,0.008c-0.01,0.009-0.025,0.023-0.037,0.036c0.006,0.003,0.014,0.006,0.016,0.014
		c-0.014,0.007-0.036,0.011-0.063,0.012c-0.013,0.02,0.028,0.026,0.017,0.04c0.003,0,0.003,0,0.006,0l-0.234,0.119
		c0,0-0.447,0.053-0.438-0.09c0.012-0.142,0.057-0.337,0.063-0.452C22.971,10.61,23.26,9.86,23.26,9.86s0.086-0.578-0.064-0.747
		c-0.147-0.167-0.436-0.487-0.436-0.487l-0.385-0.798c0,0-0.83-0.771-1.416-0.813c-0.588-0.042-1.754-0.026-2.271,0.406
		c-0.518,0.435-1.007,1.698-1.02,1.896c-0.015,0.199-0.231,1.182-0.231,1.182s-0.395,0.357-0.504,0.449
		c-0.11,0.092-0.642,1.123-0.642,1.123s-0.602,1.229-0.81,2.101c-0.211,0.869-0.851,1.793-0.483,2.428
		c0.247,0.428,0.672,0.849,1.553,0.91c0.88,0.063,1.064-0.038,1.064-0.038s0.017,0.999,0.454,1.487
		c0.323,0.36-0.131,1.06-0.131,1.06l-0.196,2.327c0,0-0.673,0.75-0.691,1.006c-0.018,0.254,0.226,0.529,0.226,0.529
		s-1.407,0.727-1.784,1.04c-0.375,0.317-0.813,0.656-1.077,0.638c-0.264-0.02-0.794-0.027-0.794-0.027l-0.663,0.21
		c0,0-0.567,0.101-0.586,0.354c-0.018,0.256,0.318,0.907,0.458,1.434c0.14,0.522,0.305,1.933,0.539,1.949
		c0.234,0.018,0.928,0.209,1.074,0.219c0.147,0.01,0.277-0.364,0.127-0.533c-0.15-0.166-0.295-0.818-0.295-0.818
		s0.114-0.762,0.121-0.877c0.008-0.113,0.321-0.773,0.321-0.773s0.71-0.436,0.857-0.424c0.147,0.011,1.221-0.172,1.472-0.381
		s0.981-0.529,0.981-0.529s0.872,0.258,1.036,0.359c0.262,0.02,0.518-0.435,0.518-0.435l0.384-0.642l0.119-0.42
		c0,0,0.144,0.039,0.204,0.229c0.061,0.189-0.082,0.552-0.082,0.552l0.038,0.287c0,0-0.072,0.993-0.125,1.731
		c-0.052,0.737-0.064,1.308-0.064,1.308s-0.272,0.735-0.414,0.854s-0.476,0.479-0.476,0.479s-0.291,0.536-0.168,0.674
		c0.124,0.137,1.17,0.143,1.17,0.143l1.364,0.295l0.909,0.064l0.588,0.034c0,0,0.451-0.56-0.721-0.644
		c-1.174-0.082-1.595-0.797-1.595-0.797l0.38-1.172l0.59-1.669l0.262-1.181c0,0,0.646,0.047,0.82,0.061
		c0.178,0.012,0.277-3.859,0.277-3.859l-0.141-2.162l-0.336-0.854c0,0-0.66-0.754-0.414-0.737c0.146,0.011,0.248-0.137,0.335-0.349
		c0.001,0,0.002,0,0.002,0c0.039,0.013,0.079,0.024,0.119,0.036c0.023,0.007,0.05,0.014,0.075,0.021
		c0.041,0.011,0.082,0.023,0.124,0.033c0.054,0.015,0.102,0.028,0.161,0.043c0.001-0.002,0.002-0.004,0.003-0.006
		c0.189,0.04,0.373,0.067,0.523,0.075c0.093,0.005,0.192,0.017,0.291,0.031c0.008,0.001,0.014,0.002,0.022,0.004
		c0,0,0.021,0.002,0.028,0.003c0.313,0.049,0.613,0.125,0.697,0.139c0.083,0.013,0.304,0.163,0.425,0.248
		c0.019-0.011,0.04-0.015,0.06-0.025c0.045,0.028,0.083,0.053,0.089,0.059c0.012,0.012,0.088-0.03,0.151,0.001
		c0.164-0.095,0.32-0.086,0.507-0.106c0.002-0.021,0.036-0.03,0.036-0.03l0.271,0.032c0.009,0.003,0.019,0.004,0.027,0.007
		c0.074,0.009,0.129,0.018,0.129,0.018c0.017-0.001,0.058,0.003,0.109,0.011c0.012,0,0.017-0.001,0.025-0.001l0.225,0.027
		c0.051-0.023,0.012-0.078,0.023-0.111c-0.094-0.018-0.225-0.035-0.33-0.047c0,0-0.422-0.087-0.459-0.099
		c-0.04-0.01-0.021-0.048-0.001-0.059C25.968,17.828,26.205,17.855,26.205,17.855z M27.113,9.901
		c0.014,0.013-0.004,0.012-0.002,0.034C27.1,9.93,27.082,9.93,27.078,9.919C27.093,9.921,27.093,9.898,27.113,9.901z M27.061,9.842
		c0.01,0.036-0.002,0.04-0.019,0.067c0.008,0.001,0.006,0.009-0.008,0.007C27.045,9.884,27.025,9.853,27.061,9.842z M26.947,10.02
		c-0.004,0.048,0.023,0.071,0.035,0.106c0.002-0.011,0.008-0.017,0.016-0.02c-0.027,0.041,0,0.097-0.023,0.123
		c0-0.006-0.006-0.008-0.012-0.007C27.002,10.152,26.887,10.084,26.947,10.02z M26.625,8.962c0.016,0.009-0.016,0.019,0.004,0.029
		c0.01-0.012,0.01-0.018,0.002-0.029c0.006-0.003,0.029-0.016,0.029,0.002c-0.01,0.01-0.021,0.017-0.031,0.027
		c-0.007,0.007-0.011,0.018-0.021,0.019c0.002-0.027-0.006-0.004-0.021-0.009C26.588,8.976,26.615,8.98,26.625,8.962z M26.502,9.36
		c0.037,0.001,0.025-0.047,0.055-0.051c0.004,0.073-0.045,0.128-0.078,0.174C26.504,9.449,26.51,9.408,26.502,9.36z M26.445,9.072
		C26.443,9.127,26.42,9.159,26.4,9.193C26.41,9.174,26.414,9.091,26.445,9.072z M26.385,9.407c0.006,0.029-0.002,0.029-0.004,0.062
		C26.35,9.466,26.361,9.409,26.385,9.407z M26.279,9.405c0.025,0.021,0.016,0.031,0.031,0.052c0.01-0.021,0.004-0.022-0.004-0.042
		c0.01,0.001,0.018-0.002,0.021-0.006c0.01,0.023,0,0.03-0.003,0.055c-0.019-0.001-0.037-0.002-0.058-0.004
		C26.26,9.441,26.262,9.418,26.279,9.405z M26.234,9.341c0.006,0.02-0.004,0.046-0.025,0.054
		C26.213,9.371,26.203,9.333,26.234,9.341z M26.2,9.214c0-0.008-0.009-0.004-0.015-0.001c-0.002-0.007-0.003-0.014-0.006-0.02
		C26.185,9.197,26.225,9.204,26.2,9.214z M26.18,9.192c-0.003-0.006-0.008-0.011-0.006-0.021C26.201,9.172,26.177,9.177,26.18,9.192
		z M26.141,9.154c-0.002,0.023,0.049,0.036,0.024,0.057c-0.006-0.019-0.049,0.039-0.095,0.007C26.078,9.18,26.102,9.16,26.141,9.154
		z M26.072,9.192c-0.033,0.033-0.064-0.004-0.115,0.012c-0.006-0.01-0.006-0.025-0.002-0.042C26.02,9.146,26.039,9.199,26.072,9.192
		z M25.932,8.981c0.012,0.012,0.047-0.016,0.071-0.014c0.006,0.003,0.017,0.033,0,0.034c0-0.028-0.006-0.002-0.017-0.001
		c0.008-0.015-0.021-0.029-0.02-0.016c0.004,0.004,0.027,0.023,0.004,0.028c-0.014-0.038-0.053,0.014-0.068-0.005
		C25.925,9.016,25.91,8.977,25.932,8.981z M25.816,9.077c-0.008,0-0.006,0.006,0,0.012c-0.008,0.003-0.016,0.007-0.021,0.012
		c-0.027-0.001-0.051-0.006-0.049-0.03C25.771,9.067,25.796,9.066,25.816,9.077z M25.701,8.992c0.008,0.036-0.033,0.031-0.061,0.051
		C25.65,9.014,25.682,9.007,25.701,8.992z M25.554,9.195c0.002-0.002,0.005-0.003,0.007-0.006c0.029,0.011,0.031,0.008,0.035-0.01
		c-0.002,0.01,0.02,0.004,0.022,0.015c-0.028,0.005-0.028,0.04-0.062,0.037c0.002-0.004-0.002-0.005-0.003-0.007
		C25.554,9.213,25.556,9.207,25.554,9.195z M25.465,9.003c-0.002,0.026,0.012-0.001,0.021,0.015
		c0.005,0.019-0.016,0.013-0.016,0.026c-0.022,0.004-0.019-0.012-0.037-0.01C25.439,9.02,25.441,9,25.465,9.003z M25.418,9.132
		c0.003-0.005,0.005-0.013,0.018-0.008c0,0.021-0.018,0.02-0.018,0.041c0.011,0.001,0.012,0.011,0.021,0.018
		c0,0.001-0.002,0.001-0.002,0.002c-0.014,0-0.019,0.004-0.021,0.009c-0.003-0.01-0.004-0.024-0.006-0.035
		c0.003-0.006,0.006-0.014,0.009-0.019C25.419,9.137,25.418,9.136,25.418,9.132z M25.104,9.185c0.012,0.015,0.023,0.021,0.01,0.042
		c-0.033-0.003-0.055,0.01-0.072,0.028c-0.027,0-0.045-0.008-0.055-0.024c-0.012,0.017-0.021-0.014-0.029,0.006
		c-0.001,0.009,0.049,0.007,0.02,0.021c-0.021-0.025-0.061,0.003-0.055-0.046c0.033-0.008,0.051,0.018,0.075,0.02
		c0.032-0.035,0.012-0.052,0.049-0.065c-0.004,0.015,0,0.025,0.013,0.028C25.089,9.184,25.085,9.201,25.104,9.185z M24.951,9.056
		c-0.002,0-0.003,0-0.004,0c0.008-0.028,0.059-0.019,0.08-0.016C25.007,9.049,24.977,9.048,24.951,9.056
		c0.001-0.001,0.001-0.001,0.001-0.001C24.951,9.055,24.951,9.055,24.951,9.056z M25.047,8.958
		c-0.014,0.004-0.039,0.021-0.041-0.002C25.018,8.959,25.041,8.938,25.047,8.958z M24.949,8.945c0.002,0.016,0.02,0.017,0.006,0.001
		c0.009-0.002,0.016-0.008,0.029-0.005c-0.016,0.02,0.027,0.023,0.006,0.028c-0.008,0-0.008-0.007-0.014-0.008
		c-0.016,0.008-0.031,0.003-0.035-0.002C24.955,8.957,24.936,8.946,24.949,8.945z M24.926,9.055c-0.004-0.003-0.068,0.01-0.055-0.02
		C24.889,9.042,24.936,9.031,24.926,9.055z M24.87,9.194c0.015,0.003,0.021-0.005,0.03-0.012c0.002,0,0.005,0,0.006,0.001
		c-0.009,0.013-0.022,0.02-0.039,0.023C24.868,9.203,24.873,9.199,24.87,9.194z M24.72,9.245c-0.004,0.009-0.008,0.018-0.012,0.027
		c-0.017,0.002-0.037,0.007-0.041-0.003C24.683,9.25,24.702,9.25,24.72,9.245z M24.629,9.314c-0.012,0.009-0.031,0.051-0.043,0.033
		C24.598,9.338,24.613,9.295,24.629,9.314z M24.416,9.397c0.053,0.004,0.043,0.032,0.078,0.019c0,0.008,0,0.014,0,0.021
		c-0.045-0.008-0.061-0.025-0.078-0.026C24.424,9.41,24.422,9.404,24.416,9.397z M24.406,9.696c0.005,0.009,0.007,0.006,0.009,0.005
		c-0.004,0.005-0.008,0.009-0.012,0.014C24.404,9.709,24.397,9.701,24.406,9.696z M24.395,9.637
		c-0.014,0.003-0.013,0.008-0.012,0.014c-0.001,0-0.002,0.001-0.002,0.001C24.387,9.648,24.382,9.636,24.395,9.637z M24.195,9.754
		c0.006,0.007,0.015,0.009,0.029,0.009c-0.002-0.047,0.043-0.044,0.067-0.064c0.009,0.005,0.012,0.015,0.018,0.023
		c-0.014,0.014-0.039,0.026-0.042,0.048c-0.025-0.022-0.054-0.016-0.082-0.002C24.191,9.766,24.197,9.765,24.195,9.754z
		 M24.15,9.765c0.012,0,0.015,0.006,0.018,0.013c-0.006,0.003-0.013,0.007-0.02,0.011c-0.003-0.006,0.001-0.013-0.006-0.018
		C24.15,9.773,24.15,9.77,24.15,9.765z M24.15,10.136c0.008-0.046-0.021-0.049,0.006-0.079c0.005,0.013,0.013,0.021,0.023,0.017
		c0.019-0.025,0.026-0.01,0.03-0.031c0.008,0.002,0.009,0.009,0.015,0.012c-0.009,0.026-0.019,0.052-0.025,0.077
		c0,0-0.001,0.001-0.001,0.001c-0.022,0.015-0.041,0.016-0.062,0.01c0.002,0.018-0.023,0-0.02,0.019
		c0.004,0.011,0.047-0.019,0.029,0.008c-0.031-0.012-0.047,0.036-0.07-0.009C24.1,10.137,24.127,10.151,24.15,10.136z M24.064,9.962
		c-0.014,0.019-0.041,0.035-0.06,0.055C23.996,9.991,24.044,9.972,24.064,9.962z M24.026,9.885c0.002,0.001,0.006-0.002,0.006,0.002
		c-0.01,0.013-0.021,0.035-0.034,0.017C24.007,9.901,24.016,9.887,24.026,9.885z M24.045,10.146c0,0.025-0.004,0.049-0.031,0.066
		c-0.006-0.011-0.012-0.017-0.02-0.021C24.021,10.169,24.029,10.147,24.045,10.146z M23.978,9.906
		c0.007,0.012,0.028,0.003,0.015,0.017c0,0,0,0-0.001,0C23.984,9.916,23.98,9.91,23.978,9.906
		C23.977,9.906,23.977,9.906,23.978,9.906z M23.988,10.028c-0.006,0.001-0.053,0.046-0.057,0.014
		C23.951,10.039,23.984,10.004,23.988,10.028z M23.947,10.263c0.016,0.024-0.043,0.05,0.006,0.052
		c-0.027,0.006-0.041,0.039-0.057,0.03C23.902,10.305,23.918,10.287,23.947,10.263z M23.891,10.405
		c-0.002,0.004-0.002,0.012-0.003,0.019c-0.004,0.002-0.009,0.002-0.013,0.005C23.875,10.414,23.877,10.4,23.891,10.405z
		 M23.762,10.586C23.763,10.585,23.763,10.586,23.762,10.586C23.763,10.586,23.763,10.586,23.762,10.586L23.762,10.586z
		 M23.68,10.89c0.008-0.004,0.012-0.008,0.01-0.013c-0.001,0.006-0.002,0.011-0.003,0.017C23.684,10.893,23.682,10.893,23.68,10.89z
		 M23.664,11.022c-0.001,0.002,0,0.001-0.001,0.003c-0.002,0.003-0.001,0.005-0.005,0.008
		C23.659,11.029,23.662,11.026,23.664,11.022z M23.633,11.112c0.001,0.001,0.003,0.002,0.004,0.004l-0.005,0.002
		C23.633,11.116,23.633,11.114,23.633,11.112z M24.686,17.385c-0.1-0.033-0.198-0.072-0.306-0.125l0.494,0.158
		C24.813,17.412,24.746,17.399,24.686,17.385z"/>
	<path fill="'.$fill.'" d="M26.635,18c-0.012,0.005-0.021,0.011-0.023,0.02c0.017,0.003,0.041,0.006,0.055,0.009
		C26.693,18.037,26.649,18.013,26.635,18z"/>
	<path fill="'.$fill.'" d="M26.994,9.677c-0.002,0.007,0.004,0.007,0.008,0.009c-0.001-0.007,0.01-0.014,0-0.022
		C27.01,9.673,27.008,9.679,26.994,9.677z"/>
	<polygon points="27.002,9.686 27.002,9.699 27.008,9.693 	"/>
	<path fill="'.$fill.'" d="M23.07,10.498l-0.063,0.205c0.002-0.008,0.01-0.009,0.014-0.017C23.018,10.631,23.045,10.549,23.07,10.498z"/>
</g>
</svg>';

  }

  return '<i class="icon_svg">'.$out.'</i>'; 
}