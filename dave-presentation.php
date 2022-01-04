<?php
/**
 * Template Name: Dave Presentation With Sidebar
 *
 * Description: This is the front page to the HSD website including sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="primary" class="site-content primary-col">
	<div id="content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
			<?php //comments_template( '', true ); ?>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->
</div><!-- #primary -->


<?php if ( is_page( 17107 ) ) : get_sidebar('hsdtv'); else : get_sidebar('davepresentation'); endif; ?>
<?php get_footer();?>
