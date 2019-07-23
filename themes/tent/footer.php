<?php
/**
 * Site footer
 *
 * @package tent
 */
?>

		</div>

		<footer class="site__footer" role="contentinfo">
      <div class="site__footer-content">
        <div class="site__footer-sidebar">
          <?php dynamic_sidebar('sidebar__footer'); ?>
        </div>

        <div class="site__footer-logo-wrapper">
          <img
            alt="Inhabitent Camping Supply Co"
            class="site__footer-logo"
            src="<?= get_stylesheet_directory_uri().'/images/logo__text--white.svg'; ?>"
          /> 
        </div>
      </div>
      <img
        class="site__footer-bg"
        srcset="
          <?=
            get_stylesheet_directory_uri().'/images/bg__wood.png 1x,'
            .get_stylesheet_directory_uri().'/images/bg__wood@2x.png 2x';
          ?>
        "
        src="<?= get_stylesheet_directory_uri().'/images/bg__wood.png'; ?>"
        alt=""
      >
		</footer>

		<?php wp_footer(); ?>

	</body>
</html>
