<?php
/**
 * Template Name: HSD Chart/Wire Secondary Opt-In Form
 *
 * Description: This is the main hsd charts page
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */ 

get_header(); ?>

	<div id="primary" class="content-area primary-col">
		<div id="content" class="site-content hsdcharts">

<!--<h1 style="font-size:34px;margin:5px 0;font-weight:normal;">Thank You!</h1>-->
<p style="font-family:'Source Sans Pro',sans-serif;font-size:18px;color:#666;margin-bottom:20px;">Please take a moment to tell us a little more about yourself.</p>

<p id="form-errors" style="display:none;font-family:'Source Sans Pro',sans-serif;font-size:13px;color:#000;margin-bottom:20px;border:2px solid red;padding:5px;"></p>

<form id="subscribe-hsdwire">
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tr><td>
	First Name*: <br/>
	<input type="text" id="firstn" name="firstn" value="<?php echo $_GET['firstn'];?>"></input><br/>
</td><td>
	Last Name*: <br/>
	<input type="text" id="lastn" name="lastn" value="<?php echo $_GET['lastn'];?>"></input><br/>
</td></tr>
<tr><td>
	E-Mail*: <br/>
	<input type="text" id="emaila" name="emaila" value="<?php echo $_GET['emaila'];?>"></input><br/>
</td><td>
	Company Name: <br/>
	<input type="text" id="company_name" name="company_name" data-required="0"></input><br/>
</td></tr>
<tr><td>
	Primary Occupation*: <br/>
	<select name="primary_occupation" id="primary_occupation" size="1">
		<option value=""></option>
		<option value="a_r">A&amp;R</option>
		<option value="agent">Agent</option>
		<option value="ceo">CEO/President/Owner</option>
		<option value="critic">Critic</option>
		<option value="engineer">Engineer</option>
		<option value="licensing">Licensing</option>
		<option value="lyricist">Lyricist</option>
		<option value="manager">Manager</option>
		<option value="marketing_creative">Marketing/Creative</option>
		<option value="music_supervisor">Music Supervisor</option>
		<option value="musician">Musician</option>
		<option value="producer">Producer</option>
		<option value="public_relations">Public Relations</option>
		<option value="session_musician">Session Musician</option>
		<option value="songwriter_composer">Songwriter/Composer</option>
		<option value="other">Other, please specify</option>
	</select><br/>
</td><td>
	<br/><input type="text" id="other_occupation" name="other_occupation" placeholder="Other" data-required="0"></input><br/>
</td></tr>

<tr><td>
	Company Type: <br/>
	<select name="company_type" id="company_type" size="1" data-required="0">
		<option value=""></option>
		<option value="academic_institution">Academic Institution</option>
		<option value="advertising_agency">Advertising / Agency</option>
		<option value="artist_development">Artist Development</option>
		<option value="artist_management">Artist Management</option>
		<option value="gaming">Gaming</option>
		<option value="independent">Independent</option>
		<option value="indie_label">Indie Label</option>
		<option value="industry_association">Industry Association</option>
		<option value="major_label">Major Label</option>
		<option value="media">Media (Magazine, Website, Blog)</option>
		<option value="music_library">Music Library</option>
		<option value="publisher">Publisher</option>
		<option value="studio">Studio</option>
		<option value="other">Other, please specify</option>
	</select><br/>
</td><td>
	<br/><input type="text" name="other_company" id="other_company" placeholder="Other" data-required="0"></input><br/>
</td></tr>

<tr><td>
	Music is My*: <br/>
	<select name="music_is_my" id="music_is_my" size="1">
		<option value=""></option>
		<option value="profession">Profession</option>
		<option value="hobby">Hobby</option>
	</select><br/>
</td><td>
	Experience*: <br/>
	<select name="experience" id="experience" size="1">
		<option value=""></option>
		<option value="novice">Novice</option>
		<option value="experienced">Experienced</option>
		<option value="pro">Professional</option>
	</select><br/>
