<?php
/**
 * Business hours 
 *
 * Based on WP widget boiler by @tommcfarlin.
 *
 * @package   Tent_Biz_Hours 
 * @author    William L <w-lindvall@outlook.com>
 * @license   GPL-2.0
 * @link      https://github.com/shwilliam/tent
 * @copyright 2019 William L 
 *
 * @wordpress-plugin
 * Plugin Name:       tent business hours
 * Plugin URI:        https://github.com/shwilliam/tent
 * Description:       customizable business hours 
 * Version:           0.1.0
 * Author:            William L <w-lindvall@outlook.com>
 * Author URI:        https://github.com/shwilliam 
 * License:           GPL-2.0
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// prevent direct file access
if (!defined('ABSPATH')) {
	exit;
}

class Tent_Biz_Hours extends WP_Widget {
  protected $widget_slug = 'tent-biz-hours';

	public function __construct() {
		parent::__construct(
			$this->get_widget_slug(),
			'Business hours',
			array(
				'classname'  => $this->get_widget_slug(),
				'description' => 'Customizable business hours'
			)
		);

	}

  public function get_widget_slug() {
      return $this->widget_slug;
  }

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget($args, $instance) {

		if (!isset($args['widget_id'])) {
         $args['widget_id'] = $this->id;
      }

		extract($args, EXTR_SKIP);

		$widget_string = $before_widget;

    $title =
      empty($instance['title'])
        ? '' 
        : apply_filters('widget_title', $instance['title']);
    $monday_friday =
      empty($instance['monday_friday'])
        ? ''
        : apply_filters('monday_friday', $instance['monday_friday']);
    $saturday =
      empty($instance['saturday'])
        ? ''
        : apply_filters('saturday', $instance['saturday']);
    $sunday =
      empty($instance['sunday'])
        ? ''
        : apply_filters('sunday', $instance['sunday']);

		ob_start();

		if ($title){
			$widget_string .= $before_title;
			$widget_string .= $title;
			$widget_string .= $after_title;
		}

		include(plugin_dir_path(__FILE__).'views/widget.php');
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;
	}

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update($new_instance, $old_instance) {

		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['monday_friday'] = strip_tags($new_instance['monday_friday']);
		$instance['saturday'] = strip_tags($new_instance['saturday']);
		$instance['sunday'] = strip_tags($new_instance['sunday']);

		return $instance;
	}

	/**
	 * Admin form
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form($instance) {

		// default values
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => 'Business hours',
        'monday_friday' => '',
        'saturday' => '',
        'sunday' => '',
			)
		);

		$title = strip_tags($instance['title']);
		$monday_friday = strip_tags($instance['monday_friday']);
		$saturday = strip_tags($instance['saturday']);
		$sunday = strip_tags($instance['sunday']);

		include(plugin_dir_path( __FILE__ ).'views/admin.php');
	}
}

add_action('widgets_init', function() {
   register_widget('Tent_Biz_Hours');
});
