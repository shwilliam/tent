<?php
/**
 * Posts index template
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

    <?php
      the_title(
        sprintf(
          '<h2 class="entry__title entry__title--float"><a class="entry__title__link" href="%s">',
          esc_url(get_permalink())
        ),
        '</a></h2>'
      );
    ?>

    <?php if ('post' === get_post_type()) : ?>
      <div class="entry__meta entry__meta--float">
        <?php tent_posted_on(); ?> /
        <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?> /
        <?php tent_posted_by(); ?>
      </div>
    <?php endif; ?>
  </header>

  <div class="entry__content">
    <?php the_excerpt(); ?>


    <div class="entry__action">
      <?=
        sprintf(
          '<a class="button" href="%s">',
          esc_url(get_permalink())
        ).
        'Read more
          <span class="button__icon" role="img" alt="" aria-label="">
            &#8594;
          </span>
        </a>';
      ?>
    </div>
  </div>
</article>
