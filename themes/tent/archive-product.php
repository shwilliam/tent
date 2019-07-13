<?php
/**
 * Shop (archive) pages template
 *
 * @package tent
 */

get_header(); ?>

	<div id="primary">
		<main id="main" class="site__main" role="main">

      <?php
        $product_posts = get_posts(array(
          'post_type' => 'product',
          'posts_per_page' => 16,
        ));
      ?>

        <?php if (have_posts()) : ?>

          <header class="page-header">
            <?php
              the_archive_title('<h2 class="page-title">', '</h2>');
              the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>
          </header>

          <section class="shop__grid">

            <?php
              foreach ( $product_posts as $post ) : setup_postdata( $post );
            ?>

              <?php get_template_part( 'template-parts/content', 'product' ); ?>

            <?php
              endforeach; wp_reset_postdata();
            ?>

          </section>

          <?php the_posts_navigation(); ?>

        <?php else : ?>

          <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

		</main>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
