<?php
// Register Custom Post Type
function video() {

	$labels = array(
		'name'                  => _x( 'Videos', 'Post Type General Name', 'video' ),
		'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'video' ),
		'menu_name'             => __( 'Videos', 'video' ),
		'name_admin_bar'        => __( 'Video', 'video' ),
		'archives'              => __( 'Item Archives', 'video' ),
		'attributes'            => __( 'Item Attributes', 'video' ),
		'parent_item_colon'     => __( 'Parent Item:', 'video' ),
		'all_items'             => __( 'All Items', 'video' ),
		'add_new_item'          => __( 'Add New Item', 'video' ),
		'add_new'               => __( 'Add New', 'video' ),
		'new_item'              => __( 'New Item', 'video' ),
		'edit_item'             => __( 'Edit Item', 'video' ),
		'update_item'           => __( 'Update Item', 'video' ),
		'view_item'             => __( 'View Item', 'video' ),
		'view_items'            => __( 'View Items', 'video' ),
		'search_items'          => __( 'Search Item', 'video' ),
		'not_found'             => __( 'Not found', 'video' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'video' ),
		'featured_image'        => __( 'Featured Image', 'video' ),
		'set_featured_image'    => __( 'Set featured image', 'video' ),
		'remove_featured_image' => __( 'Remove featured image', 'video' ),
		'use_featured_image'    => __( 'Use as featured image', 'video' ),
		'insert_into_item'      => __( 'Insert into item', 'video' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'video' ),
		'items_list'            => __( 'Items list', 'video' ),
		'items_list_navigation' => __( 'Items list navigation', 'video' ),
		'filter_items_list'     => __( 'Filter items list', 'video' ),
	);
	$args = array(
		'label'                 => __( 'Video', 'video' ),
		'description'           => __( 'Post Type Videos', 'video' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-video-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'video', $args );

}
add_action( 'init', 'video', 0 );

// Register Custom Post Type
function recipe() {

	$labels = array(
		'name'                  => _x( 'Recipes', 'Post Type General Name', 'recipe' ),
		'singular_name'         => _x( 'Recipe', 'Post Type Singular Name', 'recipe' ),
		'menu_name'             => __( 'Recipes', 'recipe' ),
		'name_admin_bar'        => __( 'Recipe', 'recipe' ),
		'archives'              => __( 'Item Archives', 'recipe' ),
		'attributes'            => __( 'Item Attributes', 'recipe' ),
		'parent_item_colon'     => __( 'Parent Item:', 'recipe' ),
		'all_items'             => __( 'All Items', 'recipe' ),
		'add_new_item'          => __( 'Add New Item', 'recipe' ),
		'add_new'               => __( 'Add New', 'recipe' ),
		'new_item'              => __( 'New Item', 'recipe' ),
		'edit_item'             => __( 'Edit Item', 'recipe' ),
		'update_item'           => __( 'Update Item', 'recipe' ),
		'view_item'             => __( 'View Item', 'recipe' ),
		'view_items'            => __( 'View Items', 'recipe' ),
		'search_items'          => __( 'Search Item', 'recipe' ),
		'not_found'             => __( 'Not found', 'recipe' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'recipe' ),
		'featured_image'        => __( 'Featured Image', 'recipe' ),
		'set_featured_image'    => __( 'Set featured image', 'recipe' ),
		'remove_featured_image' => __( 'Remove featured image', 'recipe' ),
		'use_featured_image'    => __( 'Use as featured image', 'recipe' ),
		'insert_into_item'      => __( 'Insert into item', 'recipe' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'recipe' ),
		'items_list'            => __( 'Items list', 'recipe' ),
		'items_list_navigation' => __( 'Items list navigation', 'recipe' ),
		'filter_items_list'     => __( 'Filter items list', 'recipe' ),
	);
	$args = array(
		'label'                 => __( 'Recipe', 'recipe' ),
		'description'           => __( 'Post Type Recipes', 'recipe' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-food',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'recipe', $args );

}
add_action( 'init', 'recipe', 0 );

// Register Custom Post Type
function article() {

	$labels = array(
		'name'                  => _x( 'Articles', 'Post Type General Name', 'recipe' ),
		'singular_name'         => _x( 'Article', 'Post Type Singular Name', 'recipe' ),
		'menu_name'             => __( 'Articles', 'recipe' ),
		'name_admin_bar'        => __( 'Article', 'recipe' ),
		'archives'              => __( 'Item Archives', 'recipe' ),
		'attributes'            => __( 'Item Attributes', 'recipe' ),
		'parent_item_colon'     => __( 'Parent Item:', 'recipe' ),
		'all_items'             => __( 'All Items', 'recipe' ),
		'add_new_item'          => __( 'Add New Item', 'recipe' ),
		'add_new'               => __( 'Add New', 'recipe' ),
		'new_item'              => __( 'New Item', 'recipe' ),
		'edit_item'             => __( 'Edit Item', 'recipe' ),
		'update_item'           => __( 'Update Item', 'recipe' ),
		'view_item'             => __( 'View Item', 'recipe' ),
		'view_items'            => __( 'View Items', 'recipe' ),
		'search_items'          => __( 'Search Item', 'recipe' ),
		'not_found'             => __( 'Not found', 'recipe' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'recipe' ),
		'featured_image'        => __( 'Featured Image', 'recipe' ),
		'set_featured_image'    => __( 'Set featured image', 'recipe' ),
		'remove_featured_image' => __( 'Remove featured image', 'recipe' ),
		'use_featured_image'    => __( 'Use as featured image', 'recipe' ),
		'insert_into_item'      => __( 'Insert into item', 'recipe' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'recipe' ),
		'items_list'            => __( 'Items list', 'recipe' ),
		'items_list_navigation' => __( 'Items list navigation', 'recipe' ),
		'filter_items_list'     => __( 'Filter items list', 'recipe' ),
	);
	$args = array(
		'label'                 => __( 'Article', 'recipe' ),
		'description'           => __( 'Post Type Articles', 'recipe' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-aside',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'article', $args );

}
add_action( 'init', 'article', 0 );