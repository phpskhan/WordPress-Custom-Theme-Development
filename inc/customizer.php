<?php

function ksabih_cpw1_customizer1($wp_customize) {

	$wp_customize->add_panel('ksabih_cpw1_customizer1_panel', 
		array(
			'title'			=>	'Theme Options',
			'priority'		=>	20,
	));


	$wp_customize->add_section( 'ksabih_cpw1_customizer1_section1' , array(
		'title'      => __( 'Theme Settings', 'ksabih_cpw1' ),
		'description'	=>	'Primary settings for your theme',
		'priority'   => 30,
		'panel'			=>	'ksabih_cpw1_customizer1_panel',
	));


	$wp_customize->add_setting( 'ksabih_cpw1_customizer1_custom_color' , array(
		'default'   => '#E7094C',
		'transport' => 'refresh',
	));


	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ksabih_cpw1_control_color', array(
			'type' => 'color',
			'label' => __( 'Primary Color', 'ksabih_cpw1' ),
			'section' 	=> 'ksabih_cpw1_customizer1_section1',
			'settings' 	=> 'ksabih_cpw1_customizer1_custom_color',

	)));


	$wp_customize->add_setting( 'ksabih_cpw1_customizer1_custom_image' , array(
		'transport' => 'refresh',
	));


	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'ksabih_cpw1_control_image', array(
			'type' => 'image',
			'label' => __( 'Primary Image', 'ksabih_cpw1' ),
			'section' 	=> 'ksabih_cpw1_customizer1_section1',
			'settings' 	=> 'ksabih_cpw1_customizer1_custom_image',
			'mime_type'	=>	'image',

	)));


	$wp_customize->add_section( 'ksabih_cpw1_customizer1_section2' , array(
		'title'      => __( 'Copyright Text', 'ksabih_cpw1' ),
		'description'	=>	'Copyright Text for your Website',
		'priority'   => 30,
		'panel'			=>	'ksabih_cpw1_customizer1_panel',
	));


	$wp_customize->add_setting( 'ksabih_cpw1_copyright_text' , array(
		'default' => '© Learning Management System 2023 All right reserved.<br> Custom WordPress Website by KSabih.com',
		'transport' => 'refresh',
	));


	$wp_customize->add_control( 'ksabih_cpw1_copyright_text_box', array(
			'title' => 'Copyright Text Area',
			'type' => 'textarea',
			'input_attrs'	=>	[
				'class'	=>	'form-control',
			],
			'section' 	=> 'ksabih_cpw1_customizer1_section2',
			'settings' 	=> 'ksabih_cpw1_copyright_text',

	));


	$wp_customize->add_section( 'ksabih_cpw1_customizer1_section3' , array(
		'title'      => __( 'Social Media', 'ksabih_cpw1' ),
		'description'	=>	'Social Media Links for your Website',
		'priority'   => 30,
		'panel'			=>	'ksabih_cpw1_customizer1_panel',
	));


	$wp_customize->add_setting( 'ksabih_cpw1_facebook' , array(
		'default' => '#',
		'transport' => 'refresh',
	));


	$wp_customize->add_control( 'ksabih_cpw1_control_facebook', array(
			'label' => 'Facebook URL',
			'type' => 'text',
			'input_attrs'	=>	[
				'class'	=>	'form-control',
			],
			'section' 	=> 'ksabih_cpw1_customizer1_section3',
			'settings' 	=> 'ksabih_cpw1_facebook',

	));


	$wp_customize->add_setting( 'ksabih_cpw1_instagram' , array(
		'default' => '#',
		'transport' => 'refresh',
	));


	$wp_customize->add_control( 'ksabih_cpw1_control_instagram', array(
			'label' => 'Instagram URL',
			'type' => 'text',
			'input_attrs'	=>	[
				'class'	=>	'form-control',
			],
			'section' 	=> 'ksabih_cpw1_customizer1_section3',
			'settings' 	=> 'ksabih_cpw1_instagram',

	));


	$wp_customize->add_setting( 'ksabih_cpw1_twitter' , array(
		'default' => '#',
		'transport' => 'refresh',
	));


	$wp_customize->add_control( 'ksabih_cpw1_control_twitter', array(
			'label' => 'Twitter URL',
			'type' => 'text',
			'input_attrs'	=>	[
				'class'	=>	'form-control',
			],
			'section' 	=> 'ksabih_cpw1_customizer1_section3',
			'settings' 	=> 'ksabih_cpw1_twitter',

	));


	$wp_customize->add_setting( 'ksabih_cpw1_linkedin' , array(
		'default' => '#',
		'transport' => 'refresh',
	));


	$wp_customize->add_control( 'ksabih_cpw1_control_linkedin', array(
			'label' => 'LinkedIn URL',
			'type' => 'text',
			'input_attrs'	=>	[
				'class'	=>	'form-control',
			],
			'section' 	=> 'ksabih_cpw1_customizer1_section3',
			'settings' 	=> 'ksabih_cpw1_linkedin',

	));


	$wp_customize->add_setting( 'ksabih_cpw1_pinterest' , array(
		'default' => '#',
		'transport' => 'refresh',
	));


	$wp_customize->add_control( 'ksabih_cpw1_control_pinterest', array(
			'label' => __( 'Pinterest URL', 'ksabih_cpw1' ),
			'type' => 'text',
			'input_attrs'	=>	[
				'class'	=>	'form-control',
			],
			'section' 	=> 'ksabih_cpw1_customizer1_section3',
			'settings' 	=> 'ksabih_cpw1_pinterest',

	));

}


add_action( 'customize_register', 'ksabih_cpw1_customizer1' );



function ksabih_cpw1_custom_styling() {

	// $bg_color = "get_theme_mod('ksabih_cpw1_customizer1_custom_color', '#262626') !important;";

	echo "
		<style  type='text/css'>
			.flex-caption,
			.aboutUs {
				background-color: " . get_theme_mod('ksabih_cpw1_customizer1_custom_color', '#262626') . " !important;
			}

			.aboutUs .container {
				background-color: " . get_theme_mod('ksabih_cpw1_customizer1_custom_color', '#262626') . " !important;
				background: " . get_theme_mod('ksabih_cpw1_customizer1_custom_color', '#262626') . " !important;
			}

			.site-navigation, footer {
				background-color: " . get_theme_mod('ksabih_cpw1_customizer1_custom_color', '#262626') . " !important;
			}

			.fa, h2, .wp-block-heading, .year, .btn-theme:hover,
			.features .media.service-box .pull-left > i {
				color: " . get_theme_mod('ksabih_cpw1_customizer1_custom_color', '#262626') . " !important;
			}

			.custom-bg {
				background-image: url('" . get_theme_mod('ksabih_cpw1_customizer1_custom_image') . "') !important;
				background-position: center center;
				background-repeat: no-repeat;
				background-size: cover;
				opacity: 85%;
			}
		</style>
	";
}

add_action('wp_head', 'ksabih_cpw1_custom_styling');