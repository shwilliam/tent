<?php
/**
 * Adventure posts thumbnail template 
 *
 * @package tent
 */

?>

<article id="adventure-<?php the_ID(); ?>" <?php post_class('adventures-thumbnail adventures-thumbnail--small'); ?>>
  <?php if (has_post_thumbnail()) : ?>
    <?php
      the_post_thumbnail(
        'large',
        ['class' => 'adventures-thumbnail__img']
      );
    ?>
  <?php endif; ?>

	<header class="adventures-thumbnail__header">
    <h3 class="entry__title entry__title--serif">
      <a class="adventures-thumbnail__link" href="<?= esc_url(get_permalink()); ?>">
        <?= the_title(); ?>
      </a>
    </h3>

    <a class="button button--tertiary" href="<?= esc_url(get_permalink()); ?>">
      Read more
    </a>
	</header>
</article>
