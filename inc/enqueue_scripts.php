<?php

function ksabih_cwp1_enque_scripts() {

    // wp_enqueue_style('style', get_stylesheet_uri());
	// wp_enqueue_style('style', get_template_directory_uri() .'/css/style.css');

	if (is_rtl()) {

		wp_enqueue_style('bootstrap-rtl', 'https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css');

	}else {

		wp_enqueue_style('bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css');

	}

	wp_enqueue_style('fancybox', get_template_directory_uri() .'/css/fancybox/jquery.fancybox.css');
	wp_enqueue_style('jcarousel', get_template_directory_uri() .'/css/jcarousel.css');
	wp_enqueue_style('flexslider', get_template_directory_uri() .'/css/flexslider.css');
	wp_enqueue_style('owl-carousel', get_template_directory_uri() .'/css/owl-carousel/owl.carousel.css');
	wp_enqueue_style('style', get_template_directory_uri() .'/css/style.css');
	


	// wp_enqueue_script('bootstrap-4.6.2-dist', get_template_directory_uri() .'/assets/bootstrap-4.6.2-dist/js/bootstrap.min.js');


	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', 'false' );
	wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', 'false', true );
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'false', true );
	wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', 'false', true );
	wp_enqueue_script('fancybox-media', get_template_directory_uri() . '/js/jquery.fancybox-media.js', 'false', true );
	wp_enqueue_script('quicksand', get_template_directory_uri() . '/js/portfolio/jquery.quicksand.js', 'false', true );
	wp_enqueue_script('setting', get_template_directory_uri() . '/js/portfolio/setting.js', 'false', true );
	wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', 'false', true );
	wp_enqueue_script('animate', get_template_directory_uri() . '/js/animate.js', 'false', true );
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', 'false', true );
	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.js', 'false', true );

}

add_action('wp_enqueue_scripts', 'ksabih_cwp1_enque_scripts');