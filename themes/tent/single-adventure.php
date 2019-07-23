<?php
/**
 * Template for single adventure
 *
 * @package tent
 */

get_header(); ?>

	<main class="site__main">

		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part('template-parts/content', 'single-adventure'); ?>

		<?php endwhile; ?>

	</main>

<?php get_footer(); ?>
