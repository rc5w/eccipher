<?php
/**
 * The wire list template for displaying listings of hsdwire
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<div class="chart-summarycontainer">
<div class="chart-img">
	<a href="<?=the_permalink();?>">
		<?php the_post_thumbnail( array(200,170) ); ?>
	</a>
</div><!--/chart-img-->
<div class="chart-summary">
	<h1><?php if ( is_page() || is_tax( 'chart_type' ) || ( get_post_type() == 'hsd_charts' ) ) : echo get_post_meta( get_the_ID(), 'charts_title', true ); else : the_title(); endif; ?></h1>
	<p><?php echo wp_trim_words( get_the_excerpt(), 45 ); ?>
	   
</p>
	<a href="<?=the_permalink();?>">Read <img src="<?=get_stylesheet_directory_uri();?>/assets/img/right-arrow-small.png" /></a>
	
</div><!--/chart-summary-->
<div class="cf"></div><!--/clearfloat-->
</div><!--/chart-summarycontainer-->