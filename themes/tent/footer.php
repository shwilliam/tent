<?php
/**
 * Site footer
 *
 * @package tent
 */

?>

		</div>

		<footer class="site-footer" role="contentinfo">
			<div class="site-footer__info">
				<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
			</div>
		</footer>

		<?php wp_footer(); ?>

	</body>
</html>
