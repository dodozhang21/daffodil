<?php
/**
 * @package daffodil
 * @since daffodil 1.1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php edit_post_link( __( 'Edit', 'daffodil' ), '<span class="edit-link">', '</span>' ); ?>
		<div class="entry-meta">
			<?php daffodil_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'daffodil' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'daffodil' ) );
				if ( $tags_list ) :
			?>
			<span class="tag-links">
				<?php printf( __( '%1$s', 'daffodil' ), $tags_list ); ?>
			</span>
		<?php endif; // End if $tags_list ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
