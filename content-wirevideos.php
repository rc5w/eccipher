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
	<header class="entry-header" style="margin-bottom:23px;">
		<!--<img alt="" src="/wp-content/uploads/2014/03/special-offer-image.png" />-->
		<a name="top"></a>
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

<div class="wire-backto" style="margin-bottom:20px;">
	<a href="../">Back to HSD Wire <img style="margin-bottom:3px;" src="/wp-content/themes/twentythirteen-child/assets/img/icn-right-arrow-sm.png"/></a>
</div><!--backtowire-->
<ul class="wire-share" style="text-align:right;">
	<li>Share to:</li>
	<li id="fb"><a href="//www.facebook.com/sharer/sharer.php?u=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" target="_blank">Facebook</a></li>
	<li id="tw"><a href="//twitter.com/share?text=<?php echo get_the_title();?> - Hit Songs Deconstructed&url=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" target="_blank">Twitter</a></li>
	<li id="ln"><a href="//www.linkedin.com/shareArticle?mini=true&url=http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>&title=<?php echo get_the_title();?>&summary=<?php echo get_the_excerpt();?>&source=" target="_blank">LinkedIn</a></li>
</ul>
<div class="cf"></div>

	<div class="entry-content">

<?php 
	the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) );
	echo '<div style="clear:both;margin-bottom:20px;"></div><!--clear float-->';
	echo do_shortcode('[ssba]');

?>


	</div><!-- .entry-content -->
</article><!-- #post -->