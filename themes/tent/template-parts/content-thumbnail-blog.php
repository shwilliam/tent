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
          ['class' => 'blog-thumbnail__img']
        );
      ?>
    <?php endif; ?>
  </div>

	<header class="blog-thumbnail__header">
    <div class="blog-thumbnail__meta">
      <?php tent_posted_on(); ?> /
      <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
    </div>

    <h3 class="entry__title entry__title--small blog-thumbnail__title">
      <a href="<?= esc_url(get_permalink()); ?>">
        <?= the_title(); ?>
      </a>
    </h3>

    <a class="button blog-thumbnail__action" href="<?= esc_url(get_permalink()); ?>">
      Read entry
    </a>
	</header>
</div>
