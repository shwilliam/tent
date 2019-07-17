<?php
/**
 * Single posts template
 *
 * @package tent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry__header entry__header--float">
		<?php if (has_post_thumbnail()) : ?>
      <?php
        the_post_thumbnail(
          'large',
          ['class' => 'entry__header-img entry__header-img--fill']
        );
      ?>
		<?php endif; ?>

		<?php the_title('<h2 class="entry__title entry__title--float">', '</h2>'); ?>

		<div class="entry__meta entry__meta--float">
			<?php tent_posted_on(); ?> / <?php tent_comment_count(); ?> / <?php tent_posted_by(); ?>
		</div>
	</header>

	<div class="entry__content">
		<?php the_content(); ?>
		<?php
			wp_link_pages(array(
				'before' => '<div class="page-links">' . esc_html('Pages:'),
				'after'  => '</div>',
			));
		?>
	</div>

	<footer class="entry-footer">
		<?php tent_entry_footer(); ?>
	</footer>
</article>
