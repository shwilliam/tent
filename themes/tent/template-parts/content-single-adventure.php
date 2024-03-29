<?php
/**
 * Single adventure template
 *
 * @package tent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry__header">
    <?php if (has_post_thumbnail()) : ?>
      <?php
        the_post_thumbnail(
          'large',
          ['class' => 'entry__header-img entry__header-img--fill']
        );
      ?>
    <?php endif; ?>

    <?php the_title('<h2 class="entry__title">', '</h2>'); ?>

    <div class="entry__meta">
      <?php tent_posted_by(); ?>
    </div>
  </header>

  <div class="entry__content">
    <?php the_content(); ?>
  </div>

  <footer class="entry__footer">

    <div class="entry__links">
      <?php tent_entry_footer(); ?>
    </div>

    <?php get_template_part('template-parts/component', 'social-links'); ?>

  </footer>
</article>
