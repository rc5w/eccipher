<?php
/**
 * Template Name: writing
 *
 * Description: Academic Page Template
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area primary-col full-width">
    		
			<h2 class="special-title1"><?=get_the_title();?></h2>
	<div id="content" class="site-content vid-tut flex" role="main">
            
    <?php // The WordPress Loop - customized with WP_Query
    $args = array(
    	'post_type' => 'video',
    	 'tax_query' => array(
        array(
            'taxonomy' => 'video_categories',   // taxonomy name
            'field' => 'term_id',           // term_id, slug or name
            'terms' => 184,                  // term id, term slug or term name
        )
    )
    	); 
	$custom_query = new WP_Query($args); // exclude Asides category
	while($custom_query->have_posts()) : $custom_query->the_post(); ?>
	<?php get_template_part( 'content', 'video' );?>
	<?php endwhile; ?>


            
            
    
    
	</div><!-- #content -->
</div><!-- #primary -->


<?php get_footer();?>



