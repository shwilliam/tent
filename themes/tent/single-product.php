<?php
/**
 * Template for single product
 *
 * @package tent
 */

get_header(); ?>

  <main class="site__main">

    <?php while (have_posts()) : the_post(); ?>

      <?php get_template_part('template-parts/content', 'single-product'); ?>

    <?php endwhile; ?>

  </main>

<?php get_footer(); ?>
