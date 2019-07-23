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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
    <a class="skip-link screen-reader-text" href="#content">
      <?php echo esc_html('Skip to content'); ?>
    </a>

    <header
      role="banner"
      class="site__header <?php
        if (has_block('tent/hero-image-header'))
          : echo 'site__header--above';
        endif;
      ?>"
    >
      <nav
        id="site-navigation"
        class="site__header-nav
          <?= has_block('tent/hero-image-header')
            ? ''
            : 'site__header-nav--no-bg';
          ?>"
        role="navigation"
      >
        <a
          title="Home"
          rel="home"
          href="<?php echo esc_url(home_url('/')); ?>"
          class="site__header-link"
        >
          <h1 class="site__header-title">
            <?php bloginfo('name'); ?>
          </h1>
          <img
            alt=""
            class="site__header-logo"
            src="<?=
              has_block('tent/hero-image-header')
                ? get_stylesheet_directory_uri().'/images/logo__tent--white.svg'
                : get_stylesheet_directory_uri().'/images/logo__tent.svg';
            ?>"
          />
        </a>

				<div class="flex">
					<button
						class="site__header-nav--closed"
						aria-controls="primary-menu"
						aria-expanded="false"
					>
						<?php echo esc_html('menu'); ?>
					</button>
					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>

					<div class="search-form__expanding-wrap
            <?= has_block('tent/hero-image-header')
              ? ''
              : 'search-form--dark';
            ?>
          ">
						<?php get_search_form(); ?>
					</div>
				</div>
      </nav>
    </header>

    <div
      class="site <?php
        if (has_block('tent/hero-image-header'))
          : echo 'site--splash';
          endif;
      ?>"
    >
