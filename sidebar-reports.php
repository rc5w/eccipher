<div  class="secondary-content secondary-col">
<div id="container" style="width: 100%;">







	<?php
	$prop_reports_video = get_post_meta( get_the_ID(), 'report_video', true );
	$prop_placeholder_video = get_post_meta( get_the_ID(), 'placeholder_img', true );
	if($prop_reports_video!=''){ ?>
	  <div class="videoelement">
	    <div class="videoWrapper">
	    <?php /* The loop */ ?>
	    			<?php while ( have_posts() ) : the_post(); ?>
	    <?=get_post_meta( get_the_ID(), 'report_video', true );?>
	    			<?php endwhile; ?>

	    </div>
	  </div>
			<hr class="solid">
	<?php }else {?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="placeholder_img">
<img src="<?=get_post_meta( get_the_ID(), 'placeholder_img', true );?>">
</div>
		<?php endwhile; ?>
<hr class="solid">
		<?php } ?>







<?php
$prop_logic_file = get_post_meta( get_the_ID(), 'logic_file', true );
if($prop_logic_file!=''){ ?>
<div id="logic" class="border"  >
	<h3>Companion Logic Pro X File</h3>
	<img src="/wp-content/uploads/2018/03/hit-songs-deconstructed-logic-download-icon.png" />
<p>This file includes the correct meter, tempo and song arrangement displayed as empty MIDI
regions for each instrument. Load your copy of the song to see when each instrument enters and leaves the mix, how the arrangement of like and cross-sections compare, how energy and dynamics are working from an arrangement point of view, and more.</p>

<a href="<?=get_post_meta( get_the_ID(), 'logic_file', true );?>" target="_blank"> <button>Download</button></a></div>

<?php } ?>



<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript">




      $(window).on("scroll resize", function () {
     var sticky = $('#sticky'),
            scroll = $(window).scrollTop();

         if($(window).width() >= 1201){
		        if (scroll >= 800) {
				        sticky.addClass('fixed');
				    } else {
				    		sticky.removeClass('fixed');
				    }
         }else{
        		 sticky.removeClass('fixed');
         }
      });




  jQuery(document).ready(function($){

  $.validator.setDefaults({
    errorElement: 'div',

  });

  $('.optinform').validate({

    rules: {
      firstn: {
        required: true
        },
      lastn: {
        required: true

        },
       emaila: {
         required: true
       }
    }
    });


    $('#submit_hsdwire').on('click', function(){
    if ($(".optinform").valid()) {
    var ocode = $('#ocode').val();
    var firstn = $('#hsdwire_firstn').val();
    var lastn = $('#hsdwire_lastn').val();
    var emaila = $('#hsdwire_emaila').val();
    var charts = $('#hsdcharts_sub:checked').val();
    var wire = $('#hsdwire_sub:checked').val();
    $('#submit_hsdwire').html('<span>One Moment Please...</span>')
      $('#errorbox').html('' );


    $.post(
      '/streamsend/subscribe.php',
      {
        firstn: firstn,
        lastn: lastn,
        emaila: emaila,
        charts: charts,
        wire: wire,
        ocode: ocode
      },
      function(msg) {
         $('#sb-optinform').html('<h3 class="sb-header">Thank You!</h3>');
		window._ssstats = window._ssstats || [];
		_ssstats.push([
			'configure', {
				accountId: 334905
			}
		]);
		_ssstats.push(['identify', emaila]);
		_ssstats.push([
			'publish',
			'Subscribe', {
				subscription: 'hsdwire'
			}
		]);

        });
      }
      });
    });
</script>
<script src="//cdn.statstrk01.com/assets/javascripts/sdk2.js" async></script>
<!--end sidebar search form-->

<?php
$api = am4PluginsManager::getAPI();
$isyearly = $api->isYearlySub() || $api->isMonthlySub();
?>
<div id="sticky">
<div class="border">

<?php
global $post;
$compare_date = strtotime( "2015-12-30" );
$post_date    = strtotime( $post->post_date );

if (  $compare_date >= $post_date )  {
    echo "";
} else {
    echo "<label>Skip To:</label>";
    wp_nav_menu( array( 'menu' => 'Reports SkipTo', 'menu_class' => 'skip-menu' ) );
}
?>



</div>
<div class="advert">
<?php if ( is_active_sidebar( 'report_sidebar' ) ) : ?>
		 		<?php dynamic_sidebar( 'report_sidebar' ); ?>
		 <?php endif; ?>

</div>
</div>
</div>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>

<?php endif; ?>
<div id="modal-error-nonyr" class="reveal-modal">
	<?=do_shortcode("[am4show have='p6' user_error='Pro_Yearly' guest_error='Pro_Yearly']"); ?>
	<a class="close-reveal-modal">&#215;</a>
</div>
</div><!-- /secondary-content-sidebar -->
<div style="clear:both"></div><!--clearfloat-->
