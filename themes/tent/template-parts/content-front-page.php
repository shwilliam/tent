<?php
/**
 * Front-page content template
 *
 * @package tent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if (!has_block('tent/hero-image-header')) : ?>
    <header class="entry__header entry__header--float">
      <?php the_title('<h2 class="page__title">', '</h2>'); ?>
    </header>
  <?php endif; ?>

  <div class="entry__content">
    <?php the_content(); ?>
    <?php
      wp_link_pages(array(
        'before' => '<div class="page-links">'.esc_html('Pages:'),
        'after'  => '</div>',
      ));
    ?>
  </div>
</article>
