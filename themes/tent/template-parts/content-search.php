<?php
/**
 * Search page results template
 *
 * @package tent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
	<header class="entry__header">
    <h2 class="entry__title">
      <a href="<?= esc_url(get_permalink()); ?>">
        <?= the_title(); ?>
      </a>
    </h2>
	</header>

	<div class="entry__content">

		<?php the_excerpt(); ?>

    <a class="button" href="<?= esc_url(get_permalink()); ?>">
      Read more
      <span class="button__icon" role="img" aria-label="">
        &#8594;
      </span>
    </a>
	</div>
</article>
