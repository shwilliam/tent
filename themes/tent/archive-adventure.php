<?php
/**
 * Shop (archive) template
 *
 * @package tent
 */

get_header(); ?>

  <main class="site__main adventures">

    <header class="page__header">
      <h2 class="page__title">
        Latest Adventures
      </h2>
    </header>

    <section class="adventures-grid">
      <?php
        $adventure_posts = get_posts(array(
          'post_type' => 'adventure',
          'posts_per_page' => 4,
          'order' => 'ASC',
        ));

        foreach ($adventure_posts as $post) : setup_postdata($post);

          get_template_part('template-parts/content', 'thumbnail-adventures');

        endforeach; wp_reset_postdata();
      ?>
    </section>

  </main>

<?php get_footer(); ?>
