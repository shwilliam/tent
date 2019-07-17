<?php
/**
 * Shop thumbnail template 
 *
 * @package tent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <a class="link-reset" href="<?= esc_url($term_url); ?>">
    <header class="entry-header">
      <img src="<?= $term_icon_url; ?>" />

      <h3 class="screen-reader-text">
        <?= $term_name; ?> products
      </h3>

      <div class="entry-meta">
        <?= $term_description; ?>
      </div>
    </header>

    <div class="entry-content">
      <a class="button" href="<?= esc_url($term_url); ?>">
        <?= $term_name.' Stuff'; ?>
      </a>
    </div>
  </a>
</article>
