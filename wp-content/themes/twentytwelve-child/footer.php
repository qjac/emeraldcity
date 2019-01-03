<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		&copy;<?php auto_copyright("2015"); ?>
			
			<a href="<?php echo esc_url( __( 'https://jqdesign.co/') ); ?>" title="<?php esc_attr_e( 'Design + Development' ); ?>"><?php printf( __( '&ensp; JQ Design Co.' )); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>