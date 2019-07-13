<?php
/**
 * Single posts template
 *
 * @package tent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header entry-header--float">
		<?php if (has_post_thumbnail()) : ?>
      <?php
        the_post_thumbnail(
          'large',
          ['class' => 'entry-header__img entry-header__img--fill']
        );
      ?>
		<?php endif; ?>

		<?php the_title('<h2 class="entry-title entry-title--float">', '</h2>'); ?>

		<div class="entry-meta entry-meta--float">
			<?php tent_posted_on(); ?> / <?php tent_comment_count(); ?> / <?php tent_posted_by(); ?>
		</div>
	</header>

	<div class="entry-content">
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
