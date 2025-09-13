<?php
/**
 * Block styles.
 *
 * @package carbon-agency
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function carbon_agency_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'carbon-agency-flat-button',
			'label' => __( 'Flat button', 'carbon-agency' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'carbon-agency-list-underline',
			'label' => __( 'Underlined list items', 'carbon-agency' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'carbon-agency-box-shadow',
			'label' => __( 'Box shadow', 'carbon-agency' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'carbon-agency-box-shadow',
			'label' => __( 'Box shadow', 'carbon-agency' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'carbon-agency-box-shadow',
			'label' => __( 'Box shadow', 'carbon-agency' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/details',
		array(
			'name'  => 'carbon-agency-plus',
			'label' => __( 'Plus & minus', 'carbon-agency' ),
		)
	);
}
add_action( 'init', 'carbon_agency_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function carbon_agency_unregister_block_style() {
	wp_enqueue_script(
		'carbon-agency-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		carbon_agency_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'carbon_agency_unregister_block_style' );
