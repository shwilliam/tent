<?php
 /**
 *
 * @package   Tent Functionality
 * @author    William L <w-lindvall@outlook.com>
 * @license   GPL-2.0
 * @copyright 2019 William L 
 *
 * @wordpress-plugin
 * Plugin Name: Tent Functionality
 * Description: Theme-independent functionality
 * Version:     0.1.0
 * Author:      William L 
 * License:     GPL-2.0
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define plugin directory
 *
 * @since 1.0.0
 */
define( 'TF_DIR', dirname( __FILE__ ) );

/**
 * General housekeeping and plugin activation tasks
 *
 * @since 1.0.0
 */
include_once( TF_DIR . '/lib/functions/general.php' );
register_activation_hook( __FILE__, array( 'TF_General', 'plugin_activation' ) );

/**
 * Post types
 *
 * @since 1.0.0
 */
include_once( TF_DIR . '/lib/functions/post-types.php' );

/**
 * Taxonomies
 *
 * @since 1.0.0
 */
include_once( TF_DIR . '/lib/functions/taxonomies.php' );
