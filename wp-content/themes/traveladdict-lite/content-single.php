<?php
/**
 *	Template part for displaying content single.
 *
 *	@package TravelAddict Lite
 */
?>
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() && ( get_theme_mod( 'post_feat_image' ) != 1 ) ) : ?>
		<div class="single-thumb">
			<?php the_post_thumbnail('traveladdict-lite-entry-thumb'); ?>
		</div>	
	<?php endif; ?>	

	<div class="post-inner">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<div class="entry-meta">
				<?php amadeus_posted_on(); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'traveladdict-lite' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php amadeus_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>	
</article><!-- #post-## -->