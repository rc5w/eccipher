<?php


function register_cpt_video() {
 
    $labels = array(
        'name' => _x( 'Videos', 'video' ),
        'singular_name' => _x( 'Videos', 'video' ),
        'add_new' => _x( 'Add New', 'video' ),
        'add_new_item' => _x( 'Add New Videos', 'video' ),
        'edit_item' => _x( 'Edit Videos', 'video' ),
        'new_item' => _x( 'New Videos', 'video' ),
        'view_item' => _x( 'View Videos', 'video' ),
        'search_items' => _x( 'Search Videos', 'video' ),
        'not_found' => _x( 'No Videos found', 'video' ),
        'not_found_in_trash' => _x( 'No Videos found in Trash', 'video' ),
        'parent_item_colon' => _x( 'Parent Videos:', 'video' ),
        'menu_name' => _x( 'Videos', 'video' ),
    );
 
 
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Portfolio posts filterable by type',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'excerpts' ),
        'taxonomies' => array(  'post_tag'),
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
 
    register_post_type( 'video', $args );
}
 
add_action( 'init', 'register_cpt_video' );






// Function used to automatically create Music Reviews page.
function create_video_pages()
  {
   //post status and options
    $post = array(
          'comment_status' => 'open',
          'ping_status' =>  'closed' ,
          'post_date' => date('Y-m-d H:i:s'),
          'post_name' => 'video',
          'post_status' => 'publish' ,
          'post_title' => 'Videos',
          'post_type' => 'video',
    );
    //insert page and save the id
    $newvalue = wp_insert_post( $post, false );
    //save the id in the database
    update_option( 'mrpage', $newvalue );
  }
  
  
function wpcodex_add_excerpt_support_for_video() {
 add_post_type_support( 'video', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_video' );





function  video_taxonomy() {
    register_taxonomy(
        'video_categories',
        'video',
        array(
        		'show_admin_column' => true, 
            'hierarchical' => true,
            'label' => 'Video Categories',
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'video_categories',
                'with_front' => false
            )
        )
    );
}
add_action( 'init', 'video_taxonomy');




/**
 * Display a custom taxonomy dropdown in admin
 * @author Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy');
function tsm_filter_post_type_by_taxonomy() {
	global $typenow;
	$post_type = 'video'; // change to your post type
	$taxonomy  = 'video_categories'; // change to your taxonomy
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
function tsm_convert_id_to_term_in_query($query) {
	global $pagenow;
	$post_type = 'video'; // change to your post type
	$taxonomy  = 'video_categories'; // change to your taxonomy
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
//	print_r( $q_vars );
}




?>
