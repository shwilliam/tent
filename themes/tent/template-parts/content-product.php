<?php
/**
 * Product template
 *
 * @package tent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('shop__item'); ?>>
	<header class="entry__header">
		<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('large', array('class' => 'shop__item-img')); ?>
		<?php endif; ?>

    <div class="shop__item-description">
      <?php
        the_title(
          sprintf(
            '<h2 class="shop__item-title"><a href="%s">',
            esc_url(get_permalink())
          ),
          '</a></h2>'
        );
      ?>

      <div class="entry__meta shop__item-price">
        $<?=
          number_format(
            get_post_custom()['price'][0], 
            2
          );  
        ?>
      </div>
    </div>

	</header>
</article>
