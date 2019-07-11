<?php
/**
 * Template for single product
 *
 * @package tent
 */

get_header(); ?>

	<div id="primary">
		<main id="main" class="site-content__main" role="main">

      <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'single'); ?>

        <?php the_post_navigation(); ?>

        <?php
          // if open or at least one comment
          if (comments_open() || get_comments_number()) :
            comments_template();
          endif;
        ?>

      <?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
