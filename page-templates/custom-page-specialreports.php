<?php
/**
 * Template Name: Special Reports
 *
 * Description: This is the special reports page page to the HSD website including sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="primary" class="site-content primary-col">
	<div id="content" class="hsdwire" role="main">
<?php 
// Initialize Variables
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

$args = array(
	'category__in' => array( 24,53,54,44,45,46,36,37,38,57,58,59,119,120,121 ),
	'posts_per_page' => 10,
	'paged' => $paged
);


$wp_query = new WP_Query( $args );

// Special Reports Query
if ( $wp_query->have_posts() ) :		
 		while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
			<?php get_template_part( 'content', 'category' ); ?>
		<?php endwhile; // end of the loop. ?>
<?php endif; ?>

<?php twentythirteen_paging_nav(); ?>

	</div><!-- #content -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<div id="modal-error-nonbasic" class="reveal-modal">
	<?=do_shortcode("[am4show have='p6' user_error='Non_to_Basic' guest_error='Non_to_Basic']"); ?>
 	<a class="close-reveal-modal">&#215;</a>
</div>
<div id="modal-error-nonpro" class="reveal-modal">
	<?=do_shortcode("[am4show have='p6' user_error='Basic_to_Pro' guest_error='Non_to_Pro']"); ?>
	<a class="close-reveal-modal">&#215;</a>
</div>
<div id="modal-error-nonyr" class="reveal-modal">
	<?=do_shortcode("[am4show have='p6' user_error='Pro_Yearly' guest_error='Pro_Yearly']"); ?>
	<a class="close-reveal-modal">&#215;</a>
</div>
<?php get_footer(); ?>