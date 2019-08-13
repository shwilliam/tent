<?php
/**
 * Single product template
 *
 * @package tent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('shop__item-wrapper'); ?>>
  <header class="entry__header">
    <?php if (has_post_thumbnail()) : ?>
      <?php
        the_post_thumbnail(
          'large',
          ['class' => 'entry__header-img']
        );
      ?>
    <?php endif; ?>
  </header>

  <div class="entry__content entry__content--left shop__item-content">
    <h2 class="entry__title entry__title--secondary">
      <?= the_title(); ?>
    </h2>

    <span class="shop__item-price shop__item-price--large">
      $<?=
        number_format(
          get_post_custom()['price'][0], 
          2
        );  
      ?>
    </span>

    <?php the_content(); ?>

    <?php get_template_part('template-parts/component', 'social-links'); ?>
  </div>
</article>
