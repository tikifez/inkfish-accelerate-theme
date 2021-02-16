<?php
/**
 * Adds custom block styles
 *
 * @since 1.0.0
 */

/**
 * Adds button style for text
 *
 * @since 1.0.0
 */
function xa_smb_add_block_styles() {
	register_block_style(
		'core/button',
		array(
			'name'  => 'text',
			'label' => __( 'Text', 'xa-smb' ),
		)
	);
}
