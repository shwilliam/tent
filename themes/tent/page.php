<?php
/**
 * Page template fallback
 *
 * @package tent
 */

get_header(); ?>

  <main class="site__main">

    <?php while (have_posts()) : the_post(); ?>

      <?php get_template_part('template-parts/content', 'page'); ?>

    <?php endwhile; ?>

  </main>

<?php if (!has_block('tent/hero-image-header')) : get_sidebar(); endif; ?>
<?php get_footer(); ?>
