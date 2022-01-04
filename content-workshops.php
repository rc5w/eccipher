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

	<!--<div class="wire-backto">
		<a href="https://reports.hitsongsdeconstructed.com/">Back to Reports <img style="margin-bottom:2px;" src="/wp-content/themes/twentythirteen-child/assets/img/icn-right-arrow-sm.png"/></a>
	</div>-->
	<!--<ul class="wire-share">
		<li>Share to:</li>
		<li id="fb"><a href="//www.facebook.com/sharer/sharer.php?u=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
		<li id="tw"><a href="//twitter.com/share?text=<?=get_post_meta( get_the_ID(), 'hsd_title', true );?> - Hit Songs Deconstructed&url=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i>
		</a></li>
		<li id="ln"><a href="//www.linkedin.com/shareArticle?mini=true&url=http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>&title=<?=get_post_meta( get_the_ID(), 'hsd_title', true );?>&summary=<?php echo htmlentities(get_the_excerpt(), ENT_QUOTES);?>&source=" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i>
		</a></li>
	</ul>-->
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
$api = am4PluginsManager::getAPI();
// if( $api->isWorkshopSub() || current_user_can( 'read_private_posts' ) ) {
    the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) );
// } else {
//     echo do_shortcode("[am4show have='p6' user_error='Workshop Protection' guest_error='Workshop Protection']");
// }

?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	<?php endif; ?>
	</div><!-- .entry-content -->
    </div><!-- .trend-report -->

	<a class="back-to-top-report" href="#top">Back to Top</a>
</article><!-- #post -->
