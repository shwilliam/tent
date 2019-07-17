<?php
/**
 * Single product template
 *
 * @package tent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('flex--split'); ?>>
	<header class="entry__header">
		<?php if (has_post_thumbnail()) : ?>
      <?php
        the_post_thumbnail(
          'large',
          ['class' => 'entry__header-img']
        );
      ?>
		<?php endif; ?>
	</header>

	<div class="entry__content">
    <?php the_title('<h2 class="entry__title entry__title--secondary">', '</h2>'); ?>

    $<?=
      number_format(
        get_post_custom()['price'][0], 
        2
      );  
    ?>

		<?php the_content(); ?>
	</div>
</article>
