<?php
/**
 * The chart list template for displaying chart summaries
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

 <?php 
// Instantiate aMember API
$api = am4PluginsManager::getAPI();

// Instantiate Variables
$post_life = (strtotime(date('F d, Y'))-strtotime(get_the_date())) / (60 * 60 * 24);
$access = false;
$signup = false;
$upgrade = false;

// Instantiate User Permissions
$isadmin =  current_user_can( 'read_private_posts' );
$isyearly = $api->isYearlySub();
$ismntly =  $api->isMonthlySub();
$isbasic =  $api->isBasicSub();
$isessentials =  $api->isEssentialsSub();
// $isyearly = $api->haveSubscriptions(array(8,9,12,14,15,16,17,18,19,22,23,26,27,34,35,40,43,44, 50, 56, 59, 61));
// $ismntly =  $api->haveSubscriptions(array(2,4,5,7,10,11,13,33, 60));
// $isbasic =  $api->haveSubscriptions(array(3));
// $isessentials =  $api->haveSubscriptions(array(57, 58));


if ( in_category('Free Report') || in_category('Sample Reports') ) { $access = true; }
elseif ( $ismntly || $isadmin || $isyearly ) { $access = true; }
else {
	if ( $post_life > 60 ) {
		if ( $isbasic ) : $errorlink = '<a href="#" data-reveal-id="modal-error-nonyr"  class="readmore">Upgrade</a>'; 
		elseif ( $isessentials ) : $errorlink = '<a href="/members/member/list-upgrade" target="_blank" class="readmore">Upgrade</a> ';
		else : $errorlink = '<a href="#" data-reveal-id="modal-error-nonyr" >Log In/Sign up <img src="'. get_stylesheet_directory_uri(). '/assets/img/right-arrow-small.png" /></a>'; endif;
	} elseif ( get_post_type() == 'hsd_charts' ) {
		if ( $ismntly ) : $access = true; 
		elseif ( $isessentials ) : $errorlink = '<a href="/members/member/list-upgrade" class="readmore">Upgrade</a> ';
		elseif ( $isbasic ) : $errorlink = '<a href="#" data-reveal-id="modal-error-nonpro" class="readmore">Upgrade</a> ';
		else : $errorlink = '<a href="#" data-reveal-id="modal-error-nonpro">Log In/Sign up <img src="'. get_stylesheet_directory_uri(). '/assets/img/right-arrow-small.png" /></a> '; endif; 
	} else {
		if ( $ismntly || $isbasic ) : $access = true; 
		elseif ( $isessentials ) : $errorlink = '<a href="/members/member/list-upgrade" target="_blank" class="readmore">Upgrade</a> ';
		else : $errorlink = '<a href="#" data-reveal-id="modal-error-nonbasic">Log In/Sign up <img src="'. get_stylesheet_directory_uri(). '/assets/img/right-arrow-small.png" /></a> '; endif; 
	}
} ?>

<div class="hsdchart-summarycontainer">
<div class="hsdchart-img">
	<?php the_post_thumbnail( array(89,76) ); ?>
</div><!--/chart-img-->
<div class="hsdchart-summary">
	<h1><?php if ( is_page() || ( get_post_type() == 'hsd_charts' ) ) : echo get_post_meta( get_the_ID(), 'charts_title', true ); else : the_title(); endif; ?></h1>
	<?php if ( is_tax( 'chart_type' ) ) : ?><p>Week of <?php echo get_post_meta( get_the_ID(), 'chart_week', true );?></p><? endif; ?>
	<p><?php if(!empty($post->post_excerpt)):
	
	echo wp_trim_words( get_the_excerpt(), 45 ); 
	
	else : false;
	
	endif;
		
	?></p>
	<?php if ( $access ) : ?>
	<a href="<?=the_permalink();?>">Go to chart <img src="<?=get_stylesheet_directory_uri();?>/assets/img/right-arrow-small.png" /></a>
    <?php else :echo $errorlink; endif; ?>
</div><!--/chart-summary-->
<div class="cf"></div><!--/clearfloat-->
</div><!--/chart-summarycontainer-->
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