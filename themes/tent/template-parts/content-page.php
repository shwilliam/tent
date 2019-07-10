<?php
/**
 * Page content template
 *
 * @package tent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if (!is_front_page()) : ?>
    <header class="entry-header">
      <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
    </header><!-- .entry-header -->
  <?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages(array(
				'before' => '<div class="page-links">'.esc_html('Pages:'),
				'after'  => '</div>',
			));
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
