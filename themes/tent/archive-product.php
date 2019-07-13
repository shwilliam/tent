<?php
/**
 * Shop (archive) pages template
 *
 * @package tent
 */

get_header(); ?>

	<div id="primary">
		<main id="main" class="site__main" role="main">

    <?php global $query_string;
      $posts = query_posts($query_string.'&posts_per_page=16');
    ?>

		<?php if (have_posts()) : ?>

			<header class="page-header">
				<?php
					the_archive_title('<h2 class="page-title">', '</h2>');
					the_archive_description('<div class="taxonomy-description">', '</div>');
				?>
			</header>

      <section class="shop__grid">

        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'product' ); ?>
        <?php endwhile; ?>

      </section>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

    <?php wp_reset_query(); ?>

		</main>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
