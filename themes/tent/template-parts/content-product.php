<?php
/**
 * Product template
 *
 * @package tent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('large'); ?>
		<?php endif; ?>

    <?php
      the_title(
        sprintf(
          '<h2 class="entry-header__title"><a href="%s" rel="bookmark">',
          esc_url(get_permalink())
        ),
        '</a></h2>'
      );
    ?>

    <div class="entry-meta">
      <?=
        number_format(
          get_post_custom()['price'][0], 
          2
        );  
      ?>
    </div><!-- .entry-meta -->
	</header><!-- .entry-header -->

</article><!-- #post-## -->
