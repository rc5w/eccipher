<?php
/**
 * Sample form
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */


?>

<div class="hsdsample-box-form" style="margin-top: -30px;">
	      <div class="hsdsample-box-form-header">
              <div class="hsdsample-box-vid">
              <img src="<?=get_stylesheet_directory_uri();?>/assets/img/header-vid-play.png" style="margin-bottom:35px;" />
              <?php echo do_shortcode('[video_lightbox_youtube video_id="d2pztuuekX4&rel=0&autoplay=1" class="free-trial-vid" width="640" height="480" anchor="click me"]'); ?>
              <h2>Watch this video for an overview of Hit Songs Deconstructed</h2>     
              </div>
              <h2 style="width:100%;">Fill out the form below to sign up for a free trial:</h2>
              <div class="cf"></div>
              </div>
<div id="errorbox"></div>
              <form class="hsdlanding-sampleform" style="width:100%;">
                <div class="hsdlanding-sampleform-container">
              	<!--<label>First Name<sup style="color:#f35c2d;">*</sup></label>-->
                <input type="text" name="first_name" id="first_name" placeholder="First Name*" >
                </div>
                
                
                  
               <div class="hsdlanding-sampleform-container">
              	<!--<label>Last Name<sup style="color:#f35c2d;">*</sup></label>-->
                <input type="text" name="last_name" id="last_name" placeholder="Last Name*" >
                </div>  
                
                <div class="hsdlanding-sampleform-container">
               <!--<label>Your Email Address<sup style="color:#f35c2d;">*</sup></label>-->
                <input type="text" name="email_address" id="email_address" placeholder="Email Address*" >
                </div>
                
                <div class="hsdlanding-sampleform-container">
               <!-- <label>Company Name<sup style="color:#f35c2d;">*</sup></label> -->
                <input type="text" id="company_name" name="company_name" data-required="0" placeholder="Company Name*"></input>
                </div>
                
                 
                <div class="hsdlanding-sampleform-container">
              <!--  <label>Company Type</label> -->
                <div class="form-drop-down">
                	<select name="company_type" id="company_type" size="1" data-required="0">
							<option value="" disabled selected>Company Type</option>
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
							<option value="other">Other</option>
					</select>
                </div>
                </div>
                
            	
               
                
                <div class="hsdlanding-sampleform-container">
              <!--  <label>Primary Occupation<sup style="color:#f35c2d;">*</sup></label> -->
                <div class="form-drop-down" style="margin: 0 0 12px;">
                	<select name="primary_occupation" id="primary_occupation" size="1">
						<option value="" disabled selected>Primary Occupation</option>
						<option value="a_r">A&amp;R</option>
						<option value="agent_manager">Agent/Manager</option>
						<option value="ceo">CEO/President/Owner</option>
						<option value="creative_director">Creative Director</option>
						<option value="engineer">Engineer</option>
						<option value="licensing">Licensing</option>
						<option value="marketing_pr">Marketing/PR</option>
						<option value="news_media">News &amp; Media</option>
						<option value="music_supervisor">Music Supervisor</option>
						<option value="musician">Musician</option>
						<option value="producer">Producer</option>
						<option value="songwriter_composer">Songwriter/Composer</option>
						<option value="other">Other</option>
					</select>
                </div>
                </div>
               
                <div class="hsdlanding-sampleform-container">
               <!-- <label>State/Province/region</label> -->
                <input type="text" id="state" name="state" placeholder="State/Province/Region"></input>
                </div>
                
                <div class="hsdlanding-sampleform-container">
                <div class="form-drop-down">
                <!--	<label>Country<sup style="color:#f35c2d;">*</sup></label> -->
                	<select name="country" id="country">
						<option value="" disabled selected>Country*</option>
						<option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AG">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AG">Antigua &amp; Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AA">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BL">Bonaire</option>
                        <option value="BA">Bosnia &amp; Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BR">Brazil</option>
                        <option value="BC">British Indian Ocean Ter</option>
                        <option value="BN">Brunei</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="IC">Canary Islands</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CD">Channel Islands</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CI">Christmas Island</option>
                        <option value="CS">Cocos Island</option>
                        <option value="CO">Colombia</option>
                        <option value="CC">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
						<option value="CT">Cote D&apos;Ivoire</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CB">Curacao</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="TM">East Timor</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FA">Falkland Islands</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="FS">French Southern Ter</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GB">Great Britain</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GN">Guinea</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HW">Hawaii</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IA">Iran</option>
                        <option value="IQ">Iraq</option>
                        <option value="IR">Ireland</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="NK">Korea North</option>
                        <option value="KS">Korea South</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Laos</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macau</option>
                        <option value="MK">Macedonia</option>
                        <option value="MG">Madagascar</option>
                        <option value="MY">Malaysia</option>
                        <option value="MW">Malawi</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="ME">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="MI">Midway Islands</option>
                        <option value="MD">Moldova</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Nambia</option>
                        <option value="NU">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="AN">Netherland Antilles</option>
                        <option value="NL">Netherlands (Holland, Europe)</option>
                        <option value="NV">Nevis</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NW">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau Island</option>
                        <option value="PS">Palestine</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PO">Pitcairn Island</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="ME">Republic of Montenegro</option>
                        <option value="RS">Republic of Serbia</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russia</option>
                        <option value="RW">Rwanda</option>
                        <option value="NT">St Barthelemy</option>
                        <option value="EU">St Eustatius</option>
                        <option value="HE">St Helena</option>
                        <option value="KN">St Kitts-Nevis</option>
                        <option value="LC">St Lucia</option>
                        <option value="MB">St Maarten</option>
                        <option value="PM">St Pierre &amp; Miquelon</option>
                        <option value="VC">St Vincent &amp; Grenadines</option>
                        <option value="SP">Saipan</option>
                        <option value="SO">Samoa</option>
                        <option value="AS">Samoa American</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome &amp; Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="OI">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syria</option>
                        <option value="TA">Tahiti</option>
                        <option value="TW">Taiwan</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania</option>
                        <option value="TH">Thailand</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad &amp; Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TU">Turkmenistan</option>
                        <option value="TC">Turks &amp; Caicos Is</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States of America</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VS">Vatican City State</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Vietnam</option>
                        <option value="VB">Virgin Islands (Brit)</option>
                        <option value="VA">Virgin Islands (USA)</option>
                        <option value="WK">Wake Island</option>
                        <option value="WF">Wallis &amp; Futana Is</option>
                        <option value="YE">Yemen</option>
                        <option value="ZR">Zaire</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
					</select>
                    
                </div>
                </div> 
            
                <div class="cf"></div>
                
                 <div class="hsdlanding-sampleform-container">
              	<!-- <label>Username<sup style="color:#f35c2d;">*</sup></label> -->
                <input type="text" name="user_name" id="user_name" placeholder="Username*" >
                </div>
                
                
                  
                <div class="hsdlanding-sampleform-container">
              	<!-- <label>Password<sup style="color:#f35c2d;">*</sup></label> -->
                <input type="password" name="password" id="password" placeholder="Password*" >
                </div>  
                <div class="cf"></div>
                
           
                
                <h3>Communication Preferences</h3>
                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin:0;border:none;">
                <tr>
                <td valign="top" style="border:none;padding-right:6px;">
                <input style="width:25px !important;margin-bottom: 20px;" type="checkbox" id="sub_hsd_partners" value="sub_hsd_partners" name="sub_hsd_partners" checked>
                </td>
                <td style="line-height: 17px;border:none;">
                <label style="font-family:Georgia, 'Times New Roman', Times, serif;font-size:12px;color:#666666;"  for="sub_hsd_partners">Send me periodic information and offers via e-mail from carefully-selected partners of Hit Songs Deconstructed.</label>
                </td>
                </tr>
                <tr>
                <td style="border:none;padding-right:6px;" valign="top">
                <input style="width:25px !important;margin-bottom: 40px;" type="checkbox" id="sub_hsd_events" value="sub_hsd_events" name="sub_hsd_events" checked>
                </td>
                <td style="line-height: 17px;border:none;">
                <label style="font-family:Georgia, 'Times New Roman', Times, serif;font-size:12px;color:#666666;" for="sub_hsd_events">Send me periodic information via e-mail about upcoming events, enhancements, products, services, special promotions from Hit Songs Deconstructed.</label>
                </td>
                </tr>
                </table>
               
                
                <div class="form-dl-button" style="float:right;">
                <button style="margin-top: 0;background: #ff6633 !important;font-size: 16px;color: #ffffff;padding: 10px 0 10px 0;border: 0;border-radius: 0;width: 100px;" id="submitbuttonsample" type="button">Submit</button>
                </div>
                
                <input type="hidden" id="ocode" value="<?php echo $_COOKIE['ocode']; ?>">
                <input type="hidden" name="subscription_type" id="subscription_type" value="Individual - Free Trial">
                <input type="hidden" name="free_trial" id="free_trial" value="freetrial">
              </form>
              
        </div>
        
