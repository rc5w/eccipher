<?php
/**
 * The template for HSD theme for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0 (HSD Child)
 */
//wp_deregister_script('jquery');  // we're already including this in the header
?>

		</div><!-- #main -->
		</div><!-- flex-->

	<?php /*	<footer id="colophon" class="site-footer" role="contentinfo" style="width:940px;border-top:5px solid #F1592A;">
			<?php //get_sidebar( 'main' ); ?>

<div class="ftr-container">
<div id="ftr-colone">
	<h1>CONTACT <span>US</span></h1>
	<p>
	Customer Service<br/><a href="mailto:customerservice@hitsongsdeconstructed.com">customerservice@hitsongsdeconstructed.com</a><br/><br/>
	Press inquiries<br/>
	<a href="mailto:press@hitsongsdeconstructed.com">press@hitsongsdeconstructed.com</a><br/><br/>
	Letters to the Editor
	<a href="mailto:letterstotheeditor@hitsongsdeconstructed.com">letterstotheeditor@hitsongsdeconstructed.com</a>
	<br/><br/>
	Editorial Rights & Permissions<br/>
	<a href="mailto:reprints@hitsongsdeconstructed.com">reprints@hitsongsdeconstructed.com</a>
	<br/><br/>
	Advertise with Hit Songs Deconstructed:<br/>
	<a href="mailto:advertise@hitsongsdeconstructed.com">advertise@hitsongsdeconstructed.com</a>
	<br/><br/>
	Hit Songs Deconstructed<br/>
	1123 Broadway, Suite 518<br/>
	New York, NY 10010
	<br/><br/>
	p: 212.671.2308<br/>
	f: 646.365.6855</p>

	<ul>
			<li>
				<a style="background:none;padding-right:0;" href="https://www.facebook.com/hitsongsdeconstructed" target="_blank">
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen-child/assets/img/fb-logo-gray.png" border="0" />
				</a>
			</li>
			<li>
				<a style="background:none;padding-right:0;" href="https://twitter.com/HSDeconstructed" target="_blank">
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen-child/assets/img/twitter-logo-gray.png" border="0" />
				</a>
			</li>
			<li>
				<a style="background:none;padding-right:0;" href="http://www.linkedin.com/company/hit-songs-deconstructed" target="_blank">
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen-child/assets/img/linkedin-logo-gray.png" border="0" />
				</a>
			</li>
	</ul>
</div>

<div id="ftr-coltwo">
    <h1>ABOUT <span>HSD</span></h1>
	<p>Hit Songs Deconstructed tracks the compositional characteristics and songwriting techniques found in the songs that land in the Billboard Hot 100 top 10.  Our goal is to give songwriters, producers, educators and music industry professionals the tools to make their mark and ultimately shape the future of music.  The Hit Songs Deconstructed reports and music charts contain a combination of impartial data and insightful analysis, providing readers with an inside look at hit songwriting trends and the craft behind today’s hits.</p>

</div>

<div id="ftr-colthr">
	<h1>ACADEMIC <span>SUBSCRIPTION</span>:</h1>
    <p>
	Hit Songs Deconstructed offers flexible and highly discounted yearly licenses, and provides academic institutions with the rights to use Hit Songs Deconstructed Reports as a library resource and in the classroom. To learn more, <a href="<?php echo get_site_url(); ?>/landing/academic-subscription-2/"  style="font-size:12px;">click here. </a>
	</p>

    <h1>GROUP <span>SUBSCRIPTIONS</span> :</h1>
	<p>
	Hit Songs Deconstructed offers discounted group subscriptions and site licenses for companies looking to provide employees with access to the Hit Songs Deconstructed website. To learn more please contact <a href="mailto:ypenn@hitsongsdeconstructed.com"  style="font-size:12px;">ypenn@hitsongsdeconstructed.com</a>
	</p>
</div><!--end footer-container-->
<div style="clear:both;"></div><!--endclearfloat-->

<div id="ftr-parttwo" style="position:relative;">

<div class="ftr-copy" style="position:absolute;top:50%;margin:-7px 0 0 20px;">
	<p>&copy; 2010-<?php echo date ('Y'); ?> Hit Songs Deconstructed, All Rights Reserved</p>
</div>
</div><!--end container-->

		</footer><!-- #colophon -->

		*/ ?>




		<!--<footer id="colophon" class="site-footer">
				<section class="padding-tb bg-dgray footer-row-1">
					<div class="element-container">
						<div class="footer-column-1 full">
							<div class="footer-menu">
							<a href="http://www.hitsongsdeconstructed.com/">
										<img src="http://www.hitsongsdeconstructed.com/wp-content/themes/hitsongsdeconstructed/assets/images/footer/footer-hsd.svg" border="0">
							</a>

								<div class="footer-social">
									<ul>
										<li class="fb"><a target="_blank" href="https://www.facebook.com/hitsongsdeconstructed"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
										</a></li>
										<li class="tw"><a target="_blank" href="https://twitter.com/HSDeconstructed"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
											<li class="in"><a target="_blank" href="https://www.instagram.com/hitsongsdeconstructed/?hl=en"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
											</a></li>
										<li class="ln"><a target="_blank" href="https://www.linkedin.com/company/hit-songs-deconstructed"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i>
										</a></li>
									</ul>
								</div>

							<ul class="footer_list">
								<li class=""><a target="_blank" href="https://www.hitsongsdeconstructed.com/privacy-policy/">Privacy Policy</a></li>
								<li class=""><a target="_blank" href="https://www.hitsongsdeconstructed.com/terms/">Terms Of Use</a></li>
							</ul>

							<p class="subtext">© 2010-2017 Hit Songs Deconstructed. All rights reserved. Designed by <a href="http://i360m.com/" target="_blank">Imagine 360 Marketing</a></p>
						</div>
						</div>


					</div>

				</section>

			</footer>-->






	</div><!-- #page -->

	<?php wp_footer(); ?>

