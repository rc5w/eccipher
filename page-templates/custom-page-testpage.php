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
?><!DOCTYPE html>
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
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
<?php 	/** Enqueue all javascript library files and dependent stylesheets **/ ?>
	<?php wp_enqueue_style( 'revealcss', get_template_directory_uri() . '-child/assets/css/reveal.css' ); ?>
	<?php wp_enqueue_script( 'jquery', true); ?>
	<?php wp_enqueue_script( 'reveal', get_template_directory_uri() . '-child/assets/js/jquery.reveal.js', true); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<header id="masthead" role="banner" style="width:940px;">
	<div class="preheader">
		<hr style="display: block; height: 5px; border-bottom: 1px solid #343333; margin-bottom: 0;" />
		<div class="preheader-lft">
			<img src="<?=get_stylesheet_directory_uri();?>/assets/img/logo.png" />
		</div><!--/left-float-->
		<div class="preheader-rht">
		<ul>
			<li><a href="">LOGIN</a></li>
			<li style="padding-right:10px;border-right:1px solid #343333;"><a href="">SIGNUP</a></li>
			<li><iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fhitsongsdeconstructed&amp;send=false&amp;layout=button_count&amp;width=48&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:48px; height:21px;" allowTransparency="true"></iframe></li>
			<li><iframe allowtransparency="true" frameborder="0" scrolling="no"
  src="http://platform.twitter.com/widgets/follow_button.html?screen_name=HSDeconstructed&show_count=false"
  style="width:63px; height:20px;"></iframe></li>
			<li><script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="IN/Share" data-url="/"></script></li>
		</ul>
		</div><!--/right-float-->
	</div>
	<div style="display:block;background:#000;" class="jcarousel">
	<ul>
		<li style="background:url('<?=get_stylesheet_directory_uri();?>/assets/img/slides/slide1.jpg') no-repeat;" id="1">
			<div class="slider-content">
				<h2>The #1 Source for Hit Songwriting<br/>Analysis and Trends</h2>
				<h5><span class="lquot"></span>
					It's an amazing tool--and one I highly recommend<br/>
					to my students and collaborators throughout the world.
				<span class="rquot"></span></h5>
				<p class="author">
					<span>Jason Blume</span><br/>
					Songwriter w/50 million album sales/top-selling author, Billboard Books
				</p>
				<a href="/sign-up-today/">Sign-up today! <img src="<?=get_stylesheet_directory_uri();?>/assets/img/icn-arrow-right-dark.png" /></a>
			</div>
		</li>
		<li style="background:url('<?=get_stylesheet_directory_uri();?>/assets/img/slides/slide2.jpg') no-repeat;" id="2">
			<div class="slider-content">
				<h2>Stay in the Know with the HSD Wire</h2>
				<h5 style="margin-top: 33px;"><span class="lquot"></span>
					You have given songwriters a great new tool,<br/>
					the beauty of which is that it reflects current trends.
				<span class="rquot"></span></h5>
				<p class="author" style="margin:10px 0 10px 0;">
					<span>John Braheny</span><br/>
					Author of The Craft and Business of Songwriting
				</p>
				<a href="/sign-up-today/">Sign-up today! <img src="<?=get_stylesheet_directory_uri();?>/assets/img/icn-arrow-right-dark.png" /></a>
			</div>
		</li>
		<li style="background:url('<?=get_stylesheet_directory_uri();?>/assets/img/slides/slide3.jpg') no-repeat;" id="3">
			<div class="slider-content">
				<h2 style="margin-bottom:0;">The Secrets to Hit Songwriting<br/>
				Reside in the Hits Themselves</h2>
				<h5 style="font-style:normal;margin:0;">Learn what They Are with Our HSD Song Reports</h5>
				<h5 style="font-size:14px;margin:10px 0;"><span class="lquot"></span>
					Finally... here is a great service for producers and writers that<br/>
					explains in great detail what makes a hit song... I highly recommend it...
				<span class="rquot"></span></h5>
				<p class="author">
					Tony Carbone<br/>
					Assistant Professor, <span>Berklee College of Music</span>
				</p>
				<a href="/sign-up-today/">Sign-up today! <img src="<?=get_stylesheet_directory_uri();?>/assets/img/icn-arrow-right-dark.png" /></a>
			</div>
		</li>
		<li style="background:url('<?=get_stylesheet_directory_uri();?>/assets/img/slides/slide4.jpg') no-repeat;" id="4">
			<div class="slider-content">
				<h2>Stay On Top of Weekly Hit Songwriting<br/>Trends with the HSD Charts</h2>
				<h5><span class="lquot"></span>
					I love the in-depth charts and explanations. I'm looking<br/>
					to incorporate some of your questions in my A&R style.
				<span class="rquot"></span></h5>
				<p class="author">
					Shalik Berry<br/>
					Vice President of A&R, <span>Epic Records</span>
				</p>
				<a href="/sign-up-today/">Sign-up today! <img src="<?=get_stylesheet_directory_uri();?>/assets/img/icn-arrow-right-dark.png" /></a>
			</div>
		</li>
		<li style="background:url('<?=get_stylesheet_directory_uri();?>/assets/img/slides/slide5.jpg') no-repeat;" id="5">
			<div class="slider-content">
				<h2>Stay Ahead of the Curve<br/>with Our Hit Songs Deconstructed<br/>Trend Reports</h2>
				<h5 style="margin-top:12px;"><span class="lquot"></span>
					A new report on hit songwriting trends was published<br/>
					last week and some of its findings are fascinating...
				<span class="rquot"></span></h5>
				<p class="author">
					<span>The Hollywood Reporter</span><br/>
				</p>
				<a href="/sign-up-today/">Sign-up today! <img src="<?=get_stylesheet_directory_uri();?>/assets/img/icn-arrow-right-dark.png" /></a>
			</div>
		</li>
	</ul>
	<div class="play"><img src="<?=get_stylesheet_directory_uri();?>/assets/img/slides/icn-play.png" /></div>
	<div class="pause"><img src="<?=get_stylesheet_directory_uri();?>/assets/img/slides/icn-pause.png" /></div>
	</div><!--/jcarousel-->
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
</header><!-- #masthead -->

