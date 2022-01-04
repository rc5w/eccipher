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

function register_cpt_trend_briefs() {

    $labels = array(
        'name' => _x( 'Trend Briefs', 'trend_briefs' ),
        'singular_name' => _x( 'Trend Briefs', 'trend_brief' ),
        'add_new' => _x( 'Add New', 'trend_briefs' ),
        'add_new_item' => _x( 'Add New Trend Briefs', 'trend_briefs' ),
        'edit_item' => _x( 'Edit Trend Briefs', 'trend_briefs' ),
        'new_item' => _x( 'New Trend Briefs', 'trend_briefs' ),
        'view_item' => _x( 'View Trend Briefs', 'trend_briefs' ),
        'search_items' => _x( 'Search Trend Briefs', 'trend_briefs' ),
        'not_found' => _x( 'No Trend Briefs found', 'trend_briefs' ),
        'not_found_in_trash' => _x( 'No Trend Briefs found in Trash', 'trend_briefs' ),
        'parent_item_colon' => _x( 'Parent Trend Briefs:', 'trend_briefs' ),
        'menu_name' => _x( 'Trend Briefs', 'trend_briefs' ),
    );


    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Portfolio posts filterable by type',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'excerpts' ),
        'taxonomies' => array(  'post_tag' ),
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

    register_post_type( 'trend_briefs', $args );
}

add_action( 'init', 'register_cpt_trend_briefs' );






// Function used to automatically create Music Reviews page.
function create_trend_briefs_pages()
  {
   //post status and options
    $post = array(
          'comment_status' => 'open',
          'ping_status' =>  'closed' ,
          'post_date' => date('Y-m-d H:i:s'),
          'post_name' => 'trend_briefs',
          'post_status' => 'publish' ,
          'post_title' => 'Trend Briefs',
          'post_type' => 'trend_briefs',
    );
    //insert page and save the id
    $newvalue = wp_insert_post( $post, false );
    //save the id in the database
    update_option( 'mrpage', $newvalue );
  }


function wpcodex_add_excerpt_support_for_trend_briefs() {
 add_post_type_support( 'trend_briefs', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_trend_briefs' );





function  trendb_taxonomy() {
    register_taxonomy(
        'report_categories',
        'trend_briefs',
        array(
        		'show_admin_column' => true,
            'hierarchical' => true,
            'label' => 'Brief Categories',
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'trend_Brief_categories',
                'with_front' => false
            )
        )
    );
}
add_action( 'init', 'trendb_taxonomy');




/**
 * Display a custom taxonomy dropdown in admin
 * @author Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy4');
function tsm_filter_post_type_by_taxonomy4() {
	global $typenow;
	$post_type = 'trend_briefs'; // change to your post type
	$taxonomy  = 'trend_briefs_categories'; // change to your taxonomy
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
add_filter('parse_query', 'tsm_convert_id_to_term_in_query4');
function tsm_convert_id_to_term_in_query4($query) {
	global $pagenow;
	$post_type = 'trend_briefs'; // change to your post type
	$taxonomy  = 'trend_briefs_categories'; // change to your taxonomy
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
}




?>
