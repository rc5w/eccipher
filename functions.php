<?php

// Hit Songs Deconstructed
// Theme Functions File
// By JNG @ I360M

if (!current_user_can('administrator')) { show_admin_bar(false); }

if( 1 == 1 ) { 
    $user = am4PluginsManager::getAPI()->getUser();
    $userid = $user["user_id"];
    if( $userid > 0 )
	{
	    $tmplink = mysqli_connect( "localhost", "dbi360_admin", "jd239jd32fs" );
	    mysqli_select_db( $tmplink, "dbi360_admin"  );
	    if( $_SERVER["SERVER_NAME"] == "db.hitsongsdeconstructed.com" && strpos( $_SERVER['REQUEST_URI'], "autocomplete.php" ) === false && strpos( $_SERVER['REQUEST_URI'], "/members/admin" ) === false   && strpos( $_SERVER['REQUEST_URI'], ".jpg" ) === false  && strpos( $_SERVER['REQUEST_URI'], ".svg" ) === false  && strpos( $_SERVER['REQUEST_URI'], ".png" ) === false && strpos( $_SERVER['REQUEST_URI'], "wp-admin" ) === false && strpos( $_SERVER['REQUEST_URI'], ".gif" ) === false && strpos( $_SERVER['REQUEST_URI'], ".css" ) === false&& strpos( $_SERVER['REQUEST_URI'], "ajax" ) === false && strpos( $_SERVER['REQUEST_URI'], "saveSearch" ) === false && strpos( $_SERVER['REQUEST_URI'], "hsdmgdb" ) === false )
		mysqli_query( $tmplink, "insert into immersionusage( dateadded, email, userid, pagehit, ipaddress, sessionid, domain ) values ( now(), '', '$userid', '" . mysql_escape_string( $_SERVER['REQUEST_URI'] ) . "', '" . mysql_escape_string( $_SERVER['REMOTE_ADDR'] ) . "', '" . session_id() . "', '" . mysql_escape_string( $_SERVER['SERVER_NAME'] ). "' )", $tmplink );
	    //	    echo( "insert into immersionusage( dateadded, email, userid, pagehit, ipaddress, sessionid ) values ( now(), '', '$userid', '" . mysql_escape_string( $_SERVER['REQUEST_URI'] ) . "', '" . mysql_escape_string( $_SERVER['REMOTE_ADDR'] ) . "', '" . session_id() . "' )" );
	    mysqli_close( $tmplink );
	}
}

/**********************************************************
 * Add custom query variable for category id (archive page)
***********************************************************/
function add_catid_var($public_query_vars) {
	$public_query_vars[] = 'catid';
	return $public_query_vars;
}
add_filter('query_vars', 'add_catid_var');


/**********************************************************
 * Add thumbnail to RSS feeds
***********************************************************/
function featuredImageRSS($content) {
global $post;
if ( has_post_thumbnail( $post->ID ) ){
	$content = '' . get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'alt' => get_the_title(), 'title' => get_the_title(), 'style' => 'float:right;' ) ) . '' . $content;
}
return $content;
}
add_filter('the_excerpt_rss', 'featuredImageRSS');
add_filter('the_content_feed', 'featuredImageRSS');

/**********************************************************
 * HSD Landing Page Functionality
***********************************************************/
function create_landing_pages() {
	register_post_type( 'hsd_landingpages',
		array( 'labels' => array(
			'name' => __( 'Landing Pages' ),
			'singular_name' => __( 'Landing Pages' ),
			'add_new'	=> __( 'Add New Landing Page' ),
			'add_new_item'  => __( 'Add New Landing Page' ),
			'edit_item'  	=> __( 'Edit Landing Page' ),
			'new_item' 	=> __( 'New Landing Page' ),
			'view_item' 	=> __( 'View Landing Page' ),
			'search_item' 	=> __( 'Search Landing Page' )
		),
		'supports'	=> array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions' ),
		'taxonomies'	=> array( 'campaign_type' ),
		'description' 	=> 'Hit Songs Deconstructed Landing Pages',
		'public' 	=> true,
		'menu_position' => 5,
		'has_archive' 	=> false,
		'rewrite'       => array(
				'slug' => 'landing',
				'hierarchical' => true,
				'with_front' => true  ),
		)
	);
}
function create_landingpage_taxonomy() {
	register_taxonomy( 'campaign_type', 'hsd_landingpages',
		array(
			'labels' => array(
				'name'              => _x( 'Campaign Types', 'taxonomy general name' ),
				'singular_name'     => _x( 'Campaign Types', 'taxonomy singular name' ),
				'search_items'      => __( 'Search Campaign Types' ),
				'all_items'         => __( 'All Campaign Types' ),
				'parent_item'       => __( 'Parent Campaign Type' ),
				'parent_item_colon' => __( 'Parent Campaign Type:' ),
				'edit_item'         => __( 'Edit Campaign Type' ),
				'update_item'       => __( 'Update Campaign Type' ),
				'add_new_item'      => __( 'Add New Campaign Type' ),
				'new_item_name'     => __( 'New Campaign Type Name' ),
				'menu_name'         => __( 'Campaign Types' )
				),
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'hierarchical'	    => true,
			'rewrite'           => array(
						'slug' => 'campaign',
						'hierarchical' => true,
						'with_front' => true  ),
		)
	);
	register_taxonomy_for_object_type( 'campaign_type', 'hsd_landingpages' );
}
add_action( 'init', 'create_landing_pages' );
add_action( 'init', 'create_landingpage_taxonomy' );


