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

function register_cpt_treports() {

    $labels = array(
        'name' => _x( 'Trend Reports', 'treports' ),
        'singular_name' => _x( 'Trend Report', 'treport' ),
        'add_new' => _x( 'Add New', 'treports' ),
        'add_new_item' => _x( 'Add New Trend Reports', 'treports' ),
        'edit_item' => _x( 'Edit Trend Reports', 'treports' ),
        'new_item' => _x( 'New Trend Reports', 'treports' ),
        'view_item' => _x( 'View Trend Reports', 'treports' ),
        'search_items' => _x( 'Search Trend Reports', 'treports' ),
        'not_found' => _x( 'No Trend Reports found', 'treports' ),
        'not_found_in_trash' => _x( 'No Trend Reports found in Trash', 'treports' ),
        'parent_item_colon' => _x( 'Parent Trend Reports:', 'treports' ),
        'menu_name' => _x( 'Trend Reports (Pro-sub)', 'treports' ),
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

    register_post_type( 'treports', $args );
}

add_action( 'init', 'register_cpt_treports' );






// Function used to automatically create Music Reviews page.
function create_treports_pages()
  {
   //post status and options
    $post = array(
          'comment_status' => 'open',
          'ping_status' =>  'closed' ,
          'post_date' => date('Y-m-d H:i:s'),
          'post_name' => 'treports',
          'post_status' => 'publish' ,
          'post_title' => 'Trend Reports',
          'post_type' => 'treports',
    );
    //insert page and save the id
    $newvalue = wp_insert_post( $post, false );
    //save the id in the database
    update_option( 'mrpage', $newvalue );
  }


function wpcodex_add_excerpt_support_for_treports() {
 add_post_type_support( 'treports', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_treports' );





function  trendr_taxonomy() {
    register_taxonomy(
        'report_categories',
        'treports',
        array(
        		'show_admin_column' => true,
            'hierarchical' => true,
            'label' => 'Report Categories',
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'trend_report_categories',
                'with_front' => false
            )
        )
    );
}
add_action( 'init', 'trendr_taxonomy');




/**
 * Display a custom taxonomy dropdown in admin
 * @author Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy3');
function tsm_filter_post_type_by_taxonomy3() {
	global $typenow;
	$post_type = 'treports'; // change to your post type
	$taxonomy  = 'treports_categories'; // change to your taxonomy
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
add_filter('parse_query', 'tsm_convert_id_to_term_in_query3');
function tsm_convert_id_to_term_in_query3($query) {
	global $pagenow;
	$post_type = 'treports'; // change to your post type
	$taxonomy  = 'treports_categories'; // change to your taxonomy
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
}


/*

if (is_post_type('treports')){
		remove_filter( 'the_content', 'wpautop' );
	}
*/





// [bartag foo="foo-value"]
function notable_func( $atts ) {
    $a = shortcode_atts( array(
       'img' => '',
       'title' => '',
    ), $atts );


    return "<div class='notable'><div class='notable-img'><img src='{$a['img']}' alt=''></div><div class='notable-title'>{$a['title']}</div></div>";
}
add_shortcode( 'notable', 'notable_func' );


?>
