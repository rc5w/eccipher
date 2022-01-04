<?php
/**
 * Template Name: Archive
 *
 * Description: This is the archive page to the HSD website including sidebar
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
$catid = get_query_var('catid');
if ($catid == '') {
	$catid = array( 13,17,24,36,37,38,39,40,41,44,45,46,53,54,57,58,59,119,120,121 );
	//$catid = array( 6,38,40,86,87,88 );
} else { $catid = explode(",",$catid); }

$args = array(
	'category__in' => $catid,
	'posts_per_page' => 10,
	'paged' => $paged
);


$wp_query = new WP_Query( $args );

// Archive Query
if ( $wp_query->have_posts() ) :		
 		while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
			<?php get_template_part( 'content', 'archive' ); ?>
		<?php endwhile; // end of the loop. ?>
<?php endif; ?>
<?php twentythirteen_paging_nav(); ?>
	</div><!-- #content -->

</div><!-- #primary -->
<?php get_sidebar( 'archive' ); ?>
<div id="modal-error-nonyr" class="reveal-modal">
	<?=do_shortcode("[am4show have='p6' user_error='Pro_Yearly' guest_error='Pro_Yearly']"); ?>
	<a class="close-reveal-modal">&#215;</a>
</div>
<?php get_footer(); ?>