<?php
/**
 * Shop thumbnail template 
 *
 * @package tent
 */

?>

<div id="shop-thumbnail-<?= $term_name; ?>" class="shop-thumbnail">
  <a class="reset-link" href="<?= esc_url($term_url); ?>">
    <header>
      <img class="shop-thumbnail__icon" src="<?= $term_icon_url; ?>" />

      <h3 class="screen-reader-text">
        <?= $term_name; ?> products
      </h3>
    </header>

    <div class="shop-thumbnail__content">
      <?= $term_description; ?>
    </div>

    <a class="button shop-thumbnail__action" href="<?= esc_url($term_url); ?>">
      <?= $term_name.' Stuff'; ?>
    </a>
  </a>
</div>
