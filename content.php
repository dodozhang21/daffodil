<?php
/**
 * @package daffodil
 * @since daffodil 1.1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail(); ?>
	<?php endif; ?>
	<header class="entry-header">
		<h1 class="entry-title">
			<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="featured-post">
				<?php _e( 'Featured Post', 'daffodil' ); ?>
			</span>
			<?php endif; ?>
			<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'daffodil' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php daffodil_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'daffodil' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'daffodil' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'daffodil' ), '<span class="edit-link">', '</span>' ); ?>
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'daffodil' ) );
				if ( $tags_list ) :
			?>
			<span class="tag-links">
				<?php printf( __( '%1$s', 'daffodil' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( comments_open() || ( '0' != get_comments_number() && ! comments_open() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'daffodil' ), __( '1 Thought', 'daffodil' ), __( '% Thoughts', 'daffodil' ) ); ?></span>
		<?php endif; ?>

	</footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
