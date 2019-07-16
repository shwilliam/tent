<?php
/**
 * Posts thumbnail template 
 *
 * @package tent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if (has_post_thumbnail()) : ?>
      <?php
        the_post_thumbnail(
          'large',
          ['class' => 'entry-header__img']
        );
      ?>
		<?php endif; ?>

    <h3 class="entry-title">
      <a class="entry-title__link" href="<?= esc_url(get_permalink()); ?>">
        <?= the_title(); ?>
      </a>
    </h3>

    <div class="entry-meta">
      <?php tent_posted_on(); ?> /
      <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
    </div>
	</header>

	<div class="entry-content">
    <a class="button" href="<?= esc_url(get_permalink()); ?>">
      Read more
      <span class="button__icon" role="img" aria-label="">
        &#8594;
      </span>
    </a>
	</div>
</article>
