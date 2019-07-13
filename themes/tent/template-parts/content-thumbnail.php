<?php
/**
 * Posts thumbnail template 
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

    <?php
      the_title(
        sprintf(
          '<h3 class="entry-title"><a class="entry-title__link" href="%s">',
          esc_url(get_permalink())
        ),
        '</a></h3>'
      );
    ?>

		<?php if ('post' === get_post_type()) : ?>
      <div class="entry-meta">
        <?php tent_posted_on(); ?> /
        <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
      </div>
		<?php endif; ?>
	</header>

	<div class="entry-content">
    <?=
      sprintf(
        '<a class="button" href="%s">',
        esc_url(get_permalink())
      ).
      'Read more
        <span class="button__icon" role="img" aria-label="">
          &#8594;
        </span>
      </a>';
    ?>
	</div>
</article>