<div id="main" class="site-main">

<div id="primary" class="content-area primary-col">
<div id="content" class="site-content hsdcharts">

<h1 style="font-size:32px;margin:5px 0 20px;font-weight:normal;">TEST</h1>

</div><!--/#content-->
</div><!--/#primary-->

<?php get_sidebar(); ?>
<script type="text/javascript" src="<?=get_stylesheet_directory_uri();?>/assets/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript">
jQuery(function($) {
    $('.jcarousel').jcarousel({ wrap: 'circular' }).jcarouselAutoscroll({
	interval: 3000,
        target: '+=1',
        autostart: true
    });
    $('.jcarousel > .play').on('click', function(){ $('.jcarousel').jcarouselAutoscroll('start'); });
    $('.jcarousel > .pause').on('click', function(){ $('.jcarousel').jcarouselAutoscroll('stop'); });
    $('.jcarousel').on('jcarousel:targetin', 'li', function(event, carousel) {
	$('.jcarousel').jcarouselAutoscroll('stop');
	$(this).css('opacity', 0).animate({ opacity: 1 }, 400);
	var id = parseInt( $(this).attr('id'), 10);
	var that = this;
	if ( id % 2 === 0 ) {
		setTimeout( function(){
			console.log('hi');
			$(that).animate({ opacity: 0 }, 400, function(){ 
				$('.jcarousel').jcarousel('scroll', '+=1', false); 
				console.log( $('.jcarousel').jcarousel('target') );
			});
		}, 3000);
	} else {
		$('.jcarousel').jcarouselAutoscroll('start');
	}
	console.log( id + 1 );
    });
});
</script>
<?php get_footer(); ?>