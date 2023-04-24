<?php

function ksabih_cwp1_register_custom_post_type1() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'ksabih_cwp01' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'ksabih_cwp01' ),
		'menu_name'             => __( 'Services', 'ksabih_cwp01' ),
		'name_admin_bar'        => __( 'Services', 'ksabih_cwp01' ),
		'archives'              => __( 'Item Archives', 'ksabih_cwp01' ),
		'attributes'            => __( 'Item Attributes', 'ksabih_cwp01' ),
		'parent_item_colon'     => __( 'Parent Item:', 'ksabih_cwp01' ),
		'all_items'             => __( 'All Items', 'ksabih_cwp01' ),
		'add_new_item'          => __( 'Add New Item', 'ksabih_cwp01' ),
		'add_new'               => __( 'Add New', 'ksabih_cwp01' ),
		'new_item'              => __( 'New Item', 'ksabih_cwp01' ),
		'edit_item'             => __( 'Edit Item', 'ksabih_cwp01' ),
		'update_item'           => __( 'Update Item', 'ksabih_cwp01' ),
		'view_item'             => __( 'View Item', 'ksabih_cwp01' ),
		'view_items'            => __( 'View Items', 'ksabih_cwp01' ),
		'search_items'          => __( 'Search Item', 'ksabih_cwp01' ),
		'not_found'             => __( 'Not found', 'ksabih_cwp01' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'ksabih_cwp01' ),
		'featured_image'        => __( 'Featured Image', 'ksabih_cwp01' ),
		'set_featured_image'    => __( 'Set featured image', 'ksabih_cwp01' ),
		'remove_featured_image' => __( 'Remove featured image', 'ksabih_cwp01' ),
		'use_featured_image'    => __( 'Use as featured image', 'ksabih_cwp01' ),
		'insert_into_item'      => __( 'Insert into item', 'ksabih_cwp01' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'ksabih_cwp01' ),
		'items_list'            => __( 'Items list', 'ksabih_cwp01' ),
		'items_list_navigation' => __( 'Items list navigation', 'ksabih_cwp01' ),
		'filter_items_list'     => __( 'Filter items list', 'ksabih_cwp01' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'ksabih_cwp01' ),
		'description'           => __( 'Services Post Type', 'ksabih_cwp01' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'services', $args );

}

add_action( 'init', 'ksabih_cwp1_register_custom_post_type1', 0 );