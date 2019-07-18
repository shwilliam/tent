<?php
/**
 * Adventure posts thumbnail template 
 *
 * @package tent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('adventures-thumbnail'); ?>>
  <?php if (has_post_thumbnail()) : ?>
    <?php
      the_post_thumbnail(
        'large',
        ['class' => 'entry__header-img adventures-thumbnail__img']
      );
    ?>
  <?php endif; ?>

	<header class="entry__header adventures-thumbnail__header">
    <h3 class="entry__title">
      <a class="entry__title__link adventures-thumbnail__link" href="<?= esc_url(get_permalink()); ?>">
        <?= the_title(); ?>
      </a>
    </h3>

    <a class="button button--tertiary" href="<?= esc_url(get_permalink()); ?>">
      Read more
      <span class="button__icon" role="img" aria-label="">
        &#8594;
      </span>
    </a>
	</header>
</article>
