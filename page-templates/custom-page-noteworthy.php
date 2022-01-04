<?php
/**
 * Template Name: Noteworthy News
 *
 * Description: This is the noteworthy news page to the HSD website including sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>

	<div id="primary" class="content-area primary-col">
		<div id="content" class="site-content" role="main">
		<?php query_posts( 'cat=6' ); ?>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'noteworthy' );?>
			<?php endwhile; ?>
			<?php twentythirteen_paging_nav(); ?>
		<?php else : ?>
			<?php //get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
