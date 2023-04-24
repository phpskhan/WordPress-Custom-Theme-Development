<?php

function ksabih_cwp1_register_sidebars() {

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

add_action( 'widgets_init', 'ksabih_cwp1_register_sidebars' );


function ksabih_cwp1_add_theme_support() {


	add_theme_support( 'title-tag' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'woocommerce' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'widget-customizer' );

	add_theme_support( 'automatic-feed-links' );



	$args = array (
		'default-image' => get_template_directory_uri().'/assets/img/lms_banner.png',
		'default-text-color' => '000',
		'width' => 1920,
		'height' => 600,
		'flex-width' => true,
		'flex-height' => true,

	);

	add_theme_support( 'custom-header', $args );



	add_theme_support( 'html5', array( 
		'comment-list', 
		'comment-form', 
		'search-form', 
		'gallery', 
		'caption', 
		'style', 
		'script' ) );

}


add_action( 'init', 'ksabih_cwp1_add_theme_support' );