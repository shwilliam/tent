<?php
/**
 * Theme-independent functions
 *
 * @package tent
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function tent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'tent_body_classes' );

function tent_login_logo() {
  echo '<style type="text/css">
    h1 a {
      background-image:url('.get_stylesheet_directory_uri().'/images/logo__text.svg) !important; 
      background-repeat: no-repeat !important;
      background-size: 100% 100px !important;
      width: 100% !important;
    }
  </style>';
}
add_action('login_head', 'tent_login_logo');

function the_url($url) {
  return get_bloginfo('url');
}
add_filter('login_headerurl', 'the_url');
