<?php
/**
 * Site header
 *
 * @package tent
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>"/>
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page"> 
      <a class="skip-link screen-reader-text" href="#content">
        <?php echo esc_html('Skip to content'); ?>
      </a>

      <header
        id="masthead"
        role="banner"
        class="site-header <?php
          if (has_block('tent/hero-image-header'))
            : echo 'site-header--above';
          endif;
        ?>"
      >
				<nav id="site-navigation" class="site-header__nav" role="navigation">
          <a
            title="Home"
            rel="home"
            href="<?php echo esc_url(home_url('/')); ?>"
            class="site-header__link"
          >
            <h1 class="site-header__title">
              <?php bloginfo('name'); ?>
            </h1>
            <img
              alt=""
              class="site-header__logo"
              src="<?=
                has_block('tent/hero-image-header')
                  ? get_stylesheet_directory_uri().'/images/inhabitent-logo-tent-white.svg'
                  : get_stylesheet_directory_uri().'/images/inhabitent-logo-tent.svg';
              ?>"
            />
          </a>
          <button
            class="site-header__nav--closed"
            aria-controls="primary-menu"
            aria-expanded="false"
          >
            <?php echo esc_html('menu'); ?>
          </button>
					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
