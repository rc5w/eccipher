<?php

/* Template Name: Single - HSD Wire Post */

get_header(); 
?>

<div id="primary" class="content-area primary-col">
	<div id="content" class="site-content hsdwire" role="main">
		<?php while ( have_posts() ) : the_post();?>

<?php 
/* Check if a HSDWire is a Video Post */
$terms = wp_get_post_terms($post->ID, 'hsdwire_categories', array("fields" => "names"));
$isvideo = false;
foreach( $terms as $term ) { if ( $term === 'Videos' ) { $isvideo = true; } }
if ( $isvideo ) : get_template_part( 'content', 'wirevideos' ); else : ?>

<div class="wireheader wireheader2">
<div id="wire-lft"><?php if ( has_post_thumbnail() ) : the_post_thumbnail( array(200,170) ); endif; ?></div><!--/charts-lft-->
<div id="wire-rht">
	<h1><?=get_post_meta( get_the_ID(), 'wire_title', true );?></h1>
	<p><?=get_post_meta( get_the_ID(), 'wire_subtitle1', true );?><span><?=get_post_meta( get_the_ID(), 'wire_subtitle2', true );?></span></p>
</div><!--/wire-rht-->
</div><!--wireheader-->
<div class="cf"></div>
<div class="wire-backto">
	<a href="../">Back to HSD Wire <img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen-child/assets/img/icn-right-arrow-sm.png"/></a>
</div><!--backtowire-->
<ul class="wire-share wire-share2">
	<li>Share to:</li>
	<li id="fb"><a href="//www.facebook.com/sharer/sharer.php?u=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" target="_blank">Facebook</a></li>
	<li id="tw"><a href="//twitter.com/share?text=<?php echo get_the_title();?> - Hit Songs Deconstructed&url=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" target="_blank">Twitter</a></li>
	<li id="ln"><a href="//www.linkedin.com/shareArticle?mini=true&url=http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>&title=<?php echo get_the_title();?>&summary=<?php echo get_the_excerpt();?>&source=" target="_blank">LinkedIn</a></li>
</ul>
<div class="cf"></div>

		<?php the_content(); ?>
		<div class="cf"></div>
		
		

<!--<div class="wire-fullarticle">
	
	Not a subscriber? <a href="<?php echo get_site_url(); ?>/sign-up-today/" target="_blank" style="color:#FF6633;font-weight:normal;">Sign up here&nbsp;<img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen-child/assets/img/icon-readreport.png"/></a><br/><br/>
	Already a subscriber? <a href="<?php echo get_site_url(); ?>/members/login" target="_blank" style="color:#FF6633;font-weight:normal;">Please log in here&nbsp;<img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen-child/assets/img/icon-readreport.png"/></a><br/><br/>
	Not yet receiving the HSD Wire? <a href="<?php echo get_site_url(); ?>/members/signup/free" target="_blank" style="color:#FF6633;font-weight:normal;">Register for free&nbsp;<img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen-child/assets/img/icon-readreport.png"/></a><br/>
	
</div>--><!--wire-fullarticle-->

<?php endif; ?>

		<?php break; 
		endwhile; ?>


	</div><!-- #content -->
</div><!-- #primary -->
<?php get_sidebar( 'hsdwire' ); ?>
<?php get_footer(); ?>