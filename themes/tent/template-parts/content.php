<?php
/**
 * Posts index template
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

    <?php
      the_title(
        sprintf(
          '<h2 class="entry-title entry-title--float"><a class="entry-title__link" href="%s">',
          esc_url(get_permalink())
        ),
        '</a></h2>'
      );
    ?>

		<?php if ('post' === get_post_type()) : ?>
      <div class="entry-meta entry-meta--float">
        <?php tent_posted_on(); ?> /
        <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?> /
        <?php tent_posted_by(); ?>
      </div>
		<?php endif; ?>
	</header>

	<div class="entry-content">
		<?php the_excerpt(); ?>

    <a class="button" href="%s">
      Read more
      <span class="button__icon" role="img" aria-label="">
        &#8594;
      </span>
    </a>
	</div>
</article>
