<?php
function ariclaw_portfolio_metabox( $meta_boxes ) {

	$ariclaw_prefix = '_ariclaw_';
	$meta_boxes[] = array(
		'id'        => 'portfolio_single_metaboxs',
		'title'     => esc_html__( 'Portfolio Single Metabox', 'ariclaw' ),
		'post_types'=> array( 'portfolio' ),
		'context'   => 'side',
		'priority'  => 'high',
		'autosave'  => 'false',
		'fields'    => array(
			array(
				'id'         => $ariclaw_prefix . 'project_start_time',
				'name'       => esc_html__( 'Project Start Time', 'ariclaw' ),
				'type'       => 'time',
				'js_options' => array(
					'stepMinute'      => 10,
					'controlType'     => 'select'
				),
			),
			array(
				'id'    => $ariclaw_prefix . 'project_start_date',
				'type'  => 'date',
				'name'  => esc_html__( 'Project Start Date', 'ariclaw' ),
				'js_options' => array(
					'dateFormat'      => 'DD, M dd, yy   ',
					'showButtonPanel' => false,
				),
			),
			array(
				'id'         => $ariclaw_prefix . 'project_end_time',
				'name'       => esc_html__( 'Project End Time', 'ariclaw' ),
				'type'       => 'time',
				'js_options' => array(
					'stepMinute'      => 10,
					'controlType'     => 'select'
				),
			),
			array(
				'id'    => $ariclaw_prefix . 'project_end_date',
				'type'  => 'date',
				'name'  => esc_html__( 'Project End Date', 'ariclaw' ),
				'js_options' => array(
					'dateFormat'      => 'DD, M dd, yy   ',
					'showButtonPanel' => false,
				),
			),
			array(
				'id'    => $ariclaw_prefix . 'project_location',
				'type'  => 'text',
				'name'  => esc_html__( 'Project Location', 'ariclaw' ),
				'placeholder' => esc_html__( 'Project Location', 'ariclaw' ),
			),
		),
	);


	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'ariclaw_portfolio_metabox' );