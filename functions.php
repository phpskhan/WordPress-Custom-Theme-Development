<?php

/*
* This template is functions.php file
*/



function ksabih_cwp1_register_nav_menu() {

	register_nav_menus( array(
	    'primary'   => __( 'Primary Menu', 'ksabih_cwp1' ),
	    'secondary' => __( 'Secondary Menu', 'ksabih_cwp1' )
	) );

}


add_action('register_nav_menus', 'ksabih_cwp1_register_nav_menu');




function wpdocs_custom_excerpt_length( $length ) {
	return 20;
}

add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );




function ksabih_cwp1_custom_image_sizes() {

	add_image_size( 'home-featured', 1920, 600, array('center', 'center') );

	add_image_size( 'post-featured', 300, 150, array('center', 'center') );

}

add_action( 'init', 'ksabih_cwp1_custom_image_sizes' );

include(get_template_directory() . "/inc/customizer.php");

include(get_template_directory() . "/inc/theme_support.php");

include(get_template_directory() . "/inc/services.php");

include(get_template_directory() . "/inc/enqueue_scripts.php");