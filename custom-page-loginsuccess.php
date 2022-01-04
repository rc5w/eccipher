<?php
/* Template Name: Login Success */

$api = am4PluginsManager::getAPI();
$user = am4PluginsManager::getAPI()->getUser();
if( !$user["user_id"] )
{
	/*Header( "Location: http://reports.hitsongsdeconstructed.com" );
	exit;*/
}

get_template_part('header','loginsuccess'); ?>
	<div id="primary" class="content-area">
		<div id="content" class="login-success-content" role="main">
			<div class="login-success-container">
				<h1>WHERE WOULD YOU LIKE TO GO?</h1>
				<div class="login-success-block login-success-block-1">
					<a href="_blank" href="https://db.hitsongsdeconstructed.com"><img src="<?=get_stylesheet_directory_uri();?>/assets/img/hsd-icon.svg" height="101" /></a>
					<a target="_blank" href="https://reports.hitsongsdeconstructed.com">Hit Songs Deconstructed <img style="display: inline-block;padding: 0 0 0 5px;" src="<?=get_stylesheet_directory_uri();?>/assets/img/hsd-link-arrow.svg" /></a>
				</div><!-- /.login-block -->
				<div class="login-success-block login-success-block-2">
					<a target="_blank" href="https://db.hitsongsdeconstructed.com"><img src="<?=get_stylesheet_directory_uri();?>/assets/img/immersion-icon.svg" /></a>
					<a target="_blank" href="https://db.hitsongsdeconstructed.com">Immersion <img style="display: inline-block;padding: 0 0 0 5px;" src="<?=get_stylesheet_directory_uri();?>/assets/img/hsd-link-arrow.svg" /></a>
				</div><!-- /.login-block -->
			</div><!-- /.login-success-container -->	
		</div><!-- #content -->
	</div><!-- #primary -->
<?php //get_template_part('footer','amember');  ?>