if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=> 'Plugin Sidebar',
		'id' => 'plugin_sidebar',
		'before_widget' => '<li id="%1$s" class="%2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="plugin">',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'name'=> 'TopAd Sidebar',
		'id' => 'topad_sidebar',
		'before_widget' => '<span>',
		'after_widget' => '</span>',
		'before_title' => '<h2 class="">',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'name'=> 'Report Sidebar',
		'id' => 'report_sidebar',
		'before_widget' => '<span>',
		'after_widget' => '</span>',
		'before_title' => '<h2 class="">',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'name'=> 'Articles Sidebar',
		'id' => 'article_sidebar',
		'before_widget' => '<span>',
		'after_widget' => '</span>',
		'before_title' => '<h2 class="">',
		'after_title' => '</h2>',
	));
    	/*register_sidebar(array(
		'name'=> 'Workshops PDF',
		'id' => 'workshop_pdf',
			'before_widget' => '<span>',
		'after_widget' => '<span>',
		'before_title' => '<h2 class="">',
		'after_title' => '</h2>',
	));*/
}

/*

function awesome() {

    wp_register_script( 'awesome',  'https://use.fontawesome.com/64b5cda928.js' );
    wp_enqueue_script( 'awesome' );

}

add_action( 'wp_enqueue_scripts', 'awesome' );

*/

/*Load Font awesome */
function font_awesome() {
wp_register_style( 'font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
wp_enqueue_style( 'font-awesome' );
}
add_action('wp_enqueue_scripts','font_awesome');

/*Load All google fonts */
function google_fonts() {
wp_register_style( 'google-fonts','https://pagecdn.io/lib/easyfonts/fonts.css');
wp_enqueue_style( 'google-fonts' );
}
add_action('wp_enqueue_scripts','google_fonts');




function my_custom_js() {
    echo '

       <script>

       $(".footer-social ul li").hover(function(){
            $( this ).toggleClass("social" );
       });


        </script>
    ';
}
// Add hook for front-end <head></head>
add_action('wp_footer', 'my_custom_js');





add_action( 'after_setup_theme', 'default_attachment_display_settings' );
/**
 * Set the Attachment Display Settings "Link To" default to "none"
 *
 * This function is attached to the 'after_setup_theme' action hook.
 */
function default_attachment_display_settings() {
	update_option( 'image_default_align', 'left' );
	update_option( 'image_default_link_type', 'none' );
	update_option( 'image_default_size', 'large' );
}




if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'single-post-medium', 515 );
    add_image_size( 'single-post-small', 250 );
}

add_filter( 'image_size_names_choose', 'my_custom_sizes' );

function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'single-post-medium' => __('Your Medium Size Name'),
        'single-post-small' => __('Your Small Size Name'),
    ) );
}



function short_excerpt($string) {
echo substr($string, 0, 220);
}



function get_excerpt($count){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_excerpt();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = $excerpt.'... ';
  return $excerpt;
}

remove_filter('widget_text_content', 'wpautop');



include "post-types/tut-video/tut-video.php";
function video_styles() {
wp_register_style( 'prefix-style4', get_stylesheet_directory_uri() . '/post-types/tut-video/tut-video.css?v=1.1' );
wp_enqueue_style( 'prefix-style4' );
}
add_action('wp_enqueue_scripts','video_styles');



include "post-types/articles/articles.php";
function articles_styles() {
		if (is_post_type('articles')){
wp_register_style( 'prefix-style5', get_stylesheet_directory_uri() . '/post-types/articles/articles.css?v=1.1' );
wp_enqueue_style( 'prefix-style5' );
}
}
add_action('wp_enqueue_scripts','articles_styles');


include "post-types/trend-report/trend-report.php";
function trendr_styles() {
	if (is_post_type('treports')){
		wp_register_style( 'prefix-style6', get_stylesheet_directory_uri() . '/post-types/trend-report/trend-report.css?v=1.1' );
		wp_enqueue_style( 'prefix-style6' );

          remove_filter( 'the_content', 'wpautop' );
	}
}
add_action('wp_enqueue_scripts','trendr_styles');



include "post-types/trend-brief/trend-brief.php";
function trendb_styles() {
	if (is_post_type('trend_briefs')){
		wp_register_style( 'prefix-style7', get_stylesheet_directory_uri() . '/post-types/trend-report/trend-report.css?v=1.1' );
		wp_enqueue_style( 'prefix-style7' );
	}
}
add_action('wp_enqueue_scripts','trendb_styles');




