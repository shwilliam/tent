<?php
/**
 * Journal index template
 *
 * @package tent
 */

get_header(); ?>

  <main class="site__main">

    <?php if (have_posts()) : ?>

      <header>
        <h2 class="page__title screen-reader-text">
          <?php single_post_title(); ?>
        </h2>
      </header>

      <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content'); ?>

      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>

    <?php else : ?>

      <?php get_template_part('template-parts/content', 'none'); ?>

    <?php endif; ?>

  </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
