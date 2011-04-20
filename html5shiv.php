<?php
/*
Plugin Name: HTML5shiv
Plugin URI: http://www.ramoonus.nl
Description: The latest HTML5 JavaScript shiv for IE to recognise and style the HTML5 elements. 
Version: 1.0.0
Author: Ramoonus
Author URI: http://www.ramoonus.nl/wordpress/html5shiv/
*/
// create function
function rw_html5shiv() {
	echo '
	<!--[if lt IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
	'; 
} 
// now load this stuff in the header
add_action('wp_head', 'rw_html5shiv');
?>