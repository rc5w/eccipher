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

//define( 'ONDEMANDVIDEO', 42671 );

// Instantiate User Permissions
$isadmin =  current_user_can( 'read_private_posts' );
$canview = $api->canViewOnDemandVideos() || $isadmin;

$isvideoondemand = $api->isVideoOnDemandSub();

        $access = new am4UserAccess();
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
	// echo( "html is: " );
	// print_r( $tmp );
	$hasamemberproductaccess = $api->hasSubscriptionToProducts( $tmp, $ctmp );
	//	echo( "has?" . $hasamemberproductaccess );
    }
else
    {
	$hasamemberproductaccess = true;
    }

if ( $canview || $hasamemberproductaccess ) // if they can view the video AND it's not the on demand video or they have access to the on demand video
	{
	    $errorlink = '<a href="' . get_the_permalink() .'">Watch Video</a>';
	}
else if ( $canview )
    {
	// they are members, but they don't have access to that product
	    $errorlink = '<a href="https://reports.hitsongsdeconstructed.com/members/signup/HGOMhLrT" target="_blank">Sign Up</a>  ';
    }
else if( $api->isLoggedIn() )
	{
	    // they're logged in with no access
	    $errorlink = '<a href="https://www.hitsongsdeconstructed.com/subscribe/" target="_blank">Subscribe</a>  |  <a href="https://reports.hitsongsdeconstructed.com/members/signup/HGOMhLrT" target="_blank">Stream It On Demand</a>  ';
	}
else
    {
	    // they're not logged in
	    $errorlink = '<a href="https://reports.hitsongsdeconstructed.com/members/login/index " target="_blank">Login</a>  |  <a href="https://www.hitsongsdeconstructed.com/subscribe/" target="_blank">Subscribe</a>  |  <a href="https://reports.hitsongsdeconstructed.com/members/signup/HGOMhLrT" target="_blank">Stream It On Demand</a>  ';
}



?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="chart-summarycontainer">
<div class="chart-img">

    <?php
$prop_agg_image = get_post_meta( get_the_ID(), 'display_image', true );
if($prop_agg_image!=''){ ?>
  <img src="<?=get_post_meta( get_the_ID(), 'display_image', true );?>" />
<?php }else{ ?>
    	<?php the_post_thumbnail( array(515,377) ); ?>
    <?php } ?>

</div><!--/chart-img-->
<div class="chart-summary">
	<h1><?php the_title(); ?></h1>

  <?php echo $errorlink; ?>


	</div><!--/chart-summary-->
	<div class="cf"></div><!--/clearfloat-->
		<div class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	<div class="cf"></div><!--/clearfloat-->
	</div><!--/chart-summarycontainer-->


	</article><!-- #post -->
