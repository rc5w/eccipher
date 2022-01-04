<div class="secondary-content secondary-col">
<div id="container" style="width: 280px;">
<a href="http://www.hitsongsdeconstructed.com/workshops/mastery-workshop-1/?utm_source=HSD-&utm_content=WKSHP-&utm_medium=WB&utm_campaign=HSD-WKSHP-WB&ocode=HSD-WKSHP-WB" target="_blank">
<!--<img src="https://reports.hitsongsdeconstructed.com/wp-content/themes/twentythirteen-child/assets/img/sidebar/HSD_Mastery_Workshop_260wide_HSDWebsite_Banner-Jan26.gif" class="sidebar-img" />-->
</a>
<h3 class="sb-header">SIGN UP TO RECEIVE THE<br/><span class="sb-lrgsubheader">HSD Wire - It's FREE!</span></h3>
<p class="sb-content" style="margin:15px 0;">Published monthly, the HSD Wire eNewsletter provides readers with a monthly recap of the Hit Songs Deconstructed Charts, our featured Penn's Pick, articles with highlights and takeaways culled from our monthly reports and much more!</p>
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

<?php 
$api = am4PluginsManager::getAPI();
$isyearly = $api->isYearlySub() || $api->isMonthlySub();
?>

<h3 class="sb-header">ARCHIVE SEARCH</h3>
<!--sidebar search form-->
<form action="<?=get_site_url();?>" method="get" style="padding-bottom:0px;margin-top:15px;">
    <fieldset>
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" style="display:inline-block;height:39px;border:none;border-radius:0;box-shadow:none;padding-left:10px;border:solid 1px #cccccc;border-right:none;width: 213px;" />
        <button type="submit" name="Search" style="display:inline-block;width:46px;height:39px;background:url('<?=get_stylesheet_directory_uri();?>/assets/img/search-btn.png') no-repeat;margin-left:-5px;border:none;border-radius:none;box-shadow:none;padding:0;vertical-align:top;"></button>
    </fieldset>
</form>
<!--end sidebar search form-->

<h3 class="sb-header">REPORT ARCHIVE</h3>

<h3 class="sb-subheader">Hit Songs Deconstructed Reports</h3>
<?php
$query = new WP_Query( 'cat=39&posts_per_page=4' );
// HSD Reports Query
if ( $query->have_posts() ) { 		
 while ( $query->have_posts() ) : $query->the_post(); 
	get_template_part( 'content', 'sidebararchive');	
 endwhile; 
 echo '<div class="sb-morelink">';
 if ( $isyearly ) { echo '<a href="' . get_site_url() . '/archive/?catid=39,40,41">'; } 
 else {	?> <a href="#" data-reveal-id="modal-error-nonyr" title="Login/Signup" style="text-decoration:none;"><?php }
 echo 'More <img src="/wp-content/themes/twentythirteen-child/assets/img/right-arrow-small.png" border="0" style="margin-bottom: 2px;"> </a></div><!--end morediv-->';
} 
wp_reset_query();
?>
<!-- <div>
<h3 class="sb-subheader">Special Reports</h3>
<div style="margin-bottom:25px;">

<div class="sb-archivecontainer">
<div class="sb-archiveleft">
 <?php if ( $isyearly ) { echo '<a href="' . get_site_url() . '/archive/?catid=24,53,54">'; } 
 else {	?> <a href="#" data-reveal-id="modal-error-nonyr" title="Login/Signup" style="text-decoration:none;"><?php } ?>
	Top 10 Deconstructed</a>
</div>
<div class="sb-archiveright"></div>
<div style="clear:both;"></div>
</div>

<div class="sb-archivecontainer">
<div class="sb-archiveleft">
 <?php if ( $isyearly ) { echo '<a href="' . get_site_url() . '/archive/?catid=44,45,46">'; } 
 else {	?> <a href="#" data-reveal-id="modal-error-nonyr" title="Login/Signup" style="text-decoration:none;"><?php } ?>
	Hit Songwriting Trends in Pop</a>
</div>
<div class="sb-archiveright"></div>
<div style="clear:both;"></div>
</div>

<div class="sb-archivecontainer">
<div class="sb-archiveleft">
 <?php if ( $isyearly ) { echo '<a href="' . get_site_url() . '/archive/?catid=36,37,38">'; } 
 else {	?> <a href="#" data-reveal-id="modal-error-nonyr" title="Login/Signup" style="text-decoration:none;"><?php } ?>
	Hit Pop Sub-Genre Influences</a>
</div>
<div class="sb-archiveright"></div>
<div style="clear:both;"></div>
</div>

<div class="sb-archivecontainer">
<div class="sb-archiveleft">
 <?php if ( $isyearly ) { echo '<a href="' . get_site_url() . '/archive/?catid=57,58,59">'; } 
 else {	?> <a href="#" data-reveal-id="modal-error-nonyr" title="Login/Signup" style="text-decoration:none;"><?php } ?>
	Who's Writing the Hits?</a>
</div>
<div class="sb-archiveright"></div>
<div style="clear:both;"></div>
</div>
</div>
</div> -->

<?php
/*
echo '<h3 class="sb-subheader">Penn&#039;s Picks</h3>';
$query3 = new WP_Query( 'cat=5&posts_per_page=4' );
// Penns Picks Query
if ( $query3->have_posts() ) { 		
while ( $query3->have_posts() ) : $query3->the_post(); 
	get_template_part( 'content', 'sidebararchive');	
endwhile; 
 echo '<div class="sb-morelink">';
 if ( $isyearly ) { echo '<a href="' . get_site_url() . '/archive/?catid=49,50,51">'; } 
 else {	?> <a href="#" data-reveal-id="modal-error-nonyr" title="Login/Signup" style="text-decoration:none;"><?php }
 echo 'More </a></div><!--end morediv-->';
} */?>

</div>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>

<?php endif; ?>
<div id="modal-error-nonyr" class="reveal-modal">
	<?=do_shortcode("[am4show have='p6' user_error='Pro_Yearly' guest_error='Pro_Yearly']"); ?>
	<a class="close-reveal-modal">&#215;</a>
</div>
</div><!-- /secondary-content-sidebar -->
<div style="clear:both"></div><!--clearfloat-->