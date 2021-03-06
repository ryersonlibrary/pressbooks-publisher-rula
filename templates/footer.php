<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Pressbooks Publisher
 */
?>

	</div><!-- #content -->

	<footer class="content-info">
		<?php if ( get_theme_mod( 'pressbooks_publisher_footer_message' ) !== '' ) { ?>
			<?php $contentinfo = get_theme_mod( 'pressbooks_publisher_footer_message' );
			printf(
				'<div class="container">%s</div> <!-- .container -->',
				apply_filters( 'pressbooks_publisher_content_info', $contentinfo )
			); ?>
		<?php } ?>
	</footer><!-- .content-info -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
