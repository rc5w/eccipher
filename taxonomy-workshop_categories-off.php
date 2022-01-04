<?php
/**
 * The main template file for HSD
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<script>
(function(a,b,c,d,e,f,g,h){a[d]=a[d]||{q:[]};a[d].q.push(f);g=b.createElement(c);
g.async=1;g.src="//"+e+"/jsapi/v1.js";h=b.getElementsByTagName(c)[0];
h.parentNode.insertBefore(g,h)})(window,document,"script","ScreenPopperAPI",
"pop1.screenpopper.com",{"Load":["738/2725/a19542161ff9dd69fb17a9780410723a"]});
</script>
<div class="color-wrap">
	<div id="primary" class="content-area primary-col wsidebar">
	
	<?php if (is_tax( 'video_categories', 'product-overview' ) ) : ?>
	<h2>Product Overview</h2>
			<?php elseif (is_tax( 'video_categories', 'subscription-plans' ) ): ?>
		<h2>Subscription Overview</h2>
		<?php elseif (is_tax( 'video_categories', 'feature-releases' ) ): ?>
		<h2>New Feature Releases</h2>
		<?php endif; ?>
		
	
	

		
		<div id="content" class="site-content vid-tut flex" role="main">
		
		<?php if ( have_posts() ) : ?>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
            
				<?php get_template_part( 'content', 'video' );?>
			<?php endwhile; ?>

			

		<?php else : ?>
			<?php //get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

<?php twentythirteen_paging_nav(); ?>
<div class="cf"></div>
		</div><!-- #content -->
	</div><!-- #primary -->
    
    <?php get_sidebar( 'workshops' ); ?>
    </div>


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

<?php

/***** Check if post category is in blacklist 
$catid = array();
$categories = get_the_category();
$blacklist = array( '1', '15', '16', '19', '20', '21', '23', '25', '34', '35', '42', '43', '47', '48', '52', '55', '56', '122' );
foreach($categories as $category) { $catid[] = $category->term_id; }
foreach($catid as $singlecatid) { if( in_array($singlecatid, $blacklist) ) { $blacklisted = true; } }
if (!$blacklisted && !empty($categories) ) :
	get_template_part( 'content', 'category' );
endif; 
$blacklisted = false; //reset blacklist  */?>

<!--Screenpopper-->
<script type="text/javascript" src="//pop1.screenpopper.com/s-hub/738/2985/7ce313217aea017f10a36c4c5d887958/start.js"></script>
<!--Screenpopper-->

