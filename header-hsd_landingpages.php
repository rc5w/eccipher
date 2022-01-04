<?php

/* Template Name: Header - HSD Landing */
if ( $_GET['ocode'] ) { 

	$cookie_name = "ocode";
	$cookie_value = $_GET['ocode'];
	setcookie($cookie_name, $cookie_value, time() + (86400), "/");
	$_COOKIE['ocode'] = $_GET['ocode']; 


}

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
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link 4 rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//reports.hitsongsdeconstructed.com/wp-content/themes/twentythirteen-child/media-queries.css">
	<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-17363957-2', 'auto');
  		ga('send', 'pageview');

	</script>
        <!--Remarketing Tag-->
	<img height="1" width="1" style="border-style:none;display:none;" alt="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/976682315/?label=gLiFCNDkhVcQy_rb0QM&amp;guid=ON&amp;script=0&amp;ord=1443849753122776.8">
    
	<!-- Insights -->
    <?php //if(is_single('20193')): //WWTH Download ?>
	<script>
	/*window._ssstats = window._ssstats || [];
	_ssstats.push([
	'configure', {
		accountId: 334905
		}
	]);
	_ssstats.push(['publish', 'WWTH Report Download Page']);*/
	</script>
	
    <?php //elseif(is_single('19986')): //WWTH Landing  ?>
    <script>
	/*window._ssstats = window._ssstats || [];
	_ssstats.push([
	'configure', {
		accountId: 334905
		}
	]);
	_ssstats.push(['publish', 'WWTH Form Page']);*/
	</script>
	
    <?php //elseif(is_single('26073')): //Academic Landing  ?>
    <script>
	/*window._ssstats = window._ssstats || [];
	_ssstats.push([
	'configure', {
		accountId: 334905
		}
	]);
	_ssstats.push(['publish', 'Academic Form Page']);*/
	</script>
	
    <?php //elseif(is_single('19648')): //Academic Thank You  ?>
    <script>
	/*window._ssstats = window._ssstats || [];
	_ssstats.push([
	'configure', {
		accountId: 334905
		}
	]);
	_ssstats.push(['publish', 'Academic Thank You Page']);*/
	</script>
	
    <?php //else:  ?>
    <script>
	window._ssstats = window._ssstats || [];
	_ssstats.push([
	'configure', {
		accountId: 334905
		}
	]);
	_ssstats.push(['publish', 'visit']);
	</script>
	<script src="//cdn.statstrk01.com/assets/javascripts/sdk2.js" async></script>
    <?php //endif; ?>
	<!-- /Insights -->
	
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
	<![endif]-->
<?php 	/** Enqueue all javascript library files and dependent stylesheets **/ ?>
	<?php wp_enqueue_style( 'revealcss', get_template_directory_uri() . '-child/assets/css/reveal.css' ); ?>
	<?php wp_enqueue_script( 'jquery', true); ?>
	<?php wp_enqueue_script( 'reveal', get_template_directory_uri() . '-child/assets/js/jquery.reveal.js', true); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<header id="masthead" role="banner" class="hsdlanding-header" style="width:940px;">
	<div class="preheader">
		<div class="preheader-lft">
			<a href="<?php echo get_site_url(); ?>"><img src="<?=get_stylesheet_directory_uri();?>/assets/img/hsd-logo.svg" width="315" border="0" /></a>
		</div><!--/left-float-->
		<div class="preheader-rht">
		<ul>
			<li><a href="https://reports.hitsongsdeconstructed.com/members/login/index">LOGIN</a></li>
			<li style="padding-right:10px;"><a href="https://reports.hitsongsdeconstructed.com/sign-up-today/">SIGNUP</a></li>
			<li style="margin-right:0px;">
				<a style="background:none;padding-right:0;" href="https://www.facebook.com/hitsongsdeconstructed" target="_blank">
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen-child/assets/img/fb-logo-gray.png" border="0" />
				</a>
			</li>
			<li style="margin-right:0px;">
				<a style="background:none;padding-right:0;" href="https://twitter.com/HSDeconstructed" target="_blank">
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen-child/assets/img/twitter-logo-gray.png" border="0" />
				</a>
			</li>
			<li style="margin-right:0px;">
				<a style="background:none;padding-right:0;" href="http://www.linkedin.com/company/hit-songs-deconstructed" target="_blank">
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/twentythirteen-child/assets/img/linkedin-logo-gray.png" border="0" />
				</a>
			</li>
		</ul>
		</div><!--/right-float-->
		<div class="cf"></div>
	</div>
	<?php if (is_single( '196481' )): ?>
	<div id="navbar" class="navbar navstyling">
		<nav id="site-navigation" class="navigation main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		<div style="position:relative;">
		<div style="position:absolute;right:0;margin-top:-38px;">
			<a href="<?=get_site_url();?>/sign-up-today/"><img src="<?=get_stylesheet_directory_uri();?>/assets/img/btn_signup.jpg" style="border:0;" /></a>
		</div><!--end signup btn container-->
		</div><!--end signup btn wrapper-->
	</div><!-- #navbar -->
	<?php endif ?>
		
</header><!-- #masthead -->

<div id="main" class="site-main-hsdlanding">
<?php


$thisisdate =  date ('Y-m-d');


?>

