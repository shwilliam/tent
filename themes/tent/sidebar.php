<?php
/**
 * Sidebar w/ main widget areas
 *
 * @package tent
 */

  if (!is_active_sidebar('sidebar__side')) {
    return;
  }
?>

<div class="sidebar" role="complementary">
  <?php dynamic_sidebar('sidebar__side'); ?>
</div>
