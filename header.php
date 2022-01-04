<?php header("Access-Control-Allow-Origin: http://www.hitsongsdeconstructed.com"); ?>
<?php

$urlprefix = "";
if( $_SERVER["USER"] == "devreports" )
{
$urlprefix = "dev";
}
//print_r( $_SERVER );
//echo( $urlprefix );
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
$api = am4PluginsManager::getAPI();
$isessentials =  $api->isEssentialsSub();
$hastrendbriefs =  $api->isTrendBriefSub();
$isloggedin =  $api->isLoggedIn();
$hasdemand = $api->isOnDemandSub();

//print_r( $_COOKIE ); exit;
$hasvideos = $api->canViewOnDemandVideos() || $api->isVideoOnDemandSub();
$user = am4PluginsManager::getAPI()->getUser();
if( !$user )
{
	require_once "/home/eccipher/public_html/members/initips.php";
	if( isAutomaticLogin() )
	{
		$cookie_value = "https://" . $_SERVER["SERVER_NAME"] . "/" . $_SERVER["REQUEST_URI"];
		setcookie("myreferer", $cookie_value, time() + (86400), "/");
		Header( "Location: /members/?goreferer=1" );
		exit;
	}

	// if( $_COOKIE["amember_rp"] &&$_COOKIE["amember_ru"] )
	// {
	// 	$cookie_value = "https://" . $_SERVER["SERVER_NAME"] . "/" . $_SERVER["REQUEST_URI"];
	// 	setcookie("myreferer", $cookie_value, time() + (86400), "/");
	// 	Header( "Location: /members/?goreferer=1" );
	// 	exit;
	// }
}

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
	<link 1 rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen-child/media-queries.css">
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen-child/assets/css/reports.css" type="text/css" media="print"/>
<link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
	<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script src="//cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<link href="//cdn.rawgit.com/noelboss/featherlight/1.4.1/release/featherlight.min.css" type="text/css" rel="stylesheet" />
		<link href="../assets/css/featherlight.css" type="text/css" rel="stylesheet" />
		<script src="//cdn.rawgit.com/noelboss/featherlight/1.4.1/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />


		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-17363957-2', 'auto');
		ga('send', 'pageview');

	</script>
	<style type="text/css">
.ui-autocomplete { z-index: 1000 !important}
      #menu-item-25800, #menu-item-14188{display: none;}
       li.menu-item-workshops a {
    background: url('http://www.hitsongsdeconstructed.com/wp-content/themes/hitsongsdeconstructed/assets/images/header/menu-icon-workshop.svg') no-repeat left !important;
    background-size: 25px 25px;
           margin-left:0!important;
}
li.menu-item-workshops a:hover {
    background: url('http://www.hitsongsdeconstructed.com/wp-content/themes/hitsongsdeconstructed/assets/images/header/menu-icon-workshop-hover.svg') no-repeat left !important;
    background-size: 25px 25px;
    margin-left:0!important;
}
.reports-header-block {
    font-size: 14px!important;
}

.reports-header-block .charts-review-links > p {
   margin: 15px 0 0px 0 !important;
}
.reports-header-block .charts-review-links  a {
       font-size: 14px !important;
           line-height: 21px !important;
}

.reports-header-block .charts-review-links ul li {
   padding-top: 5px;
       padding-bottom: 5px;
}
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


			</head>
<script>
$(document).ready(function(){
        $('.site-sidebar ul li a.dropdown').click(function(){
            var $target = $($(this).parent());
            var $theclass =  $target.attr('class');
            $target.children('.sub-nav').toggleClass( "hidden" )
            $(this).toggleClass($theclass +'-highlight');
            $(this).toggleClass('arrow');
        });
    });

     $(document).ready(function(){
        $('.menu-items ul li a.dropdown,.site-sidebar ul li, #sub-nav2').hover(function(){
                   var $target = $($(this).parent());
            var $theclass =  $target.attr('class');
            $target.children('#sub-nav2').removeClass( "hidden" )
        },
                                               function(){
                   var $target = $($(this).parent());
            var $theclass =  $target.attr('class');
            $target.children('#sub-nav2').addClass( "hidden" )
        });
    });

    $(document).ready(function(){
       $('a.locked,#sub-nav3').hover(function(){
                   var $target = $($(this).parent());
            var $theclass =  $target.attr('class');
            $target.children('#sub-nav3').removeClass( "hidden" )
        },
                                               function(){
                   var $target = $($(this).parent());
            var $theclass =  $target.attr('class');
            $target.children('#sub-nav3').addClass( "hidden" )
        });

      });
