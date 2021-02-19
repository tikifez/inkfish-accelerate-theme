<?php
/**
 * Adds the landing page custom post type
 *
 * @since 1.0.0
 */

/**
 * Adds the landing page custom post type.
 *
 * @since 1.0.0
 */
function nkaccelerate_post_type_landing() {
	$labels = array(
		'name'                  => _x( 'Landing Pages', 'Post type general name', 'landing' ),
		'singular_name'         => _x( 'Landing Page', 'Post type singular name', 'landing' ),
		'menu_name'             => _x( 'Landing Pages', 'Admin Menu text', 'landing' ),
		'name_admin_bar'        => _x( 'Landing Page', 'Add New on Toolbar', 'landing' ),
		'add_new'               => __( 'Add New', 'landing' ),
		'add_new_item'          => __( 'Add New landing page', 'landing' ),
		'new_item'              => __( 'New landing page', 'landing' ),
		'edit_item'             => __( 'Edit landing page', 'landing' ),
		'view_item'             => __( 'View landing page', 'landing' ),
		'all_items'             => __( 'All landing pages', 'landing' ),
		'search_items'          => __( 'Search landing pages', 'landing' ),
		'parent_item_colon'     => __( 'Parent landing pages:', 'landing' ),
		'not_found'             => __( 'No landing pages found.', 'landing' ),
		'not_found_in_trash'    => __( 'No landing pages found in Trash.', 'landing' ),
		'featured_image'        => _x( 'Landing Page Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'landing' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'landing' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'landing' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'landing' ),
		'archives'              => _x( 'Landing Page archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'landing' ),
		'insert_into_item'      => _x( 'Insert into landing page', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'landing' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this landing page', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'landing' ),
		'filter_items_list'     => _x( 'Filter landing pages list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'landing' ),
		'items_list_navigation' => _x( 'Landing Pages list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'landing' ),
		'items_list'            => _x( 'Landing Pages list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'landing' ),
	);
	$args = array(
		'labels'             => $labels,
		'description'        => 'The primary pages for users to start at.',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'landing' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
		'taxonomies'         => array( 'category', 'post_tag' ),
		'show_in_rest'       => true
	);

	register_post_type( 'landing', $args );
}
