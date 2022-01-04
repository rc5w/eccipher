 <?php header("Access-Control-Allow-Origin: http://www.hitsongsdeconstructed.com"); ?>
<?php

/**
 * The Header for Hit Songs Deconstructed.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0 (HSD Child)
 */

//if ( $_GET['ocode'] ) { $_COOKIE['ocode'] = $_GET['ocode']; }

if ( $_GET['ocode'] ) { 

	$cookie_name = "ocode";
	$cookie_value = $_GET['ocode'];
	setcookie($cookie_name, $cookie_value, time() + (86400), "/");
	$_COOKIE['ocode'] = $_GET['ocode']; 
	$ocode = $_COOKIE['ocode'];

}

if( $_REQUEST["dlid"] )
{
	$id = array_pop( explode( "_", $_REQUEST["dlid"] ) );
	$id = $id / 3774; 
	wp_set_current_user( $id );
	wp_set_auth_cookie( $id );
	file_put_contents( "/tmp/rc", "set cookies for: " . $id . "\n", FILE_APPEND );
}
//file_put_contents( "/tmp/rc", "did it work?" .     is_user_logged_in()    . "\n", FILE_APPEND );
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]--><head>
<!-- <meta http-equiv="Access-Control-Allow-Origin" content="*"> -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--<meta name="viewport" content="width=1100, maximum-scale=1, user-scalable=yes">-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if ( is_page( 23850 ) ) : ?>
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<?php endif; ?>  
	<meta name="ocode" content="<?=$_COOKIE['ocode'];?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link 5 rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen-child/media-queries.css">
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen-child/assets/css/reports.css" type="text/css" media="print"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-17363957-2', 'auto');
		ga('send', 'pageview');

	</script>
	<style type="text/css">
      #menu-item-25800, #menu-item-14188{display: none;}
    </style>
	
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	
	
	<![endif]-->

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
			n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
				document,'script','https://connect.facebook.net/en_US/fbevents.js');

			fbq('init', '287943558203756');
			fbq('track', "PageView");</script>
			<noscript><img height="1" width="1" style="display:none"
				src="https://www.facebook.com/tr?id=287943558203756&ev=PageView&noscript=1"
				/></noscript>
				<!-- End Facebook Pixel Code -->


				<?php 	/** Enqueue all javascript library files and dependent stylesheets **/ ?>
				<?php wp_enqueue_style( 'revealcss', get_template_directory_uri() . '-child/assets/css/reveal.css' ); ?>
				<?php wp_enqueue_script( 'jquery', true); ?>
				<?php wp_enqueue_script( 'reveal', get_template_directory_uri() . '-child/assets/js/jquery.reveal.js', true); ?>

				<?php wp_head(); ?>

