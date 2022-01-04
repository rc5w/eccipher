<div class="secondary-content secondary-col">
<div id="container" style="width: 260px;">

<!-- <div>
<h3 class="sb-header">HSD CHARTS</h3>
<img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen-child/assets/img/sidebar-charts.png" class="sidebar-img" />
<a href="<?php echo get_site_url(); ?>/charts/" style="display:block;font-family:Georgia,serif;font-size:14px;color:#ff6633;text-align:right;margin-top:10px;">View Charts <img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen-child/assets/img/icn-right-arrow.png"></a>

<h3 class="sb-header">HSD REPORTS</h3>
<img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen-child/assets/img/sidebar-reports.png" class="sidebar-img" />
<a href="<?php echo get_site_url(); ?>/category/hsd/" style="display:block;font-family:Georgia,serif;font-size:14px;color:#ff6633;text-align:right;margin-top:10px;">View Reports <img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen-child/assets/img/icn-right-arrow.png"></a>
</div> -->

<?php 
$api = am4PluginsManager::getAPI();
$isyearly = $api->isYearlySub() || $api->isMonthlySub();

$isadmin =  current_user_can( 'read_private_posts' );
?>
<a href="http://www.hitsongsdeconstructed.com/workshops/virtual-mastery-workshop-1/" target="blank">
<!-- <img src="https://reports.hitsongsdeconstructed.com/wp-content/uploads/2016/10/HSD_Mastery_Workshop_260wide_HSDWebsite_Banner_v1B-1.gif" class="sidebar-img" /> -->
<!--<img src="https://reports.hitsongsdeconstructed.com/wp-content/themes/twentythirteen-child/assets/img/sidebar/HSD_Mastery_Workshop_260wide_HSDWebsite_Banner-Jan26.gif" class="sidebar-img">-->
</a><!--<a href="http://www.hitsongsdeconstructed.com/workshops/virtual-mastery-workshop-1/" target="blank">
    <img src="https://reports.hitsongsdeconstructed.com/wp-content/themes/twentythirteen-child/assets/img/sidebar/HSD_Mastery_Workshop_260wide_HSDWebsite_Banner2.gif" class="sidebar-img"></a>-->
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

<!-- <div>
<h3 class="sb-header" style="margin-bottom:0;">HSD WIRE</h3>
<ul class="sb-chartcontainer">

<?php /*
$args = array(
	'type'		=> 'hsd_wire',
	'taxonomy'	=> 'hsdwire_categories',
	'pad_counts'	=> 0,
	'hierarchical'	=> 0,
	'hide_empty'	=> 0,
);
$types = get_categories( $args ); 
foreach($types as $type) { 
	$post = new WP_Query( array( 'tax_query' => array( array( 'taxonomy' => 'hsdwire_categories', 'field' => 'term_id', 'terms' => $type->term_id ) ), 'post_per_page' => 1 ) );
	if ( $post->have_posts() ) : 
		$post->the_post();
		echo '<li><a href="' . get_permalink() . '">'.$type->name.'</a><div>&raquo;</div></li>'; 
	endif; 
	wp_reset_postdata();
}
*/ ?>

<li><a href="<?php echo get_site_url(); ?>/hsdwire-cat/articles/">Articles</a><div></div></li>
<li><a href="<?php echo get_site_url(); ?>/hsdwire-cat/videos/">Videos</a><div></div></li>
<li><a href="<?php echo get_site_url(); ?>/hsdwire-cat/penns-picks/">Penn's Picks</a><div></div></li>
</ul>

<h3 class="sb-header" style="margin-bottom:0;">CHARTS</h3>
<ul class="sb-chartcontainer">

<?php /*
$args = array(
	'type'		=> 'hsd_charts',
	'taxonomy'	=> 'chart_type',
	'pad_counts'	=> 0,
	'hierarchical'	=> 0,
	'hide_empty'	=> 0,
);
$types = get_categories( $args ); 
foreach($types as $type) { 
	$post = new WP_Query( array( 'tax_query' => array( array( 'taxonomy' => 'chart_type', 'field' => 'term_id', 'terms' => $type->term_id ) ), 'post_per_page' => 1 ) );
	if ( $post->have_posts() ) : 
		$post->the_post();
		if ( $ismntly || $isyearly || $isadmin ) :
	    echo '<li><a href="' . get_permalink() . '">'.$type->name.'</a><div></div></li>'; 
            elseif ( $isessentials ) : 
	    echo '<li><a href="/members/member/list-upgrade" target="_blank" class="readmore">Upgrade</a><div></div></li> ';
	    elseif ( $isbasic || !is_user_logged_in() ):
	    echo '<li><a href="#" data-reveal-id="modal-error-nonpro" title="Login/Signup">'.$type->name.'</a><div></div></li>';
	    endif;
	endif; 
	wp_reset_postdata();
}
?>

</ul>

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
 echo 'More <img src="https://reports.hitsongsdeconstructed.com/wp-content/themes/twentythirteen-child/assets/img/right-arrow-small.png" border="0" style="margin-bottom: 2px;"></a></div><!--end morediv-->';
} 
wp_reset_query();
?>

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
 else {	?> <a href="#" data-reveal-id="modal-error-nonyr" title="Login/Signup" style="text-decoration:none;"><?php } */ ?>
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
 echo 'More &raquo;</a></div><!--end morediv-->';
} */?>


<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>
<?php endif; ?>

<div id="modal-error-nonyr" class="reveal-modal">
	<?=do_shortcode("[am4show have='p6' user_error='Pro_Yearly' guest_error='Pro_Yearly']"); ?>
	<a class="close-reveal-modal">&#215;</a>
</div>
<div id="modal-error-nonbasic" class="reveal-modal">
  <?=do_shortcode("[am4show have='p6' user_error='Non_to_Basic' guest_error='Non_to_Basic']"); ?>
  <a class="close-reveal-modal">&#215;</a>
</div>
<div id="modal-error-nonpro" class="reveal-modal">
  <?=do_shortcode("[am4show have='p6' user_error='Basic_to_Pro' guest_error='Non_to_Pro']"); ?>
  <a class="close-reveal-modal">&#215;</a>
</div>
</div><!-- /container -->
</div><!-- /secondary-content-sidebar -->
<div style="clear:both"></div><!--clearfloat-->
