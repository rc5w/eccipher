<?php
/**
 * Template Name: Event Page With Sidebar
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
		<div class="entry-content hsdpage">
		<?php while ( have_posts() ) : the_post(); ?>

<div class="wireheader">
<div id="wire-lft"><?php if ( has_post_thumbnail() ) : the_post_thumbnail( array(200,170) ); endif; ?></div><!--/charts-lft-->
<div id="wire-rht">
	<h1>HSD Events</h1>
	<p style="display:table-cell;height:120px;padding:0;margin:0;vertical-align:middle;"><?=get_the_title();?><span></span></p>
</div><!--/wire-rht-->
</div><!--wireheader-->
<div class="cf"></div>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
		</div><!-- .entry-content -->
	</div><!-- #content -->
</div><!-- #primary -->


<?php get_sidebar('event'); ?>
<?php get_footer();?>