<?php if ( is_post_type_archive('hsd_wire') ): ?>
<script type="text/javascript" src="<?=get_stylesheet_directory_uri();?>/assets/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript">
jQuery(function($) {
    $('.jcarousel').jcarousel({ wrap: 'circular' }).jcarouselAutoscroll({
	interval: 5000,
        target: '+=1',
        autostart: true
    });
    $('.jcarousel > .play').on('click', function(){ $('.jcarousel').jcarouselAutoscroll('start'); });
    $('.jcarousel > .pause').on('click', function(){ $('.jcarousel').jcarouselAutoscroll('stop'); });
    $('.jcarousel').on('jcarousel:animate', function(event, carousel) {
	console.log(this);
	console.log(event);
	console.log(carousel);
    });
});
</script>

<script type="text/javascript">
adroll_adv_id = "CDQEA2M6GVEUJFQ7MK7ND3";
adroll_pix_id = "3P4Y24ZADJDOPEEOCPW4QV";
(function () {
var oldonload = window.onload;
window.onload = function(){
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){oldonload()}};
}());
</script>

<?php endif; ?>
<?if( isset( $_GET["aff_id"] ) ) {  ?>
<script language='javascript'>
// sets the cookie cookie1
document.cookie = 'affiliate_id=<?=$_GET["aff_id"]?>; expires=Fri, 3 Aug 2020 20:47:11 UTC; path=/';
</script>
<? } ?>

 <script type="text/javascript">
		 jQuery(document).ready(function() {
			var offset = 220;
			var duration = 500;
			jQuery(window).scroll(function() {
				if (jQuery(this).scrollTop() > offset) {
					jQuery('.back-to-top-report').fadeIn(duration);
				} else {
					jQuery('.back-to-top-report').fadeOut(duration);
				}
			});

			jQuery('.back-to-top').click(function(event) {
				event.preventDefault();
				jQuery('html, body').animate({scrollTop: 0}, duration);
				return false;
			})
		});
 </script>

 <script type="text/javascript">
var theToggle = document.getElementById('toggle');

