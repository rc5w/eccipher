<?php
/**
 * The archive template for displaying content
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
$isfree = in_category('Free Report');
$ispaid = in_category('Paid Report');
$post_life = (strtotime(date('F d, Y'))-strtotime(get_the_date())) / (60 * 60 * 24);
$access = false;
$signup = false;
$upgrade = false;

// Instantiate User Permissions
$isadmin =  current_user_can( 'read_private_posts' );
// $isyearly = $api->haveSubscriptions(array(8,9,12,14,15,16,17,18,19,22,23,26,27,34,35,40,43,44, 50, 56, 59, 61));
// $ismntly =  $api->haveSubscriptions(array(2,4,5,7,10,11,13,33, 60));
// $isbasic =  $api->haveSubscriptions(array(3));
// $isessentials =  $api->haveSubscriptions(array(57, 58));
// $isyearly = $api->haveSubscriptions(array(8,9,12,14,15,16,17,18,19,22,23,26,27,34,35,40,43,44, 50,51,52,53,54,56, 59, 61));
// $ismntly =  $api->haveSubscriptions(array(2,4,5,7,10,11,13,33, 60));
// $isbasic =  $api->haveSubscriptions(array(3));
// $isessentials =  $api->haveSubscriptions(array(57, 58));

$isyearly = $api->isYearlySub();
$ismntly =  $api->isMonthlySub();
$isbasic =  $api->isBasicSub();
$isessentials =  $api->isEssentialsSub();


if ( in_category('Free Report') || in_category('Sample Reports') ) { $access = true; }
elseif ( $ismntly || $isadmin || $isyearly  ) { $access = true; }
else {
	if ( $post_life > 60 ) {
		if ( $isbasic ) : $errorlink = '<a href="/sign-up-today/" target="_blank" class="readmore">Upgrade</a>'; 
		elseif ( $isessentials ) : $errorlink = '<a href="/members/member/list-upgrade" target="_blank" class="readmore">Upgrade</a> ';
		else : $errorlink = '<a href="/members/login/index" target="_blank">Log In/Sign up <img src="'. get_stylesheet_directory_uri(). '/assets/img/right-arrow-small.png" /></a>'; endif;
	} elseif ( in_category('Paid Report') ) {
		if ( $ismntly ) : $access = true; 
		elseif ( $isbasic ) : $errorlink = '<a href="/sign-up-today/" target="_blank" class="readmore">Upgrade</a> ';
		elseif ( $isessentials ) : $errorlink = '<a href="/members/member/list-upgrade" target="_blank" class="readmore">Upgrade</a> ';
		else : $errorlink = '<a href="/members/login/index" target="_blank">Log In/Sign up <img src="'. get_stylesheet_directory_uri(). '/assets/img/right-arrow-small.png" /></a> '; endif; 
	} else {
		if ( $ismntly || $isbasic ) : $access = true; 
		elseif ( $isessentials ) : $errorlink = '<a href="/members/member/list-upgrade" target="_blank" class="readmore">Upgrade</a> ';
		else : $errorlink = '<a href="/members/login/index" target="_blank">Log In/Sign up <img src="'. get_stylesheet_directory_uri(). '/assets/img/right-arrow-small.png" /></a> '; endif; 
	} ?>
<?php
} ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="chart-summarycontainer">
<div class="chart-img">
	<?php the_post_thumbnail( array(200,170) ); ?>
</div><!--/chart-img-->
<div class="chart-summary">
	<h1><?php the_title(); ?></h1>
	<p><?php echo wp_trim_words( get_the_excerpt(), 45 ); ?></p>
	<?php if ( $access ) : ?>
		<a href="<?=the_permalink();?>">Continue Reading <img src="<?=get_stylesheet_directory_uri();?>/assets/img/right-arrow-small.png" /></a>
	<?php else :echo $errorlink; endif; ?>
</div><!--/chart-summary-->
<div class="cf"></div><!--/clearfloat-->
	<div class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-meta -->
<div class="cf"></div><!--/clearfloat-->
</div><!--/chart-summarycontainer-->

</article><!-- #post -->