</script>
<script >
$(document).ready(function(){
    $(".sidebar-toggle-box").click(function(){
        $(".site-sidebar").toggleClass("hide-sidebar");
        $(".site-content").toggleClass("merge-left");
    });
    
    
    $(window).resize(function(){
                if ($(window).width() > 1150) {
                      $( ".site-content" ).removeClass( "merge-left" );
                     $( ".site-sidebar" ).removeClass( "hide-sidebar" );
                }
         }); 
    
 	});
</script>

<!---<script src="https://use.fontawesome.com/9cdc9fbedb.js"></script>--->
<!---<script src="https://use.fontawesome.com/9cdc9fbedb.js"></script>--->
			<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WCMKQS" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


				<div id="page" class="hfeed site">


















				<header class="site-header fixed-top">
										<div class="preheader">

											<div class="logo-container">
<?php
// Instantiate aMember API
$api = am4PluginsManager::getAPI();
$isloggedin = $api->isLoggedIn();
if( $isloggedin ) {
?>
													<a href="https://<?=$urlprefix?>analytics.chartcipher.com/"><img src="<?=get_stylesheet_directory_uri();?>/assets/img/ChartCipher_logo_horizontal_transparent.png" width="265" border="0" /></a>
<? } else { ?>
													<a href="https://<?=$urlprefix?>editorial.chartcipher.com/"><img src="<?=get_stylesheet_directory_uri();?>/assets/img/ChartCipher_logo_horizontal_transparent.png" width="265" border="0" /></a>
<? } ?>
														<div class="sidebar-toggle-box">
											        		<div class="fa fa-bars"></div>
											    		</div>
													</div>




											<div class="right-wrap" style="display:none;">
						<?php /* <ul>
						  <?
						  	$cl = "";
							$user = wp_get_current_user();
				///echo( "aaa:" . $user->user_login );
							if( $user->user_login == "hreid" || $user->user_login == "solent" || $user->user_login == "gmassey" )
							  $cl = "style='display:none'";
							?>


							<li <?=$cl?> style="padding-right:10px;"><?php if ( is_user_logged_in() ) : ?><a href="https://<?=$urlprefix?>editorial.chartcipher.com/members/">MEMBERS</a><?php else : ?><!-- <a href="https://<?=$urlprefix?>editorial.chartcipher.com/sign-up-today/">SUBSCRIBE</a> --><?php endif; ?></li>
				            <li <?=$cl?>><?php if ( is_user_logged_in() ) : ?><a href="https://<?=$urlprefix?>editorial.chartcipher.com/members/login/logout">LOG OUT</a>
								<?php else : ?><a href="https://<?=$urlprefix?>editorial.chartcipher.com/members/login/index">LOG IN</a><?php endif; ?></li>
							<li style="margin-right:0px;">
								<a style="background:none;padding-right:0;" href="https://www.facebook.com/hitsongsdeconstructed" target="_blank">
								<img src="https://<?=$urlprefix?>editorial.chartcipher.com/wp-content/themes/twentythirteen-child/assets/img/fb-logo-gray.png" border="0" />
								</a>
							</li>
							<li style="margin-right:0px;">
								<a style="background:none;padding-right:0;" href="https://twitter.com/HSDeconstructed" target="_blank">
								<img src="https://<?=$urlprefix?>editorial.chartcipher.com/wp-content/themes/twentythirteen-child/assets/img/twitter-logo-gray.png" border="0" />
								</a>
							</li>
							<li style="margin-right:0px;">
								<a style="background:none;padding-right:0;" href="https://www.linkedin.com/company/hit-songs-deconstructed" target="_blank">
								<img src="https://<?=$urlprefix?>editorial.chartcipher.com/wp-content/themes/twentythirteen-child/assets/img/linkedin-logo-gray.png" border="0" />
								</a>
							</li>
						</ul>

						*/ ?>



						<div class="banner-container">

								<?php
									if ( is_home()  ) {
									echo"	";
									if ( is_active_sidebar( 'topad_sidebar' ) ) {
											dynamic_sidebar( 'topad_sidebar' );
								}
									}
									?>
											<div class="cf"></div>

										</div><!-- /.d-container -->

										<?php if(am4PluginsManager::getAPI()->isLoggedIn())   : //  Member logged in ?>

										      <div class="menu-container">
										      			<div class="menu-items">
										      				<div class="menu-header-2-container">



										      				<div id="navbar" class="navbar ">
										      					<nav id="site-navigation" class=" main-navigation" role="">
																			<? if( $hasdemand ) { ?>

																				<ul id="menu-main-loggedin" class="nav-menu" style="  margin-right: 0px;">
																																	<!--<li class="">
 <a href="https://www.hitsongsdeconstructed.com/mastery-workshop-subs" target="_blank" class="active">My Workshops</a>
																												</li>-->
		</ul>
																			<? }?>
										      				<?php wp_nav_menu( array( 'menu' => 'Main loggedin', 'menu_class' => 'nav-menu' ) ); ?>
										      				</nav></div>

										      					</div>				</div><!-- /.menu-items -->

										      					<div class="cf"></div>

										      				</div><!-- /.menu-container -->

										        <?php else: // Member not logged in ?>

										     <div class="menu-container">
										     			<div class="menu-items">
										     				<div class="menu-header-2-container">



										     				<div id="navbar" class="navbar ">
										     					<nav id="site-navigation" class=" main-navigation" role="">
										     						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
										     				</nav></div>

										     					</div>				</div><!-- /.menu-items -->

										     					<div class="cf"></div>

										     				</div>

										        <?php endif  ?>



													<?php
														if ( is_home()  ) {
														echo'	<div class="banner-container-responsive">';
														if ( is_active_sidebar( 'topad_sidebar' ) ){
																dynamic_sidebar( 'topad_sidebar' );
													}
													echo'<div class="cf"></div>

													</div><!-- /.d-container -->	';
														}
														?>





							</div><!--/right-float-->




							<section class="mobile-header-section">
								<!--<a href="#menu-mobile" id="toggle"><span></span></a>-->


								<div id="menu-mobile">
									<ul class="mobile-ul-1">
										<li><?php if ( is_user_logged_in() ) : ?><a href="https://<?=$urlprefix?>editorial.chartcipher.com/members/login/logout">Log out</a>
										<?php else : ?><a href="https://<?=$urlprefix?>editorial.chartcipher.com/members/login/index">Log in</a><?php endif; ?></li>
											<li style="padding-right:10px;"><?php if ( is_user_logged_in() ) : ?><a href="https://<?=$urlprefix?>editorial.chartcipher.com/members/">Members</a><?php else : ?><a href="https://<?=$urlprefix?>editorial.chartcipher.com/sign-up-today/">Signup</a><?php endif; ?></li>
										</ul>

										<ul class="mobile-ul-1">
											<li><a href="https://<?=$urlprefix?>editorial.chartcipher.com/hsdwire/">HSD Wire</a>
												<ul class="mobile-ul-2">
													<li><a href="https://<?=$urlprefix?>editorial.chartcipher.com/hsdwire-cat/articles/">Articles</a></li>
													<li><a href="https://<?=$urlprefix?>editorial.chartcipher.com/hsdwire-cat/videos/">HSD TV</a></li>
    <li><a href="https://editorial.chartcipher.com/hsdwire-cat/penns-picks/">Penn&apos;s Picks</a></li>
												</ul>
											</li>
											<li><a href="https://<?=$urlprefix?>editorial.chartcipher.com/charts/">Music Charts</a>
				    	<!-- <ul class="mobile-ul-2">

				    		<li><a href="https://<?=$urlprefix?>editorial.chartcipher.com/hsdwire-cat/chart-highlights/">Weekly Highlights</a></li>
				        </ul>
				    -->    </li>
				    <li><a href="https://<?=$urlprefix?>editorial.chartcipher.com">Hit Songs Deconstructed Reports</a>
				    	<ul class="mobile-ul-2">
				    		<li><a href="https://<?=$urlprefix?>editorial.chartcipher.com/category/hsd/">Hit Songs Deconstructed</a></li>
				    		<li><a href="https://<?=$urlprefix?>editorial.chartcipher.com/category/special-reports/">Top 10 Deconstructions</a></li>
				    		<li><a href="https://<?=$urlprefix?>editorial.chartcipher.com/category/special-reports/">Sample Deconstructions</a></li>
				    	</ul>
				    </li>
				    <li><a href="https://<?=$urlprefix?>editorial.chartcipher.com/resources/websites-publications/">Resources</a></li>
				    <li><a href="https://<?=$urlprefix?>editorial.chartcipher.com/archive/">Archive</a></li>
				    <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/">Immersion</a></li>
				    <li><a href="http://www.hitsongsdeconstructed.com/#about">About</a></li>
				    <li><a href="http://www.hitsongsdeconstructed.com/in-the-news/">In The News</a></li>
				</ul>



				</div>

				</section>

				<!--<div class="cf"></div>-->
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

				 <!-- #navbar -->
				<script>
					$(document).ready(function(){
						$('#menu-item-71 a, #menu-item-162 a').not('.sub-menu a').click(function(e){
							e.preventDefault();
						});
						$( "#autosuggestleftsongtitle" ).autocomplete({	
								source:    "/autocomplete.php?type=anything",
								minLength: 2
											    });
					});

				</script>

				</header>










				<div class="flex2">
				<div class="site-sidebar">
						<ul class="main-sb">

							<li class="sidebar-menu-item-1">


								<!--sidebar search form-->
								<!--<form class="header-search" action="https://<?=$urlprefix?>analytics.chartcipher.com/search-results-redir.php" method="get" style="padding-bottom:0px;margin-top:0px;">
									<fieldset>
										<input type="text" name="fieldname" id="autosuggestleftsongtitle" placeholder="Search" value="<?php the_search_query(); ?>" style="display:inline-block;width:195px;border:none;border-radius:0;box-shadow:none;padding-left:24px; padding-top: 17.5px; padding-bottom: 17.5px; max-height: 55px;" />
										<button type="submit" name="Search" style="display:inline-block;width:45.7px;height:55px; background:#ffffff;margin-left:-4px;border:none;border-radius:0;box-shadow:none;padding:0;vertical-align:top;"><i style="color: #999999;" class="fa fa-search" aria-hidden="true"></i>
										</button>
									</fieldset>
								</form>-->
								<!--end sidebar search form-->

								<!--sidebar search form-->
								<!--<form class="header-search" action="<?=get_site_url();?>" method="get" style="padding-bottom:0px;margin-top:0px;">
									<fieldset>
										<input type="text" name="s" id="search" placeholder="Search by keyword" value="<?php the_search_query(); ?>" style="display:inline-block;width:195px;border:none;border-radius:0;box-shadow:none;padding-left:24px; padding-top: 17.5px; padding-bottom: 17.5px; max-height: 55px;" />
										<button type="submit" name="Search" style="display:inline-block;width:45.7px;height:55px; background:#ffffff;margin-left:-4px;border:none;border-radius:0;box-shadow:none;padding:0;vertical-align:top;"><i style="color: #999999;" class="fa fa-search" aria-hidden="true"></i>
										</button>
									</fieldset>
								</form>-->
								<!--end sidebar search form-->

							</li>







							<li class="sidebar-menu-item-1">
                                                                                                   <? if( $isloggedin ) { ?>
								<a href="https://<?=$urlprefix?>analytics.chartcipher.com/" class="">Home</a>
                                                                                                                          <? } else { ?>
								<a href="https://<?=$urlprefix?>editorial.chartcipher.com/" class="active">Home</a>
    <? } ?>
							</li>
										<!-- <li class="sidebar-menu-item-12"> -->
								<!-- <a target="_blank" href="https://<?=$urlprefix?>editorial.chartcipher.com">Hit Songs Deconstructed</a> -->
							<!-- </li> -->
										<!-- <li class="sidebar-menu-item-13">
								<a href="/trend-search">Trend Search</a>
							</li>-->

							<? if( $hasdemand ) { ?>
																					<li class="sidebar-menu-item-ondemand">
														 <a href="https://<?=$urlprefix?>editorial.chartcipher.com/demand/workshops-on-demand/" target="_blank" class="active">My Workshops</a>
																				 </li>

							<? } ?>

                             <li class="sidebar-menu-item-articles">
								<a href="https://editorial.chartcipher.com/articles/" >Articles</a>
                                 
                            </li>

				             <li class="hidden sidebar-menu-item-videos">
									 <a href="https://<?=$urlprefix?>editorial.chartcipher.com/demand/videos-on-demand/" class="active">Videos</a>
                                   <!--<ul class="sub-nav hidden">
				                        <li><a href="https://<?=$urlprefix?>editorial.chartcipher.com/ondemand_categories/video-deconstructions/">Videos Deconstructions</a></li>

				                        <li><a href="https://<?=$urlprefix?>editorial.chartcipher.com/ondemand_categories/supplemental-videos/">Supplemental Videos</a></li>
