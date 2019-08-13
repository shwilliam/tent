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

        <h2 class="page__title">
          <?= single_term_title(); ?>
        </h2>

        <div class="shop__description">
          <?= the_archive_description(); ?>
        </div>

      </header>

        <?php if (have_posts()) : ?>

          <section class="shop__grid">

            <?php
              foreach ( $posts as $post ) : setup_postdata( $post );
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
