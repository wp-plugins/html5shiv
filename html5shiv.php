<?php
/*
Plugin Name: HTML5shiv
Plugin URI: http://www.ramoonus.nl/wordpress/html5shiv/
Description: The latest HTML5 JavaScript shiv for IE to recognise and style the HTML5 elements. 
Version: 3.0
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/

function rw_html5shiv() {
		wp_deregister_script('html5shiv'); // deregister
		wp_enqueue_script('html5shiv', plugins_url('/js/html5shiv.js', __FILE__), false, '3');

   		if(!is_admin()) { // don`t use in dashboard
			global $is_IE;  // For Internet Explorer
			if($is_IE) {
				wp_enqueue_script('html5shiv');
      		}
    	}
}

// if WP Resume is NOT found
if(!function_exists("wp_resume_header") ) {
	add_action('wp_print_scripts', 'rw_html5shiv');
}
?>