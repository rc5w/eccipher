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

function register_cpt_ondemand() {

    $labels = array(
        'name' => _x( 'On Demand', 'ondemand' ),
        'singular_name' => _x( 'On Demand', 'ondemand' ),
        'add_new' => _x( 'Add New On Demand', 'ondemand' ),
        'add_new_item' => _x( 'Add New On Demand', 'ondemand' ),
        'edit_item' => _x( 'Edit On Demand', 'ondemand' ),
        'new_item' => _x( 'New On Demand', 'ondemand' ),
        'view_item' => _x( 'View On Demand', 'ondemand' ),
        'search_items' => _x( 'Search On Demand', 'ondemand' ),
        'not_found' => _x( 'No On Demand found', 'ondemand' ),
        'not_found_in_trash' => _x( 'No On Demand found in Trash', 'ondemand' ),
        'parent_item_colon' => _x( 'Parent On Demand:', 'ondemand' ),
        'menu_name' => _x( 'On Demand', 'ondemand' ),
    );


    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Works Shops on Demand',
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

    register_post_type( 'ondemand', $args );
}

add_action( 'init', 'register_cpt_ondemand' );


// Load the custom post type archive page template
/*
add_filter( 'archive_template', 'ondemand_archive_template' ) ;
function ondemand_archive_template( $archive_template ) {
  global $post;
  if ( is_post_type_archive ( 'ondemand' ) ) {
    if(file_exists(PLUGIN_PATH. '/archive-ondemand.php'))
       $archive_template = PLUGIN_PATH. '/archive-ondemand.php';
  }
  return $archive_template;
}
*/


// Function used to automatically create Music Reviews page.
/*
function create_ondemand_pages()
  {
   //post status and options
    $post = array(
          'comment_status' => 'open',
          'ping_status' =>  'closed' ,
          'post_date' => date('Y-m-d H:i:s'),
          'post_name' => 'ondemand',
          'post_status' => 'publish' ,
          'post_title' => 'Demand',
          'post_type' => 'ondemand',
    );
    //insert page and save the id
    $newvalue = wp_insert_post( $post, false );
    //save the id in the database
    update_option( 'mrpage', $newvalue );
  }
*/

function wpcodex_add_excerpt_support_for_ondemand() {
 add_post_type_support( 'ondemand', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_ondemand' );







function  work_taxonomy() {
    register_taxonomy(
        'ondemand_categories',
        'ondemand',
        array(
        		'show_admin_column' => true,
            'hierarchical' => true,
            'rewrite'             => array( 'slug' => 'demand', 'with_front' => false ),
            'label' => 'Ondemand Categories',
            'query_var' => true
        )
    );
}
add_action( 'init', 'work_taxonomy');







/**
 * Display a custom taxonomy dropdown in admin
 * @author Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy5');
function tsm_filter_post_type_by_taxonomy5() {
	global $typenow;
	$post_type = 'ondemand'; // change to your post type
	$taxonomy  = 'ondemand_categories'; // change to your taxonomy
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
/**
 * Filter posts by taxonomy in admin
 * @author  Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_filter('parse_query', 'tsm_convert_id_to_term_in_query6');
function tsm_convert_id_to_term_in_query6($query) {
	global $pagenow;
	$post_type = 'ondemand'; // change to your post type
	$taxonomy  = 'ondemand_categories'; // change to your taxonomy
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
//	print_r( $q_vars );
}

/*

if (is_post_type('ondemand')){
		remove_filter( 'the_content', 'wpautop' );
	}
*/


?>
