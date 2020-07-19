<?php
 

/*

	- Custom font used, see https://transfonter.org/ to transform any font file into web font-family one

	- Use priority 0 to put code on very top position (load first of any other css used)
	- Notice the "body.using-theme-fonts" definition
	- Add body class
	- You could include here any kind of code in fact, but keep for fonts.

 */

add_action('wp_head', 'wpbc_child_wp_head__fonts', 0); 

add_filter('wpbc/body/class', 'wpbc_child_body_class__fonts' , 0, 1);

function wpbc_child_body_class__fonts($body_class){
	$body_class .= ' using-theme-fonts';
	return $body_class;
}

function wpbc_child_wp_head__fonts() {
	$theme_uri = CHILD_THEME_URI.'/fonts/theme/';
 	echo "<style>

 		@font-face {
		    font-family: 'Arimo';
		    src: url('".$theme_uri."subset-Arimo-Regular.eot');
		    src: url('".$theme_uri."subset-Arimo-Regular.eot?#iefix') format('embedded-opentype'),
		        url('".$theme_uri."subset-Arimo-Regular.woff2') format('woff2'),
		        url('".$theme_uri."subset-Arimo-Regular.woff') format('woff'),
		        url('".$theme_uri."subset-Arimo-Regular.ttf') format('truetype'),
		        url('".$theme_uri."subset-Arimo-Regular.svg#Arimo-Regular') format('svg');
		    font-weight: normal;
		    font-style: normal;
		    font-display: swap;
		}

		@font-face {
		    font-family: 'Arimo';
		    src: url('".$theme_uri."subset-Arimo-Bold.eot');
		    src: url('".$theme_uri."subset-Arimo-Bold.eot?#iefix') format('embedded-opentype'),
		        url('".$theme_uri."subset-Arimo-Bold.woff2') format('woff2'),
		        url('".$theme_uri."subset-Arimo-Bold.woff') format('woff'),
		        url('".$theme_uri."subset-Arimo-Bold.ttf') format('truetype'),
		        url('".$theme_uri."subset-Arimo-Bold.svg#Arimo-Bold') format('svg');
		    font-weight: bold;
		    font-style: normal;
		    font-display: swap;
		}

		@font-face {
		    font-family: 'Arimo';
		    src: url('".$theme_uri."subset-Arimo-BoldItalic.eot');
		    src: url('".$theme_uri."subset-Arimo-BoldItalic.eot?#iefix') format('embedded-opentype'),
		        url('".$theme_uri."subset-Arimo-BoldItalic.woff2') format('woff2'),
		        url('".$theme_uri."subset-Arimo-BoldItalic.woff') format('woff'),
		        url('".$theme_uri."subset-Arimo-BoldItalic.ttf') format('truetype'),
		        url('".$theme_uri."subset-Arimo-BoldItalic.svg#Arimo-BoldItalic') format('svg');
		    font-weight: bold;
		    font-style: italic;
		    font-display: swap;
		}

		@font-face {
		    font-family: 'Arimo';
		    src: url('".$theme_uri."subset-Arimo-Italic.eot');
		    src: url('".$theme_uri."subset-Arimo-Italic.eot?#iefix') format('embedded-opentype'),
		        url('".$theme_uri."subset-Arimo-Italic.woff2') format('woff2'),
		        url('".$theme_uri."subset-Arimo-Italic.woff') format('woff'),
		        url('".$theme_uri."subset-Arimo-Italic.ttf') format('truetype'),
		        url('".$theme_uri."subset-Arimo-Italic.svg#Arimo-Italic') format('svg');
		    font-weight: normal;
		    font-style: italic;
		    font-display: swap;
		}

		body.using-theme-fonts{
			font-family: 'Arimo', helvetica, arial, sans-serif; 
			font-weight: normal;
		  font-style: normal;
		} 

		</style>";
}  

add_filter('BC_enqueue_scripts__fonts', 'bc_child_enqueue_custom_font_awesome'); 
function bc_child_enqueue_custom_font_awesome($fonts){ 
	$fonts['fontawesome-all'] = array( 
		'src'=>'css/fontawesome/all.min.css'
	); 
	return $fonts; 
}