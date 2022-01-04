<div class="secondary-content secondary-col">
<div id="container" style="width: 260px;">
<?php
$api = am4PluginsManager::getAPI();
// $isbasic =  $api->haveSubscriptions(array(3));
// $isessentials =  $api->haveSubscriptions(array(57, 58, 59, 60, 61));
// $ismntly =  $api->haveSubscriptions(array(2,4,5,7,10,11,13,33));
// $isyearly = $api->haveSubscriptions( array(8,9,12,14,15,16,17,18,19,22,23,26,27,34,35,40,43,44, 50, 56) ); 

$isyearly = $api->isYearlySub();
$ismntly =  $api->isMonthlySub();
$isbasic =  $api->isBasicSub();
$isessentials =  $api->isEssentialsSub();


$isadmin =  current_user_can( 'read_private_posts' );
?>
<a href="http://www.hitsongsdeconstructed.com/IM-FT-Banner" target="blank">
<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2016/08/Immersion_260Wide_HSD_Website_Banner_v3.gif" class="sidebar-img" />
</a>
<h3 class="sb-header">SIGN UP TO RECEIVE THE<br/><span class="sb-lrgsubheader">HSD Wire - It's FREE!</span></h3>
<!--sidebar optin form-->
<div id="sb-optinform">
<form class="optinform">
    <fieldset>
        <input type="text" name="firstn" id="hsdwire_firstn" value="" style="display:inline-block;width:100%;height:33px;border:none;background:#e3e3e3;padding-left:10px;margin:5px 0;font-family:Georgia,serif;font-style:italic;font-size:12px;color:#999999;" placeholder="First Name" /></input><br/>
        <input type="text" name="lastn" id="hsdwire_lastn" value="" style="display:inline-block;width:100%;height:33px;border:none;background:#e3e3e3;padding-left:10px;margin:5px 0;font-family:Georgia,serif;font-style:italic;font-size:12px;color:#999999;" placeholder="Last Name" /></input><br/>
        <input type="text" name="emaila" id="hsdwire_emaila" value="" style="display:inline-block;width:100%;height:33px;border:none;background:#e3e3e3;padding-left:10px;margin:5px 0 0px;font-family:Georgia,serif;font-style:italic;font-size:12px;color:#999999;" placeholder="Email Address" /></input>
         <div style="margin-bottom:15px"></div>
        <input type="checkbox" name="hsdcharts_sub" id="hsdcharts_sub" checked><label for="hsdcharts_sub">I would like to receive the HSD Chart Emails</label><br/>
        <input type="checkbox" name="hsdwire_sub" id="hsdwire_sub" checked><label for="hsdwire_sub">I would like to receive HSD Wire, our monthly newsletter</label>
        <input type="hidden" name="ocode" id="ocode" value="HSDSidebarForm"  /></input>
        <button type="button" name="subscribe" id="submit_hsdwire" style="float:right;width:100px;height:35px;background:#ff6633;font-family:'Bitter',serif;font-size:14px;color:#ffffff;padding:0;margin:5px 0;border:0 !important;text-align:center;border-radius:0;">Submit </button>
        <div style="clear:both;"></div>
    </fieldset>
</form>
</div>


<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript">

    
    
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


<?php /* <h3 class="sb-header" style="margin-bottom:0;">CHARTS</h3>
<ul class="sb-chartcontainer">

<?php
$args = array(
  'type'    => 'hsd_charts',
  'taxonomy'  => 'chart_type',
  'pad_counts'  => 0,
  'hierarchical'  => 0,
  'hide_empty'  => 0,
);
$types = get_categories( $args ); 
foreach($types as $type) { 
  $post = new WP_Query( array( 'tax_query' => array( array( 'taxonomy' => 'chart_type', 'field' => 'term_id', 'terms' => $type->term_id ) ), 'post_per_page' => 1 ) );
  if ( $post->have_posts() ) : 
    $post->the_post();
    if ( $ismntly || $isyearly || $isadmin ) :
    echo '<li><a href="' . get_permalink() . '">'.$type->name.'</a><div></div></li>'; 
    elseif ( $isessentials ):
    echo '<li><a href="/members/member/list-upgrade" title="Upgrade">Upgrade</a><div></div></li>';
    elseif ( $isbasic || !is_user_logged_in() ):
    echo '<li><a href="#" data-reveal-id="modal-error-nonpro" title="Login/Signup">'.$type->name.'</a><div></div></li>';
    endif;
    
    
  endif; 
  wp_reset_postdata();
}
?>

</ul>

*/ ?>

<h3 class="sb-header">CHART LEGEND</h3>
<ul class="sb-chartcontainer">
  <li>Increase in position from last week <div class="ico-chart-inc-sm"></div></li>
  <li>Decrease in position from last week <div class="ico-chart-dec-sm"></div></li>
  <li>Constant position from last week    <div class="ico-chart-con-sm"></div></li>
  <li>New entry       <div class="ico-chart-new-sm"></div></li>
  <li>This Week       <div class="ico-chart-week">TW</div></li>
  <li>Last Week       <div class="ico-chart-week">LW</div></li>
</ul>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>
<?php endif; ?>

<?php /* <h3 class="sb-header">ABOUT THE HIT SONGS DECONSTRUCTED CHARTS</h3>
<p class="sb-content">Published weekly, the Hit Songs Deconstructed Charts provide you with unique insight into today's hit songwriting trends by spotlighting the characteristics driving the Billboard Hot 100<br/> top 10.<br/><br/>
Use these charts to stay in-the-know and current in a fast changing musical landscape!</p>
<a href="/about/hit-songs-deconstructed-charts/" style="float:right;font-family:Georgia,serif;font-size:14px;color:#ff6633;padding:0;border:0 !important;">Learn More <img src="https://reports.hitsongsdeconstructed.com/wp-content/themes/twentythirteen-child/assets/img/right-arrow-small.png" border="0" style="margin-bottom: 2px;"></a> */ ?>


</div><!-- /container -->
</div><!-- /secondary-content-sidebar -->
<div style="clear:both"></div><!--clearfloat-->
<div id="modal-error-nonbasic" class="reveal-modal">
  <?=do_shortcode("[am4show have='p6' user_error='Non_to_Basic' guest_error='Non_to_Basic']"); ?>
  <a class="close-reveal-modal">&#215;</a>
</div>
<div id="modal-error-nonpro" class="reveal-modal">
  <?=do_shortcode("[am4show have='p6' user_error='Basic_to_Pro' guest_error='Non_to_Pro']"); ?>
  <a class="close-reveal-modal">&#215;</a>
</div>
<div id="modal-error-nonyr" class="reveal-modal">
  <?=do_shortcode("[am4show have='p6' user_error='Pro_Yearly' guest_error='Pro_Yearly']"); ?>
  <a class="close-reveal-modal">&#215;</a>
</div>