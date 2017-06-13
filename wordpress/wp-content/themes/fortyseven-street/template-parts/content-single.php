<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FortySeven Street
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php fortyseven_street_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<?php if(has_post_thumbnail()): ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail('full'); ?>
		</div>
	<?php endif; ?>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fortyseven-street' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php fortyseven_street_entry_footer('<footer class="entry-footer">','</footer>'); ?><!-- .entry-footer -->
</article><!-- #post-## -->

