<?php
/**
 *
 * @package   Tent Blocks
 * @author    William L <w-lindvall@outlook.com>
 * @license   GPL-2.0
 * @copyright 2019 William L 
 *
 * @wordpress-plugin
 * Plugin Name: Tent Blocks
 * Description: Custom gutenberg blocks for tent theme & plugin collection 
 * Version:     0.1.0
 * Plugin URI: https://github.com/shwilliam/tent
 * Author: William L <w-lindvall@outlook.com>
 * Author URI: https://github.com/shwilliam
 * License:     GPL-2.0
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
require_once plugin_dir_path( __FILE__ ) . 'src/hero-image-header/index.php';
