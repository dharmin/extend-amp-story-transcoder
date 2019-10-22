<?php
/**
 * Plugin Name: Extend AMP Story
 * Description: Extend AMP Story page block and add settings to change background video quality.
 * Author: Dharmin Shah
 * Author URI: https://github.com/dharmin
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: extend-amp-story
 * Domain Path: /languages/
 *
 * @package extend-amp-story
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Extend AMP Story block editor assets enqueue function
 */
function extend_amp_story_enqueue_block_editor_assets() {
	// Enqueue our script.
	wp_enqueue_script(
		'extend-amp-story-js',
		esc_url( plugins_url( '/dist/extend-amp-story.js', __FILE__ ) ),
		array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ),
		'1.0.0',
		true // Enqueue the script in the footer.
	);
}

add_action( 'enqueue_block_editor_assets', 'extend_amp_story_enqueue_block_editor_assets' );
