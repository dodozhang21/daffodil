<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package daffodil
 * @since daffodil 1.1.0
 */
?>

	</div><!-- #main -->

	</div><!-- #page .hfeed .site -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="footerInner">
		<div class="site-info">
			<?php do_action( 'daffodil_credits' ); ?>
			<?php printf( __( 'Proudly powered by %1$s', 'daffodil' ), '<a href="http://wordpress.org/" title="A Semantic Personal Publishing Platform" rel="generator">WordPress</a> | ' ); ?>
			<?php printf( __( 'Theme %1$s by %2$s.', 'daffodil' ), 'daffodil', '<a href="http://regretless.com/" rel="designer">Ying Zhang</a>' ); ?>
		</div><!-- .site-info -->
		<span class="buttons">
			<?php printf( __( '<a id="top" href="#top" title="%1$s"><span>%1$s</span></a>', 'daffodil' ), 'Back to top' ); ?>
			<?php printf( __( '<a class="home" href="%1$s" title="%2$s"><span>%2$s</span></a>', 'daffodil' ), esc_url( home_url( '/' ) ), 'Back to home' ); ?> 
		</span><!-- .buttons -->
		</div>
	</footer><!-- .site-footer .site-footer -->

<?php wp_footer(); ?>

</body>
</html>