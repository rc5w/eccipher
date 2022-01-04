<?php

/* Template Name: Header - Login Success */
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
<html style="margin-top:0 !important;" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
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
<div id="page" class="hfeed site-amember">
<header id="masthead" role="banner" class="hsdlanding-header">
	<div class="preheader">
		<div class="preheader-lft-loginsuccess">
			<a href="http://reports.hitsongsdeconstructed.com"><img src="<?=get_stylesheet_directory_uri();?>/assets/img/hsd-logo.svg" border="0" /></a>
		</div><!--/left-float-->
		<div class="preheader-rht-loginsuccess">
			<a href="http://reports.hitsongsdeconstructed.com"><img src="<?=get_stylesheet_directory_uri();?>/assets/img/immersion-logo.svg" border="0" /></a>
		</div><!--/left-float-->
		<span class="cf"></span>
        
	</div>
		
</header><!-- #masthead -->

<div id="main" class="site-main-amember">