<script>
(function(a,b,c,d,e,f,g,h){a[d]=a[d]||{q:[]};a[d].q.push(f);g=b.createElement(c);
g.async=1;g.src="//"+e+"/jsapi/v1.js";h=b.getElementsByTagName(c)[0];
h.parentNode.insertBefore(g,h)})(window,document,"script","ScreenPopperAPI",
"pop1.screenpopper.com",{"Load":["738/2977/6f677d515a4186af86a53da657c57bdf"]});
</script>

			</head>

			<body <?php body_class(); ?>>
				<div id="page" class="hfeed site">
					<header id="masthead" role="banner">
						<div class="preheader">

							<div class="preheader-lft">
								<a href="https://reports.hitsongsdeconstructed.com/hsdwire"><img src="<?=get_stylesheet_directory_uri();?>/assets/img/hsd-logo.svg" width="265" border="0" /></a>
							</div><!--/left-float-->
							<div class="preheader-rht">
		<?php /* <ul>
		  <? 	
		  	$cl = "";
			$user = wp_get_current_user();
///echo( "aaa:" . $user->user_login );
			if( $user->user_login == "hreid" || $user->user_login == "solent" || $user->user_login == "gmassey" ) 
			  $cl = "style='display:none'";
			?>

			
			<li <?=$cl?> style="padding-right:10px;"><?php if ( is_user_logged_in() ) : ?><a href="https://reports.hitsongsdeconstructed.com/members/">MEMBERS</a><?php else : ?><!-- <a href="https://reports.hitsongsdeconstructed.com/sign-up-today/">SUBSCRIBE</a> --><?php endif; ?></li>
            <li <?=$cl?>><?php if ( is_user_logged_in() ) : ?><a href="https://reports.hitsongsdeconstructed.com/members/login/logout">LOG OUT</a>
				<?php else : ?><a href="https://reports.hitsongsdeconstructed.com/members/login/index">LOG IN</a><?php endif; ?></li>
			<li style="margin-right:0px;">
				<a style="background:none;padding-right:0;" href="https://www.facebook.com/hitsongsdeconstructed" target="_blank">
				<img src="https://reports.hitsongsdeconstructed.com/wp-content/themes/twentythirteen-child/assets/img/fb-logo-gray.png" border="0" />
				</a>
			</li>
			<li style="margin-right:0px;">
				<a style="background:none;padding-right:0;" href="https://twitter.com/HSDeconstructed" target="_blank">
				<img src="https://reports.hitsongsdeconstructed.com/wp-content/themes/twentythirteen-child/assets/img/twitter-logo-gray.png" border="0" />
				</a>
			</li>
			<li style="margin-right:0px;">
				<a style="background:none;padding-right:0;" href="https://www.linkedin.com/company/hit-songs-deconstructed" target="_blank">
				<img src="https://reports.hitsongsdeconstructed.com/wp-content/themes/twentythirteen-child/assets/img/linkedin-logo-gray.png" border="0" />
				</a>
			</li>
		</ul>
		
		*/ ?>
		<?php if ( is_user_logged_in() ) { ?>
		<div class="menu-container">
			<div class="menu-items">
				<div class="menu-header-2-container">
					<ul id="menu-header-2" class="menu">
						<? 	
						$cl = "";
						$user = wp_get_current_user();
//echo( $user->user_login );
						if( $user->user_login == "hreid" || $user->user_login == "solent" || $user->user_login == "gmassey" ) 
							$cl = "style='display:none'";
						?>
						<li id="menu-item-42" class="menu-item-reports menu-item menu-item-type-custom menu-item-object-custom menu-item-42"><a target="_blank" href="http://reports.hitsongsdeconstructed.com">Reports</a></li>
						<li id="menu-item-30" class="menu-item-immersion menu-item menu-item-type-custom menu-item-object-custom menu-item-30">
							<?php if ( is_user_logged_in() ) : ?>
								<a target="_blank" href="//db.hitsongsdeconstructed.com">Immersion</a>
							<?php else : ?>
								<a target="_blank" href="http://immersion.hitsongsdeconstructed.com">Immersion</a>
							<?php endif; ?>
						</li>
						<li id="menu-item-32" class="menu-item-news-2 menu-item menu-item-type-post_type menu-item-object-page menu-item-32">
							<a target="_blank" href="http://hitsongsdeconstructed.com/#about">About</a>
						</li>
						<li id="menu-item-31" class="menu-item-wire menu-item menu-item-type-post_type menu-item-object-page menu-item-31">
							<a href="http://www.hitsongsdeconstructed.com/in-the-news/">In The News</a>
						</li>
						<li <?=$cl?> id="menu-item-34" class="menu-item-signup menu-item menu-item-type-custom menu-item-object-custom menu-item-34">
							<?php if ( is_user_logged_in() ) : ?>
								<a target="_blank" href="https://reports.hitsongsdeconstructed.com/members/">Members</a>
							<?php else : ?>
								<a target="_blank" href="http://www.hitsongsdeconstructed.com/subscriptions">Sign Up</a>
							<?php endif; ?>
						</li>
						<li <?=$cl?> id="menu-item-34" class="menu-item-login menu-item menu-item-type-custom menu-item-object-custom menu-item-34">
							<?php if ( is_user_logged_in() ) : ?>
								<a href="https://reports.hitsongsdeconstructed.com/members/login/logout">Logout</a>
							<?php else : ?>
								<a href="https://reports.hitsongsdeconstructed.com/members/login/index">Login</a>
							<?php endif; ?>
						</li>
					</ul></div>				</div><!-- /.menu-items -->	

					<div class="cf"></div>
					
				</div><!-- /.menu-container -->	
				<?php } else { ?>
				<div class="menu-container" id="header-nonmember">
					<div class="menu-items">
						<div class="menu-header-2-container"><ul id="menu-header-2" class="menu"><li id="menu-item-71" class="menu-item-about menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children menu-item-71"><a href="http://www.hitsongsdeconstructed.com/#about">About</a>
							<ul class="sub-menu">
								<li id="menu-item-150" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-150"><a href="http://www.hitsongsdeconstructed.com/reports">Hit Songs Deconstructed Reports</a></li>
								<li id="menu-item-151" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-151"><a href="http://immersion.hitsongsdeconstructed.com/">IMMERSION Database</a></li>
								<li id="menu-item-152" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-152"><a href="https://reports.hitsongsdeconstructed.com/members/signup/combo-freetrial">Free Trial</a></li>
								<li id="menu-item-155" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-155"><a href="http://www.hitsongsdeconstructed.com/academic/landing-1/">Academic Subscriptions</a></li>
								<li id="menu-item-156" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-156"><a href="http://www.hitsongsdeconstructed.com/contact">Contact Us</a></li>
							</ul>
						</li>
						<li id="menu-item-27" class="menu-item-news-2 menu-item menu-item-type-post_type menu-item-object-page menu-item-27"><a href="http://www.hitsongsdeconstructed.com/in-the-news/">In The News</a></li>
						<li id="menu-item-161" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-161"><a href="https://reports.hitsongsdeconstructed.com/hsdwire/">HSD Wire</a></li>
						<li id="menu-item-162" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-162"><a href="http://www.hitsongsdeconstructed.com/subscriptions">Subscribe</a>
							<ul class="sub-menu">
								<li id="menu-item-164" class="menu-item-ind-subs menu-item menu-item-type-custom menu-item-object-custom menu-item-164"><a href="http://www.hitsongsdeconstructed.com/subscriptions">Individual Subscriptions</a></li>
								<li id="menu-item-165" class="menu-item-academic-sub menu-item menu-item-type-custom menu-item-object-custom menu-item-165"><a href="http://www.hitsongsdeconstructed.com/academic/landing-1/">Academic Subscriptions</a></li>
							</ul>
						</li>
						<li id="menu-item-72" class="menu-item-login menu-item menu-item-type-custom menu-item-object-custom menu-item-72"><a target="_blank" href="https://reports.hitsongsdeconstructed.com/members/login/index">Login</a></li>
					</ul></div>				</div><!-- /.menu-items -->	


					<div class="sidebar-toggle-box">
						<div class="fa fa-bars"></div>
					</div>
					<div class="cf"></div>
					
				</div><!-- /.menu-container -->	
				<?php }?>
			</div><!--/right-float-->
			<section class="mobile-header-section">
				<a href="#menu-mobile" id="toggle"><span></span></a>


				<div id="menu-mobile">
					<ul class="mobile-ul-1">
						<li><?php if ( is_user_logged_in() ) : ?><a href="https://reports.hitsongsdeconstructed.com/members/login/logout">Log out</a>
						<?php else : ?><a href="https://reports.hitsongsdeconstructed.com/members/login/index">Log in</a><?php endif; ?></li>
							<li style="padding-right:10px;"><?php if ( is_user_logged_in() ) : ?><a href="https://reports.hitsongsdeconstructed.com/members/">Members</a><?php else : ?><a href="https://reports.hitsongsdeconstructed.com/sign-up-today/">Signup</a><?php endif; ?></li>
						</ul>      

						<ul class="mobile-ul-1">
							<li><a href="https://reports.hitsongsdeconstructed.com/hsdwire/">HSD Wire</a>
								<ul class="mobile-ul-2">
									<li><a href="http://dev.hitsongsdeconstructed.com/hsdwire-cat/articles/">Articles</a></li>
									<li><a href="https://reports.hitsongsdeconstructed.com/hsdwire-cat/videos/">HSD TV</a></li>
									<li><a href="https://reports.hitsongsdeconstructed.com/hsdwire-cat/penns-picks/">Penn's Picks</a></li>
								</ul>
							</li>
							<li><a href="https://reports.hitsongsdeconstructed.com/charts/">Music Charts</a>
    	<!-- <ul class="mobile-ul-2">
        	
    		<li><a href="https://reports.hitsongsdeconstructed.com/hsdwire-cat/chart-highlights/">Weekly Highlights</a></li>
        </ul>
    -->    </li>
    <li><a href="https://reports.hitsongsdeconstructed.com">Hit Songs Deconstructed Reports</a>
    	<ul class="mobile-ul-2">
    		<li><a href="https://reports.hitsongsdeconstructed.com/category/hsd/">Hit Songs Deconstructed</a></li>
    		<li><a href="https://reports.hitsongsdeconstructed.com/category/special-reports/">Top 10 Deconstructions</a></li>
    		<li><a href="https://reports.hitsongsdeconstructed.com/category/special-reports/">Sample Deconstructions</a></li>
    	</ul>
    </li>
    <li><a href="https://reports.hitsongsdeconstructed.com/resources/websites-publications/">Resources</a></li>
    <li><a href="https://reports.hitsongsdeconstructed.com/archive/">Archive</a></li>
    <li><a href="//db.hitsongsdeconstructed.com/">Immersion</a></li>
    <li><a href="http://www.hitsongsdeconstructed.com/#about">About</a></li>
    <li><a href="http://www.hitsongsdeconstructed.com/in-the-news/">In The News</a></li>
