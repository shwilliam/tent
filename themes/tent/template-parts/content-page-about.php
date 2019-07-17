<?php
/**
 * About page content template
 *
 * @package tent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if (!has_block('tent/hero-image-header')) : ?>
    <header class="entry-header entry-header--float">
      <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
    </header><!-- .entry-header -->
  <?php endif; ?>

	<div class="entry-content container--small">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
