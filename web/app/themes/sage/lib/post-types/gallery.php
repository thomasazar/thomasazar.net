<?php
// Register Custom Post Type
function azar_gallery() {

	$labels = array(
		'name'                => 'Galleries',
		'singular_name'       => 'Gallery',
		'menu_name'           => 'Galleries',
		'parent_item_colon'   => 'Parent Gallery:',
		'all_items'           => 'All Galleries',
		'view_item'           => 'View Gallery',
		'add_new_item'        => 'Add New Gallery',
		'add_new'             => 'Add New',
		'edit_item'           => 'Edit Gallery',
		'update_item'         => 'Update Gallery',
		'search_items'        => 'Search Gallery',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$rewrite = array(
		'slug'                => 'gallery',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => 'azar_gallery',
		'description'         => 'Gallery on the Media page',
		'labels'              => $labels,
		'supports'            => array( 'title', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-portfolio',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'azar_gallery', $args );

}

// Hook into the 'init' action
add_action( 'init', 'azar_gallery', 0 );
?>
