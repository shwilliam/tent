<?php
/**
 * Archive pages template
 *
 * @package tent
 */

get_header(); ?>

  <main class="site__main">

  <?php if (have_posts()) : ?>

    <header class="page__header page__header--underline">
      <?php
        the_archive_title('<h2 class="page__title">', '</h2>');
        the_archive_description('<p>', '</p>');
      ?>
    </header>

    <?php while (have_posts()) : the_post(); ?>

      <?php
        get_template_part( 'template-parts/content' );
      ?>

    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>

  <?php else : ?>

    <?php get_template_part('template-parts/content', 'none'); ?>

  <?php endif; ?>

  </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
