<?php
/**
 * Template for single product
 *
 * @package tent
 */

get_header(); ?>

	<div id="primary">
		<main id="main" class="site__main" role="main">

      <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'single-product'); ?>

      <?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
