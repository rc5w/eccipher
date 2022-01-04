<?php
/**
 * Template Name: HSD Page - No Header
 *
 * Description: This is the new page templates for all pages
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area primary-col">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content hsdpage">

<div class="wireheader">
<div id="wire-lft"><?php if ( has_post_thumbnail() ) : the_post_thumbnail( array(200,170) ); endif; ?></div><!--/charts-lft-->
<div id="wire-rht-noheader">
	<h1><?=get_the_title();?></h1>
</div><!--/wire-rht-->
</div><!--wireheader-->
<div class="cf"></div>
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php if( is_page( 18786 ) || is_page( 19013 ) || is_page( 19562 ) ) : 
	get_sidebar( 'hsdtv' ); 
      else : 
	get_sidebar(); 
      endif; 
?>
<?php get_footer(); ?>