<? if( $hastrendbriefs ) { ?>
                                        <li><a href="https://<?=$urlprefix?>editorial.chartcipher.com/trend_briefs/">Trend Briefs</a></li>
<? } ?>
				                </ul>-->
							 </li>
                            
                            <li class=" sidebar-menu-item-charts" >
				<a class="dropdown" >Charts </a>
                  <ul class="sub-nav hidden">
<? $charts = $wpdb->get_results( "select id, chartname from accipher_admin.charts where UseOnDB = 1 order by OrderBy, chartname" );
foreach( $charts as $crow ) { 
?>
                      <li><a href="https://analytics.chartcipher.com/chart-landing.php?setchart=<?=$crow->id?>"><?=$crow->chartname?></a></li>
<? } ?>
                </ul>

			</li>
                          <!--  <li class="sidebar-menu-item-daws">
									 <a href="https://<?=$urlprefix?>editorial.chartcipher.com/daw/ " class="active">DAW's</a>
                            </li>-->

				            <li class="hidden sidebar-menu-item-document">
				<a href='https://<?=$urlprefix?>analytics.chartcipher.com/read-a-report'>Reports</a>
<? if( 1 == 0 ) { ?>
								<a href="#" class="dropdown">Reports</a>
				                   <ul class="sub-nav hidden">
				                              <li><a href="https://<?=$urlprefix?>editorial.chartcipher.com/">Hit Song Deconstructed Reports</a></li>
          <? if( !$isessentials ) {  ?>
				                                                                    <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/trend-report-search">Compositional Trend Report</a></li>
                                     <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/industry-trend-report-search">Industry Trend Report</a></li>
                                      <!-- <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/industry-trend-report-search">Industry Trend Report</a></li>-->
                                    <? } else { ?>
                    <li><a class="locked" href="#">Compositional Trend Report</a>
                <div id="sub-nav3" class="hidden" style="margin-top: -75px">
                    <span class="arrow-left"></span>
                   <h2> This feature is available with a PRO subscription. </h2>
                    <a class="upgrade" href="https://<?=$urlprefix?>editorial.chartcipher.com/members/signup">Click here to upgrade</a>
                    </div>
                </li>
            <? }?>
				                                                         <!-- <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/genre-search">Genre Highlights</a></li>-->
                                        <li><a href="/treports/">Quarterly Trend Reports</a></li>
				                </ul>
<? } ?>
							</li>
