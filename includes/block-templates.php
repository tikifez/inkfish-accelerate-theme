<?php
/**
 * Adds block templates
 *
 * @since 1.0.0
 */

/**
 * Adds block templates
 *
 * @since 1.0.0
 */
function xa_smb_add_block_templates() {
	add_action( 'init', 'xa_smb_front_page_template' );

}

/**
 * Front page block template
 *
 * @since 1.0.0
 */

function xa_smb_front_page_template() {
	$post_type_object           = get_post_type_object( 'page' );
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

