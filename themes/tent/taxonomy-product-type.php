<?php
/**
 * Product-type pages template
 *
 * @package tent
 */

get_header(); ?>

	<div class="shop">
		<main class="site__main">

      <header class="page__header">
        <?php
          $active_term = get_queried_object();
        ?>
        <h2 class="page__title">
          <?= $active_term->name; ?>
        </h2>

        <div class="shop__description">
          <?= $active_term->description; ?>
        </div>

      </header>

      <?php
        $product_posts = get_posts(array(
          'post_type' => 'product',
          'posts_per_page' => 4,
          'tax_query' => array(
            array(
              'taxonomy' => 'product-type',
              'field' => 'slug',
              'terms' => $active_term->slug, 
              'include_children' => true,
              'operator' => 'IN'
            )
          ),
        ));
      ?>

        <?php if (have_posts()) : ?>

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

<?php get_footer(); ?>
