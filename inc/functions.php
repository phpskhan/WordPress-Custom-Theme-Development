<?php

/*
* This template is functions.php file
*/

function ksabih_cwp1_addcss() {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/testing.js' );

}
add_action('wp_enqueue_scripts', 'ksabih_cwp1_addcss');