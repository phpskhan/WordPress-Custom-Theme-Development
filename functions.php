<?php

/*
* This template is functions.php file
*/


add_theme_support( 'custom-logo' );

add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'widget-customizer' );

add_image_size( 'home-featured', 640, 400, array('center', 'center') );


register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'ksabih_cwp1' ),
    'secondary' => __( 'Secondary Menu', 'ksabih_cwp1' )
) );




function ksabih_cwp1_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'ksabih_cwp1' ),
		'id'            => 'main-sidebar',
		'description'	=> 'Main Sidebar',
		'before_widget' => '<h3 id="%1$s" class="widget %2$s">',
		'after_widget'  => '</h3>',
		'before_title'  => '<h3 class="Footer-Sidebar-3">',
		'after_title'   => '</h3>',

	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'ksabih_cwp1' ),
		'id'            => 'footer-1',
		'description'	=> 'Footer Sidebar 1',
		'before_widget' => '<p id="%1$s" class="widget %2$s">',
		'after_widget'  => '</p>',
		'before_title'  => '<h3 class="Footer-Sidebar-3">',
		'after_title'   => '</h3>',

	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'ksabih_cwp1' ),
		'id'            => 'footer-2',
		'description'	=> 'Footer Sidebar 2',
		'before_widget' => '<p id="%1$s" class="widget %2$s">',
		'after_widget'  => '</p>',
		'before_title'  => '<h3 class="Footer-Sidebar-3">',
		'after_title'   => '</h3>',

	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'ksabih_cwp1' ),
		'id'            => 'footer-3',
		'description'	=> 'Footer Sidebar 3',
		'before_widget' => '<p id="%1$s" class="widget %2$s">',
		'after_widget'  => '</p>',
		'before_title'  => '<h3 class="Footer-Sidebar-3">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 4', 'ksabih_cwp1' ),
		'id'            => 'footer-4',
		'description'	=> 'Footer Sidebar 4',
		'before_widget' => '<p id="%1$s" class="widget %2$s">',
		'after_widget'  => '</p>',
		'before_title'  => '<h3 class="Footer-Sidebar-4">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'ksabih_cwp1_widgets_init' );




function ksabih_cwp1_addcss() {

    // wp_enqueue_style('style', get_stylesheet_uri());


	wp_enqueue_style('bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css');
	wp_enqueue_style('fancybox', get_template_directory_uri() .'/css/fancybox/jquery.fancybox.css');
	wp_enqueue_style('jcarousel', get_template_directory_uri() .'/css/jcarousel.css');
	wp_enqueue_style('flexslider', get_template_directory_uri() .'/css/flexslider.css');
	wp_enqueue_style('owl-carousel', get_template_directory_uri() .'/css/owl-carousel/owl.carousel.css');
	wp_enqueue_style('style', get_template_directory_uri() .'/css/style.css');
	

	// wp_enqueue_script('bootstrap-4.6.2-dist', get_template_directory_uri() .'/assets/bootstrap-4.6.2-dist/js/bootstrap.min.js');
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