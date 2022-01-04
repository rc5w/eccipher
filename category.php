<?php
/**
 * The HSD template for displaying Category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area primary-col">
		<div id="content" class="site-content hsdwire" role="main">



<?php 
function filter_where( $where = '' ) {
	// posts  0 to 60 days old
	$where .= " AND post_date >= '" . date('Y-m-d', strtotime('-90 days')) . "'" . " AND post_date <= '" . date('Y-m-d', strtotime('0 days')) . "'";
	return $where;
} ?>
		<?php /*** BLACKLIST CATEGORIES ***/ ?>
		<?php //add_filter( 'posts_where', 'filter_where' ); ?>
		<?php query_posts($query_string . '&cat=-1,-2,-3,-5,-6,-15,-16,-19,-20.-21,-23,-25,-34,-35,-42,-43,-47,-48,-49,-50,-51,-52,-55,-56,-122,-118'); ?>
		<?php //remove_filter( 'posts_where', 'filter_where' ); ?>
		<?php if ( have_posts() ) : ?>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( is_category( '149' ) ) : ?>
					<div class="hsdcharts"><?php get_template_part( 'content', 'chartlist' ); ?></div>
				<?php else : ?>
					<?php get_template_part( 'content', 'category' ); ?>
				<?php endif; ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php if( is_category('penns-picks') ) : get_sidebar( 'hsdwire' ); else : get_sidebar(); endif; ?>
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