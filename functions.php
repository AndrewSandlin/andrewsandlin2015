<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php'); 

// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/assets/functions/disable-emoji.php'); 

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php'); 

// Customize the WordPress admin
require_once(get_template_directory().'/assets/functions/admin.php'); 

// Remove menu items from admin 
function remove_menus(){  
	remove_menu_page( 'edit.php' );                   //Posts
	/*  remove_menu_page( 'upload.php' );                 //Media  */
	remove_menu_page( 'edit-comments.php' );          //Comments
}
add_action( 'admin_menu', 'remove_menus' );

// Custom Post types for Feature project on home page 
   add_action('init', 'create_feature');
     function create_feature() {
       $feature_args = array(
          'labels' => array(
           'name' => __( 'Feature Project' ),
           'singular_name' => __( 'Feature Project' ),
           'add_new' => __( 'Add New Feature Project' ),
           'add_new_item' => __( 'Add New Feature Project' ),
           'edit_item' => __( 'Edit Feature Project' ),
           'new_item' => __( 'Add New Feature Project' ),
           'view_item' => __( 'View Feature Project' ),
           'search_items' => __( 'Search Feature Project' ),
           'not_found' => __( 'No feature project found' ),
           'not_found_in_trash' => __( 'No feature project found in trash' )
         ),
       'public' => true,
       'show_ui' => true,
       'capability_type' => 'post',
       'hierarchical' => false,
       'rewrite' => true,
       'menu_position' => 05,
       'supports' => array('title', 'editor', 'thumbnail')
     );
  register_post_type('feature',$feature_args);
}

function bxslider_scripts() {
	if (is_single()) {
	    wp_register_script( 'bxslider', get_template_directory_uri() . '/assets/js/scripts/jquerybxslider/jquery.bxslider.min.js', array( 'jquery' ) );
	    wp_enqueue_script ( 'bxslider' );
	} else {}
}
add_action( 'wp_enqueue_scripts', 'bxslider_scripts' );

function new_nav_menu_items($items, $args) {
    if($args->theme_location == 'main-nav'){
       $new_item = '<li><a data-open="contactModal">Contact</a></li>';
       $items = $items . $new_item; 
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'new_nav_menu_items', 10, 2);