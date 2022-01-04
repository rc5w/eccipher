<?php
/**
 * The category template for displaying content
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

//echo( "theid: " . $post->ID . "<br>");
$myaccess  = new am4UserAccess();
$settings = am4Protection::getPostAccess( $post );
//echo( $settings->{'protected'} );
$singleok = false; 
if(!$settings->{'protected'} || ($myaccess->isLoggedIn() && am4Protection::haveAccess(am4Protection::getPostRequirements($post), $settings))){
    $singleok = true;
}

//print_r( the_post() );
if ( in_category('Free Report') || in_category('Sample Reports') ) { $access = true; }
elseif ( $ismntly || $isadmin || $isyearly || $singleok ) { $access = true; }
else {
	if ( $post_life > 60 ) {
		if ( $isbasic ) : $errorlink = '<a href="#modal-error-nonyr"  rel="modal:open" class="readmore">Upgrade</a>';
		elseif ( $isessentials ) : $errorlink = '';
            // this won't happen but keeping it here
		elseif ( $isessentials ) : $errorlink = '<a href="/members/member/list-upgrade" target="_blank" class="readmore">Upgrade</a> ';
		else : $errorlink = '<a href="#modal-error-nonyr"  rel="modal:open">Log In/Sign up </a>'; endif;
	} elseif ( in_category('Paid Report') ) {
		if ( $ismntly ) : $access = true;
		elseif ( $isessentials ) : $errorlink = '';
            // this won't happen but keeping it here
		elseif ( $isessentials ) : $errorlink = '<a href="/members/member/list-upgrade" class="readmore">Upgrade</a> ';
		elseif ( $isbasic ) : $errorlink = '<a href="#" data-reveal-id="modal-error-nonpro" class="readmore">Upgrade</a> ';
		else : $errorlink = '<a href="#modal-error-nonpro"  rel="modal:open">Log In/Sign up </a> '; endif;
	} else {
		if ( $ismntly || $isbasic ) : $access = true;
		elseif ( $isessentials ) : $errorlink = '';
            // this won't happen but keeping it here
		elseif ( $isessentials ) : $errorlink = '<a href="/members/member/list-upgrade" target="_blank" class="readmore">Upgrade</a> ';
		else : $errorlink = '<a href="#modal-error-nonbasic"  rel="modal:open">Log In/Sign up </a> '; endif;
	}
}

// $meta = get_post_meta( get_the_ID(), 'report_pdf', true );
// if( !$ismntly && !$isyearly && $isessentials && !$meta )
// {
// }
// else
{

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="chart-summarycontainer">
<div class="chart-img">
	<?php the_post_thumbnail( array(515,377) ); ?>
</div><!--/chart-img-->
<div class="chart-summary">
	<h1><?php the_title(); ?></h1>
	<!--<p><?php echo wp_trim_words( get_the_excerpt(), 45 ); ?></p>-->
	<p><?php echo get_excerpt(200); ?></p>
<!--<?=get_the_ID()?>-->

	<?php if ( $access ) : ?>
		<span class="text-link">Pro Report:</span> <a href="<?=the_permalink();?>">Read Report <!--<img src="<?=get_stylesheet_directory_uri();?>/assets/img/right-arrow-small.png" />--></a>
		<br/>
	<?php else :echo $errorlink; endif; ?>


	<?php

	if ($meta == '') : ?>
			<?php else : ?>
<? if( $isessentials || $access ) { ?>
		<span class="text-link" style="font-style: italic;">Essentials</span> <span class="text-link">Report:</span> <a href="<?=get_post_meta( get_the_ID(), 'report_pdf', true );?>">Download PDF <!--<img src="<?=get_stylesheet_directory_uri();?>/assets/img/right-arrow-small.png" />--></a>
	<br />
<? } ?>
		<?php endif; ?>






		<?php if ( $access ) : ?>
			<?php $prop_video_walkthrough = get_post_meta( get_the_ID(), 'video_walkthrough', true );
			if($prop_video_walkthrough!=''){ ?>

			<span class="text-link">Video Deconstruction:</span> <a href="<?=get_post_meta( get_the_ID(), 'video_walkthrough', true );?>" class="vp-a">Watch Video</a>
			<?php } ?>
		<?php  endif; ?>



</div><!--/chart-summary-->
<div class="cf"></div><!--/clearfloat-->
	<div class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-meta -->
<div class="cf"></div><!--/clearfloat-->
</div><!--/chart-summarycontainer-->


</article><!-- #post -->


          <? } ?>
