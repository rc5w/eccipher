<?php
/**
 * The noteworthy news template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header cat-block-headline">
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
	</header><!-- .entry-header -->

	<div class="entry-summary cat-block-excerpt">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

<?=do_shortcode('[ssba url="'.get_permalink().'"]'); ?>

	<a href="<?=the_permalink();?>" class="readmore">Continue Reading</a>

	<div class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-meta -->
</article><!-- #post -->