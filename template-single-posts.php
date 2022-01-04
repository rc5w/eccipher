<?php
/**
 * Template Name: Template - subhide
 * Template Post Type: post
 * The HSD Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
get_header(); 
?>

<div class="color-wrap">
	<div id="primary" class="content-area primary-col wsidebar">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

<?php if ( in_category( '149' ) ) : ?>
	<?php get_template_part( 'content', 'wirevideos' ); ?>
<?php else : ?>
	<?php get_template_part( 'content', get_post_format() ); ?>
	<?php //twentythirteen_post_nav(); ?>
	<?php //comments_template(); ?>
<?php endif; ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php  ?>

<?php
// Check if date of post is past 60 days -- If so, then display warning unless is yearly subscriber
$post_life = (strtotime(date('F d, Y'))-strtotime(get_the_date())) / (60 * 60 * 24);

$myaccess  = new am4UserAccess();
$settings = am4Protection::getPostAccess( $post );
$singleok = false; 
if(!$settings->{'protected'} || ($myaccess->isLoggedIn() && am4Protection::haveAccess(am4Protection::getPostRequirements($post), $settings))){
    $singleok = true;
}

if ( !has_term('free-articles', 'hsdwire_categories' ) ) {
	$api = am4PluginsManager::getAPI();
			if( $api->isMonthlySub() || $api->isYearlySub() || current_user_can( 'read_private_posts' ) || $singleok ) {
			get_sidebar( 'reports' );
			} else {
				get_sidebar( 'articles' );
			}
}

?>

</div>
<div id="modal-error-nonyr" class="reveal-modal">
	<?=do_shortcode("[am4show have='p6' user_error='Pro_Yearly' guest_error='Pro_Yearly']"); ?>
	<a class="close-reveal-modal">&#215;</a>
</div>

<script>
   
    if ( $('.reports-post').hasClass( "unpublished" ) ) {
 
       var ids = $('.reports-post.unpublished').map(function(){
           return $(this).attr('id');
        }).get();
        
        ids.forEach(function(entry) {
            $('li#' + entry).addClass('hide');
        });
    }
    
    
    

    
   
</script>

<?php get_footer(); ?>
