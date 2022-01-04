<div class="secondary-content secondary-col">
<div id="container" style="width: 260px;">

<?php 
$api = am4PluginsManager::getAPI();
$isyearly = $api->isMonthlySub() || $api->isYearlySub();
?>
<a href="http://www.hitsongsdeconstructed.com/workshops/mastery-workshop-1/?utm_source=HSD-&utm_content=WKSHP-&utm_medium=WB&utm_campaign=HSD-WKSHP-WB&ocode=HSD-WKSHP-WB" target="_blank">
<!--<img src="https://reports.hitsongsdeconstructed.com/wp-content/themes/twentythirteen-child/assets/img/sidebar/HSD_Mastery_Workshop_260wide_HSDWebsite_Banner-Jan26.gif" class="sidebar-img" />-->
</a>
<h3 class="sb-header">ARCHIVE SEARCH</h3>
<!--sidebar search form-->
<form action="<?=get_site_url();?>" method="get" style="padding-bottom:0px;margin-top:15px;">
    <fieldset>
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" style="display:inline-block;height:39px;border:none;border-radius:0;box-shadow:none;padding-left:10px;border:solid 1px #cccccc;border-right:none;width: 213px;" />
        <button type="submit" name="Search" style="display:inline-block;width:46px;height:39px;background:url('<?=get_stylesheet_directory_uri();?>/assets/img/search-btn.png') no-repeat;margin-left:-5px;border:none;border-radius:none;box-shadow:none;padding:0;vertical-align:top;"></button>
    </fieldset>
</form>
<!--end sidebar search form-->

<h3 class="sb-header">REPORT ARCHIVE</h3>

<h3 class="sb-subheader">Hit Songs Deconstructed Reports</h3>
<?php
$query = new WP_Query( 'cat=39&posts_per_page=4' );
// HSD Reports Query
if ( $query->have_posts() ) { 		
 while ( $query->have_posts() ) : $query->the_post(); 
	get_template_part( 'content', 'sidebararchive');	
 endwhile; 
 echo '<div class="sb-morelink">';
 if ( $isyearly ) { echo '<a href="' . get_site_url() . '/archive/?catid=39,40,41">'; } 
 else {	?> <a href="#" data-reveal-id="modal-error-nonyr" title="Login/Signup" style="text-decoration:none;"><?php }
 echo 'More</a></div><!--end morediv-->';
} 
wp_reset_query();
?>

    
  <!-- <div>  
<h3 class="sb-subheader">Special Reports</h3>
<div style="margin-bottom:25px;">

<div class="sb-archivecontainer">
<div class="sb-archiveleft">
 <?php if ( $isyearly ) { echo '<a href="' . get_site_url() . '/archive/?catid=24,53,54">'; } 
 else {	?> <a href="#" data-reveal-id="modal-error-nonyr" title="Login/Signup" style="text-decoration:none;"><?php } ?>
	Top 10 Deconstructed</a>
</div>
<div class="sb-archiveright"></div>
<div style="clear:both;"></div>
</div>

<div class="sb-archivecontainer">
<div class="sb-archiveleft">
 <?php if ( $isyearly ) { echo '<a href="' . get_site_url() . '/archive/?catid=44,45,46">'; } 
 else {	?> <a href="#" data-reveal-id="modal-error-nonyr" title="Login/Signup" style="text-decoration:none;"><?php } ?>
	Hit Songwriting Trends in Pop</a>
</div>
<div class="sb-archiveright"></div>
<div style="clear:both;"></div>
</div>

<div class="sb-archivecontainer">
<div class="sb-archiveleft">
 <?php if ( $isyearly ) { echo '<a href="' . get_site_url() . '/archive/?catid=36,37,38">'; } 
 else {	?> <a href="#" data-reveal-id="modal-error-nonyr" title="Login/Signup" style="text-decoration:none;"><?php } ?>
	Hit Pop Sub-Genre Influences</a>
</div>
<div class="sb-archiveright"></div>
<div style="clear:both;"></div>
</div>

<div class="sb-archivecontainer">
<div class="sb-archiveleft">
 <?php if ( $isyearly ) { echo '<a href="' . get_site_url() . '/archive/?catid=57,58,59">'; } 
 else {	?> <a href="#" data-reveal-id="modal-error-nonyr" title="Login/Signup" style="text-decoration:none;"><?php } ?>
	Who's Writing the Hits?</a>
</div>
<div class="sb-archiveright"></div>
<div style="clear:both;"></div>
</div>
</div>

<div style="margin-bottom:25px;">

<h3 class="sb-subheader">HSD Charts</h3>
<div class="sb-archivecontainer">
<div class="sb-archiveleft">
<?php 
	if ( $isyearly ) { echo '<a href="/archive/charts/">'; } 
	else {	?> 
		<a href="#" data-reveal-id="modal-error-nonyr" title="Login/Signup" style="text-decoration:none;"><?php } ?>
	All</a>
</div>
<div class="sb-archiveright"></div>
<div style="clear:both;"></div>
</div>

<?php
$args = array(
	'type'		=> 'hsd_charts',
	'taxonomy'	=> 'chart_type',
	'pad_counts'	=> 0,
	'hierarchical'	=> 0,
	'hide_empty'	=> 0,
);
$types = get_categories( $args ); 
foreach($types as $type) { 
	//var_dump($type); ?>

<div class="sb-archivecontainer">
<div class="sb-archiveleft">
 <?php 
	if ( $isyearly ) { echo '<a href="' . get_site_url() . '/chart-type/' . $type->slug . '">'; } 
	else {	?> 
		<a href="#" data-reveal-id="modal-error-nonyr" title="Login/Signup" style="text-decoration:none;"><?php } ?>
	<?php echo $type->name;?></a>
</div>
<div class="sb-archiveright"></div>
<div style="clear:both;"></div>
</div>

<?php } ?>
</div>
</div> -->

<?php
/*
echo '<h3 class="sb-subheader">Penn&#039;s Picks</h3>';
$query3 = new WP_Query( 'cat=5&posts_per_page=4' );
// Penns Picks Query
if ( $query3->have_posts() ) { 		
while ( $query3->have_posts() ) : $query3->the_post(); 
	get_template_part( 'content', 'sidebararchive');	
endwhile; 
 echo '<div class="sb-morelink">';
 if ( $isyearly ) { echo '<a href="' . get_site_url() . '/archive/?catid=49,50,51">'; } 
 else {	?> <a href="#" data-reveal-id="modal-error-nonyr" title="Login/Signup" style="text-decoration:none;"><?php }
 echo 'More </a></div><!--end morediv-->';
} */?>

</div>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>

<?php endif; ?>
<div id="modal-error-nonyr" class="reveal-modal">
	<?=do_shortcode("[am4show have='p6' user_error='Pro_Yearly' guest_error='Pro_Yearly']"); ?>
	<a class="close-reveal-modal">&#215;</a>
</div>
</div><!-- /secondary-content-sidebar -->
<div style="clear:both"></div><!--clearfloat-->