<?php

/* Template Name: Single - HSD Chart Post */

get_header(); 
?>

<div id="primary" class="content-area primary-col">
	<div id="content" class="site-content hsdcharts" role="main">
		<?php while ( have_posts() ) : the_post(); ?>

<?php

$post_life = (strtotime(date('F d, Y'))-strtotime(get_the_date())) / (60 * 60 * 24);
if ( $post_life > 30 ) :
	$api = am4PluginsManager::getAPI();
	if( $api->haveSubscriptions(array(8,9,12,14,16,17,18,19,27)) || current_user_can( 'read_private_posts' ) ) : ?>

	<div class="chartsheader">
	<div id="charts-lft"><?php if ( has_post_thumbnail() ) : the_post_thumbnail( array(200,170) ); endif; ?></div><!--/charts-lft-->
	<div id="charts-rht">
		<h1><?=get_post_meta( get_the_ID(), 'charts_title', true );?></h1>
		<span>#1</span> <p><?=get_post_meta( get_the_ID(), 'charts_rankone', true );?></p>
	</div><!--/charts-rht-->
	</div><!--chartsheader-->
	<?php the_content(); ?>

	<?php else :
		echo do_shortcode("[am4show have='p6' user_error='Pro_Yearly' guest_error='Pro_Yearly']");
	endif;
else : ?>
	<div class="chartsheader">
	<div id="charts-lft"><?php if ( has_post_thumbnail() ) : the_post_thumbnail( array(200,170) ); endif; ?></div><!--/charts-lft-->
	<div id="charts-rht">
		<h1><?=get_post_meta( get_the_ID(), 'charts_title', true );?></h1>
		<span>#1</span> <p><?=get_post_meta( get_the_ID(), 'charts_rankone', true );?></p>
	</div><!--/charts-rht-->
	</div><!--chartsheader-->
	<?php the_content(); ?>
<?php endif;
break;
endwhile; ?>
	</div><!-- #content -->
</div><!-- #primary -->
<script type="text/javascript">
jQuery(document).ready(function($){
	$('#spotify-img').click(function(){
		//$('#spotify-playlist').slideDown(500);
	});
	$('.spotify-link').click(function(){
		window.open( this.href, '_blank', 'width=400,height=475,toolbar=1,resizable=0' );
	});
});
</script>
<?php get_sidebar( 'elementschart' ); ?>
<?php get_footer(); ?>