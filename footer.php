<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Wildcats
 * @since Wildcats 0.3
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php printf('Powered by '); ?>
				<a href="http://wordpress.org">Wordpress</a>
				<?php printf(' | '); ?>
				<?php printf('Design by '); ?>
				<a href="mailto:mattia.mglrn@gmail.com" title="Scrivi a Mattia Migliorini">Mattia Migliorini</a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>