<?php
/**
 * Plugin Name: sos portfolio
 * Plugin URI: sosportfolio.com
 * Description: This plugin will add Portfolio capabilities to the site.
 * Version: 1.0.0
 * Author: Simone Smith
 * Author URI: sosportfolio.com
 * License: GPL2
 */

function register_cpt_workshops() {

    $labels = array(
        'name' => _x( 'Workshops', 'workshops' ),
        'singular_name' => _x( 'Workshop', 'workshops' ),
        'add_new' => _x( 'Add New Workshop', 'workshops' ),
        'add_new_item' => _x( 'Add New Workshops', 'workshops' ),
        'edit_item' => _x( 'Edit Workshops', 'workshops' ),
        'new_item' => _x( 'New Workshops', 'workshops' ),
        'view_item' => _x( 'View Workshops', 'workshops' ),
        'search_items' => _x( 'Search Workshops', 'workshops' ),
        'not_found' => _x( 'No Workshops found', 'workshops' ),
        'not_found_in_trash' => _x( 'No Workshops found in Trash', 'workshops' ),
        'parent_item_colon' => _x( 'Parent Workshops:', 'workshops' ),
        'menu_name' => _x( 'Workshops', 'workshops' ),
    );


    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Portfolio posts filterable by type',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'excerpts' ),
        'taxonomies' => array(  'post_tag', 'category' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-gallery',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'workshops', $args );
}

add_action( 'init', 'register_cpt_workshops' );






// Function used to automatically create Music Reviews page.
/*
function create_workshops_pages()
  {
   //post status and options
    $post = array(
          'comment_status' => 'open',
          'ping_status' =>  'closed' ,
          'post_date' => date('Y-m-d H:i:s'),
          'post_name' => 'workshops',
          'post_status' => 'publish' ,
          'post_title' => 'Workshops',
          'post_type' => 'workshops',
    );
    //insert page and save the id
    $newvalue = wp_insert_post( $post, false );
    //save the id in the database
    update_option( 'mrpage', $newvalue );
  }
*/

function wpcodex_add_excerpt_support_for_workshops() {
 add_post_type_support( 'workshops', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_workshops' );






/*
function  work_taxonomy() {
    register_taxonomy(
        'workshop_categories',
        'workshops',
        array(
        		'show_admin_column' => true,
            'hierarchical' => true,
            'label' => 'Workshop Categories',
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'workshop',
                'with_front' => false
            )
        )
    );
}
add_action( 'init', 'work_taxonomy');

*/

/**
 * Display a custom taxonomy dropdown in admin
 * @author Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */

 /*
add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy3');
function tsm_filter_post_type_by_taxonomy3() {
	global $typenow;
	$post_type = 'workshops'; // change to your post type
	$taxonomy  = 'workshops_categories'; // change to your taxonomy
	if ($typenow == $post_type) {
		$selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
		$info_taxonomy = get_taxonomy($taxonomy);
		wp_dropdown_categories(array(
			'show_option_all' => __("Show All {$info_taxonomy->label}"),
			'taxonomy'        => $taxonomy,
			'name'            => $taxonomy,
			'orderby'         => 'name',
			'selected'        => $selected,
			'show_count'      => true,
			'hide_empty'      => true,
		));
	};
}
*/


/**
 * Filter posts by taxonomy in admin
 * @author  Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
 /*
add_filter('parse_query', 'tsm_convert_id_to_term_in_query3');
function tsm_convert_id_to_term_in_query3($query) {
	global $pagenow;
	$post_type = 'workshops'; // change to your post type
	$taxonomy  = 'workshops_categories'; // change to your taxonomy
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
}
*/

/*

if (is_post_type('workshops')){
		remove_filter( 'the_content', 'wpautop' );
	}
*/



// basic workshop shortcode
function workshopv_func( $atts ) {
    $a = shortcode_atts( array(
       'img' => '',
       'title' => '',
        'link' => '',
          'pdf' => '',
    ), $atts );

    if($a['pdf']!=''){
    return"
    <div class='workshop-container'>
        <div class='vid-wrap2'>
            <div class='videoWrapper'>
                <a href='{$a['link']}' class='vp-a'>
                    <img src='{$a['img']}' alt=''>
                    </a>
            </div>
         </div><!--/chart-img-->


         <div class='chart-summary'>
    	     <a href='{$a['link']}' class='vp-a'><h1>{$a['title']}</h1></a><br />
            <a href='{$a['pdf']}' class='vp-a presentation' target='_blank'>Download Presentation</a>
         </div><!--/chart-summary-->
         <div class='cf'></div><!--/clearfloat-->
    	<div class='entry-meta'></div><!-- .entry-meta -->
        <div class='cf'></div><!--/clearfloat-->
    </div>
    ";
    }

    if(   empty($atts['pdf'])    ){
    return"
    <div class='workshop-container'>
        <div class='vid-wrap2'>
            <div class='videoWrapper'>
                <a href='{$a['link']}' class='vp-a'>
                    <img src='{$a['img']}' alt=''>
                    </a>
            </div>
         </div><!--/chart-img-->


         <div class='chart-summary'>
    	     <a href='{$a['link']}' class='vp-a'><h1>{$a['title']}</h1></a>
         </div><!--/chart-summary-->
         <div class='cf'></div><!--/clearfloat-->
    	<div class='entry-meta'></div><!-- .entry-meta -->
        <div class='cf'></div><!--/clearfloat-->
    </div>
    ";
    }


}
add_shortcode( 'woskrhopvids', 'workshopv_func' );






//workshop shortcode w pdf under title
function workshopv2_func( $atts ) {
    $a = shortcode_atts( array(
       'img' => '',
       'title' => '',
        'link' => '',
        'pdf' => '',
    ), $atts );


if($a['pdf']!=''){
return"
<div class='workshop-container'>
    <div class='vid-wrap2'>
        <div class='videoWrapper'>
            <a href='{$a['link']}' class='vp-a'>
                <img src='{$a['img']}' alt=''>
                </a>
        </div>
     </div><!--/chart-img-->


     <div class='chart-summary'>
	     <a href='{$a['link']}' class='vp-a'><h1>{$a['title']}</h1></a>
        <a href='{$a['pdf']}' class='vp-a presentation'><h1>Download Presentation</h1></a>
     </div><!--/chart-summary-->
     <div class='cf'></div><!--/clearfloat-->
	<div class='entry-meta'></div><!-- .entry-meta -->
    <div class='cf'></div><!--/clearfloat-->
</div>
";
}

if(   empty($atts['pdf'])    ){
return"
<div class='workshop-container'>
    <div class='vid-wrap2'>
        <div class='videoWrapper'>
            <a href='{$a['link']}' class='vp-a'>
                <img src='{$a['img']}' alt=''>
                </a>
        </div>
     </div><!--/chart-img-->


     <div class='chart-summary'>
	     <a href='{$a['link']}' class='vp-a'><h1>{$a['title']}</h1></a>
     </div><!--/chart-summary-->
     <div class='cf'></div><!--/clearfloat-->
	<div class='entry-meta'></div><!-- .entry-meta -->
    <div class='cf'></div><!--/clearfloat-->
</div>
";
}



}




add_shortcode( 'woskrhopvids2', 'workshopv2_func' );











//workshop shortcode w pdf under title
function workshopv3_func( $atts,  $content = null ) {
    $a = shortcode_atts( array(
       'img' => '',
       'title' => '',
        'desc' => '',
        'link' => '',
        'pdf' => '',
    ), $atts );


if($a['pdf']!=''){
return"
<div class='workshop-container'>
    <div class='vid-wrap2'>
        <div class='videoWrapper'>
            <a href='{$a['link']}' class='vp-a'>
                <img src='{$a['img']}' alt=''>
                </a>
        </div>
     </div><!--/chart-img-->


     <div class='chart-summary'>
	     <a href='{$a['link']}' class='vp-a'><h1>{$a['title']}</h1></a>
         <p>" . $content . "</p>
        <a href='{$a['pdf']}' class='vp-a presentation'>Download </a>
     </div><!--/chart-summary-->
     <div class='cf'></div><!--/clearfloat-->
	<div class='entry-meta'></div><!-- .entry-meta -->
    <div class='cf'></div><!--/clearfloat-->
</div>
";
}

if(   empty($atts['pdf'])    ){
return"
<div class='workshop-container'>
    <div class='vid-wrap2'>
        <div class='videoWrapper'>
            <a href='{$a['link']}' class='vp-a'>
                <img src='{$a['img']}' alt=''>
                </a>
        </div>
     </div><!--/chart-img-->


     <div class='chart-summary'>
	     <a href='{$a['link']}' class='vp-a'><h1>{$a['title']}</h1></a>
             <p>" . $content . "</p>
     </div><!--/chart-summary-->
     <div class='cf'></div><!--/clearfloat-->
	<div class='entry-meta'></div><!-- .entry-meta -->
    <div class='cf'></div><!--/clearfloat-->
</div>
";
}



}




add_shortcode( 'woskrhopvids3', 'workshopv3_func' );



?>
