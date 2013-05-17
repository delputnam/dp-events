<?php
/**
 * Metaboxes
 *
 * This file registers any custom metaboxes
 *
 * @package      DP_Events
 * @since        1.0.0
 * @link
 * @author       Del Putnam <del@putnams.net>
 * @copyright    Copyright (c) 2013, Del Putnam
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/**
 * Create Metaboxes
 * @since 1.0.0
 * @link
 */

function dpe_metaboxes( $meta_boxes ) {
	$meta_boxes[] = array(
		'id' => 'event-info',
		'title' => 'Event Information',
		'pages' => array('event'),
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true,
		'fields' => array(
			array(
				'name' => 'Event Summary',
				'desc' => '',
				'id' => 'dpe_summary',
				'type'    => 'wysiwyg',
				'options' => array(	'textarea_rows' => 3, ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes' , 'dpe_metaboxes' );


/**
 * Initialize Metabox Class
 * @since 1.0.0
 * see /lib/metabox/example-functions.php for more information
 *
 */

function dpe_initialize_cmb_meta_boxes() {
	if ( !class_exists( 'cmb_Meta_Box' ) ) {
		require_once( DPE_DIR . '/lib/metabox/init.php' );
	}
}
add_action( 'init', 'dpe_initialize_cmb_meta_boxes', 9999 );