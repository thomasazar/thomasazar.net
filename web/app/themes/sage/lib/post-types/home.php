<?php
// Register Custom Post Type
function azar_home() {

	$labels = array(
		'name'                => 'Latest News',
		'singular_name'       => 'Home',
		'menu_name'           => 'Latest News',
		'parent_item_colon'   => 'Parent News Item:',
		'all_items'           => 'All News Items',
		'view_item'           => 'View News Item',
		'add_new_item'        => 'Add New News Item',
		'add_new'             => 'Add New',
		'edit_item'           => 'Edit News Item',
		'update_item'         => 'Update News Item',
		'search_items'        => 'Search News Item',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$rewrite = array(
		'slug'                => 'news',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => 'azar_home',
		'description'         => 'News items for the front page',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'page-attributes' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-media-document',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'azar_home', $args );

}

// Hook into the 'init' action
add_action( 'init', 'azar_home', 0 );
