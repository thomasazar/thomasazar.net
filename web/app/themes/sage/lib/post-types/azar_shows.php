<?php

// Register Custom Post Type
function azar_shows() {

	$labels = array(
		'name'                => 'Shows',
		'singular_name'       => 'Show',
		'menu_name'           => 'Shows',
		'parent_item_colon'   => 'Parent Show:',
		'all_items'           => 'All Shows',
		'view_item'           => 'View Show',
		'add_new_item'        => 'Add New Show',
		'add_new'             => 'New Show',
		'edit_item'           => 'Edit Show',
		'update_item'         => 'Update Show',
		'search_items'        => 'Search shows',
		'not_found'           => 'No shows found',
		'not_found_in_trash'  => 'No shows found in Trash',
	);
	$args = array(
		'label'               => 'azar_show',
		'description'         => 'Shows',
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'azar_show', $args );

}

// Hook into the 'init' action
add_action( 'init', 'azar_shows', 0 );

?>