<?php
/**
 * Product template
 *
 * @package tent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('shop__item'); ?>>
  <a class="shop__item-link" href="<?= esc_url(get_permalink()); ?>">

    <div class="shop__item-img-wrapper">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('large', array('class' => 'shop__item-img')); ?>
      <?php endif; ?>
    </div>

    <div class="shop__item-description">
      <h2 class="shop__item-title">
        <?= the_title(); ?>
      </h2>

      <div class="entry__meta shop__item-price">
        $<?=
          number_format(
            get_post_custom()['price'][0], 
            2
          );  
        ?>
      </div>
    </div>

  </a>
</article>
