<?php
$api = am4PluginsManager::getAPI();
if( $api->haveSubscriptions(array(8,9,12,14,15,16,17,18,19,22,23,26,27,34,35,40,43,44, 50, 51, 52,53,54, 56, 58, 59, 61)) ) { $isyearly = true; }
?>

<div class="sb-archivecontainer">
<div class="sb-archiveleft">
	<? if($isyearly) : ?>
		<a href="<?=the_permalink();?>" style="display:block;">
	<? else : ?>
		<a href="#" data-reveal-id="modal-error-nonyr" title="Login/Signup" style="text-decoration:none;display:block;">
	<? endif; ?>
		<?php echo str_replace('<span class="orangeTitle"> Deconstructed</span>','',get_the_title(get_the_ID()));?></a>
</div><!--end metadiv-->
<div class="sb-archiveright"></div><!--end arrowdiv-->
<div style="clear:both;"></div><!--end clearfloat-->
</div><!--end song-container-->