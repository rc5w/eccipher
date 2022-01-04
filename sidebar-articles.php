<div  class="secondary-content secondary-col col-art">
<div id="container" style="width: 100%;">

  <div class="advert">
  <?php if ( is_active_sidebar( 'article_sidebar' ) ) : ?>
  		 		<?php dynamic_sidebar( 'article_sidebar' ); ?>
  		 <?php endif; ?>

  </div>


<!--<div class="videoWrapper">
<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
<?=get_post_meta( get_the_ID(), 'report_video', true );?>
			<?php endwhile; ?>
</div>-->



<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript">




      $(window).on("scroll resize", function () {
     var sticky = $('#sticky'),
            scroll = $(window).scrollTop();

         if($(window).width() >= 1150){
		        if (scroll >= 100) {
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
<!--<p class="pre-title">Sign up to receive</p>
<h3 class="widget-custom-title">The HSD Wire - It's FREE</h3>
<?php echo do_shortcode( '[contact-form-7 id="42085" title="Contact form 1"]' ); ?>-->

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