<div class="cf"></div>

<div class="test-sample-report">
<?php

	the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) );
	echo '<div style="clear:both;margin-bottom:20px;">...</div><!--clear float-->';
	echo do_shortcode('[ssba]');

?>
</div>
<?php $ocode = $_COOKIE['ocode']; ?>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript">
		
		
	jQuery(document).ready(function($){
	
	$.validator.setDefaults({
		errorElement: 'div',
		
	});
	
	$('.hsdlanding-sampleform').validate({
		
		rules: {
			first_name: {
				required: true
				},
			last_name: {
				required: true
				
				},
			 primary_occupation: {
				 required: true
			 },
			 email_address: {
				 required: true
			 },
			  user_name: {
				 required: true
			 },
			 password: {
				 required: true
			 },
			 state: {
				 required: true
			 },
			 country: {
				 required: true
			 }
		}
		});
		
		
		$('#submitbuttonsample').on('click', function(){
		if ($(".hsdlanding-sampleform").valid()) {		
		var ocode = $('#ocode').val();
		var fname = $('#first_name').val();
		var lname = $('#last_name').val();
		var companyname = $('#company_name').val();
		var companytype = $('#company_type').val();
		var subscription_type = $('#subscription_type').val();
		var email = $('#email_address').val();
		var freetrial = $('#free_trial').val();
	    var primaryocc = $('#primary_occupation').val();
		var state = $('#state').val();
		var country = $('#country').val();
		var username = $('#user_name').val();
		var password = $('#password').val();
		var subhsdpartners = $('#sub_hsd_partners:checked').val();
		var subhsdevents = $('#sub_hsd_events:checked').val();
		$('.form-dl-button').html('<div class="form-dl-after-click">One Moment Please...</div>')
   	  $('#errorbox').html('' );
		
		
		$.post(
			'/streamsend/free-trial.php',
			{ 
				fname: fname,
				lname: lname,
				company_name: companyname,
				company_type: companytype,
				subscription_type: subscription_type,
				primary_occupation: primaryocc,
				email: email,
				freetrial: freetrial,
				state: state,
				country: country,
				username: username,
				password: password,
				sub_hsd_partners: subhsdpartners,
				sub_hsd_events: subhsdevents,
				ocode: ocode
			},
			function(msg) {
					//window.location = "https://reports.hitsongsdeconstructed.com/";
					window._ssstats = window._ssstats || [];
					_ssstats.push([
						'configure', {
							accountId: 334905
						}
					]);
					_ssstats.push(['identify', email]);
					_ssstats.push([
						'publish',
						'Subscribe', {
							subscription: 'trial',
							ocode: '<?php echo $_COOKIE['ocode'];?>'
						}
					]);
			  if(parseInt(msg) > 10000) {
			    $.post(
				   '/members/loginamember.php',
				   {
				   id:msg
				       },        function(finishedloggedin) {
				     $.post(
					    '/index.php',
					    {
					    dlid:msg
						},        function(finishedloggedin) {
					//$('.hsdsample-box-form').css("display", "none"),
					//$('.test-sample-report').css("display", "block"),
						window.location = "/category/sample/";
					//window.location.replace("/category/sample/");
					    }

					    );
				   }

				   );

			  } else {

			    $('.hsdlanding-box-form').append('<div class="form-dl-after-click">There was an error</div>');                
			    $('.form-dl-button').html('<button style="margin-top: 0;background: #ff6633 !important;font-size: 16px;color: #ffffff;padding: 10px 0 10px 0;border: 0;border-radius: 0;width: 100px;" id="submitbuttonsample" type="button">Submit</button>');
			    if( msg.indexOf( "already" ) > -1 )
			      {
				$('#errorbox').html('<span style="font-size:14px;color:#F00;line-height:1.5;">Our records indicate that you already have a Hit Songs Deconstructed account.  To request your account be upgraded to a PRO free trial, please email <a href="mailto:yael@hitsongsdeconstructed.com?subject=Free Trial Request" style="color:#F00;text-decoration:none;">yael@hitsongsdeconstructed.com.</a></span>');         
				
			      }
			  }}
		       );
		}
		  });
	  });
							       </script>
