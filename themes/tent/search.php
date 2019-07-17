<?php
/**
 * Search results page template
 *
 * @package tent
 */

get_header(); ?>

  <main class="site__main">

    <?php if ( have_posts() ) : ?>

      <header class="site__header">
        <h2 class="site__title">
          <?php
            printf(
            esc_html(
              'Search Results for: %s'
            ),
            '<span>'.get_search_query().'</span>'
            );
          ?>
        </h2>
      </header><!-- .page__header -->

      <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'search'); ?>

      <?php endwhile; ?>

      <?php tent_numbered_pagination(); ?>

    <?php else : ?>

      <?php get_template_part('template-parts/content', 'none'); ?>

    <?php endif; ?>

  </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
