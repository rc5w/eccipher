<?php
/**
 * Template Name: Archive - HSD Wire 
 *
 * Description: This is the main wire archive page
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */ 

get_header(); ?>
	<script>
(function(a,b,c,d,e,f,g,h){a[d]=a[d]||{q:[]};a[d].q.push(f);g=b.createElement(c);
g.async=1;g.src="//"+e+"/jsapi/v1.js";h=b.getElementsByTagName(c)[0];
h.parentNode.insertBefore(g,h)})(window,document,"script","ScreenPopperAPI",
"pop1.screenpopper.com",{"Load":["738/2725/a19542161ff9dd69fb17a9780410723a"]});
</script>

	<div id="primary" class="content-area primary-col">
    	
		<div id="content" class="site-content hsdcharts">
<?php if (!is_user_logged_in()): ?>
<!----Screenpopper
<script type="text/javascript" src="//pop1.screenpopper.com/s-hub/738/2985/7ce313217aea017f10a36c4c5d887958/start.js"></script>
Screenpopper---->
<?php endif; ?>
<?php 

$args = array(
				   
				   'post_type' => 'hsd_wire',
				   'posts_per_page' => 15,
				   'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
			           'hsdwire_categories' => 'articles, penns-picks, videos',			
				   );

query_posts($args); ?>
<?php

if ( have_posts()) : 
	while ( have_posts() ) : the_post();
		get_template_part( 'content', 'wirelist' );
	endwhile;

endif; ?>
<?php wp_reset_query(); ?>
		</div><!-- #content -->
		<?php twentythirteen_paging_nav(); ?>
	</div><!-- #primary -->

<?php get_sidebar( 'hsdwire' ); ?>


<?php get_footer(); ?>