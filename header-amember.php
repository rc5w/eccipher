<?php

/* Template Name: Header - Amember */
if ( $_GET['ocode'] ) { 

	$cookie_name = "ocode";
	$cookie_value = $_GET['ocode'];
	setcookie($cookie_name, $cookie_value, time() + (86400), "/");
	$_COOKIE['ocode'] = $_GET['ocode']; 
	$ocode = $_COOKIE['ocode'];

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
    <meta name="ocode" content="<?=$_COOKIE['ocode'];?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link 222 rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//reports.hitsongsdeconstructed.com/wp-content/themes/twentythirteen-child/media-queries.css">
    
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<!-- Magnific Popup core JS file -->
	
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
    
	<?php if (strpos($_SERVER['REQUEST_URI'], "/members/signup/free-trial") !== false): ?>
    <!-- Insights -->
    <script type="text/javascript">
		window._ssstats = window._ssstats || [];
		_ssstats.push([
			'configure', {
				accountId: 334905
			}
		]);
		_ssstats.push([
			'publish',
			'Form Page Visit', {
				form: 'trial'
			}
		]);
	</script>
	<script src="//cdn.statstrk01.com/assets/javascripts/sdk2.js" async></script>
	<!-- /Insights -->
   
    <?php elseif (strpos($_SERVER['REQUEST_URI'], "/members/signup/pro-yearly") !== false): ?>
    <!----Insights---->
    <script type="text/javascript">
		window._ssstats = window._ssstats || [];
		_ssstats.push([
			'configure', {
				accountId: 334905
			}
		]);
		_ssstats.push([
			'publish',
			'Form Page Visit', {
				form: 'proyearly'
			}
		]);
	</script>
	<script src="//cdn.statstrk01.com/assets/javascripts/sdk2.js" async></script>
	<!----/Insights---->
    
    <?php elseif (strpos($_SERVER['REQUEST_URI'], "/members/signup/immersion-annual") !== false): ?>
    <!----Insights---->
    <script type="text/javascript">
		window._ssstats = window._ssstats || [];
		_ssstats.push([
			'configure', {
				accountId: 334905
			}
		]);
		_ssstats.push([
			'publish',
			'Form Page Visit', {
				form: 'immersion_annual'
			}
		]);
	</script>
	<script src="//cdn.statstrk01.com/assets/javascripts/sdk2.js" async></script>
	<!----/Insights---->
    
    <?php elseif (strpos($_SERVER['REQUEST_URI'], "/members/signup/immersion-quarterly") !== false): ?>
    <!----Insights---->
    <script type="text/javascript">
		window._ssstats = window._ssstats || [];
		_ssstats.push([
			'configure', {
				accountId: 334905
			}
		]);
		_ssstats.push([
			'publish',
			'Form Page Visit', {
				form: 'immersion_quarterly'
			}
		]);
	</script>
	<script src="//cdn.statstrk01.com/assets/javascripts/sdk2.js" async></script>
	<!----/Insights---->
    
    <?php elseif (strpos($_SERVER['REQUEST_URI'], "/members/signup/immersion-biannual") !== false): ?>
    <!----Insights---->
    <script type="text/javascript">
		window._ssstats = window._ssstats || [];
		_ssstats.push([
			'configure', {
				accountId: 334905
			}
		]);
		_ssstats.push([
			'publish',
			'Form Page Visit', {
				form: 'immersion_biannual'
			}
		]);
	</script>
	<script src="//cdn.statstrk01.com/assets/javascripts/sdk2.js" async></script>
	<!----/Insights---->
    
    <?php elseif (strpos($_SERVER['REQUEST_URI'], "/members/signup/immersion-hsd") !== false): ?>
    <!----Insights---->
    <script type="text/javascript">
		window._ssstats = window._ssstats || [];
		_ssstats.push([
			'configure', {
				accountId: 334905
			}
		]);
		_ssstats.push([
			'publish',
			'Form Page Visit', {
				form: 'immersion_hsd_combo'
			}
		]);
	</script>
	<script src="//cdn.statstrk01.com/assets/javascripts/sdk2.js" async></script>
	<!----/Insights---->
    
    <?php elseif (strpos($_SERVER['REQUEST_URI'], "/members/signup/immersion-freetrial") !== false): ?>
    <!----Insights---->
    <script type="text/javascript">
		window._ssstats = window._ssstats || [];
		_ssstats.push([
			'configure', {
				accountId: 334905
			}
		]);
		_ssstats.push([
			'publish',
			'Form Page Visit', {
				form: 'immersion_freetrial'
			}
		]);
	</script>
	<script src="//cdn.statstrk01.com/assets/javascripts/sdk2.js" async></script>
	<!----/Insights---->
    
	<?php endif; ?>	

    
    
    
    
    <!----Insights---->
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
	<!----/Insights---->
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
		<div class="preheader-lft-amem">
			<a target="_blank" class="preheader-logo-1" href="https://editorial.chartcipher.com/ "><img src='https://analytics.chartcipher.com/assets/images/ChartCipher_logo_horizontal_transparent.png' style='position: relative; left: -75px; width:300px'></a>
		</div><!--/left-float-->
		<span class="cf"></span>
        <?php /* <div class="preheader-nav">
        	<ul>
            	<li>
                	<a href="http://www.hitsongsdeconstructed.com">
                	Home 
                    </a>
                </li>
                <li>
                	<a href="#">
                		|
                    </a>
                </li>
                <li>
                	<a target="_blank" href="http://reports.hitsongsdeconstructed.com">
                		Hit Songs Deconstructed Reports 
                    </a>
                </li>
            </ul>
        </div> */ ?>
	</div>
		
</header><!-- #masthead -->

<div id="main" class="site-main-amember">