<?php  

/*

	Bootclean child custom functions 

*/

/*
Enable Theme Settings Page
*/

/* Enable theme_settings addon */
add_filter('wpbc/filter/theme_settings/installed', '__return_true');
/* Add the settings you need */
include('functions/theme-options-theme-settings.php'); 

include('functions/theme-customs.php'); 

/* general options/settings */
include('functions/theme-textdomain.php');
include('functions/theme-login.php'); 
include('functions/theme-under-construction.php'); 
include('functions/theme-options.php');
include('functions/theme-options-page-settings.php');
include('functions/theme-scripts.php');
include('functions/theme-fonts.php');
include('functions/theme-widgets.php');

include('functions/theme-settings-loader.php');

/* core */
include('functions/core-theme_support.php'); 

/* front-end layout */ 
include('functions/layout.php');
include('functions/layout-navmenus.php');  

include('functions/template-landing.php');  