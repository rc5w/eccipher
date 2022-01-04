<?php

/* Template Name: Taxonomy - HSD Chart Type */

get_header(); 

function filter_where( $where = '' ) { // posts  0 to 30 days old
	$where .= " AND post_date >= '" . date('Y-m-d', strtotime('-30 days')) . "'" . " AND post_date <= '" . date('Y-m-d', strtotime('0 days')) . "'";
	return $where;
} ?>

<div id="primary" class="content-area primary-col">
	<div id="content" class="site-content hsdcharts" role="main">

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
<?php add_filter( 'posts_where', 'filter_where' ); ?>
<?php query_posts( $query_string . '&paged=' . $paged ); ?>
<?php remove_filter( 'posts_where', 'filter_where' ); ?>

		<?php if ( have_posts() ) : ?>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( get_the_ID() !== 15326 ) : get_template_part( 'content', 'chartlist' ); endif; ?>
			<?php endwhile; ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
	</div><!-- #content -->
	<?php twentythirteen_paging_nav(); ?>
</div><!-- #primary -->
<?php get_sidebar( 'elementschart' ); ?>
<?php get_footer(); ?>