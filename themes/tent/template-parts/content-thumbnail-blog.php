<?php
/**
 * Journal posts thumbnail template 
 *
 * @package tent
 */

?>

<div id="blog-thumbnail-<?php the_ID(); ?>" <?php post_class('blog-thumbnail'); ?>>
  <div class="blog-thumbnail__img-wrapper">
    <?php if (has_post_thumbnail()) : ?>
      <?php
        the_post_thumbnail(
          'large',
          ['class' => 'entry__header-img blog-thumbnail__img']
        );
      ?>
    <?php endif; ?>
  </div>

	<header class="entry__header blog-thumbnail__header">
    <div class="entry__meta blog-thumbnail__meta">
      <?php tent_posted_on(); ?> /
      <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
    </div>

    <h3 class="entry__title blog-thumbnail__title">
      <a class="entry__title__link" href="<?= esc_url(get_permalink()); ?>">
        <?= the_title(); ?>
      </a>
    </h3>

    <a class="button blog-thumbnail__action" href="<?= esc_url(get_permalink()); ?>">
      Read entry
      <span class="button__icon" role="img" aria-label="">
        &#8594;
      </span>
    </a>
	</header>
</div>
