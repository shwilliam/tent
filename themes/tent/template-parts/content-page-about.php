<?php
/**
 * About page content template
 *
 * @package tent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if (!has_block('tent/hero-image-header')) : ?>
    <header class="entry__header entry__header--float">
      <?php the_title('<h2 class="entry__title">', '</h2>'); ?>
    </header>
  <?php endif; ?>

	<div class="entry__content container--small">
		<?php the_content(); ?>
	</div>
</article>
