<?php
add_filter( 'rwmb_meta_boxes', 'azar_review_meta_boxes' );
function azar_review_meta_boxes( $meta_boxes ){

	$prefix = 'azar_';

	$meta_boxes[] = array(
		'id' => 'standard',
		'title' => 'Show information',
		'pages' => array( 'azar_show' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'   => 'Active?',
				'id'     => "{$prefix}active",
				'type'   => 'radio',
				// Array of 'value' => 'Label' pairs for radio options.
				// Note: the 'value' is stored in meta field, not the 'Label'
				'options' => array(
					'true' => 'Yes',
					'false' => 'No',
				),
			),
			array(
				'name'  => 'Where',
				'id'    => "{$prefix}where",
				'type'  => 'text',
			),
			array(
				'name'  => 'Opens',
				'id'    => "{$prefix}opens",
				'type'  => 'date',
			),
			array(
				'name'  => 'Closes',
				'id'    => "{$prefix}closes",
				'type'  => 'date',
			),
			array(
				'name'  => 'Tickets',
				'id'    => 'fake_id', // Not used but needed for plugin
				'type'  => 'heading',
			),
			array(
				'name'  => 'Phone',
				'id'    => "{$prefix}phone",
				'type'  => 'text',
			),
			array(
				'name'  => 'URL',
				'id'    => "{$prefix}url",
				'type'  => 'url',
				'std'   => 'http://google.com',
			),
			array(
				'name'  => 'URL text',
				'id'    => "{$prefix}urlText",
				'type'  => 'text',
			),
			array(
				'name'  => 'Blurb',
				'id'    => 'fake_id', // Not used but needed for plugin
				'type'  => 'heading',
			),
			array(
				'name'             => 'Logo',
				'id'               => "{$prefix}logo",
				'type'             => 'plupload_image',
				'max_file_uploads' => 1,
			),
			array(
				'name'  => 'Blurb',
				'id'    => "{$prefix}blurb",
				'type'  => 'wysiwyg',
			),
		),
	);

	return $meta_boxes;
}
?>
