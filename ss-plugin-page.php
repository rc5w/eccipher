<?php
/**
 * Template Name: SS Plugin with Sidebar
 *
 * Description: This is the front page to the HSD website including sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="primary" class="site-content primary-col">
	<div id="content" role="main">
		<div class="entry-content hsdpage">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
		</div><!-- .entry-content -->
	</div><!-- #content -->
</div><!-- #primary -->

<!---Screenpopper--->

<script type="text/javascript" src="http://pop1.screenpopper.com/p-hub/738/1718/4a5779e80f4311279c43a49b3d9d9636/start.js"></script>

<script type="text/javascript">

function extSPopReady(popupId) {
  jQSPop('#screenpopper-content .spop-submit-button-container button').css('background', 'url(/wp-content/themes/twentythirteen-child/assets/img/screenpopper/sp-dl-button.jpg) no-repeat');
  jQSPop('#screenpopper-content .spop-submit-button-container button').css({'width':'200px', 'height':'25px','position':'relative','right': '15px','border':'none'});
  jQSPop('#screenpopper-content .spop-frmstyle-base .sp-form-elements-label').css({'font-family':'Georgia,serif','font-weight':'normal','color':'#666666','font-size':'13px'});
  jQSPop('#screenpopper-content .spop-frmtheme-plain .sp-form-elements-text').css({'width':'230px' , 'height':'20px'});

}
function extSPopOpened(popupId) {
  jQSPop('#screenpopper-content .spop-submit-button-container button').css('background', 'url(/wp-content/themes/twentythirteen-child/assets/img/screenpopper/sp-dl-button.jpg) no-repeat');
  jQSPop('#screenpopper-content .spop-submit-button-container button').css({'width':'200px', 'height':'25px','position':'relative','right': '15px','border':'none'});
  jQSPop('#screenpopper-content .spop-frmstyle-base .sp-form-elements-label').css({'font-family':'Georgia,serif','font-weight':'normal','color':'#666666','font-size':'13px'});
  jQSPop('#screenpopper-content .spop-frmtheme-plain .sp-form-elements-text').css({'width':'230px' , 'height':'20px'});
} 

</script>

<!---/screenpopper--->

<?php get_sidebar('plugin'); ?>
<?php get_footer();?>