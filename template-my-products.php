<?php
/**
 * Template Name: My Products
 *
 * Description: Academic Page Template
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

	<div id="primary" class="content-area primary-col full-width">
	<div class="header-container">
		<?php
	if ( is_post_type_archive() ) {
			?>
			<h1><?php post_type_archive_title(); ?></h1>
			<?php
	}
	?>
					</div>
		<div id="content" class="site-content hsdwire-articles flex" role="main">

<?php
$api = am4PluginsManager::getAPI();
 wp_reset_postdata();
function filter_where( $where = '' ) {
	// posts  0 to 60 days old
	$where .= " AND post_type in ( 'workshops', 'ondemand', 'video' ) ";
	return $where;
} ?>
		<?php //add_filter( 'posts_where', 'filter_where' ); ?>
		<?php query_posts(array( 'post_type' => array('workshops', 'ondemand', 'video') )); 
//echo $GLOBALS['wp_query']->request;
?>
		<?php //remove_filter( 'posts_where', 'filter_where' );  ?>
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ 
$any = false; 
?>
			<?php while ( have_posts() ) : the_post(); ?>
<? 

           $access = new am4UserAccess();
//echo( "post id: " . get_the_ID() );
$options = new am4_Settings_Post_Meta(get_the_ID());
//echo( "hmm" );
$thisproductaccess = $options->get('access');
//print_r( $thisproductaccess["product"] );
$hasamemberproductaccess = false;
if( $thisproductaccess["product"] )
    {
	//	echo( "checking in here?" );
	$tmp = array();
	$ctmp = array();
	if( $thisproductaccess["product"] )
	    foreach( $thisproductaccess["product"] as $pid=>$throwaway )
		{
		    $tmp[] = $pid;
		}
	if( $thisproductaccess["category"] )
	    foreach( $thisproductaccess["category"] as $pid=>$throwaway )
		{
		    $ctmp[] = $pid;
		}
	//	echo( $api->getUsername() . " -- html is: " );
	//	echo( "reg" );
	//	print_r( $tmp );
	//	echo( "c" );
	//	print_r( $ctmp );
	$hasamemberproductaccess = $api->hasSubscriptionToProducts( $tmp, $ctmp );
	//	echo( "has?" . $hasamemberproductaccess );
    }
else
    {
	continue;
	// echo( "nope, can view all?" );
	// $hasamemberproductaccess = true;
    }

if( $hasamemberproductaccess ) { 
$any = true;
?>
				<?php get_template_part( 'content', 'my-product' );?>
<? } ?>
			<?php endwhile; ?>



			<?php //get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
<? 
if( !$any ) { ?>
		You have no purchased content.
<? } ?>
<div class="cf"></div>
		</div><!-- #content -->
	</div><!-- #primary -->


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
<div id="modal-error-articlesub" class="reveal-modal">
	<?=do_shortcode("[am4show have='p6' user_error='paid_article_subscribe' guest_error='paid_article_subscribe']"); ?>
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
