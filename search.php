<?php get_header(); ?>
<div class="color-wrap">
<div id="primary" class="content-area primary-col wsidebar">
<div id="search-content">

	<h1 class="entry-title" style="font-family:Georgia,serif;color:#ff6633;font-weight:normal;text-transform:capitalize;"><?php _e('Search results for','communitie'); ?> &#8216;<em><?php the_search_query() ?></em>&#8217;</h1>

	<?php query_posts($query_string . '&cat=13,17,24,27,28,29,30,36,37,38,39,40,41,43,44,45,46,49,50,51,53,54,119,120,121'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="post-<?php the_ID(); ?>" style="margin:20px 0;padding-bottom:20px;border-bottom:1px solid #ccc;vertical-align:top;">
<a href="<?=the_permalink();?>" style="display:block;color:#444;">
<div style="width:550px;float:left;min-height:50px;">
<h1 class="search-title"><?php the_title(); ?></h1>
<span class="search-subtit"><b>Published</b>: <?=get_the_date()?></span>
</div><!--end left-float-->
<div style="width:40px;float:right;min-height:40px;text-align:center;">
<span style="font-family:Georgia,serif;font-size:40px;color:#ccc;font-weight:bold;line-height:1;">&raquo;</span>
</div><!--end right-float--></a>
<div style="clear:both;"></div><!--end clearfloat-->
</div>

	<?php endwhile; ?>	
	
	<?php else : ?>
		<p><?php _e('Not Found','communitie'); ?></p>
	<?php endif; ?>

</div><!--end search-content-->
<?php twentythirteen_paging_nav(); ?>
</div><!--end primary-content-->
<?php get_sidebar( 'archive' ); ?>
</div>
<?php get_footer(); ?>
			</div>
				</div> 
					</div> 