</td></tr>
<tr><td>
	How did you hear about us?* <br/>
	<select name="how_heard_about_us" id="how_heard_about_us" size="1">
		<option value=""></option>
		<option value="email">Received an Email</option>
		<option value="ad">Ad</option>
		<option value="facebook">Facebook</option>
		<option value="linkedin">LinkedIn</option>
		<option value="twitter">Twitter</option>
		<option value="conference">Conference</option>
		<option value="blog">Blog</option>
		<option value="forum">Forum</option>
		<option value="websearch">Web Search</option>
		<option value="other">Other, please specify</option>
	</select><br/>
</td><td>
	<br/><input type="text" id="other_heard" name="other_heard" placeholder="Other" data-required="0"></input><br/>
</td></tr>
<tr><td>
	Your Favorite Sources for Industry News: <br/>
	<input type="text" id="news_website1" name="news_website1" placeholder="Website 1" data-required="0"></input><br/>
</td><td>
	<br/><input type="text" id="news_website2" name="news_website2" placeholder="Website 2" data-required="0"></input><br/>
</td></tr>
<tr><td>
	<input type="text" id="news_website3" name="news_website3" placeholder="Website 3" data-required="0"></input><br/>
</td><td>
	<input type="text" id="news_website4" name="news_website4" placeholder="Website 4" data-required="0"></input><br/>
</td></tr>
<tr><td colspan="2">
	<input type="checkbox" id="sub_hsd_partners" name="sub_hsd_partners" checked><label for="sub_hsd_partners">Send me periodic information and offers via e-mail from carefully-selected partners of Hit Songs Deconstructed.</label><br/>
</td></tr>
<tr><td colspan="2">
	<input type="checkbox" id="sub_hsd_events" name="sub_hsd_events" checked><label for="sub_hsd_events">Send me periodic information via e-mail about upcoming events, enhancements, products, services, special promotions from Hit Songs Deconstructed.</label>
</td></tr>
</table>
	<input id="subscription_date" name="subscription_date" type="hidden" value="<?php echo date ('Y-m-d');?>" />
	<button type="button" id="submitbtn" style="float:right;margin-right:23px;">Submit</button>
	<div style="clear:both;"></div>
</form>
		</div><!-- #content -->
	</div><!-- #primary -->
<script type="text/javascript">
var subscribe = document.getElementById('submitbtn');
subscribe.onclick = function(){ 
 var isEmpty = false;
 console.log( isEmpty );
 jQuery('#subscribe-hsdwire select').each(function() {
   if( jQuery(this).val() === '' && !( jQuery(this).data('required') === 0 ) ) {
      jQuery(this).css('border','2px solid red');
      console.log('select');
      isEmpty = true; 
   }
 });
 jQuery('#subscribe-hsdwire input[type=text]').each(function() {
   if( jQuery(this).val() === '' && !( jQuery(this).data('required') === 0 ) ) {
      jQuery(this).css('border','2px solid red');
      console.log('input');
      isEmpty = true;
   }
 }); 
 if( isEmpty ) {
    jQuery('#form-errors').html('Please complete all required fields.');
    jQuery('#form-errors').show();
 } else {
 var getapi = new XMLHttpRequest();
 var url = '/streamsend/subscribe.php';
 var email = document.getElementById('emaila').value;

 var $list = jQuery("#subscribe-hsdwire");
 var qs = ( $list.serialize() );

 var params = qs;

 var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
	      //	      alert( params );
 if (email == '' || !re.test(email)) { /*document.getElementById('sb-optinform').innerHTML = caption + '<br/><span style="color:#ff0000;">Please enter a valid email address.</span>';*/ }
 else {
 console.log('Updating...');
 this.href = 'javascript:void(0)';
 getapi.open('POST', url, true);
 getapi.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 getapi.onreadystatechange = function(){
   if (getapi.readyState == 4 && getapi.status == 200) { console.log(getapi.responseText); window.location.href='/subscription-thanks/';
 }
 };//endonreadystatechange
 getapi.send( params );
 }//endif
 }//endiferrors
};
 
</script>
<?php get_sidebar(); ?>
<?php get_footer(); ?>