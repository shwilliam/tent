<?php
/**
 * Enqueue CSS/JS
 *
 * @since   0.1.0
 * @package tent blocks
 */

// if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * client & admin assets
 *
 * `wp-blocks`: includes block type registration and related functions.
 *
 * @since 0.1.0
 */
function tent_blocks_block_assets() {
	// styles
	wp_enqueue_style(
		'tent-blocks-style-css',
		plugins_url( 'dist/blocks.style.build.css', dirname( __FILE__ ) ), 
    array( 'wp-editor' )
	);
}

add_action( 'enqueue_block_assets', 'tent_blocks_block_assets' );

/**
 * admin editor
 *
 * `wp-blocks`: includes block type registration and related functions.
 * `wp-element`: includes the WordPress Element abstraction for describing the structure of your blocks.
 * `wp-i18n`: To internationalize the block's text.
 *
 * @since 0.1.0
 */
function tent_blocks_editor_assets() {
	wp_enqueue_script(
		'tent-blocks-block-js',
		plugins_url( '/dist/blocks.build.js', dirname( __FILE__ ) ),
		array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ),
		true 
	);

	wp_localize_script('tent-blocks-block-js', 'post_data', array(
		'postId' => get_the_ID(),
	));

	wp_enqueue_style(
		'tent-blocks-block-editor-css',
		plugins_url( 'dist/blocks.editor.build.css', dirname( __FILE__ ) ),
		array( 'wp-edit-blocks' )
	);
}

add_action( 'enqueue_block_editor_assets', 'tent_blocks_editor_assets' );
