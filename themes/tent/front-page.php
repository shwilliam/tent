<?php
/**
 * Template for front-page 
 *
 * @package tent
 */

get_header(); ?>

  <div id="primary">
		<main id="main" class="site__main" role="main">

			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part('template-parts/content', 'page'); ?>
			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php if (!has_block('tent/hero-image-header')) : get_sidebar(); endif; ?>
<?php get_footer(); ?>
