<?php

add_filter( 'rwmb_meta_boxes', 'azar_resume_meta_boxes' );
function azar_resume_meta_boxes( $meta_boxes ){
	$prefix = 'azar_';

	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id' => 'standard',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => 'Upload',

		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array( 'azar_resume_uploads' ),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',

		// Auto save: true, false (default). Optional.
		'autosave' => true,

		// List of meta fields
		'fields' => array(
			// TEXT
			array(
				// Field name - Will be used as label
				'name'  => 'CV',
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}cv",
				// Field description (optional)
				'type'  => 'file_advanced',
				'max_file_uploads' => '1',
			),
			array(
				// Field name - Will be used as label
				'name'  => 'Resume',
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}resume",
				// Field description (optional)
				'type'  => 'file_advanced',
				'max_file_uploads' => '1',
			),
		),
	);

	return $meta_boxes;
}
?>
