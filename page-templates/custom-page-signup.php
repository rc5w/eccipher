<?php
/**
 * Template Name: Sign-Up
 *
 * Description: This is the archive page to the HSD website including sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>
<div id="primary" class="site-content primary-col">
	<div id="content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php //find actual content in content-signup.php ?>
			<?php get_template_part( 'content', 'signup' ); ?>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->
</div><!-- #primary -->
<?php get_sidebar( 'signup' ); ?>
<?php get_footer(); ?>