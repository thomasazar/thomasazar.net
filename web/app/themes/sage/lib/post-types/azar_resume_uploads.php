<?php
// Register Custom Post Type
function azar_resume_uploads() {
	$labels = array(
		'name'                => 'Resume and CV',
		'singular_name'       => 'Resume and CV',
		'menu_name'           => 'Resume and CV',
		'all_items'           => 'All Resumes and CVs',
		'view_item'           => 'View Resume and CV',
		'add_new_item'        => 'Add New Resume and CV',
		'edit_item'           => 'Edit Resume and CV',
	);

	$rewrite = array(
		'slug'                => 'resumes',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => false,
	);

	$args = array(
		'labels'              => $labels,
		'supports'            => array( '', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => false,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-media-text',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);

	register_post_type( 'azar_resume_uploads', $args );
}

// Hook into the 'init' action
add_action( 'init', 'azar_resume_uploads', 0 );

// Add menu to admin
add_action( 'admin_menu', 'azar_uploads_menu' );

/* Add Splash Image to the menu */
function azar_uploads_menu() {
	$args = array(
		'numberposts' => 1,
		'post_status' => 'publish',
		'post_type' => 'azar_resume_uploads',
	);

	$splash_page = get_posts( $args );
	$splash_page = $splash_page[0]->ID;
	add_menu_page( 'Splash', 'Resume &amp; CV', 'edit_posts', "post.php?post=$splash_page&action=edit", '', 'dashicons-media-document', '5' );
}

function azar_hide_that_stuff() {
	if( 'azar_resume_uploads' == get_post_type() )
		echo '<style type="text/css">
				  #minor-publishing, #delete-action {display:none;}
				  #favorite-actions {display:none;}
				  .add-new-h2{display:none;}
				  .tablenav{display:none;}
				  #message a{display:none;}
					#post-body-content {display: none;}
			  </style>';
}
add_action( 'admin_head', 'azar_hide_that_stuff' );
?>
