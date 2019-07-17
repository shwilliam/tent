<?php
/**
 * Shop (archive) template
 *
 * @package tent
 */

get_header(); ?>

	<div id="primary" class="shop">
		<main id="main" class="site__main" role="main">

      <header class="page-header">
        <h2 class="page-title">
          Shop Stuff
        </h2>

        <?php
        ?>

        <div class="shop__terms">
          <?php
            $terms = get_terms(array(
              'taxonomy' => 'product-type',
            ));
            if ($terms) :
              foreach ($terms as $term) :
          ?>

            <a href="<?= esc_url(get_term_link($term)); ?>">
              <?= $term->name; ?>
            </a>

          <?php
              endforeach; 
            endif;
          ?>
        </div>

      </header>

      <?php
        $product_posts = get_posts(array(
          'post_type' => 'product',
          'posts_per_page' => 1000,
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

        <?php else : ?>

          <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

		</main>
	</div>

<?php get_footer(); ?>
