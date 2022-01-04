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

function register_cpt_articles() {

    $labels = array(
        'name' => _x( 'Articles', 'articles' ),
        'singular_name' => _x( 'Articles', 'article' ),
        'add_new' => _x( 'Add New', 'articles' ),
        'add_new_item' => _x( 'Add New Articles', 'articles' ),
        'edit_item' => _x( 'Edit Articles', 'articles' ),
        'new_item' => _x( 'New Articles', 'articles' ),
        'view_item' => _x( 'View Articles', 'articles' ),
        'search_items' => _x( 'Search Articles', 'articles' ),
        'not_found' => _x( 'No Articles found', 'articles' ),
        'not_found_in_trash' => _x( 'No Articles found in Trash', 'articles' ),
        'parent_item_colon' => _x( 'Parent Articles:', 'articles' ),
        'menu_name' => _x( 'Articles', 'articles' ),
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

    register_post_type( 'articles', $args );
}

add_action( 'init', 'register_cpt_articles' );






// Function used to automatically create Music Reviews page.
function create_articles_pages()
  {
   //post status and options
    $post = array(
          'comment_status' => 'open',
          'ping_status' =>  'closed' ,
          'post_date' => date('Y-m-d H:i:s'),
          'post_name' => 'articles',
          'post_status' => 'publish' ,
          'post_title' => 'Articles',
          'post_type' => 'articles',
    );
    //insert page and save the id
    $newvalue = wp_insert_post( $post, false );
    //save the id in the database
    update_option( 'mrpage', $newvalue );
  }


function wpcodex_add_excerpt_support_for_articles() {
 add_post_type_support( 'articles', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_articles' );





function  hsd_taxonomy() {
    register_taxonomy(
        'hsdwire_categories',
        'articles',
        array(
        		'show_admin_column' => true,
            'hierarchical' => true,
            'label' => 'HSD Wire',
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'hsdwire_categories',
                'with_front' => false
            )
        )
    );
}
add_action( 'init', 'hsd_taxonomy');




/**
 * Display a custom taxonomy dropdown in admin
 * @author Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy');
function tsm_filter_post_type_by_taxonomy2() {
	global $typenow;
	$post_type = 'articles'; // change to your post type
	$taxonomy  = 'articles_categories'; // change to your taxonomy
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
add_filter('parse_query', 'tsm_convert_id_to_term_in_query');
function tsm_convert_id_to_term_in_query2($query) {
	global $pagenow;
	$post_type = 'articles'; // change to your post type
	$taxonomy  = 'articles_categories'; // change to your taxonomy
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
}




?>
