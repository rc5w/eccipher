<?php
/**
 * Template Name: Taxonomy - HSD Wire Category 
 *
 * Description: This is the main wire archive page
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */ 

get_header(); ?>

	<div id="primary" class="content-area primary-col">
		<div id="content" class="site-content hsdcharts">
<?php
if ( have_posts() ) : 
	while ( have_posts() ) : the_post();
		get_template_part( 'content', 'wirelist' );
	endwhile;
endif; ?>
		<?php twentythirteen_paging_nav(); ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar( 'hsdwire' ); ?>
<?php get_footer(); ?>