</ul>



</div>

</section>

<div class="cf"></div>
</div>

<?php if ( is_post_type_archive('hsd_wire') ): ?>
<?php /* <div class="main-header-image">
	<img src="<?=get_stylesheet_directory_uri();?>/assets/img/hsd-main-image.jpg" border="0" />
</div>	 */ ?>
<?php /*
<section class="row combo-row-1 padding-t">
        <div class="element-container">
            <div class="header-combo-img">
                <img src="http://www.hitsongsdeconstructed.com/wp-content/themes/hitsongsdeconstructed/assets/images/combo/combo-img-1.svg" class="combo-img-1" border="0" />
                <img src="http://www.hitsongsdeconstructed.com/wp-content/themes/hitsongsdeconstructed/assets/images/combo/combo-img-2.svg" class="combo-img-2" border="0" />
                <img src="http://www.hitsongsdeconstructed.com/wp-content/themes/hitsongsdeconstructed/assets/images/combo/combo-img-3.svg" class="combo-img-3" border="0" />
            </div><!-- /.header-vid-container -->
        </div>   
    </section><!-- /.combo-row-1 -->
*/ ?>

<?php endif; ?>
<div id="navbar" class="navbar navstyling">
	<nav id="site-navigation" class="navigation main-navigation" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		<div style="position:relative;">

			<?php //if (!is_user_logged_in()): ?>
            <?php /* <div class="header-sign-btn">
			<a class="nav-signup-btn" href="<?=get_site_url();?>/sign-up-today/">Sign Up Today!</a>
		</div><!--end signup btn container--> */ ?>
		<?php //else: ?>
		<div class="header-sign-btn" style="width:auto;">
			<!--sidebar search form-->
			<form class="header-search" action="<?=get_site_url();?>" method="get" style="padding-bottom:0px;margin-top:0px;">
				<fieldset>
					<input type="text" name="s" id="search" placeholder="Search by keyword" value="<?php the_search_query(); ?>" style="display:inline-block;width:230px;height:37px;border:none;border-radius:0;box-shadow:none;padding-left:10px;" />
					<button type="submit" name="Search" style="display:inline-block;width:46px;height:39px;background:url('<?=get_stylesheet_directory_uri();?>/assets/img/search-btn.png') no-repeat;margin-left:-5px;border:none;border-radius:none;box-shadow:none;padding:0;vertical-align:top;"></button>
				</fieldset>
			</form>
			<!--end sidebar search form-->
		</div><!--end signup btn container-->
		<?php //endif; ?>
	</div><!--end signup btn wrapper-->
</nav><!-- #site-navigation -->

</div><!-- #navbar -->
<script>
	$(document).ready(function(){
		$('#menu-item-71 a, #menu-item-162 a').not('.sub-menu a').click(function(e){
			e.preventDefault();
		});
	});
	
</script>

<script>
(function(a,b,c,d,e,f,g,h){a[d]=a[d]||{q:[]};a[d].q.push(f);g=b.createElement(c);
g.async=1;g.src="//"+e+"/jsapi/v1.js";h=b.getElementsByTagName(c)[0];
h.parentNode.insertBefore(g,h)})(window,document,"script","ScreenPopperAPI",
"pop1.screenpopper.com",{"Load":["738/2977/6f677d515a4186af86a53da657c57bdf"]});
</script>


</header><!-- #masthead -->
<div id="main" class="site-main">