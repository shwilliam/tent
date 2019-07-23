<?php
/**
 * Contact info 
 *
 * Based on WP widget boiler by @tommcfarlin.
 *
 * @package   Tent_Contact_Info 
 * @author    William L <w-lindvall@outlook.com>
 * @license   GPL-2.0
 * @link      https://github.com/shwilliam/tent
 * @copyright 2019 William L 
 *
 * @wordpress-plugin
 * Plugin Name:       Tent Contact Info 
 * Plugin URI:        https://github.com/shwilliam/tent
 * Description:       Customizable contact info 
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

class Tent_Contact_Info extends WP_Widget {
  protected $widget_slug = 'tent-contact-info';

	public function __construct() {
		parent::__construct(
			$this->get_widget_slug(),
			'Contact info',
			array(
				'classname'  => $this->get_widget_slug(),
				'description' => 'Customizable contact info'
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
    $tel =
      empty($instance['tel'])
        ? ''
        : apply_filters('tel', $instance['tel']);
    $email =
      empty($instance['email'])
        ? ''
        : apply_filters('email', $instance['email']);
    $address =
      empty($instance['address'])
        ? ''
        : apply_filters('address', $instance['address']);
    $address_2 =
      empty($instance['address_2'])
        ? ''
        : apply_filters('address_2', $instance['address_2']);
    $fb =
      empty($instance['fb'])
        ? ''
        : apply_filters('fb', $instance['fb']);
    $twitter =
      empty($instance['twitter'])
        ? ''
        : apply_filters('twitter', $instance['twitter']);
    $google =
      empty($instance['google'])
        ? ''
        : apply_filters('google', $instance['google']);

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
		$instance['tel'] = strip_tags($new_instance['tel']);
		$instance['email'] = strip_tags($new_instance['email']);
		$instance['address'] = strip_tags($new_instance['address']);
		$instance['address_2'] = strip_tags($new_instance['address_2']);
		$instance['fb'] = strip_tags($new_instance['fb']);
		$instance['twitter'] = strip_tags($new_instance['twitter']);
		$instance['google'] = strip_tags($new_instance['google']);

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
				'title' => 'Contact info',
        'tel' => '',
        'email' => '',
        'address' => '',
        'address_2' => '',
        'fb' => '',
        'twitter' => '',
        'google' => '',
			)
		);

		$title = strip_tags($instance['title']);
		$tel = strip_tags($instance['tel']);
		$email = strip_tags($instance['email']);
		$address = strip_tags($instance['address']);
		$address_2 = strip_tags($instance['address_2']);
		$fb = strip_tags($instance['fb']);
		$twitter = strip_tags($instance['twitter']);
		$google = strip_tags($instance['google']);

		include(plugin_dir_path( __FILE__ ).'views/admin.php');
	}
}

add_action('widgets_init', function() {
   register_widget('Tent_Contact_Info');
});
