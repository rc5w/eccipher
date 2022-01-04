<?php

/* Template Name: Single - HSD Landing */

get_template_part( 'header', 'hsd_landingpages' );
?>
<div class="hsdlanding-featured">
<?php the_post_thumbnail('full'); ?>
</div>
<div id="primary" class="content-area primary-col-hsdlanding">
	<div id="content" class="site-content" role="main">
		<?php while ( have_posts() ) : the_post();?>
		<?php the_content(); ?>
		<?php if ( has_term( 'free', 'campaign_type' ) ) : ?>
		<?php get_template_part( 'content', 'quotes' ); ?>
		<?php get_template_part( 'content', 'subscription' ); ?>
		<?php elseif ( has_term( 'report', 'campaign_type' ) ) : ?>
		<?php get_template_part( 'content', 'quotes' ); ?>
		<?php endif ?>
		<div class="cf"></div>
		<?php break; 
		endwhile; ?>

	</div><!-- #content -->
</div><!-- #primary -->
<div class="cf"></div>
<?php get_footer(); ?>