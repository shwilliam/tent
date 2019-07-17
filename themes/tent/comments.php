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
		<h2 class="comments__title">
			<?php esc_html(comments_number('0 Comments', '1 Comment', '% Comments')); ?>
		</h2>

		<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
		<nav class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text">
				<?php esc_html('Comment navigation'); ?>
			</h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link(esc_html('Older Comments')); ?></div>
				<div class="nav-next"><?php next_comments_link(esc_html('Newer Comments')); ?></div>

			</div>
		</nav>
		<?php endif; ?>

		<ol class="comment-list">
			<?php
				wp_list_comments(array(
					'callback' => 'tent_comment_list'
				));
			?>
		</ol>

		<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
		<nav class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html('Comment navigation'); ?></h2>
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
		'title_reply'          => esc_html( 'Post a Comment' ),
		'comment_notes_before' => wp_kses( '<p class="comment-notes">Want to join the discussion? Feel free to contribute!</p>', array( 'p' => array( 'class' => '' ) ) ),
		'label_submit'         => esc_html( 'Submit' ),
		'cancel_reply_link'    => esc_html( '[Cancel reply]' )
	)); ?>

</div>
