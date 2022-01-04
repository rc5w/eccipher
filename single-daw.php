<?php
/*
 * Template Name: Daw Template
 * Template Post Type: daw
 */

get_header(); ?>

<div class="color-wrap">
		<div id="primary" class="content-area primary-col wsidebar">
		<div id="content" class="site-content hsdwire-articles" role="main">




			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

<?php if ( in_category( '149' ) ) : ?>
	<?php get_template_part( 'content', 'wirevideos' ); ?>
<?php else : ?>
	<?php get_template_part( 'content', 'ondemand' ); ?>
<?php endif; ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->



	<?php
	// Check if date of post is past 60 days -- If so, then display warning unless is yearly subscriber
	$post_life = (strtotime(date('F d, Y'))-strtotime(get_the_date())) / (60 * 60 * 24);
	if ( !has_term('free-articles', 'hsdwire_categories' ) ) {
      
        
        get_sidebar( 'workshops' );
		
	}

	?>



</div>
<div id="modal-error-nonyr" class="reveal-modal">
	<?=do_shortcode("[am4show have='p6' user_error='Pro_Yearly' guest_error='Pro_Yearly']"); ?>
	<a class="close-reveal-modal">&#215;</a>
</div>


<?php get_footer(); ?>
