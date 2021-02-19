<?php
/**
 * Front page block template
 *
 * @since 1.0.0
 */


/**
 * Front page block template
 *
 * @since 1.0.0
 */

function nkaccelerate_landing_page_template() {
	$post_type_object           = get_post_type_object( 'landing' );
	$post_type_object->template = array(
		array( 'core/cover' ),
		array(
			'core/columns',
			array( 'className' => 'hero-features' ),
			array(
				array(
					'core/column',
					array( 'className' => 'feature-card' ),
					array(
						array(
							'core/image',
							array(
								'sizeSlug' => 'medium',
							),
						),
						array(
							'core/heading',
							array( 'level' => 3 ),
						),
						array(
							'core/paragraph',
						),
						array(
							'core/button',
							array( 'className' => 'is-style-text' ),
						),
					),
				),
				array(
					'core/column',
					array( 'className' => 'feature-card' ),
					array(
						array(
							'core/image',
							array( 'sizeSlug' => 'medium' ),
						),
						array(
							'core/heading',
							array( 'level' => 3 ),
						),
						array(
							'core/paragraph',
						),
						array(
							'core/button',
							array( 'className' => 'is-style-text' ),
						),
					),
				),
				array(
					'core/column',
					array( 'className' => 'feature-card' ),
					array(
						array(
							'core/image',
							array( 'sizeSlug' => 'medium' ),
						),
						array(
							'core/heading',
							array( 'level' => 3 ),
						),
						array(
							'core/paragraph',
						),
						array(
							'core/button',
							array( 'className' => 'is-style-text' ),
						),
					),
				),
			),
		),
		array(
			'core/columns',
			array( 'className' => 'hero-info' ),
			array(
				array(
					'core/column',
					array( 'className' => 'info-card' ),
					array(
						array(
							'core/paragraph',
						),
						array(
							'core/image',
							array( 'sizeSlug' => 'thumbnail' ),
						),
						array(
							'core/button',
							array( 'className' => 'is-style-text' ),
						),
					),
				),
				array(
					'core/column',
					array( 'className' => 'info-card' ),
					array(
						array(
							'core/paragraph',
						),
						array(
							'core/image',
							array( 'sizeSlug' => 'thumbnail' ),
						),
						array(
							'core/button',
							array( 'className' => 'is-style-text' ),
						),
					),
				),
				array(
					'core/column',
					array( 'className' => 'info-card' ),
					array(
						array(
							'core/paragraph',
						),
						array(
							'core/image',
							array( 'sizeSlug' => 'thumbnail' ),
						),
						array(
							'core/button',
							array( 'className' => 'is-style-text' ),
						),
					),
				),
				array(
					'core/column',
					array( 'className' => 'info-card' ),
					array(
						array(
							'core/paragraph',
						),
						array(
							'core/image',
							array( 'sizeSlug' => 'thumbnail' ),
						),
						array(
							'core/button',
							array( 'className' => 'is-style-text' ),
						),
					),
				),
			),
		),
		array(
			'core/media-text',
			array(
				'className' => 'hero-location',
				'fontSize' => 'small',
			),
		),
	);
}

