<?php
/**
 * Comments template
 *
 * @package tent
 */

  if (post_password_required()) {
    return;
  }
?>

<div class="comments">

  <?php if (have_comments()) : ?>
    <h3 class="page__title page__title--small">
      <?php esc_html(comments_number('0 Comments', '1 Comment', '% Comments')); ?>
    </h3>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
    <nav class="navigation comments__navigation" role="navigation">
      <h2 class="screen-reader-text">
        <?php esc_html('Comment navigation'); ?>
      </h2>
      <div class="nav-links">

        <div class="nav-previous"><?php previous_comments_link(esc_html('Older Comments')); ?></div>
        <div class="nav-next"><?php next_comments_link(esc_html('Newer Comments')); ?></div>

      </div>
    </nav>
    <?php endif; ?>

    <ol class="comments__list">
      <?php
        wp_list_comments(array(
          'callback' => 'tent_comment_list'
        ));
      ?>
    </ol>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
    <nav class="navigation comment-navigation" role="navigation">
      <h3 class="screen-reader-text"><?php esc_html('Comment navigation'); ?></h3>
      <div class="nav-links">

        <div class="nav-previous">
          <?php previous_comments_link(esc_html('Older Comments')); ?>
        </div>
        <div class="nav-next">
          <?php next_comments_link(esc_html('Newer Comments')); ?>
        </div>

      </div>
    </nav>
    <?php endif; ?>

  <?php endif; ?>

  <?php
    if ( !comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
  ?>
    <p class="no-comments"><?php esc_html('Comments are closed.'); ?></p>
  <?php endif; ?>

  <?php comment_form(array(
    'class_form'           => 'comments__form',
    'title_reply'          => esc_html('Post a Comment'),
    'title_reply_before'   => '<h3 class="page__title page__title--small">',
    'title_reply_after'    => '</h3>',
    'comment_notes_before' => wp_kses('<p>Want to join the discussion? Feel free to contribute!</p>', array('p' => array('class' => ''))),
    'label_submit'         => esc_html('Submit'),
    'class_submit'         => 'button button--secondary',
    'cancel_reply_link'    => esc_html('[Cancel reply]'),
    'comment_field'       =>  '<label class="comments__label" for="comment">'
      ._x('Comment', 'noun')
      .'</label><textarea class="comments__input" id="comment" name="comment" cols="45" rows="8" aria-required="true">'
      .'</textarea></p>',
    'fields'               => array(
      'author' =>
        '<div class="flex flex--gutter"><label class="comments__label" for="author">'
        .__('Name', 'domainreference')
        .($req
          ? '<i class="required">*</i>'
          : ''
        )
        .'<input class="comments__input" id="author" name="author" type="text" value="'
        .esc_attr($commenter['comment_author'])
        .'" size="30" required/></label>',

      'email' =>
        '<label class="comments__label" for="email">'
        .__('Email', 'domainreference')
        .($req
          ?'<i class="required">*</i>'
          :''
        )
        .'<input class="comments__input" id="email" name="email" type="text" value="'
        .esc_attr($commenter['comment_author_email'])
        .'" size="30" required/></div></label>',

      'url' =>
        '<label class="comments__label" for="url">'
        .__('Website', 'domainreference')
        .'</label>'
        .'<input class="comments__input" id="url" name="url" type="text" value="'
        .esc_attr($commenter['comment_author_url'])
        .'" size="30"/>',

      'cookies' => '',
    ),
  )); ?>

</div>
