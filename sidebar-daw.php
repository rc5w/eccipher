<div  class="secondary-content secondary-col">
<div id="container" style="width: 100%;">




<!-- pdf 1-->
    <?php
$prop_workshop_reports = get_post_meta( get_the_ID(), 'workshop_pdf', true );
if($prop_workshop_reports!=''){ ?>

<div id="download" class="wireheader" >
  <img src="/wp-content/uploads/2018/01/hit-songs-deconstructed-pdf-icon.svg" />
    <h4>Download the PDF</h4>
  <p><?=get_post_meta( get_the_ID(), 'download_blurb', true );?></p>
    <a href="<?=get_post_meta( get_the_ID(), 'workshop_pdf', true );?>" target="_blank"> <button>Download</button></a></div>

<?php } ?>


<!-- pdf 2-->
    <?php
$prop_workshop_reports2 = get_post_meta( get_the_ID(), 'workshop_pdf2', true );
if($prop_workshop_reports2!=''){ ?>

<div id="download" class="wireheader" >
  <img src="/wp-content/uploads/2018/01/hit-songs-deconstructed-pdf-icon.svg" />
    <h4>Download the PDF</h4>
  <p><?=get_post_meta( get_the_ID(), 'download_blurb2', true );?></p>
    <a href="<?=get_post_meta( get_the_ID(), 'workshop_pdf2', true );?>" target="_blank"> <button>Download</button></a></div>
  <hr class="solid">
<?php } ?>


<!-- pdf 3-->
    <?php
$prop_workshop_reports3 = get_post_meta( get_the_ID(), 'workshop_pdf3', true );
if($prop_workshop_reports3!=''){ ?>

<div id="download" class="wireheader" >
  <img src="/wp-content/uploads/2018/01/hit-songs-deconstructed-pdf-icon.svg" />
    <h4>Download the PDF</h4>
  <p><?=get_post_meta( get_the_ID(), 'download_blurb3', true );?></p>
    <a href="<?=get_post_meta( get_the_ID(), 'workshop_pdf3', true );?>" target="_blank"> <button>Download</button></a></div>
  <hr class="solid">
<?php } ?>


<!-- video-->

<?php
$prop_trend_trend_video = get_post_meta( get_the_ID(), 'trend_video', true );
if($prop_trend_trend_video!=''){ ?>
  <div class="videoelement">
    <div class="videoWrapper">
    <?php /* The loop */ ?>
    			<?php while ( have_posts() ) : the_post(); ?>
    <?=get_post_meta( get_the_ID(), 'trend_video', true );?>
    			<?php endwhile; ?>
    </div>
  </div>
      <hr class="solid">
<?php } ?>


<!-- advert-->
<!--<?php //if ( is_active_sidebar( 'article_sidebar' ) ) : ?>
      <hr>
		 		<?php //dynamic_sidebar( 'article_sidebar' ); ?>
		 <?php //endif; ?>

</div>-->



<!-- FB box for workshops & vid/logic for other -->
 <?php
if( has_tag( 'Video_Deconstructions') || has_category('daw') ) {
  $prop_logic_file = get_post_meta( get_the_ID(), 'logic_file', true );
  $prop_video_file = get_post_meta( get_the_ID(), 'ondemand_video', true );
  if($prop_video_file!=''){
  ?>


  <div class="videoWrapper">

  <?=get_post_meta( get_the_ID(), 'ondemand_video', true );?>

  </div>

<?php }  if($prop_logic_file!=''){ ?>
    <hr class="solid">
    <div id="logic" class="border"  >
    	<h3>Companion Logic Pro X File </h3>
    	<img src="/wp-content/uploads/2018/03/hit-songs-deconstructed-logic-download-icon.png" />
    <p>This file includes the correct meter, tempo and song arrangement displayed as empty MIDI
    regions for each instrument. Load your copy of the song to see when each instrument enters and leaves the mix, how the arrangement of like and cross-sections compare, how energy and dynamics are working from an arrangement point of view, and more.  </p>

    <a href="<?=get_post_meta( get_the_ID(), 'logic_file', true );?>" target="_blank"> <button>Download</button></a></div>

  <?php } ?>
<?php }else{ ?>
  <div id="download" class="wireheader fb-box" >
    <img src="/wp-content/uploads/2018/03/hit-songs-deconstructed-join-facebook-group-icon.svg" />
      <h4>Join Our Facebook Group!</h4>
    <p>Our goal is to create a community of like-minded individuals and a forum where you can exchange ideas, collaborate, and support each other on your musical journeys. </p>
      <a href="https://www.facebook.com/groups/HitSongsDeconstructedMasteryWorkshop/?source_id=149323215083048" target="_blank"> <button>Join Today!</button></a></div>
<?php } ?>





<!-- soptfify1 title -->
    <?php
$prop_trend_spotify_1_title = get_post_meta( get_the_ID(), 'spotify_1_title', true );
if($prop_trend_spotify_1_title!=''){ ?>
<span class="reports-subheader">
<?=get_post_meta( get_the_ID(), 'spotify_1_title', true );?>
</span>
      <hr/>
<?php } ?>


<!-- soptfify1 playlist-->
    <?php
$prop_trend_spotify_1 = get_post_meta( get_the_ID(), 'spotify_1', true );
if($prop_trend_spotify_1!=''){ ?>

<div id="spotify_1" class="wireheader" style="margin-bottom:25px;">

<?=get_post_meta( get_the_ID(), 'spotify_1', true );?>
</div>
<?php } ?>



<!-- soptfify2 title -->
    <?php
$prop_trend_spotify_2_title = get_post_meta( get_the_ID(), 'spotify_2_title', true );
if($prop_trend_spotify_2_title!=''){ ?>
<span class="reports-subheader">
<?=get_post_meta( get_the_ID(), 'spotify_2_title', true );?>
</span>
      <hr/>
<?php } ?>


<!-- soptfify2-->
<?php
$prop_trend_spotify_2 = get_post_meta( get_the_ID(), 'spotify_2', true );
if($prop_trend_spotify_2!=''){ ?>

<div id="spotify_2" class="wireheader" style="margin-bottom:25px;">

<?=get_post_meta( get_the_ID(), 'spotify_2', true );?>
</div>
<?php } ?>







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
<div id="stickyno">
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
