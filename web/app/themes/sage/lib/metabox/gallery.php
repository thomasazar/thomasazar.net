<?php

add_filter( 'rwmb_meta_boxes', 'gallery_meta_boxes' );
function gallery_meta_boxes( $meta_boxes ){
	$prefix = 'azar_';
	$meta_boxes[] = [
		'id' => 'standard',
		'title' => 'Media Gallery',
		'pages' => [ 'azar_gallery' ],
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => [
			[
				'name'  => 'Photos',
				'id'    => "{$prefix}photos",
				'type'  => 'file_advanced',
			],
		],
	];

	return $meta_boxes;
}
