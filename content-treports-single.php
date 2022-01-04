<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="entry-thumbnail">
			<?php //the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_single() ) : ?>

<div class="wireheader">
<div id="wire-lft"><?php if ( has_post_thumbnail() ) : the_post_thumbnail( array(200,170) ); endif; ?></div><!--/charts-lft-->
<div id="wire-rht">

	<h3><?php the_title(); ?></h3>

	<?php
	$prop_trend_subtitle = get_post_meta( get_the_ID(), 'post_subtitle', true );
	if($prop_trend_subtitle!=''){ ?>

	<h2>
	<?=get_post_meta( get_the_ID(), 'post_subtitle', true );?>
</h2>
	<?php } ?>


	<br />

	<div class="wire-backto">
		<a href="/treports/">Back to Reports <img style="margin-bottom:2px;" src="/wp-content/themes/twentythirteen-child/assets/img/icn-right-arrow-sm.png"/></a>
	</div>
</div><!--/wire-rht-->
</div><!--wireheader-->

<div class="cf"></div>
<!--backtowire-->

<div class="cf"></div>

		<?php else : ?>
		<h1 class="entry-title">
			<?php the_title(); ?>
		</h1>
		<?php endif; // is_single() ?>
		<!--<div class="entry-meta">
			<?php if(!(in_category('Marketing Landing Page')) && !(in_category('Videos'))) : twentythirteen_entry_meta(); endif; ?>
			<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
		</div>-->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
        <div id="trend-report">
<?php

// Check if date of post is past 60 days -- If so, then display warning unless is yearly subscriber
if ( !has_term('free-articles', 'hsdwire_categories' ) ) {
	$api = am4PluginsManager::getAPI();
        $access  = new am4UserAccess();
	$settings = am4Protection::getPostAccess( $post );
	$ok = false; 
	if(!$settings->{'protected'} || ($access->isLoggedIn() && am4Protection::haveAccess(am4Protection::getPostRequirements($post), $settings))){
	    $ok = true;
	}
	//	file_put_contents( "/tmp/acc2", $api->isMonthlySub() . " or?" . $api->isYearlySub() . " or ok?" . $ok ) ;
			if( $ok || $api->isMonthlySub() || $api->isYearlySub() || current_user_can( 'read_private_posts' ) ) {
				the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) );
			} else {
				echo do_shortcode("[am4show have='p6' user_error='Pro_Yearly_Full' guest_error='Pro_Yearly_Full']");
			}
} elseif ( in_category('Sample Reports') && !is_user_logged_in()) {
	get_template_part( 'content', 'sampleform' );
}
else {
  //file_put_contents( "/tmp/rc", "aaaaaaack2", FILE_APPEND );
	//echo do_shortcode("[am4show have='p6' user_error='Non_to_Pro_Full' guest_error='Non_to_Pro_Full']");
	the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) );
	echo '<div style="clear:both;margin-bottom:20px;"></div><!--clear float-->';
	$api = am4PluginsManager::getAPI();
	if( $api->isMonthlySub() || $api->isYearlySub() || current_user_can( 'read_private_posts' ) ) {
	// echo do_shortcode('[ssba]');
	}
}

?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	<?php endif; ?>
	</div><!-- .entry-content -->
    </div><!-- .trend-report -->

	<a class="back-to-top-report" href="#top">Back to Top</a>
</article><!-- #post -->
