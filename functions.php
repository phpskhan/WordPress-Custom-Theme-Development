<?php

/*
* This template is functions.php file
*/

function ksabih_cwp1_addcss() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css');
	wp_enqueue_style('fancybox', get_template_directory_uri() .'/css/fancybox/jquery.fancybox.css');
	wp_enqueue_style('jcarousel', get_template_directory_uri() .'/css/jcarousel.css');
	wp_enqueue_style('flexslider', get_template_directory_uri() .'/css/flexslider.css');
	wp_enqueue_style('owl-carousel', get_template_directory_uri() .'/js/owl-carousel/owl.carousel.css');
	wp_enqueue_style('style', get_template_directory_uri() .'/css/style.css');
	

	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js' );
	wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js' );
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' );
	wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js' );
	wp_enqueue_script('fancybox-media', get_template_directory_uri() . '/js/jquery.fancybox-media.js' );
	wp_enqueue_script('quicksand', get_template_directory_uri() . '/js/portfolio/jquery.quicksand.js' );
	wp_enqueue_script('setting', get_template_directory_uri() . '/js/portfolio/setting.js' );
	wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js' );
	wp_enqueue_script('animate', get_template_directory_uri() . '/js/animate.js' );
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js' );
	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.js' );

}
add_action('wp_enqueue_scripts', 'ksabih_cwp1_addcss');