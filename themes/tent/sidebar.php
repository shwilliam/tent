<?php
/**
 * Sidebar w/ main widget areas
 *
 * @package tent
 */

  if ( !is_active_sidebar('sidebar-1')) {
    return;
  }
?>

<div id="secondary" class="sidebar" role="complementary">
	<?php dynamic_sidebar('sidebar-1'); ?>
</div><!-- #secondary -->