// based on Todd Motto functions
// http://toddmotto.com/labs/reusable-js/

// hasClass
function hasClass(elem, className) {
	return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}
// addClass
function addClass(elem, className) {
    if (!hasClass(elem, className)) {
    	elem.className += ' ' + className;
    }
}
// removeClass
function removeClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
	if (hasClass(elem, className)) {
        while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
            newClass = newClass.replace(' ' + className + ' ', ' ');
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    }
}
// toggleClass
function toggleClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
    if (hasClass(elem, className)) {
        while (newClass.indexOf(" " + className + " ") >= 0 ) {
            newClass = newClass.replace( " " + className + " " , " " );
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    } else {
        elem.className += ' ' + className;
    }
}

if( theToggle )
{
theToggle.onclick = function() {
   toggleClass(this, 'on');
   return false;
}
}
</script>

<script type="text/javascript">
    


  
       $(".site-sidebar ul li a").filter(function(){
    	return this.href == location.href.replace(/#.*/, "");
            
	}).addClass("active");
     

    
   
    
	/*
    jQuery(document).ready( function($) {

	$(window).resize(function() {
	if ($(window).width() < 940){
		$(".secondary-col").css({'height':($(".site-main").height()+'px')});
	}
	});

	if($(".secondary-col").height() < $(".site-main").height()){
		$(".secondary-col").css({'height':($(".site-main").height()+'px')});
	}
 });
 	*/
</script>

<script type="text/javascript">
	// console.log(window.location);
	// if(!window.location.href.indexOf('signup') > -1) return false;
	var pgUrl = window.location.search;
	var offer = (pgUrl.indexOf('offercode') > -1) ? pgUrl.split('=')[1] : false;
	console.log(offer);
	if (offer !== false){
		console.log(offer);
		$('#coupon-0').val(offer);
	}
</script>
<!-- Twitter universal website tag code -->
<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
<script type="text/javascript">twttr.conversion.trackPid('nuq26', { tw_sale_amount: 0, tw_order_quantity: 0 });</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=nuq26&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=nuq26&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
</noscript>
<!-- End Twitter universal website tag code -->

<?php if (!is_user_logged_in() && (is_category( '128' ) || is_page('43') || is_home())  ): ?>
<!----Screenpopper---->
<!-- <script type="text/javascript" src="//screenpopper.com/s-hub/738/2493/9e0e2bc6e8704e59ab784ce2abbefa66/start.js"></script> -->
<!----/Screenpopper---->
<?php endif; ?>
<script type="text/javascript" id='am-ctcs-v1'>
    (function(){
    var url=(("https:" == document.location.protocol) ?   "https://reports.hitsongsdeconstructed.com/members" : "https://reports.hitsongsdeconstructed.com/members");

    var d=document, s=d.createElement('script'), src=d.getElementsByTagName('script')[0];
    var w = window; var lo = w.location; var hr=lo.href; var ho=lo.host;  var se=lo.search;
    var m = RegExp('[?&]ref=([^&]*)').exec(se);
    var ref = m && decodeURIComponent(m[1].replace(/\+/g, ' '));s.type='text/javascript';
    s.async=true; s.src=url+'/aff/click-js/?r='+ref+'&s='+encodeURIComponent(document.referrer);
    if(ref){src.parentNode.insertBefore(s,src); var uri = hr.toString().split(ho)[1];
    w.history.replaceState('Object', 'Title', uri.replace(m[0], ""));}})();

</script>
<script>
$( document ).ready(function() {
//alert( ocgetCookie( "ocode" ) );
//alert( $("#offer_code-0").val() );
  $("#offer_code-0").val( ocgetCookie( "ocode" ) );
//alert( $("#offer_code-0").val() );
});

function ocgetCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
</script>
<script>
	$(function() {
    	$( ".info-icon" ).tooltip({
        tooltipClass: "hoverbox",
        position: {  my: "center bottom-15",
        at: "center bottom"}
	});
});
    

 
</script>

<!--- THiS IS THE UPDATED SITE MAY 12 20162--->

</body>
</html>
