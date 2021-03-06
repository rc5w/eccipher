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
// $isadmin =  current_user_can( 'read_private_posts' );
// $isyearly = $api->isYearlySub();
// $ismntly =  $api->isMonthlySub();
// $isbasic =  $api->isBasicSub();
// $isessentials =  $api->isEssentialsSub();

// added for individual access 
$myaccess  = new am4UserAccess();
//print_r( $post );
$settings = am4Protection::getPostAccess( $post );
$ok = false; 
if($settings->{'protected'} && ($myaccess->isLoggedIn() && am4Protection::haveAccess(am4Protection::getPostRequirements($post), $settings))){
    $ok = true;
}
// finished

if ( in_category('Free Report') || in_category('Sample Reports') ) { $access = true; }
elseif ( $ismntly || $isadmin || $isyearly || $ok ) { $access = true; }
else {
	if ( $post_life > 60 ) {
		if ( $isbasic ) : $errorlink = '<a href="#" data-reveal-id="modal-error-nonyr" class="readmore">Upgrade</a>';
		elseif ( $isessentials ) : $errorlink = '';
            // this won't happen but keeping it here
		elseif ( $isessentials ) : $errorlink = '<a href="/members/member/list-upgrade" target="_blank" class="readmore">Upgrade</a> ';
		else : $errorlink = '<a href="#" data-reveal-id="modal-error-nonyr">Log In/Sign up <class="hidden" img src="'. get_stylesheet_directory_uri(). '/assets/img/right-arrow-small.png" /></a>'; endif;
	} elseif ( in_category('Paid Report') ) {
		if ( $ismntly ) : $access = true;
		elseif ( $isessentials ) : $errorlink = '';
            // this won't happen but keeping it here
		elseif ( $isessentials ) : $errorlink = '<a href="/members/member/list-upgrade" class="readmore">Upgrade</a> ';
		elseif ( $isbasic ) : $errorlink = '<a href="#" data-reveal-id="modal-error-nonpro" class="readmore">Upgrade</a> ';
		else : $errorlink = '<a href="#" data-reveal-id="modal-error-nonpro">Log In/Sign up <img class="hidden" src="'. get_stylesheet_directory_uri(). '/assets/img/right-arrow-small.png" /></a> '; endif;
	} else {
		if ( $ismntly || $isbasic ) : $access = true;
		elseif ( $isessentials ) : $errorlink = '';
            // this won't happen but keeping it here
		elseif ( $isessentials ) : $errorlink = '<a href="/members/member/list-upgrade" target="_blank" class="readmore">Upgrade</a> ';
		else : $errorlink = '<a href="#" data-reveal-id="modal-error-articlesub"">Log In/Sign up <img class="hidden" src="'. get_stylesheet_directory_uri(). '/assets/img/right-arrow-small.png" /></a> '; endif;
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

<div class="chart-summarycontainer">
<div class="chart-img">
	<?php the_post_thumbnail( array(515,377) ); ?>
</div><!--/chart-img-->
<div class="chart-summary">
	<h1><?php the_title(); ?></h1>
	<!--<p><?php echo wp_trim_words( get_the_excerpt(), 45 ); ?></p>-->
	<p><?php echo get_excerpt(200); ?></p>


<?php if ( $access ) : ?>
						<a href="<?=the_permalink();?>">Download Logic Project</a>
			<?php else :echo $errorlink; endif; ?>
    

	<?php /* if ( has_term('free-articles', 'hsdwire_categories' ) ) {?>
			<a href="<?=the_permalink();?>">Continue Reading</a>
	<?php } elseif ( has_term('paid-articles', 'hsdwire_categories' ) ) {?>

			<?php if ( $access ) : ?>
						<a href="<?=the_permalink();?>">Continue Reading</a>
			<?php else :echo $errorlink; endif; ?>
	<?php } */ ?>



	</div><!--/chart-summary-->
	<div class="cf"></div><!--/clearfloat-->
		<div class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	<div class="cf"></div><!--/clearfloat-->
	</div><!--/chart-summarycontainer-->


	</article><!-- #post -->

          <? } ?>
