<?php
/**
 * Template Name: Archive - HSD Charts 
 *
 * Description: This is the main elements charts page
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */ 

get_header(); ?>

	<div id="primary" class="content-area primary-col">
		<div id="content" class="site-content hsdcharts">
		
<?php

$catargs = array(
	'orderby'	=> 'name',
	'style'		=> 'none',
	'hierarchial'	=> false,
	'hide_empty'	=> false
);
$types = get_terms( 'chart_type', $catargs );
$typeids = array();
foreach ( $types as $type ) { $typeids[] = $type->term_id; }

/** Begin Loop **/
foreach ( $typeids as $id ) {
	$args = array(
		'tax_query'	=> array( array( 'taxonomy' => 'chart_type', 'field' => 'term_id', 'terms' => $id ) ),
		'posts_per_page'=> 1
	);
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			if ( get_the_ID() !== 15326 ) : get_template_part( 'content', 'chartlist' ); endif;
		}
	}
}

?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_sidebar( 'elementschart' ); ?>
<?php get_footer(); ?>