include "post-types/workshops/workshops.php";
function workshops_styles() {
	if (is_post_type('workshops')){
		wp_register_style( 'prefix-style6', get_stylesheet_directory_uri() . '/post-types/workshops/workshops.css?v=1.1' );
		wp_enqueue_style( 'prefix-style6' );

          remove_filter( 'the_content', 'wpautop' );


	}
}
add_action('wp_enqueue_scripts','workshops_styles');




include "post-types/ondemand/ondemand.php";
function ondemand_styles() {
	if (is_post_type('ondemand')){
		wp_register_style( 'prefix-style6', get_stylesheet_directory_uri() . '/post-types/workshops/workshops.css?v=1.1' );
		wp_enqueue_style( 'prefix-style6' );

          remove_filter( 'the_content', 'wpautop' );


	}
}
add_action('wp_enqueue_scripts','ondemand_styles');



include "post-types/DAW/daw.php";
function DAW_styles() {
	if (is_post_type('daw')){
		wp_register_style( 'prefix-styledaw', get_stylesheet_directory_uri() . '/post-types/DAW/daw.css' );
		wp_enqueue_style( 'prefix-styledaw' );

          remove_filter( 'the_content', 'wpautop' );


	}
}
add_action('wp_enqueue_scripts','DAW_styles');



/*
add_action( 'widgets_init', 'register_my_widgets' );


function register_my_widgets() {
    register_widget( 'My_Text_Widget' );
}

class My_Text_Widget extends WP_Widget_Text {
    function widget( $args, $instance ) {
        if (is_post_type('workshops')){
        extract($args);
        $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
        $text = apply_filters( 'widget_text', empty( $instance['text'] ) ? '' : $instance['text'], $instance );
        echo $before_widget;
        if ( !empty( $title ) ) { echo $before_title . $title . $after_title; } ?>
            <?php echo !empty( $instance['filter'] ) ? wpautop( $text ) : $text; ?>
        <?php
        echo $after_widget;


        }
    }
}


add_filter( 'widget_display_callback', 'wpoim_widget_display_callback', 10, 3 );
function wpoim_widget_display_callback( $instance, $widget, $args ){
    if (is_post_type('workshops')){
        $instance['filter'] = false; return $instance;
    }}
*/



function is_post_type($type){
    global $wp_query;
    if($type == get_post_type($wp_query->post->ID)) return true;
    return false;
}

/* combine posts*/
function cpt_pre_get_posts_filter( $query ) {
  global $wp_query;

  if ( !is_preview() && !is_admin() && !is_singular() && !is_404() ) {
    if ($query->is_feed) {
    // set your post types in the array below
    } else {
      $my_post_type = get_query_var( 'post_type' );
      if ( empty( $my_post_type ) ){
      
      }
       // $query->set( 'post_type' , 'video', 'articles');
       //   if ( is_front_page() ||  is_home()  ) {
	 //   $query->set( 'post_type', array( 'post', 'treports') );
     //   }
        
          if (  is_post_type_archive('ondemand') && empty( $query->query_vars['suppress_filters'] ) ) {
         //     $query->set( 'posts_per_page', 2 );
              $query->set( 'post_type', array('ondemand'  , 'trend_briefs') );
             
      }
    }
  }

  return $query;
}
if( strpos( $_SERVER["SCRIPT_URL"], "video_categories" ) === false ){


    add_filter( 'pre_get_posts' , 'cpt_pre_get_posts_filter' );

}





add_filter( 'wp_video_extensions',
    function( $exts ) {
        $exts[] = 'mov';
        return $exts;
    }
);


function my_enqueue() {
    ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<?php
}

add_action('admin_enqueue_scripts', 'my_enqueue');





add_filter( 'template_include', 'use_archive_ondemand', 99 );
function use_archive_ondemand( $template ) {

    if ( is_post_type_archive('ondemand')  ) {
        $new_template = locate_template( array( 'archive-ondemand.php' ) );
        if ( '' != $new_template ) {
            return $new_template ;
        }
    }

    return $template;
}


/*


add_action( 'pre_get_posts', 'wpshout_add_custom_post_types_to_query' );
function wpshout_add_custom_post_types_to_query( $query ) {
	if( 
		is_archive('ondemand') 
        && empty( $query->query_vars['suppress_filters'] )
	) {
		$query->set( 'post_type', array( 
			'ondemand',
            'video'
		) );
	}
}




add_filter( 'template_include', 'use_archive_brief', 99 );
function use_archive_brief( $template ) {

    if ( is_post_type_archive('brief')  ) {
        $new_template = locate_template( array( 'archive-trend_briefs.php' ) );
        if ( '' != $new_template ) {
            return $new_template ;
        }
    }

    return $template;
}
*/







?>
