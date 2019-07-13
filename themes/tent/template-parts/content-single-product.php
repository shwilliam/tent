<?php
/**
 * Single product template
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

		<?php the_title('<h2 class="entry-title">', '</h2>'); ?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<footer class="entry-footer">
		<?php tent_entry_footer(); ?>
	</footer>
</article>
