<?php
/**
 * Template Name: Academic 
 *
 * Description: Academic Page Template
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="primary" class="site-content primary-col">
	<div id="content" role="main">
		<div class="entry-content hsdpage hsdpageacademic">
			<h1><?=get_the_title();?></h1>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .entry-content -->
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar('academic'); ?>
<?php get_footer();?>