<?php
/**
 * Template for all single posts
 *
 * @package tent
 */

get_header(); ?>

  <main class="site__main">

    <?php while (have_posts()) : the_post(); ?>

      <?php get_template_part('template-parts/content', 'single'); ?>

      <?php
        // if open or at least one comment
        if (comments_open() || get_comments_number()) :
          comments_template();
        endif;
      ?>

    <?php endwhile; ?>

  </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
