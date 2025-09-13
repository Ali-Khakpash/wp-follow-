<?php
/**
 * Block Variations
 *
 * @package carbon-agency
 * @since 1.0.0
 */

/**
 * This is an example of how to register a block variation.
 * Type /full or use the block inserter to insert a full width group block.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/
 *
 * @since 1.0.0
 *
 * @return void
 */
function carbon_agency_register_block_variation() {
	wp_enqueue_script(
		'carbon-agency-block-variations',
		get_template_directory_uri() . '/assets/js/block-variation.js',
		array( 'wp-blocks' ),
		carbon_agency_VERSION,
		true
	);
}
add_action( 'enqueue_block_assets', 'carbon_agency_register_block_variation' );