<? if( 1 == 0 ) { ?>
							<li class="hidden sidebar-menu-item-2">
								<a  class="dropdown">Search for Songs<img class="hidden info-icon menu-icon" title="Search for the compositional characteristics of a specific song or search for songs by a particular artist, songwriter, producer or label." src="<?php echo get_site_url(); ?>/assets/images/info-icon.svg"  border="0"></a>
												 <ul class="sub-nav hidden">
							<li>
								<a href="https://<?=$urlprefix?>analytics.chartcipher.com/song-title-search">By Title</a>
							</li>
                                                     <li>
				<a href="https://<?=$urlprefix?>analytics.chartcipher.com/date-range-search">By Date Range</a>
			</li>
							<li>
								<a href="https://<?=$urlprefix?>analytics.chartcipher.com/artist-search">By Artist</a>
							</li>
										<li>
								<a href="https://<?=$urlprefix?>analytics.chartcipher.com/producer-search">By Producer</a>
							</li>
							<li>
								<a href="https://<?=$urlprefix?>analytics.chartcipher.com/songwriter-search">By Songwriter</a>
							</li>
								
							<li>
								<a href="https://<?=$urlprefix?>analytics.chartcipher.com/label-search">By Label</a>
							</li>

							<li class="sidebar-menu-item-6">
								<a href="https://<?=$urlprefix?>analytics.chartcipher.com/form-search">By Form</a>
							</li>
                                                     
                                                     <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/song-search">Combo Search</a></li>
							<li class="sidebar-menu-item-8">
								<a href="https://<?=$urlprefix?>analytics.chartcipher.com/advanced-search">Power Search (Compositional Characteristics)</a>
							</li>

									 </ul>
				</li>
<? } else { ?>
 	<li class="hidden sidebar-menu-item-2"><a href="https://<?=$urlprefix?>analytics.chartcipher.com/advanced-search">Search for Songs<img class="hidden info-icon menu-icon" title="Search for the compositional characteristics of a specific song or search for songs by a particular artist, songwriter, producer or label." src="<?php echo get_site_url(); ?>/assets/images/info-icon.svg"  border="0"></a></li>
<? } ?>

             <? if( !$isessentials ) { ?>
             <li class="hidden sidebar-menu-item-compositional">
             	<a href="https://<?=$urlprefix?>analytics.chartcipher.com/search-for-compositional-trends.php">Compositional Trends<img class="hidden info-icon menu-icon" title="Look for compositional trends across the Top 10 or for #1 Hits. Filter by genre, artist or songwriter." src="<?php echo get_site_url(); ?>/assets/images/info-icon.svg" border="0"></a>
<!--                   <ul class="sub-nav hidden">
                     <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/trend-search-influences">Genres &amp; Influences</a></li>
                     <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/trend-search-vocals">Vocals and Lyrics</a></li>
                     <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/trend-search-structure">General Structure &amp; Instrumentation</a></li>
                      <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/trend-search-intro">Intro</a></li>
                      <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/trend-search-verse">Verse</a></li>
                      <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/trend-search-prechorus">Pre-Chorus</a></li>
                      <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/trend-search-chorus">Chorus</a></li>
                      <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/trend-search-postchorus">Post Chorus</a></li>
                      <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/trend-search-bridge">Bridge and Bridge Surrogates</a></li>
                      <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/trend-search-instrumental">Instrumental and Vocal Breaks</a></li>
                      <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/trend-search-outro">Outro</a></li>


                 </ul>-->
             </li>
				                         <li class=" sidebar-menu-item-13">
								<a href="https://analytics.chartcipher.com/saved-searches" >Saved Song Searches<img class="hidden info-icon menu-icon" title="Find out what degree of success record labels, artists and songwriters are having quarter to quarter and what songs they account for." src="<?php echo get_site_url(); ?>/assets/images/info-icon.svg" border="0"></a>
							</li>
            <li class="sidebar-menu-item-knowledge-base">
				<a  class="dropdown">Knowledge Base <!--<img class="hide info-icon menu-icon" src="https://analytics.chartcipher.com/assets/images/hit-songs-deconstructed-more-information-sidebar-icon.svg" border="0">--></a>
                  <ul class="sub-nav hidden">
                      <li><a href="https://editorial.chartcipher.com/knowledge-base/glossary/">Glossary</a></li>
                     <li><a href="https://editorial.chartcipher.com/video_categories/product-overview/">Tutorials</a></li>
                </ul>
			</li>
<? if( $isloggedin ) { ?>
            <li class="menu-item-0 user">
                  <a  class="dropdown">My Account  </a>
                             <ul class="sub-nav hidden">
                        	<li class="menu-item-0"><a href="https://editorial.chartcipher.com/members/member" >My Account</a></li>
					<li class="menu-item-0"><a href="https://editorial.chartcipher.com/members/logout">Logout</a></li>
                        </ul>
</li>
<? } else { ?>
            <li class="menu-item-0 user">
                  <a  href="https://editorial.chartcipher.com/members/member">Log In  </a>
</li>
<? } ?>
</ul>
            


                                        <? } else { ?>
           <li class="hidden sidebar-menu-item-compositional">
           	<a href="#" class="locked">Compositional Trends<img class="hidden info-icon menu-icon" title="Look for compositional trends across the Top 10 or for #1 Hits. Filter by genre, artist or songwriter." src="<?php echo get_site_url(); ?>/assets/images/info-icon.svg" border="0"></a>
               <div id="sub-nav3" class="hidden">
                    <span class="arrow-left"></span>
                  <h2> This feature is available with a PRO subscription. </h2>
                   <a class="no-icon" href="https://<?=$urlprefix?>editorial.chartcipher.com/members/signup">Click here to upgrade</a>
                   </div>
                </li>

           <li class="hidden sidebar-menu-item-13">
				<a href="#" class="locked">Industry Trends<img class="hidden info-icon menu-icon" title="Find out what degree of success record labels, artists and songwriters are having quarter to quarter and what songs they account for." src="<?php echo get_site_url(); ?>/assets/images/info-icon.svg" border="0"></a>
                <div id="sub-nav3" class="hidden">
                    <span class="arrow-left"></span>
                   <h2> This feature is available with a PRO subscription. </h2>
                    <a class="upgrade" href="https://<?=$urlprefix?>editorial.chartcipher.com/members/signup">Click here to upgrade</a>
                    </div>
                 </li>

                 <li class="hidden sidebar-menu-item-1">
                 	<a href="#" class="locked">Staying Power<img class="hidden info-icon menu-icon" title="Search for how many weeks a song, performing artist, songwriter, record label, primary genre, or lead vocal gender spent in the Top 10 or at #1 during a specific time period." src="<?php echo get_site_url(); ?>/assets/images/info-icon.svg" border="0"></a>
                     <div id="sub-nav3" class="hidden">
                          <span class="arrow-left"></span>
                        <h2> This feature is available with a PRO subscription. </h2>
                         <a class="no-icon" href="https://<?=$urlprefix?>editorial.chartcipher.com/members/signup">Click here to upgrade</a>
                         </div>
                      </li>
              <? } ?>

       <li class="hidden sidebar-menu-item-technique" >
				<a  href="https://<?=$urlprefix?>analytics.chartcipher.com/technique-search" class="">Techniques Library <img class="hidden info-icon menu-icon" title="Search for songwriting techniques (i.e.: hook techniques, techniques to hook the listener in and leave them wanting more, genre fusion techniques, duet structure techniques, etc.)." src="<?php echo get_site_url(); ?>/assets/images/info-icon.svg" border="0"></a>
                  
			</li>
							<!--<li class="sidebar-menu-item-2">
								<a href="https://<?=$urlprefix?>analytics.chartcipher.com/song-title-search">Song Title Search<img class="hide info-icon menu-icon" title="Search for a specific song to view its compositional characteristics, label, writers, artists, chart information, and more." src="<?php echo get_site_url(); ?>/assets/images/info-icon.svg" border="0"></a>
							</li>-->
							<!--<li class="sidebar-menu-item-4">
								<a href="https://<?=$urlprefix?>analytics.chartcipher.com/artist-search">Artist Search<img class="hide info-icon menu-icon" title="Search for songs performed by a specific artist and filter by peak chart position, genre, songwriter and more." src="<?php echo get_site_url(); ?>/assets/images/info-icon.svg" border="0"></a>
							</li>-->
                          <!--   <li class="sidebar-menu-item-producer">
				<a href="https://<?=$urlprefix?>analytics.chartcipher.com/producer-search">Producer Search<img class="hide info-icon menu-icon" title="Search for songs produced by a specific songwriter and filter by peak chart position, genre, artist, songwriter, record label and more." src="<?php echo get_site_url(); ?>/assets/images/info-icon.svg" border="0"></a>
			</li>-->
							<!--<li class="sidebar-menu-item-3">
								<a href="https://<?=$urlprefix?>analytics.chartcipher.com/songwriter-search">Songwriter Search<img class="hide info-icon menu-icon" title="Search for songs written by a specific songwriter and filter by peak chart position, genre, songwriter and more." src="<?php echo get_site_url(); ?>/assets/images/info-icon.svg" border="0"></a>
							</li>-->
							<!--<li class="sidebar-menu-item-5">
								<a href="https://<?=$urlprefix?>analytics.chartcipher.com/label-search">Label Search<img class="hide info-icon menu-icon" title="Search for songs released by a specific label and filter by peak chart position, genre, songwriter and more." src="<?php echo get_site_url(); ?>/assets/images/info-icon.svg" border="0"></a>
							</li>-->


							<li class="hidden sidebar-menu-item-browse">
								<a href="https://<?=$urlprefix?>analytics.chartcipher.com/browse-database" >Browse<img class="hidden info-icon menu-icon" title="Not sure what you are looking for?  Here you can browse through all of the songs housed in the database." src="<?php echo get_site_url(); ?>/assets/images/info-icon.svg" border="0"></a>
				                <!-- <ul class="sub-nav hidden">
				                    <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/browse?val=artists">Performing Artists</a></li>
				                    <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/browse?val=songwriters">Songwriters</a></li>
				                    <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/browse?val=labels">Record Labels</a></li>
															<li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/browse?val=producers">Producers</a></li>
				                    <li><a href="https://<?=$urlprefix?>analytics.chartcipher.com/browse?val=songs">Songs</a></li>

				                </ul>-->
							</li>
          <? if( $isessentials ) {  ?>
			<li class="hidden sidebar-menu-item-9">
				<a class="locked" href="#">Saved Searches</a>
                <div id="sub-nav3" class="hidden">
                    <span class="arrow-left"></span>
                   <h2> This feature is available with a PRO subscription. </h2>
                    <a class="upgrade" href="https://<?=$urlprefix?>editorial.chartcipher.com/members/signup">Click here to upgrade</a>
                    </div>
			</li>
			<li class="hidden sidebar-menu-item-10" style="display: none;">
				<a class="locked" href="#">Recent Searches</a>
                <div id="sub-nav3" class="hidden">
                    <span class="arrow-left"></span>
                   <h2> This feature is available with a PRO subscription. </h2>
                    <a class="upgrade" href="https://<?=$urlprefix?>editorial.chartcipher.com/members/signup">Click here to upgrade</a>
                    </div>
			</li>
			<li class="hidden sidebar-menu-item-20" >
				<a class="locked" href="#">Saved Techniques</a>
                <div id="sub-nav3" class="hidden">
                    <span class="arrow-left"></span>
                   <h2> This feature is available with a PRO subscription. </h2>
                    <a class="upgrade" href="https://<?=$urlprefix?>editorial.chartcipher.com/members/signup">Click here to upgrade</a>
                    </div>
			</li>
			<li class="hidden sidebar-menu-item-11">
				<a class="locked" href="#">Favorite Songs</a>
                <div id="sub-nav3" class="hidden">
                    <span class="arrow-left"></span>
                   <h2> This feature is available with a PRO subscription. </h2>
                    <a class="upgrade" href="https://<?=$urlprefix?>editorial.chartcipher.com/members/signup">Click here to upgrade</a>
                    </div>
			</li>
                                    <? } else { ?>
				          			<li class="hidden sidebar-menu-item-9">
								<a href="https://<?=$urlprefix?>analytics.chartcipher.com/saved-searches">Saved Searches
								<img class="hidden info-icon menu-icon" title="Access or edit your saved searches here." src="<?php echo get_site_url(); ?>/assets/images/info-icon.svg" border="0"></a>
							</li>
							<li class="hidden sidebar-menu-item-10" style="display: none;">
								<a href="/recent-searches">Recent Searches</a>
								<img class="hidden info-icon menu-icon" title="Access or edit your recent searches here." src="<?php echo get_site_url(); ?>/assets/images/info-icon.svg" border="0"></a>
							</li>
			<li class="hidden sidebar-menu-item-20" >
				<a href="https://<?=$urlprefix?>analytics.chartcipher.com/technique-library">Saved Techniques <img class="hidden info-icon menu-icon" title="Access or edit your saved techniques here." src="<?php echo get_site_url(); ?>/assets/images/info-icon.svg" border="0"></a>
			</li>
							<li class="hidden sidebar-menu-item-11">
								<a href="https://<?=$urlprefix?>analytics.chartcipher.com/favorite-songs">Favorite Songs
								<img class="hidden info-icon menu-icon" title="Access or edit your favorite songs here." src="<?php echo get_site_url(); ?>/assets/images/info-icon.svg" border="0"> </a>
							</li>
        <? } ?>
						</ul>
						<script type="text/javascript">

				$(document).ready(function(){
				    // $('[data-toggle="tooltip"]').tooltip();
				});

						</script>
					<div class="footer-disclaimer">
			<p>© 2021 ChartCipher, All Rights Reserved</p>
            
            <p>Phone:<br>
            212-871-2308</p>
            
            <p>Customer Service:<br>
            customerservice@chartcipher.com</p>
			<p><a href="https://www.chartcipher.com/privacy-policy/">Privacy Policy</a> | <a href="https://www.chartcipher.com/terms">Terms of Use</a></p>
			<p><a href="http://i360m.com/">Designed by Imagine 360 Marketing</a></p>
		</div>
					</div>
















					<!-- #masthead -->
<div id="main" class="site-main site-content full-width">
