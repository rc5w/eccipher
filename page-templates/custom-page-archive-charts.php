<?php
/**
 * Template Name: Archive Charts
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
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$catargs = array(
	'orderby'	=> 'name',
	'style'		=> 'none',
	'hierarchial'	=> false,
	'hide_empty'	=> false
);
$types = get_terms( 'chart_type', $catargs );
foreach( $types as $type ) {
	$allslugs[] = $type->slug;
}

$args = array(
	'tax_query' 	=> array( array( 'taxonomy' => 'chart_type', 'field' => 'slug', 'terms' => $allslugs ) ),
	'posts_per_page'=> 10,
	'paged' 	=> $paged
);
$postcount = 0;
$query = new WP_Query( $args );
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$postcount++;
		$query->the_post();
		if ( get_the_ID() !== 15326 ) : get_template_part( 'content', 'chartlist' ); endif;
	}

} ?>
		</div><!-- #content -->
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text">Posts navigation</h1>
		<div class="nav-links">
		<?php if ($postcount == 10) : ?>
			<div class="nav-previous">
				<a href="/archive/charts/page/<?php echo $paged+1; ?>/" >
				<span class="meta-nav">&larr;</span> Older posts</a>
			</div>
		<?php endif; ?>
		<?php if ($paged !== 1) : ?>
			<div class="nav-next">
				<a href="/archive/charts/page/<?php echo $paged-1; ?>/" >
				Newer posts <span class="meta-nav">&rarr;</span></a>
			</div>
		<?php endif; ?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	</div><!-- #primary -->

<?php get_sidebar( 'elementschart' ); ?>
<?php get_footer(); ?>