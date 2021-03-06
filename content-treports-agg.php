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

// $isyearly = $api->haveSubscriptions(array(8,9,12,14,15,16,17,18,19,22,23,26,27,34,35,40,43,44, 50, 51, 52,53,54,56));
// $ismntly =  $api->haveSubscriptions(array(2,4,5,7,10,11,13,33));
// $isbasic =  $api->haveSubscriptions(array(3));
// $isessentials =  $api->haveSubscriptions(array(57, 58, 59, 60, 61));

//echo( $isyearly );

// added for individual access 
$myaccess  = new am4UserAccess();
//print_r( $post );
$settings = am4Protection::getPostAccess( $post );
$ok = false; 
if($settings->{'protected'} && ($myaccess->isLoggedIn() && am4Protection::haveAccess(am4Protection::getPostRequirements($post), $settings))){
    $ok = true;
}
// finished

//echo( "prit: ($ok) ($access)" . ($settings->{'protected'}) );

if ( in_category('Free Report') || in_category('Sample Reports') ) { $access = true; }
elseif ( $ismntly || $isadmin || $isyearly || $ok ) { $access = true; }
else {
	if ( $post_life > 60 ) {
		if ( $isbasic ) : $errorlink = '<a href="#" data-reveal-id="modal-error-nonyr" class="readmore">Upgrade</a>';
		elseif ( $isessentials ) : $errorlink = '';
            // this won't happen but keeping it here
		elseif ( $isessentials ) : $errorlink = '<a href="/members/member/list-upgrade" target="_blank" class="readmore">Upgrade</a> ';
		else : $errorlink = '<a href="#" data-reveal-id="modal-error-nonyr">Log In/Sign up <img src="'. get_stylesheet_directory_uri(). '/assets/img/right-arrow-small.png" /></a>'; endif;
	} elseif ( in_category('Paid Report') ) {
		if ( $ismntly ) : $access = true;
		elseif ( $isessentials ) : $errorlink = '';
            // this won't happen but keeping it here
		elseif ( $isessentials ) : $errorlink = '<a href="/members/member/list-upgrade" class="readmore">Upgrade</a> ';
		elseif ( $isbasic ) : $errorlink = '<a href="#" data-reveal-id="modal-error-nonpro" class="readmore">Upgrade</a> ';
		else : $errorlink = '<a href="#" data-reveal-id="modal-error-nonpro">Log In/Sign up <img src="'. get_stylesheet_directory_uri(). '/assets/img/right-arrow-small.png" /></a> '; endif;
	} else {
		if ( $ismntly || $isbasic ) : $access = true;
		elseif ( $isessentials ) : $errorlink = '';
            // this won't happen but keeping it here
		elseif ( $isessentials ) : $errorlink = '<a href="/members/member/list-upgrade" target="_blank" class="readmore">Upgrade</a> ';
		else : $errorlink = '<a href="#" data-reveal-id="modal-error-nonbasic">Log In/Sign up <img src="'. get_stylesheet_directory_uri(). '/assets/img/right-arrow-small.png" /></a> '; endif;
	}
}

$meta = get_post_meta( get_the_ID(), 'report_pdf', true );
if( $isessentials && !$meta )
{

}
else
{

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="chart-summarycontainer" 222>
<div class="chart-img">
	<?php the_post_thumbnail( array(515,377) ); ?>
</div><!--/chart-img-->
<div class="chart-summary">
	<h1><?php the_title(); ?></h1>
	<!--<p><?php echo wp_trim_words( get_the_excerpt(), 45 ); ?></p>-->
	<p><?php echo get_excerpt(200); ?></p>

	<?php

	if ($meta == '') : ?>
			<?php else : ?>
<? if( $isessentials || $access ) { ?>
		<span class="text-link" style="font-style: italic;">Essentials</span> <span class="text-link">Report:</span> <a href="<?=get_post_meta( get_the_ID(), 'report_pdf', true );?>">Download PDF <!--<img src="<?=get_stylesheet_directory_uri();?>/assets/img/right-arrow-small.png" />--></a>
<? } ?>
		<?php endif; ?>



	<br />
	<?php if ( $access ) : ?>
		<span class="text-link">Trend Report:</span> <a href="<?=the_permalink();?>">
    
    <?php if (is_post_type_archive( 'treports' )) : ?>
    Read Report 
    <?php else : ?>
    Watch Trend Brief
    <?php endif; ?>
    
    <!--<img src="<?=get_stylesheet_directory_uri();?>/assets/img/right-arrow-small.png" />--></a>
	<?php else :echo $errorlink; endif; ?>



</div><!--/chart-summary-->
<div class="cf"></div><!--/clearfloat-->
	<div class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-meta -->
<div class="cf"></div><!--/clearfloat-->
</div><!--/chart-summarycontainer-->


</article><!-- #post -->
          <? } ?>
